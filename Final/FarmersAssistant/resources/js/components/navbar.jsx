import React ,{Component} from 'react'
import { FaBars, FaHome, FaTimes } from "react-icons/fa";
import ReactDOM from 'react-dom';
import { useRef } from "react";
import '../../css/app.css';

function Navbar() {
	const navRef = useRef();

	const showNavbar = () => {
		navRef.current.classList.toggle("responsive_nav");
	};

	return (
		<><header>
            <h3>Farmer Assistance</h3>
            <nav ref={navRef}>
                <a href="/#"><FaHome size='1rem' color='blue' />Home</a>
                <a href="/reactplancreate">Plan Create</a>
                <a href="/reactplan">See All Plans</a>
                <a href="/reactproductcreate">Create Product List</a>
                <a href="/reactproduct">See All Products</a>
                <a href="/searchproduct">Search Products</a>
                <a href="/sendemail">Send Mail</a>
                <button
                    className="nav-btn nav-close-btn"
                    onClick={showNavbar}>
                    <FaTimes />
                </button>
            </nav>
            <button className="nav-btn" onClick={showNavbar}>
                <FaBars />
            </button>
        </header>
        <footer>

                    <div className='profile_image'>
                    <img src="/images/sakline.jpg" alt=""/>
                    </div>

        </footer>
        <>
        <br></br>
        <br></br>
        <br></br>
        <br></br>
        <body>
            <div className='text'>
            <center><h1>P.K.M.Sakline Bari Heemel</h1></center>
            </div>
        </body></>
        </>


	);
}

export default Navbar;
if (document.getElementById('navbar')) {
    const Index = ReactDOM.createRoot(document.getElementById("navbar"));

    Index.render(
        <React.StrictMode>
            <Navbar/>
        </React.StrictMode>
    )
}
