import React from "react";
import { Link } from 'react-router-dom';
import './Navi.css';


export default function Navi() {


    return(
        <>
            <div className='naviBar'>
                <Link to={'/EpokiLiterackie'} className='naviButton'>Epoki literackie</Link>
            </div>
        </>
    )
}