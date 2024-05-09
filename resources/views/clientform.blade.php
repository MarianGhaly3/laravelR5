
<html>
<body>

<h2>client Forms</h2><br>

<form action="insertClient" method="POST">

    @csrf
  <label for="clientname">Client name:</label><br>
  <input type="text" id="cname" name="cname" value="John"><br><br>
  <label for="phone">Phone :</label><br>
  <input type="phone" id="phone" name="phone" value="012654233"><br><br>
  <label for="email">Email :</label><br>
  <input type="email" id="email" name="email" value="test@test.com"><br><br>
  <label for="website">website :</label><br>
  <input type="text" id="website" name="website" value="www.test.com"><br><br>
  <br>
  <input type="submit" value="Submit" name="register">
</form> 


</body>
</html>