<!DOCTYPE html>
<html lang="en">
<head>
  <title>Clients Data</title>
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
  <h3>CLIENTS DATA</h3>
  <br>
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Client Name </th>
        <th>Phone </th>
        <th>Email </th>
        <th>Website </th>
        <th>City </th>
        <th>Edit </th>
        <th>Show </th>
        <th>delete </th>
      </tr>
    </thead>
    <tbody>
        @foreach ($clients as $client)
            <tr>
              <th>{{ $client->clientName }}</th>
              <td>{{ $client->phone }}</td>
              <td>{{ $client->email }}</td>
              <td>{{ $client->website }}</td>
              <td>{{ $client->city->city }}</td>
              <!-- <td><p><input type="checkbox" id="active" name="active" class="form-control" value="{{ $client->active ? 'checked' : '' }}"></p></td> -->
              <td><a href="{{ route('editClient', $client->id) }}" >Edit</a></td>
              <td><a href="{{ route('showClient', $client->id) }}" >Show</a></td>
              <td>
                <form action="{{ route('deleteClient') }}" method="POST">
                  @csrf
                  @method('DELETE')
                  <input type="hidden" value="{{$client->id}}" name="id">
                  <input type="submit" value="Delete" onclick="return confirm('Are you sure you want to delete record ?')">
                </form>
              </td>

            </tr>
        @endforeach
    </tbody>
  </table>
</div>

</body>
</html>
