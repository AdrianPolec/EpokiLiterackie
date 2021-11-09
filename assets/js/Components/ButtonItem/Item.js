import React from "react";
import './item.css';

const Item = ({
    id={id},
    className={className},
    key={key},
    onClick={onClick},
    dziela={dziela},
    children={children}


}) => {
    return(
    <div
        id={id}
        className='postacie'
        key={key}
        onClick={onClick}
        dziela={dziela}
    >
        {children}
    </div>
)
}

export default Item;