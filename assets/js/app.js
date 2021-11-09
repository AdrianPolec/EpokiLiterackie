import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import './styles/app.css';
import { BrowserRouter as Router, Switch, Route } from 'react-router-dom';
import Navi from "./js/Components/Navi/Navi";
import Epoki from "./js/Components/Epoki literackie/Epoki";

class App extends Component {
    render() {
        return (
            <Router>
                <Navi/>
                <Switch>
                    <Route path="/EpokiLiterackie">
                        <Epoki/>
                    </Route>
                    <Route path="/Home">
                    </Route>
                    <Route path="/DziełaIpostacie">

                    </Route>
                </Switch>
            </Router>
        );
    }
}

ReactDOM.render(<App/>, document.getElementById('root'));