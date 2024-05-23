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

  <form action="{{ route('ClientInserted') }}" method="POST" enctype="multipart/form-data">
     @csrf

    <div class="form-group">
    <label for="clientname">Client name:</label>
    <p style="color:red">
    @error('clientName')
      {{$message}}
    @enderror
    </p>
    <input class="form-control" type="text" id="cname" name="clientName" value="{{ old('clientName') }}">
    </div>

    <div class="form-group">
    <label for="phone">Phone :</label>
    <p style="color:red">
    @error('phone')
      {{$message}}
    @enderror
    </p>
    <input class="form-control" type="phone" id="phone" name="phone" value="{{ old('phone') }}">
    </div>

    <div class="form-group">
    <label for="email">Email :</label>
    <p style="color:red">
    @error('email')
      {{$message}}
    @enderror
    </p>
    <input class="form-control" type="email" id="email" name="email" value="{{ old('email') }}">
    </div>

    <div class="form-group">
    <label for="website">website :</label>
    <p style="color:red">
    @error('website')
      {{$message}}
    @enderror
    </p>
    <input class="form-control" type="text" id="website" name="website" value="{{ old('website') }}">
    </div>

    <div class="form-group">
    <label for="city">City :</label>
    <p style="color:red">
    @error('city')
      {{$message}}
    @enderror
    </p>
    <select class="form-control" type="text" id="city" name="city">
    <option value="">Please Select City</option>
      <option value="Cairo" {{ old('city') == 'Cairo' ? 'selected': ''}} >Cairo</option>
      <option value="Giza" {{ old('city') == 'Giza' ? 'selected': ''}} >Giza</option>
      <option value="Alex" {{ old('city') == 'Alex' ? 'selected': ''}} >Alex</option>
    </select>
    </div>

    <div class="form-group">
    <label for="image">Image:</label>
    <input type="file" id="image" name="image" class="form-control" value="{{ old('image') }}"><br>
    </div>

    <div class="form-group">
    <label for="active">Active:</label>
    <input type="checkbox" id="active" name="active" class="form-control" {{ old('active') ? 'checked' : '' }}><br>
    </div>

    <input type="submit" value="Submit" name="register" class="btn btn-default">
  </form>
</div>

</body>
</html>