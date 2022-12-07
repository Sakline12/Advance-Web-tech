import React ,{Component} from 'react'
import ReactDOM from 'react-dom';
import axios from 'axios';


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
         render()
         {
            return(
                <div>
                <table>
                  <thead>
                    <tr>
                        <th>admin_id</th>
                        <th>planName</th>
                        <th>description</th>
                        <th>price</th>
                        <th>orderDiscount</th>
                    </tr>
                  </thead>
                  <tbody>
                    {this.state.posts && this.state.posts.map(post=>
                    <tr>
                        <td>{post.admin_id}</td>
                        <td>{post.planName}</td>
                        <td>{post.description}</td>
                        <td>{post.price}</td>
                        <td>{post.orderDiscount}</td>
                    </tr>)}

                  </tbody>
                </table>
                </div>
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
