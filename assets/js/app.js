import React, { useEffect, useState} from 'react';
import ReactDOM from 'react-dom';
import '../styles/app.css';
import axios from "axios";
import Navi from "./Components/Navi/Navi"
import { BrowserRouter as Router, Switch, Route } from 'react-router-dom';
import Epoki from "./Components/Epoki literackie/Epoki.js";

import DzielaIPostacie from "./Components/Dzieła i postacie/DzielaIPostacie";

function App(){

        const [epoki, setEpoki] = useState([]);

        useEffect(() => {
            axios.get('api/epoki/read')
                .then((response) => setEpoki(response.data))
                .catch(err => console.log(err))
        }, []);
        console.log(epoki)
        return (
            <Router>
                <Navi/>
                <Switch>
                    <Route path="/EpokiLiterackie">
                        <Epoki/>
                    </Route>
                    {epoki.map((epoka, i) => (
                        <Route path={`/${epoka.name}`} key={i}>
                            <DzielaIPostacie
                                key={i}
                                name={epoka.name}
                                postacie={epoka.postacie}
                                cechy={epoka.cechy}
                                ramy_czasowe={epoka.ramy_czasowe}
                            />
                        </Route>
                    ))}
                </Switch>
            </Router>
        );
}

ReactDOM.render(<App/>, document.getElementById('root'));