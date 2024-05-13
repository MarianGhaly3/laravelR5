<!DOCTYPE html>
<html lang="en">
<head>
  <title>Day 11 Task</title>
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

<div class="container" style="margin:20px">
  <h3>CLIENTS DATA</h3>
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
        @foreach ($clients as $client)
            <tr>
              <th>{{ $client->clientName }}</th>
              <td>{{ $client->phone }}</td>
              <td>{{ $client->email }}</td>
              <td>{{ $client->website }}</td>
            </tr>
        @endforeach
    </tbody>
  </table>
</div>

</body>
</html>
