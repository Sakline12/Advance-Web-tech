<head>
    <style>
        div {
          margin-bottom: 10px;
        }
        label {
          display: inline-block;
          text-align: center;
          width: 200px;

        }
        input {
          padding: 5px 10px;
        }
      </style>
</head>
<body>



<div>
    <h2>Registration Form</h2>
    <label for="fname">Student name</label>
    <select name="">
    <option vlaue="Mr.">Mr.</option>
    <option vlaue="Mrs">Mrs</option>
    </select>
    <input type="text" id="fname" name="fname" value="" placeholder='Enter your name'><br>
</div>

<div>
    <label for="lname">Father's name</label>
    <input type="text" id="lname" name="lname" value="" placeholder='Enter your fathers name'><br>
</div>

<div>
    <label for="mname">Mother's name</label>
    <input type="text" id="mname" name="mname" value="" placeholder='Enter your mothers name'><br>
</div>

<div>
    <label for="dname">Date of birth</label>
    <input type="text" id="dname" name="dname" value="" placeholder='mm/dd/yyyy'><br><br>
</div>

<div>
    <label>Gender</label>
    <input type="radio" id="age1" name="age" value="30">
    <label for="age1">Male</label>
    <input type="radio" id="age2" name="age" value="60">
    <label for="age2">Female</label><br>
</div>

<div>
    <label for="ename">Email Id</label>
    <input type="text" id="ename" name="ename" value="" placeholder=''><br><br>
</div>

<div>
    <label for="mbname">Mobile No.</label>
    <input type="text" id="mbname" name="mbname" value="" placeholder=''><br><br>
</div>

<div>
    <label for="txname">Address</label>
    <textarea name="" id="txname" cols="30" rows="5" name="txname" value="" placeholder=''></textarea><br><br>
</div>

<div>
    <label for="stname">State</label>
    <input type="text" id="stname" name="stname" value="" placeholder=''><br><br>
</div>

<div>
    <label for="ctname">City</label>
    <input type="text" id="ctname" name="ctname" value="" placeholder=''><br>

</div>

<div>
    <input type="submit" value="Submit"><br>
</div>


</body>

