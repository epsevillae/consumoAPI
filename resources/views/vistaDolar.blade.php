<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clientes</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h4>Dolar</h4>
        <div class="row">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>FECHA</th>
                            <th>DOLAR</th>
                            <th>EURO</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{$dolar['fecha']}}</td>
                            <td>{{$dolar['dolar']['valor']}}</td>
                            <td>{{$dolar['euro']['valor']}}</td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="container">
        <h4>Posts</h4>
        <div class="row">
            @foreach($posts as $post)
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="../images/user.png" alt="Card image cap">
                    <div class="card-body">
                        <h4 class="card-text">{{$post['id']}}</h4>
                        <h5 class="card-title">{{$post['title']}}</h5>
                        <p class="card-text">{{$post['body']}}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</body>

</html>