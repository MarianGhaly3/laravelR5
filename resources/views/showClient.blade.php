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
      </tr>
    </thead>
    <tbody>
            <tr>
              <th>{{ $client->clientName }}</th>
              <td>{{ $client->phone }}</td>
              <td>{{ $client->email }}</td>
              <td>{{ $client->website }}</td>
            </tr>
    </tbody>
  </table>
</div>

</body>
</html>
