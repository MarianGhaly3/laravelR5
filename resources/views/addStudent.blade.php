<!DOCTYPE html>
<html lang="en">
<head>
  <title>add student</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>

<!-- nav bar -->
@include('includes.snav')
<!-- end of nav bar -->

<div class="container" style="margin:20px" >

<h2>Student Form</h2><br>

<form action="{{ route('StudentInserted') }}" method="POST">

    @csrf
  <label for="studentname">Student Name:</label><br>
  <p style="color:red">
    @error('studentName')
      {{$message}}
    @enderror
    </p>
  <input type="text" id="name" name="studentName" value=" "><br><br>

  <label for="age">Age :</label><br>
  <p style="color:red">
   @error('age')
      {{$message}}
    @enderror
    </p>
  <input type="text" id="age" name="age" value=" "><br><br>
  
  <br>
  <input type="submit" value="Submit" name="register">
</form> 

</div>

</body>
</html>