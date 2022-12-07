<html>
<h1>Plans</h1>
<p id="demo"></p>
Id:<span id="id"></span></span><br>
Admin Id:<span id="admin_id"></span><br>
Title:<span id="title"></span><br>
Description:<span id="description"></span><br>
Quantity:<span id="quantity"></span><br>
Price:<span id="price"></span><br>
Image:<span id="Image" src="" width="200px"></span>

<script>
function loadDoc() {
  const xhttp = new XMLHttpRequest();
  xhttp.onload = function() {

    console.log("response"+this.responseText);
    var myobj=JSON.parse(this.responseText);


        document.getElementById("id").innerHTML = myobj[0].id;
        document.getElementById("admin_id").innerHTML = myobj[0].admin_id;
        document.getElementById("title").innerHTML = myobj[0].title;
        document.getElementById("description").innerHTML = myobj[0].description;
        document.getElementById("quantity").innerHTML = myobj[0].quantity;
        document.getElementById("price").innerHTML = myobj[0].price;
        document.getElementById("image").src = myobj[0].image;

    }
  xhttp.open("GET", "http://localhost:8000/api/productget/list", true);
  xhttp.send();
}
loadDoc();
</script>
</html>
