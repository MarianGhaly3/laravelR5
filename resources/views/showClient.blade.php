<!DOCTYPE html>
<html lang="en">
<head>
  <title>Client {{ $client->clientName }}</title>
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

<div class="container" style="margin:auto">
  <h3>CLIENT : {{ $client->clientName }}</h3>
  <br>
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Client Name </th>
        <th>Phone </th>
        <th>Email </th>
        <th>Website </th>
        <th>city </th>
        <th>Image </th>


      </tr>
    </thead>
    <tbody>
            <tr>
              <th>{{ $client->clientName }}</th>
              <td>{{ $client->phone }}</td>
              <td>{{ $client->email }}</td>
              <td>{{ $client->website }}</td>
              <td>{{ $client->city->city }}</td>
              <td><p><img src="{{ asset('assets/images/' . $client->image) }}" width="150px" alt=""></p></td>
            </tr>
    </tbody>
  </table>
</div>

</body>
</html>
