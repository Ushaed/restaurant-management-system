<html>
<body>
  <input type="button" name="button" >
  <table>
    <tr>
      <th>id</th>
      <th>Name</th>
      <th>category</th>
      <th>Description</th>
      <th>Price</th>
    </tr>
    <tbody id="data">
      
    </tbody>
  </table>
  <select id="id" oninput="price()" >
    <option value="">Select</option>
    <option value="5">5</option>
    <option value="8">8</option>
  </select>
  <input type="text" id="dataid" name="" value="">
</body>
<script>
  function price(){
    var ajax = new XMLHttpRequest();
  var method = "GET";
  var id = document.getElementById('id').value;
  var url = "tx.php";
  var asynchronous = true;

  ajax.open(method, "tx.php?id="+ id, asynchronous);

  ajax.send();

  ajax.onreadystatechange = function()
  {
    if (this.readyState == 4 && this.status== 200) 
    {
      var data = JSON.parse(this.responseText);
      console.log(data);

      var html = "";

      for (var i=0; i < data.length; i++) {
        var id = data[i].price;
        html += id;
      }
      document.getElementById("dataid").value= id;
    }
    
  }
  }
</script>
</html>