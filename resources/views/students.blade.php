<!DOCTYPE html>
<html lang="en">
<head>
  <title>students data</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<!-- nav bar -->
 @include('includes.snav')
<!-- end of nav bar -->

<div class="container" style="margin:20px">
  <h3>STUDENTS DATA</h3>
  <br>
  <table class="table table-hover">
    <thead>
      <tr>
        <th>student Name </th>
        <th>age </th>
        <th>Edit </th>
        <th>Show </th>
        <th>delete </th>
      </tr>
    </thead>

    <tbody>
        @foreach ($students as $student)
            <tr>
              <th>{{ $student->studentName }}</th>
              <td>{{ $student->age }}</td>
              <td><a href="{{ route('editStudent', $student->id) }}" >Edit</a></td>
              <td><a href="{{ route('showStudent', $student->id) }}" >Show</a></td>
              <td>
                <form action="{{ route('deleteStudent') }}" method="POST">
                  @csrf
                  @method('DELETE')
                  <input type="hidden" value="{{$student->id}}" name="id">
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
