import React ,{Component} from 'react'
import ReactDOM from 'react-dom';
import axios from 'axios';
import '../../css/app.css';

class AxioGetProduct extends Component{
    state={
        posts:[]
    }


    componentDidMount()
    {
        axios.get('http://localhost:8000/api/productget/list')
        .then(response=>{
            const posts=response.data;
            this.setState({ posts });

    })
    }

      deleteRow(id, e){
        axios.delete(`http://localhost:8000/api/deleteproduct/${id}`)
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
                <h2><span><center>All Product</center></span></h2>
                <table>
                    <tr>
                        <th><span>Title</span></th><br></br>
                        <th><span>Description</span></th>
                        <th><span>Quantity</span></th>
                        <th><span>price</span></th>
                        <th><span>Image</span></th>
                        <th><span>Update</span></th>
                        <th><span>Delete</span></th>
                    </tr>

                    {this.state.posts && this.state.posts.map(post=>
                    <tr>

                        <td><span>{post.title}</span></td><br></br>
                        <td><span>{post.description}</span></td>
                        <td><span>{post.quantity}</span></td>
                        <td><span>{post.price}</span></td>
                        <td><span>{post.image}</span></td>
                        <td><button className='button1'><a href={`react/productedit/${post.id}`}><span>Update</span></a></button></td>
                        <td><button onClick={(e) => this.deleteRow(post.id, e)} className='button2'><span>Delete</span></button></td>
                    </tr>)}


                </table>
                </div>
                </body>
                </html>
            )
         }

}
export default AxioGetProduct;

if (document.getElementById('axiogetproduct')) {
  const Index = ReactDOM.createRoot(document.getElementById("axiogetproduct"));

  Index.render(
      <React.StrictMode>
          <AxioGetProduct/>
      </React.StrictMode>
  )
}





