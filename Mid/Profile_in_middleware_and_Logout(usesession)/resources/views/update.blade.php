
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


<h1>Update</h1>
<form action="/startupdate" method="post">
@csrf

<span><b></b></span> <input type="hidden" name="id" value="{{ session('user')->id}}">
<br><br>

<span><b>Username</b></span> <input type="text" name="username" value="{{ session('user')->username}}">
<br><br>

<span><b>Email</b></span> <input type="text" name="email" value="{{ session('user')->email}}">
<br><br>

<span><b>Address</b></span> <input type="text" name="address" value="{{ session('user')->address}}">
<br><br>

<span><b>Occupation</b></span> <input type="text" name="occupation" value="{{ session('user')->occupation}}">
<br><br>

<button type="submit" value="login">Done</button>
</form>
</div>
</body>
