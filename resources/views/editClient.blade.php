<!DOCTYPE html>
<html lang="en">
<head>
  <title>edit Client</title>
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
  <h2>Edit Client Form</h2><br>
  <form action="{{ route('updateClient', $client->id) }}" method="POST">
  
  @csrf
  @method('put')

    <label for="clientname">Client name:</label><br>
    <input type="text" id="cname" name="clientName" value="{{ $client->clientName }}"><br><br>
    <label for="phone">Phone :</label><br>
    <input type="phone" id="phone" name="phone" value="{{ $client->phone }}"><br><br>
    <label for="email">Email :</label><br>
    <input type="email" id="email" name="email" value="{{ $client->email }}"><br><br>
    <label for="website">website :</label><br>
    <input type="text" id="website" name="website" value="{{ $client->website }}"><br><br><br>
    <input type="submit" value="Update" name="register">
  </form>
</div>

</body>
</html>