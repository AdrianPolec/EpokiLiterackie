import React, { useState } from 'react';
import './DzielaIPostacie.css'
import Item from "../ButtonItem/Item";
import Modal from 'react-modal';


export default function DzielaIPostacie(props) {
const [isOpen, setIsOpen] = useState(false);
const [champ, setChamp] = useState('');
const [arts, setArts] = useState('');
const closeModal = () => setIsOpen(false);
const openModal = (e) => {
    console.log(e);
    setIsOpen(true);
    setChamp(e.target.firstChild.data);
    setArts(e.target.attributes.dziela.value)
}
    return<>
        <div className='header'>
            {props.name}
        </div>
        <div className='timeFrame'>
            Ramy czasowe: <br/>
            {props.ramy_czasowe}
        </div>
        <div className='description'>
            {props.cechy}
        </div>
        <div className='champContainer'>
            {props.postacie.map((postac, i) =>
                <Item
                key={i}
                className='postacie'
                onClick={openModal}
                dziela={postac.dziela}
                children={postac.name}/>
                )}
        </div>
            <Modal
            isOpen={isOpen}
            onRequestClose={closeModal}
            className='champModal'
            contentLabel='descModal'
            // onAfterOpen={afterOpenModal}
            ariaHideApp={false}
            >
            <div className='champInfo'>{champ}</div>
            <div className='champDescription'>{arts}</div>
            </Modal>
    </>;
};