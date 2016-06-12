import injectTapEventPlugin from 'react-tap-event-plugin';
import React from 'react';
import ReactDOM from 'react-dom';
import getMuiTheme from 'material-ui/styles/getMuiTheme';
import MuiThemeProvider from 'material-ui/styles/MuiThemeProvider';
import RaisedButton from 'material-ui/RaisedButton';

injectTapEventPlugin();

class Test extends React.Component {
        constructor(props, context) {
                super(props, context);
        }

        render() {
                return (

                                <MuiThemeProvider muiTheme={getMuiTheme()}>
                                        <div>
                                        <RaisedButton label="test" primary={true} />
                                        </div>
                                </MuiThemeProvider>

                )
        }
}

window.onload = () => {
        ReactDOM.render(
          <Test />,
          document.getElementById('content')
        );
}