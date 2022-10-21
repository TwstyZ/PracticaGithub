<html lang="en">

@if(session()->has('confirmacion'))
{!! "<script>
    Swal.fire(
        'Good Job',
        'Tu recuerdo llegó',
        'Succes'
    )
    </script>"!!}
    @endif
    
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diario bonito</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>

<div class="container col-7">
    @if($errors->any())
    @foreach($errors->all() as $error)
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong> {{$error}}</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert"aria-label="Close"></button>
    </div>
    @endforeach
    @endif
    <h1 class="display-4 text-center mt-5 mb-5">
        Ingresar
    </h1>
    <div class="card text-center mb-5">
        <div class="card-header">
            Querido diario
        </div>
        <div class="card-body">
            <form method="POST" action="{{route('coccion')}}">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Titulo:</label>
                    <input type="text" name="txtTitulo" class="form-control">
                </div>
                <div class="mb-3">
                    <label class="form-label">Recuerdo:</label>
                    <input type="text" name="txtRecuerdo" class="form-control">
                </div>
        </div>
        <div class="card-footer">
            <button class="btn btn-primary" type="submit">Guardar recuerdo</button>
            </form>
        </div>
    </div>
</div>

    <!--Pie de página -->
    <div class="alert alert-info pb-1  pt-2 text-center" role="alert">
        Ulises Florean Guzmán 2022 Copyrigth ©
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>