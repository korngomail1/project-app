<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,300" rel="stylesheet" type="text/css">
    <!-- General CSS Files -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
   
    @vite(['resources/js/app.js', 'resources/sass/admin.scss'])
 
</head>

<body class="bg-white">
    <form method="POST" action="{{ route('login') }}">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="container  bg-white px-0 my-4" style="width: 100%">
            <div class="col-12 row px-0 mx-0 mt-5">
                <div class="col-6 offset-3 shadow px-0">
                    <div class="d-flex justify-content-center">
                        <h1 class="mt-2" style="color: #479380"><b>Welcome</b></h1>
                    </div>
                    @if ($errors->any())
                        <div class="col-10 offset-1">
                            <div class="form-floating mt-2 ">
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <strong>{{ $errors->first() }}</strong>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    @endif

                    <div class="col-10 offset-1">
                        <div class="form-floating mt-2 ">
                            <input type="text" class="form-control" id="floatingInput" name="username"
                                placeholder="name@example.com">
                            <label for="floatingInput">Email/Username</label>
                        </div>
                        <div class="form-floating mt-2">
                            <input type="password" class="form-control" id="floatingPassword" placeholder="Password"
                                name="password">
                            <label for="floatingPassword">Password</label>
                        </div>
                        <div class="text-right ">
                            <a href="{{ route('signin') }}"><small>Rigiseter</small></a>
                        </div>
                        <div class="d-flex justify-content-center my-4">
                            <button class="btn btn-main  w-100">LOGIN</button>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </form>
</body>

</html>
