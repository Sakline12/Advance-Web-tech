<html>
<h1>Plans</h1>
<p id="demo"></p>
Id:<span id="id"></span></span><br>
Admin Id:<span id="admin_id"></span><br>
Plan Name:<span id="planName"></span><br>
Description:<span id="description"></span><br>
Price:<span id="price"></span><br>
Order Discount:<span id="orderDiscount"></span>
<script>
function loadDoc() {
  const xhttp = new XMLHttpRequest();
  xhttp.onload = function() {

    console.log("response"+this.responseText);
    var myobj=JSON.parse(this.responseText);


        document.getElementById("id").innerHTML = myobj[0].id;
        document.getElementById("admin_id").innerHTML = myobj[1].admin_id;
        document.getElementById("planName").innerHTML = myobj[2].planName;
        document.getElementById("description").innerHTML = myobj[3].description;
        document.getElementById("price").innerHTML = myobj[4].price;
        document.getElementById("orderDiscount").innerHTML = myobj[5].orderDiscount;

    }
  xhttp.open("GET", "http://localhost:8000/api/plan/list", true);
  xhttp.send();
}
loadDoc();
</script>
</html>
