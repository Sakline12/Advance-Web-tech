import React, { Component } from 'react'
import ReactDOM from 'react-dom/client';
import axios from 'axios';

class AdminRegistration extends Component {
    constructor(props)
    {
        super(props)
this.state={
    firstName:'',
    lastName:'',
    username:'',
    email:'',
    password:'',
    dob:'',
    gender:'',
    city:'',
    postalCode:'',
    address:'',
    phone:'',
}
    }

changeHandler = (e) =>{
    this.setState({[e.target.name]: e.target.value})
}
submitHandler = (e) =>{
    e.preventDefault()
    this.setState()
    console.log(this);
    axios.post('http://localhost:8000/api/admin/registration', this.state)
    .then(response=>{
        window.location = "/navbar"
console.log(response)
    })
.catch(error =>{
    console.log(error)
})
}


    render() {
      const {firstName,lastName,username,email,password,dob,gender,city,postalCode,address,phone}=this.state
        return (
            <div className='center'>
                    <form onSubmit={this.submitHandler}>
                        <span><b>First Name</b> <input type="text" name="firstName" value={firstName}  onChange={this.changeHandler} /></span><br></br>
                        <span><b>Last Name</b>  <input type="text" name="lastName" value={lastName}  onChange={this.changeHandler} /></span><br></br>
                        <span> <b>User Name</b><input type="text" name="username" value={username}  onChange={this.changeHandler} /></span><br></br>
                        <span><b>Email</b> <input type="text" name="email" value={email}  onChange={this.changeHandler} /></span><br></br>
                        <span><b>Password</b> <input type="text" name="password" value={password}  onChange={this.changeHandler} /></span><br></br>
                        <span><b>dob</b> <input type="text" name="dob" value={dob}  onChange={this.changeHandler} /></span><br></br>
                        <span><b>Gender</b> <input type="text" name="gender" value={gender}  onChange={this.changeHandler} /></span><br></br>
                        <span><b>City</b> <input type="text" name="city" value={city}  onChange={this.changeHandler} /></span><br></br>
                        <span><b>Postal Code</b> <input type="text" name="postalCode" value={postalCode}  onChange={this.changeHandler} /></span><br></br>
                        <span><b>Address</b> <input type="text" name="address" value={address}  onChange={this.changeHandler} /></span><br></br>
                        <span><b>Phone</b> <input type="text" name="phone" value={phone}  onChange={this.changeHandler} /></span><br></br>

                        <button className='button'> <span>Submit</span></button>
                    </form>

            </div>

        );
    }
}


export default AdminRegistration;

if (document.getElementById('adminregistration')) {
    const Index = ReactDOM.createRoot(document.getElementById("adminregistration"));

    Index.render(
        <React.StrictMode>
            <AdminRegistration/>
        </React.StrictMode>
    )
}
