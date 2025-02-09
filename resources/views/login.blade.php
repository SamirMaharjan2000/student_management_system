<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Login Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    <section>
        <div class="container mt-5 pt-5">
            <div class="row">
                <div class="col-12 col-sm-8 col-lg-6 m-auto">
                    <div class="card border-0 shadow">
                        <div class="card-body">
                            
                            <div class="text-center">
                            <svg class="mx-auto my-3"  xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                            </svg>
                            <p>Admin<br>Login Page<br></p>
                            @if (Session::has('error'))
                                <p class="text-danger">{{ Session::get('error')}}</p>
                            @endif
                            @if (Session::has('success'))
                                <p class="text-success">{{ Session::get('success')}}</p>
                            @endif
                            </div>
                            <form action="{{route('login')}}" method= "post">
                                @csrf
                                @method('post')
                                <input type="text" name="username" id="" class="form-control my-4 py-2" placeholder="Username" required/>
                                @if ($errors->has('name'))
                                    <p class="text-danger">{{ $errors->first('name')}}</p>
                                @endif
                                <input type="password" name="password" id="" class="form-control my-4 py-2" placeholder="Password" required/>
                                @if ($errors->has('password'))
                                    <p class="text-danger">{{ $errors->first('password')}}</p>
                                @endif
                                <div class="text-center mt-3">
                                    <button class="btn btn-primary">Login</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>