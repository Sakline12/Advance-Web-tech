import React, { Component } from 'react'
import ReactDOM from 'react-dom/client';
import axios from 'axios';

class ReactProductCreate extends Component {
    constructor(props)
    {
        super(props)
this.state={
    title:'',
    description:'',
    quantity:'',
    price:''
}
    }

changeHandler = (e) =>{
    this.setState({[e.target.name]: e.target.value})
}
submitHandler = (e) =>{
    e.preventDefault()
    this.setState()
    console.log(this);
    axios.post('http://localhost:8000/api/product/create', this.state)
    .then(response=>{
        window.location = "/reactproduct"
console.log(response)
    })
.catch(error =>{
    console.log(error)
})
}


    render() {
      const {title,description,quantity,price}=this.state
        return (
            <div className='center'>
                    <form onSubmit={this.submitHandler}>
                        <span><b>Title</b> <input type="text" name="title" value={title}  onChange={this.changeHandler} /></span><br></br><br></br>
                        <span><b>Description</b>  <input type="text" name="description" value={description}  onChange={this.changeHandler} /></span><br></br><br></br>
                        <span> <b>Quantity</b><input type="text" name="quantity" value={quantity}  onChange={this.changeHandler} /></span><br></br><br></br>
                        <span><b>Price</b> <input type="text" name="price" value={price}  onChange={this.changeHandler} /></span><br></br><br></br>

                        <button className='button'> <span>Submit</span></button>
                    </form>

            </div>

        );
    }
}


export default ReactProductCreate;



if (document.getElementById('reactproductcreate')) {
    const Index = ReactDOM.createRoot(document.getElementById("reactproductcreate"));

    Index.render(
        <React.StrictMode>
            <ReactProductCreate/>
        </React.StrictMode>
    )
}
