import React, { Component } from 'react'
import ReactDOM from 'react-dom/client';
import axios from 'axios';

class AxioPostPlan extends Component {
    constructor(props)
    {
        super(props)
this.state={
    admin_id:'',
    planName:'',
    description:'',
    price:'',
    orderDiscount:''
}
    }

changeHandler = (e) =>{
    this.setState({[e.target.name]: e.target.value})
}
submitHandler = (e) =>{
    e.preventDefault()
    this.setState()
    console.log(this);
    axios.post('http://localhost:8000/api/plan/create', this.state)
    .then(response=>{
console.log(response)
    })
.catch(error =>{
    console.log(error)
})
}


    render() {
      const {admin_id,planName,description,price,orderDiscount}=this.state
        return (
            <div >
                <div>Plans</div>
                    <form onSubmit={this.submitHandler}>
                        <span><b>Admin id</b> <input type="text" name="admin_id" value={admin_id} onChange={this.changeHandler}/></span><br></br><br></br>
                        <span><b>Plan Name</b> <input type="text" name="planName" value={planName}  onChange={this.changeHandler} /></span><br></br><br></br>
                        <span><b>Description</b>  <input type="text" name="description" value={description}  onChange={this.changeHandler} /></span><br></br><br></br>
                        <span> <b>Price</b><input type="text" name="price" value={price}  onChange={this.changeHandler} /></span><br></br><br></br>
                        <span><b>Order Discount</b> <input type="text" name="orderDiscount" value={orderDiscount}  onChange={this.changeHandler} /></span><br></br><br></br>

                        <div> <input type="submit" /></div>
                    </form>

            </div>

        );
    }
}


export default AxioPostPlan;



if (document.getElementById('axiopostplan')) {
    const Index = ReactDOM.createRoot(document.getElementById("axiopostplan"));

    Index.render(
        <React.StrictMode>
            <AxioPostPlan/>
        </React.StrictMode>
    )
}
