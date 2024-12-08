{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
   
    <link rel="stylesheet" href="{{asset('cssfile/csslogin.css')}}">
    <link href="{{asset('vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  
</head>
<body>
     <div class="container w-75 my-2 bg-light p-5">
        <h1> <i class="bi bi-book"> </i> eduSkillmentor<span>.</span></h1>
                         
        <form action="{{route('signin')}}" method="POST">
            @csrf
            <div class="mb-3">
                <label  class="form-label">Email</label>
                <input type="text" name="login" class="form-control" value="{{old('login')}}">
@error('login')
    <span class="text-danger">{{$message}}</span>
@enderror
            </div>
           

            <div class="mb-3">
                <label  class="form-label">Mot de pass</label>
                <input type="password" name="password" class="form-control">
            </div>
            <div class="d-grid">
                <button class="btn btn-warning">Se connecter</button>
        
            </div> <div class="mb-3 form-check">
                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                <label class="form-check-label" for="remember">
                    {{ __('Remember Me') }}
                </label>
            </div>
            <p>
                Don't have an account yet ? <a href="{{route('signUp')}}">Sing Up</a>
            </p>
        </form>
    </div>

</body>
</html>

    --}}

    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Login</title>
   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <section class="bg-light">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card">
                        
                            <div class="card-header text-center-primary text-primary">
                                <h4> <i class="bi bi-book "> </i> eduSkillmentor<span>.</span></h4>
                            </div>
                       
                        <div class="card-body">
                            <h1 class="h3 mb-4 text-center">Sign in to your account</h1>
                            <form method="post" action="{{ route('signin') }}">
                                @csrf
                                @if ($errors->any())
                                <div class="alert alert-danger" role="alert">
                                    <strong>Error!</strong>
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                                @endif
                                <div class="mb-3">
                                    <label for="email" class="form-label">Your Email</label>
                                    <input type="email" name="email" id="email" class="form-control" placeholder="name@company.com" required>
                                </div>
                                <div class="mb-3">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password" name="password" id="password" class="form-control" placeholder="••••••••" required>
                                </div>
                                <div class="mb-3 form-check">
                                    <input type="checkbox" name="remember" id="remember" class="form-check-input">
                                    <label class="form-check-label" for="remember">Remember me</label>
                                </div>
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <a href="#" class="text-primary">Forgot password?</a>
                                    <button type="submit" class="btn btn-primary">Sign in</button>
                                </div>
                                <p class="mb-0 text-center">
                                    Don’t have an account yet? <a href="{{ route('signup') }}" class="text-primary">Sign up</a>
                                </p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>
