var CommentBox = React.createClass({
  loadCommentsFromServer: function() {
    $.ajax({
      url: this.props.url,
      dataType: 'json',
      cache: false,
      success: function(data) {
        this.setState({data: data});
      }.bind(this),
      error: function(xhr, status, err) {
        console.error(this.props.url, status, err.toString());
        //alert(err.toString());
      }.bind(this)
    });
  },
  handleCommentSubmit: function(comment) {
    var comments = this.state.data;
    var newComments = comments.concat([comment]);
    this.setState({data: newComments});
    $.ajax({
      url: this.props.url,
      dataType: 'json',
      type: 'POST',
      data: comment,
      success: function(data) {
        this.setState({data: data});
        //alert("success");
      }.bind(this),
      error: function(xhr, status, err) {
        this.setState({data: comments});
        console.error(this.props.url, status, err.toString());
        alert(status);
        alert(err.toString());
      }.bind(this)
    });
  },
  getInitialState: function() {
    return {data: []};
  },
  componentDidMount: function() {
    this.loadCommentsFromServer();
    setInterval(this.loadCommentsFromServer, this.props.pollInterval);
  },
  render: function() {
    return (
      <div className="commentBox">
        <h1>Comments</h1>
        <CommentList data={this.state.data} />
        <CommentForm onCommentSubmit={this.handleCommentSubmit} />
      </div>
    );
  }
});

var CommentList = React.createClass({
    render: function(){
        var commentNodes = this.props.data.map(function(comment){
           return(
                <Comment author={comment.author}>
                {comment.text}
                </Comment>
           );
        });
        return(
                <div className="commentList">
                {commentNodes}
                </div>
         );
    }
});

var CommentForm = React.createClass({
  handleSubmit: function(e) {
    e.preventDefault();
    alert("submit");
    var author = ReactDOM.findDOMNode(this.refs.author).value.trim();
    var text = ReactDOM.findDOMNode(this.refs.text).value.trim();
    if (!text || !author) {
      return;
    }
    this.props.onCommentSubmit({author: author, text: text});
    ReactDOM.findDOMNode(this.refs.author).value = '';
    ReactDOM.findDOMNode(this.refs.text).value = '';
    return;
  },
  render: function() {
    return (
      <form className="commentForm" onSubmit={this.handleSubmit}>
        <div className="mdl-textfield mdl-js-textfield">
            <input className="mdl-textfield__input" type="text" ref="author" />
            <label className="mdl-textfield__label" for="sample1">author</label>
        </div>
        <div className="mdl-textfield mdl-js-textfield">
            <input className="mdl-textfield__input" type="text" ref="text" />
            <label className="mdl-textfield__label" for="sample2">Text...</label>
        </div>   
        <input type="submit" value="Post" />
        
      </form>
    );
  }
});

var Comment = React.createClass({
  render: function() {
    return (
      <div className="comment">
        <h2 className="commentAuthor">
          {this.props.author}
        </h2>
        {this.props.children}
      </div>
    );
  }
});

ReactDOM.render(
  <CommentBox url="http://www2181ui.sakura.ne.jp/yoyaku/test/get_post" pollInterval={2000} />,
  document.getElementById('content')
);