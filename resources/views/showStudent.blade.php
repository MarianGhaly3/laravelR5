<!DOCTYPE html>
<html lang="en">
<head>
  <title>Student {{ $student->studentName }}</title>
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

<div class="container" style="margin:auto">
  <h3>Student : {{ $student->studentName }}</h3>
  <br>
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Student Name </th>
        <th>Age </th>
      </tr>
    </thead>
    <tbody>
            <tr>
              <th>{{ $student->studentName }}</th>
              <td>{{ $student->age }}</td>

            </tr>
    </tbody>
  </table>
</div>

</body>
</html>
