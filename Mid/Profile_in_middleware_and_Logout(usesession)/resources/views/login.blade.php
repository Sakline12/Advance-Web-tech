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


<h1>Login</h1>
<form action="/startlogin" method="post">
@csrf
<span><b>Username</b></span> <input type="text" name="username">
<br><br>
<span><b>Password</b></span> <input type="int" name="password">
<br><br>
<button type="submit" value="login">login</button>
</form>
</div>
</body>
