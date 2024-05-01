<!DOCTYPE html>
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
                         
        <form action="{{route('login_user.login')}}" method="POST">
            @csrf
            <div class="mb-3">
                <label  class="form-label">Email</label>
                <input type="text" name="login" class="form-control" value="{{old('login')}}">
@error('login')
    <span class="text-danger">{{$message}}</span>
@enderror
            </div>
            <div class="mb-3 form-check">
                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                <label class="form-check-label" for="remember">
                    {{ __('Remember Me') }}
                </label>
            </div>

            <div class="mb-3">
                <label  class="form-label">Mot de pass</label>
                <input type="password" name="password" class="form-control">
            </div>
            <div class="d-grid">
                <button class="btn btn-warning">Se connecter</button>
        
            </div>
            <p>
                Don't have an account yet ? <a href="{{route('register')}}">Sing Up</a>
            </p>
        </form>
    </div>

</body>
</html>

   