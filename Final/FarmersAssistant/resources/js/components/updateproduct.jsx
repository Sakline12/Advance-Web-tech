import React, { Component } from 'react'
import ReactDOM from 'react-dom/client';
import { useState } from "react";
import '../../css/app.css';
function UpdateProduct()
{
    return (
        <div className='center'>
        <center><h1>Update Product</h1></center>
        </div>
    )
}
export default UpdateProduct

if (document.getElementById('updateproduct')) {
    const Index = ReactDOM.createRoot(document.getElementById("updateproduct"));

    Index.render(
        <React.StrictMode>
            <UpdateProduct/>
        </React.StrictMode>
    )
  }
