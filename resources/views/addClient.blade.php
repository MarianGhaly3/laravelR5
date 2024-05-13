<!DOCTYPE html>
<html lang="en">
<head>
  <title>day4-addClient</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<!-- nav bar -->
@include('includes.nav')
<!-- end of nav bar -->

<div class="container" style="margin:20px" >
  <h2>Add Client Form</h2><br>
  <form action="{{ route('ClientInserted') }}" method="POST">
     @csrf
    <label for="clientname">Client name:</label><br>
    <input type="text" id="cname" name="clientName" value="John"><br><br>
    <label for="phone">Phone :</label><br>
    <input type="phone" id="phone" name="phone" value="012654233"><br><br>
    <label for="email">Email :</label><br>
    <input type="email" id="email" name="email" value="test@test.com"><br><br>
    <label for="website">website :</label><br>
    <input type="text" id="website" name="website" value="www.test.com"><br><br><br>
    <input type="submit" value="Submit" name="register">
  </form>
</div>

</body>
</html>