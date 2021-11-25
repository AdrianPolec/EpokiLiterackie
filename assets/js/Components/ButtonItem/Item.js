import React from "react";
import './item.css';

const Item = ({
    id={id},
    className={className},
    onClick={onClick},
    dziela={dziela},
    children={children}


}) => {
    return(
    <div
        id={id}
        className='postacie'
        onClick={onClick}
        dziela={dziela}
    >
        {children}
    </div>
)
}

export default Item;