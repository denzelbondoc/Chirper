<html lang="en">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Customer</title>
  </head>
  <body>
    <h1 class=>Customer</h1>
    <table class="table table-striped table-dark">
    <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Email</th>
      <th scope="col">Contact Number</th>
      <th scope="col">Address</th>
    </tr>

    <tbody>
    @foreach ($customers as $customer)
    
    <tr>
        <td>
        {{$customer->id}}
        </td>
        <td>
        {{$customer->firstName}}
        </td>
        <td>
        {{$customer->lastName}}
        </td>
        <td>
        {{$customer->email}}
        </td>
        <td>
        {{$customer->contactNumber}}
        </td>
        <td>
        {{$customer->address}}
        </td>
    </tr>
    @endforeach
    </tbody>
  </thead>
    </table>
  </body>
</html>