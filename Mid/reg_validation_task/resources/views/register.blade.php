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
<h1>Registration</h1>
<form action="/register" method="post">
{{ csrf_field()}}

<span><b>Address</b></span>
<textarea id="address" name="address" rows="4" cols="20"></textarea>
@if($errors->has('address'))
<b>{{$errors->first('address')}}</b>
@endif
<br><br>

<span><b>Occupation</b></span>
<select name="occupation" id="occupation">
<option value="">Select</option>
<option value="Farmer">Farmer</option>
<option value="Fisherman">Fisherman</option>
<option value="AgriOfficer">Agri-Officer</option>
<option value="Serviceholder">Serviceholder</option>
<option value="Newentrepreneur">New entrepreneur</option>
<option value="Other">Other</option>
</select>
@if($errors->has('occupation'))
<b>{{$errors->first('occupation')}}</b>
@endif
<br><br>

<span><b>Gender</b></span>
<input type="radio" name="gender" value="Male">Male
<input type="radio" name="gender" value="Female">Female
@if($errors->has('gender'))
<b>{{$errors->first('gender')}}</b>
@endif
<br><br>

<span><b>Language</b></span>
Bangla<input type="checkbox" name="language" value="Bangla">
English<input type="checkbox" name="language" value="English">
Urdu<input type="checkbox" name="language" value="Urdu">
China<input type="checkbox" name="language" value="China">
French<input type="checkbox" name="language" value="French">
Hindi<input type="checkbox" name="language" value="Hindi">
@if($errors->has('language'))
<b>{{$errors->first('language')}}</b>
@endif
<br><br>

<span><b>Zip-Code</b></span> <input type="int" name="zipcode">
@if($errors->has('zipcode'))
<b>{{$errors->first('zipcode')}}</b>
@endif
<br><br>

<button type="submit" class="registration">Submit</button>
</form>
</div>
</body>
