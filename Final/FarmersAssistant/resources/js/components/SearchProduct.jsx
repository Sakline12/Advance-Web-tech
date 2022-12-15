import React, { Component } from 'react'
import ReactDOM from 'react-dom/client';
import { useState } from "react";
import '../../css/app.css';
function SearchProduct()
{
    const[data,setData]=useState([])
    async function search(key)
    {
       console.warn(key)
       let result = await fetch("http://localhost:8000/api/searchProducts/"+key);
       result=await result.json();
       console.warn(result)
       setData(result)
    }
  return(
    <><br></br><br></br><br></br><div className='center'>
          <center><h1>Search Product</h1></center>
          <center><input type="text" onChange={(e) => search(e.target.value)} className='searchbar'></input></center>
          <br></br><br></br><br></br>
          <table>
              <tr>
                  <th><span>Title</span></th><br></br>
                  <th><span>Description</span></th>
                  <th><span>Quantity</span></th>
                  <th><span>price</span></th>
              </tr>

              {data.map((item) => <tr>

                  <td><span>{item.title}</span></td><br></br>
                  <td><span>{item.description}</span></td>
                  <td><span>{item.quantity}</span></td>
                  <td><span>{item.price}</span></td>
              </tr>)}


          </table>
      </div></>
  )
}
export default SearchProduct

if (document.getElementById('searchproduct')) {
    const Index = ReactDOM.createRoot(document.getElementById("searchproduct"));

    Index.render(
        <React.StrictMode>
            <SearchProduct/>
        </React.StrictMode>
    )
  }
