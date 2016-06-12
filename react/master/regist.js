var RegistForm = React.createClass({
    getInitialState(){
        return{
            data:{
                name: null,
                mail: null,
                addr: null,
                tel : null,
                pass: null
            },
            message:{
                name: null,
                mail: null,
                addr: null,
                tel : null,
                pass: null
            },
            status:{
                name: null,
                mail: null,
                addr: null,
                tel : null,
                pass: null
            }
        }
    },
    render: function(){
        return(
                <ul className = "demo-list-item mdl-list">
                <NameForm />
                <MailForm1 />
                <MailForm2 />
                <AddrForm> />
                <TelForm />
                <PassForm />
                </ul>
                );
     }
});

var NameForm = React.createClass({
   
    render: function(
            return(
                <li className="mdl-list__item">
                    <span className="mdl-cell mdl-cell--2-col">お名前</span>
                    <div className="mdl-textfield mdl-js-textfield  mdl-cell mdl-cell--2-col">
                    <input className="mdl-textfield__input" ref="name" type="text" id="name" />
                    <label className="mdl-textfield__label" for="sample1">お名前</label>
                    </div>
                </li>
            );
            )
});

ReactDOM.render(
  <RegistForm />,
  document.getElementById('content')
);