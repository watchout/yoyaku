import injectTapEventPlugin from 'react-tap-event-plugin';
import React from 'react';
import ReactDOM from 'react-dom';
import getMuiTheme from 'material-ui/styles/getMuiTheme';
import MuiThemeProvider from 'material-ui/styles/MuiThemeProvider';
import RaisedButton from 'material-ui/RaisedButton';
import TextField from 'material-ui/TextField';

injectTapEventPlugin();

class Regist extends React.Component {
    constructor(props){
        super(props);
    }

    render(){
        return(
            <MuiThemeProvider muiTheme={getMuiTheme()}>
                <div>
                    <TFname />
                    <TFemail />
                    <TFemailcheck />
                    <TFaddr />
                    <TFtel />
                    <TFpass />
                    <RaisedButton label="申し込む" primary={true} />
                </div>
            </MuiThemeProvider>
        );
    }
}

//名前入力フォーム
class TFname extends React.Component{
    nameChange(e) {
        let name = this.refs.name;
        let nameValue = name.getValue();
        let nameError = nameValue;
        alert(nameValue);
        if(!nameValue){
            //alert("名前を入力してください");
            name.errorText('名前は必須項目です');
            return;
        }
    }
    render(){
        return(
            <div className="tfname">
                <TextField hintText="名前" floatingLabelText="名前" ref="name" onChange={this.nameChange.bind(this)} />
            </div>
        );
    }
}

//メールアドレス入力フォーム
class TFemail extends React.Component{
    render(){
        return(
            <div className="tfemail">
                <TextField hintText="example@example.com" floatingLabelText="メールアドレス" />
            </div>
        );
    }
}

//メールアドレス確認用入力フォーム
class TFemailcheck extends React.Component{
    render(){
        return(
            <div className="TFemailcheck">
                <TextField hintText="上記と同じ" floatingLabelText="確認用メールアドレス" />
            </div>
        );
    }
}

//住所用入力フォーム
class TFaddr extends React.Component{
    render(){
        return(
            <div className="tfaddr">
                <TextField hintText="建物名等も含む" floatingLabelText="住所" />
            </div>
        );
    }
}

//電話番号用入力フォーム
class TFtel extends React.Component{
    render(){
        return(
            <div className="tftel">
                <TextField hintText="ハイフン含む" floatingLabelText="電話番号" />
            </div>
        );
    }
}

//パスワード用入力フォーム
class TFpass extends React.Component{
    render(){
        return(
            <div className="tfpass">
                <TextField hintText="半角英数6-8文字" floatingLabelText="パスワード" />
            </div>
        );
    }
}

ReactDOM.render(
    <Regist />,
    document.getElementById('content')
);
