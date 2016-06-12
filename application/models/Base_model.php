<?php
/**
 * Class Model_Base
 *
 * @version 1.0
 * @since   2013/3/17
 * @author  Yuuji Kaneko
 */
class Base_model extends CI_Model {
  /**
   * __construct
   *
   * @param  none 説明
   * @return none 説明
   * @access public
   * @author Yuuji Kaneko
   */
  public function __construct(){
    parent::__construct();
    $this->load->database();
  }
  
  /**
   * public function insert($table,$data)
   * @param type $table
   * @param type $data
   * @return $insert_id()
   * @access public
   * @author Yuji Kaneko <kaneko@arrowsworks.com>
   */
  public function insert($table,$data){
	  $this->db->insert($table,$data);
	  $id = $this->db->insert_id();
	  return $id;
  }
  
  /**
   * public function update($table,$id,$data)
   * @param type $table
   * @param type $id
   * @param type $data
   * @return none
   * @access public
   * @author Yuji Kaneko <kaneko@arrowsworks.com>
   */
  public function update($table,$id,$data){
	  $this->db->where('id',$id);
	  $this->db->update($table,$data);
  }
  
  /**
   * public function delete($table,$id)
   * @param type $table
   * @param type $id
   * @return none
   * @access public
   * @author Yuji Kaneko <kaneko@arrowsworks.com>
   */
  public function delete($table,$id){
	  $this->db->where('id',$id);
	  $this->db->delete($table);
  }
  
  /**
   * public function get($table,$id='',$order='',$where='',$limit='',$like='',$sel='')
   * @param type $table
   * @param type $id
   * @param type $order
   * @param type $where
   * @param type $limit
   * @param type $like
   * @param type $sel
   * @return array $return
   * @access public
   * @auther Yuji Kaneko <kaneko@arrowsworks.com>
   */
  public function get($table,$where='',$order='',$limit='',$like='',$sel=''){
	  //if($id){
		  //$this->db->where('id',$id);
	  //}
	  if($order){
		  $this->db->order_by($order);
	  }
	  if($where){
		  $this->db->where($where);
	  }
	  if($limit){
		  $this->db->limit($limit);
	  }
	  if($like){
		  $this->db->like($like);
	  }
	  if($sel){
		  $this->db->select($sel);
	  }
	  $query = $this->db->get($table);
	  
	  /**
	  if($query->num_rows() == 1){
		  $return['res'] = $query->row();
	  } else {
		  $return['res'] = $query->result();
	  }
	  */
	  $return['res'] = $query->result();
	  $return['rows']	= $query->num_rows();
	  return $return;
	  
	  }
	  
	  /**
	   * ユニークデータの抽出
	   * @param type $table
	   * @param type $where
	   * @return type
	   */
	  public function get_sel($table,$where){
		  $this->db->where($where);
		  $query = $this->db->get($table);
		  return $query->row();
	  }
	  
	  /**
	   * IDでのデータ抽出
	   * @param type $table
	   * @param type $id
	   * @return type
	   */
	  public function select($table,$id){
		  $this->db->where('id',$id);
		  $query = $this->db->get($table);
		  return $query->row();
	  }

	  /**
	   * 汎用の選択データ生成 - array()
	   * @param type $data
	   * @return type
	   */
	  public function sel_data($data){
		  $sel = array();
		  $i = 1;
		  foreach($data as $value){
			  $sel[]	= array(
							'id'	=> $i,
							'val'	=> $value,
			  );
			  $i = $i + 1;
		  }
		  return $sel;
	  }
	  
	  
	public function get_random($table,$where='',$order='',$limit=''){
		if($order){
			$this->db->order_by('id','random');
		}
		if($where){
			$this->db->where($where);
		}
		if($limit){
			$this->db->limit($limit);
		}
		$query = $this->db->get($table);
		
		$return['res'] = $query->result();
		$return['rows']	= $query->num_rows();
		
		return $return;
	}
}