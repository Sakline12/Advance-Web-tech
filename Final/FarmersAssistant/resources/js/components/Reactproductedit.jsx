import React, { Component } from 'react'
import ReactDOM from 'react-dom/client';
import { useState,useEffect } from "react";
import '../../css/app.css';
import { render } from 'react-dom';

function ReactProductEdit (props)
{
    const[data,setData]=useState([])
    console.warn("props",props.match.params.id)
    useEffect(async ()=>{
       let result=await fetch("http://localhost:8000/api/productsupdate/${id}");
       result=await result.json();
       setData(result)
    })
    render()
    {
    return(
        <div className='center'>
        <h1>dfsfsefs</h1>
        <input type="text" defaultValue={data.title}></input>
        </div>
    );
}
}
export default ReactProductEdit

if (document.getElementById('reactproductedit')) {
    const Index = ReactDOM.createRoot(document.getElementById("reactproductedit"));

    Index.render(
        <React.StrictMode>
            <ReactProductEdit/>
        </React.StrictMode>
    )
}
