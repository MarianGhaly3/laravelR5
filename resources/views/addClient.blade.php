<!DOCTYPE html>
<html lang="en">
<head>
  <title>add Client</title>
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

<div class="container" style="margin:auto; width:50%" >
  <h2>Add Client Form</h2><br>

  <form action="{{ route('ClientInserted') }}" method="POST">
     @csrf

    <div class="form-group">
    <label for="clientname">Client name:</label><br>
    <input class="form-control" type="text" id="cname" name="clientName" value=" "><br>
    </div>

    <div class="form-group">
    <label for="phone">Phone :</label><br>
    <input class="form-control" type="phone" id="phone" name="phone" value=" "><br>
    </div>

    <div class="form-group">
    <label for="email">Email :</label><br>
    <input class="form-control" type="email" id="email" name="email" value=" "><br>
    </div>

    <div class="form-group">
    <label for="website">website :</label><br>
    <input class="form-control" type="text" id="website" name="website" value=" "><br><br>
    </div>

    <input type="submit" value="Submit" name="register" class="btn btn-default">
  </form>
</div>

</body>
</html>