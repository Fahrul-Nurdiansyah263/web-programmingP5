<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>tokoonline</title>
</head>
<body>
    <h3>{{$judul}}</h3>
    <!-- error -->
    @if(session()->has('error'))
    <div class="alert alert-danger alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <strong>{{ session('error')}}</strong>
    </div>
    @endif

    <form action="{{route('backend.login')}}" method="POST">
        @csrf
            <div class="coba"><i class="bi bi-person"></i></div>
            <label>User</label><br>
            <input type="text" name="email" id="" value="{{old('email')}}" class="form-control @error('email') is-invalid @enderror" placeholder="Masukkan Email">
            @error('email')
            <span class="invalid-feedback alert-danger" role="alert">
                {{$message}}
            </span>
            @enderror
            <p></p>
            <label>Password</label><br>
            <input type="text" name="password" id="" value="{{old('password')}}" class="form-control @error('password') is-invalid @enderror" placeholder="Masukkan Password">
            
            @error('password')
            <span class="invalid-feedback alert-danger" role="alert">
                {{$message}}
            </span>
            @enderror
            <p></p>
            <button type="submit">Login</button>
        </form>
        
       
</body>
</html>