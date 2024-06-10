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

<div class="container" style="margin:auto; width:50%" >
  <h2>Edit Client Form</h2><br>

  <form action="{{ route('updateClient', $client->id) }}" method="POST" enctype="multipart/form-data">
  
  @csrf
  @method('put')

  <div class="form-group">
    <label for="clientname">Client name:</label><br>
    <input class="form-control" type="text" id="cname" name="clientName" value="{{ $client->clientName }}">
  </div>

  <div class="form-group">
    <label for="phone">Phone :</label>
    <input class="form-control" type="phone" id="phone" name="phone" value="{{ $client->phone }}">
  </div>

  <div class="form-group">
    <label for="email">Email :</label>
    <input class="form-control" type="email" id="email" name="email" value="{{ $client->email }}">
  </div>

  <div class="form-group">
    <label for="website">website :</label>
    <input class="form-control" type="text" id="website" name="website" value="{{ $client->website }}">
  </div>

    <div class="form-group">
    <label for="city">City :</label>
    <select class="form-control" type="text" id="city" name="city" >
    <option value="{{ $client->city }}">{{ $client->city }}</option>
      <option value="Cairo" >Cairo</option>
      <option value="Giza" >Giza</option>
      <option value="Alex" >Alex</option>
    </select>
    </div>

    <div class="form-group">
    <label for="image">Image:</label>
    <p><img src="{{ asset('assets/images/'.$client->image) }}" width="150px" alt=""></p>
    <input type="file" id="image" name="image" class="form-control" value=" ">
    </div>

    <div class="form-group">
    <label for="active">Active:</label>
    <input type="checkbox" id="active" name="active" class="form-control" value="{{ $client->active ? 'checked' : '' }}" ><br>
    </div>

    <input class="form-control" type="submit" value="Update" name="register">
  </form>
</div>

</body>
</html>