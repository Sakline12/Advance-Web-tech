import React ,{Component} from 'react'
import ReactDOM from 'react-dom';
import axios from 'axios';
import '../../css/app.css';

class AxioGet extends Component{
    state={
        posts:[]
    }
    componentDidMount()
    {
        axios.get('http://localhost:8000/api/plan/list')
        .then(response=>{
            const posts=response.data;
            this.setState({ posts });


    })
    }

    deleteRow(id, e){
        axios.delete(`http://localhost:8000/api/deleteplan/${id}`)
          .then(response => {
            console.log(response);
            console.log(response.data);

            const posts = this.state.posts.filter(item => item.id !== id);
            this.setState({ posts });
          })

      }
         render()
         {
            return(
              <html>
              <br></br>
              <br></br>
              <body>
              <div class="center">
              <h2><span><center>All Plan</center></span></h2>
              <table>
                  <tr>
                      <th><span>Plan Name</span></th><br></br>
                      <th><span>Description</span></th>
                      <th><span>Price</span></th>
                      <th><span>Order Discount</span></th>
                      <th><span>Update</span></th>
                      <th><span>Delete</span></th>
                  </tr>

                  {this.state.posts && this.state.posts.map(post=>
                  <tr>

                      <td><span>{post.planName}</span></td><br></br>
                      <td><span>{post.description}</span></td>
                      <td><span>{post.price}</span></td>
                      <td><span>{post.orderDiscount}</span></td>
                      <td><button className='button1'><span>Update</span></button></td>
                      <td><button onClick={(e) => this.deleteRow(post.id, e)} className='button2'><span>Delete</span></button></td>
                  </tr>)}


              </table>
              </div>
              </body>
              </html>
            )
         }

}
export default AxioGet;

if (document.getElementById('axioget')) {
  const Index = ReactDOM.createRoot(document.getElementById("axioget"));

  Index.render(
      <React.StrictMode>
          <AxioGet/>
      </React.StrictMode>
  )
}
