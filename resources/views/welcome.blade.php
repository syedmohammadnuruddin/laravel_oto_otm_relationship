<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Laravel Relationship</title>
  </head>
  <body>

    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h2 class="text-center my-3">
                    Eloquent Relationship
                </h2>
                <table class="table table-bordered">
                    <thead>
                        <th>Id</th>
                        <th>User Name</th>
                        <th>Phone Name</th>
                        <th>Paying Date</th>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            
                        
                        <tr>
                            <td>{{$user->id}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->phone->name}}</td>
                            <td>{{$user->phone->created_at}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <h2 class="text-center my-3">
                    Eloquent Relationship
                </h2>
                <table class="table table-bordered">
                    <thead>
                        <th>Id</th>
                        <th>Phone Name</th>
                        <th>User Name</th>
                        <th>Paying Date</th>
                    </thead>
                    <tbody>
                        @foreach ($phones as $phone)
                            
                        
                        <tr>
                            <td>{{$phone->id}}</td>
                            <td>{{$phone->name}}</td>
                            <td>{{$phone->user->name}}</td>
                            <td>{{$phone->user->created_at}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    
  </body>
</html>