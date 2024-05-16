<!DOCTYPE html>
<html lang="en">
<head>
  <title>edit Student</title>
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
  <h2>Edit Student Form</h2><br>
  <form action="{{ route('updateStudent', $student->id) }}" method="POST">
  @csrf
  @method('put')
    <label for="studentName">Student Name:</label><br>
    <input type="text" id="cname" name="studentName" value="{{ $student->studentName }}"><br><br>
    <label for="age">Age :</label><br>
    <input type="age" id="age" name="age" value="{{ $student->age }}"><br><br>
    <input type="submit" value="Update" name="register">
  </form>
</div>

</body>
</html>