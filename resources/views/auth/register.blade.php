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
    
</head>

<body class="navbar-bg">
    <form method="POST" action="{{ route('signin') }}">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="container bg-white px-0">
            <div class="col-12 row px-0 mx-0 mt-5">
                <div class="col-6 px-0 offset-3"> 
                    <div class="d-flex justify-content-center">
                        <h1 class="text-main"><b>Create an account</b></h1>
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
                            <input type="text" class="form-control" id="floatingInput" name="username" placeholder="name@example.com">
                            <label for="floatingInput">Username</label>
                        </div>
                        <div class="form-floating mt-2">
                            <input type="password" class="form-control" id="floatingPassword" placeholder="Password"
                                name="password" required>
                            <label for="floatingPassword">Password</label>
                        </div>
                        <div class="form-floating mt-2">
                            <input type="password" class="form-control" id="floatingPassword" placeholder="Password"
                                name="retypepassword" required>
                            <label for="floatingPassword">Confirm Password</label>
                        </div>

                        <div class="text-center mt-3">
                            <label>Already have an account? <a href="{{ route('login') }}">Login</a></label>
                        </div>
                        <button class="btn border text-white bg-primary my-3 btn-block">SIGN UP</button>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <!-- General JS Scripts -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.17.1/moment-with-locales.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.min.js"></script>
    <script
        src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js">
    </script>

    <script src="/stisla-master/assets/js/scripts.js"></script>
    <script src="/js/fancybox/source/jquery.fancybox.js" type="text/javascript"></script>

    {{-- script --}}

</body>

</html>
