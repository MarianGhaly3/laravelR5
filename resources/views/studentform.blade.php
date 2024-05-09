
<html>
<body>

<h2>Student Forms</h2><br>

<form action="insertStudent" method="POST">

    @csrf
  <label for="studentname">Student Name:</label><br>
  <input type="text" id="name" name="sname" value="John"><br><br>
  <label for="phone">Age :</label><br>
  <input type="phone" id="age" name="age" value="15"><br><br>
  <br>
  <input type="submit" value="Submit" name="register">
</form> 


</body>
</html>