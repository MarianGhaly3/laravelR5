<!DOCTYPE html>
<html lang="en">
<head>
  <title>Trashed Clients</title>
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
  <h3>Trashed CLIENTS</h3>
  <br>
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Client Name </th>
        <th>Phone </th>
        <th>Email </th>
        <th>Website </th>
        <th>Restore </th>
        <th>Delete </th>
      </tr>
    </thead>
    <tbody>
        @foreach ($trashed as $client)
            <tr>
              <th>{{ $client->clientName }}</th>
              <td>{{ $client->phone }}</td>
              <td>{{ $client->email }}</td>
              <td>{{ $client->website }}</td>
              <td><a href="{{ route('restoreClient', $client->id) }}" >restore</a></td>
              <td>
                <form action="{{ route('forceDeleteClient') }}" method="POST">
                  @csrf
                  @method('DELETE')
                  <input type="hidden" value="{{$client->id}}" name="id">
                  <input type="submit" value="Permenant Delete" onclick="return confirm('Are you sure you want to permenant delete record ?')">
                </form>
              </td>
            </tr>
        @endforeach
    </tbody>
  </table>
</div>

</body>
</html>
