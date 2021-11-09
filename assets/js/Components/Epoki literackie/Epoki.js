import React, { useState, useEffect } from 'react';
import './Epoki.css'
import { Link } from 'react-router-dom';
import axios from 'axios';



export default function Epoki() {
    const [epoki, setEpoki] = useState([]);

    useEffect(() => {
        axios.get('api/epoki/read')
            .then((response) => setEpoki(response.data))
            .catch(err => console.log(err))
    }, []);
    return(
        <>
            <div className='container'>
                {epoki.map((epoka, i) => (
                    <Link to={epoka.name} className='epokaBlock' key={i}>
                        <div className='epoka'>{epoka.name}</div>
                    </Link>
                ))}


            </div>
        </>
    );
}