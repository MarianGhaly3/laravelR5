
<!DOCTYPE html>
<html>
<body>

<h2>HTML Forms</h2>

<!-- <form action="{{ route('receivedData') " method="POST"> -->
<form action="formdata" method="POST">

    @csrf
  <label for="fname">First name:</label><br>
  <input type="text" id="fname" name="fname" value="John"><br>
  <label for="lname">Last name:</label><br>
  <input type="text" id="lname" name="lname" value="Doe"><br><br>
  <input type="submit" value="Submit" name="register">
</form> 


</body>
</html>

