<style>
    .center{
        margin: auto;
        width: 600px;
        border: 3px solid #15c8eb;
        padding: 10px;
    }

    span{
        display: inline-block;
        width: 80px;

    }
    body {background-color: rgba(147, 244, 11, 0.3);}

    </style>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<br>

<body>
<div class='center'>
<body>
<span><b>My Profile</b></span><br><br>
<span><b>Username</b></span> <input type="text" name="username" value="{{ session('user')->username}}">
<br><br>
<span><b>Email</b></span> <input type="text" name="email" value="{{ session('user')->email}}">
<br><br>
<span><b>Address</b></span> <input type="text" name="address" value="{{ session('user')->address}}">
<br><br>
<span><b>Occupation</b></span> <input type="text" name="occupation" value="{{ session('user')->occupation}}">
<br><br>
<span><b>Gender</b></span> <input type="text" name="gender" value="{{ session('user')->gender}}">
<br><br>
<span><b>Zip-code</b></span> <input type="text" name="zipcode" value="{{ session('user')->zipcode}}">
<br><br>
    <button><a href="/logout">Logout</a></button>
    <button><a href="/update">update</a></button>

</html>
