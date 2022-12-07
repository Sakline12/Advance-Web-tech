import React ,{Component} from 'react'
import ReactDOM from 'react-dom';
import axios from 'axios';


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
         render()
         {
            return(
                <div>
                <table>
                  <thead>
                    <tr>
                        <th>admin_id</th>
                        <th>Title</th>
                        <th>description</th>
                        <th>quantity</th>
                        <th>price</th>
                        <th>image</th>
                    </tr>
                  </thead>
                  <tbody>
                    {this.state.posts && this.state.posts.map(post=>
                    <tr>
                        <td>{post.admin_id}</td>
                        <td>{post.title}</td>
                        <td>{post.description}</td>
                        <td>{post.quantity}</td>
                        <td>{post.price}</td>
                        <td>{post.image}</td>
                    </tr>)}

                  </tbody>
                </table>
                </div>
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
