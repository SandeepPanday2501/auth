<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <h1>Sign Up</h1>

    @if(Session::has('fail'))
    <span>{{Session::get('fail')}}</span>
    @endif
    <form action="{{route('registerUser')}}" method="post">
        @csrf
        <div>
            <input type="text" name="name" id="" placeholder="Enter Email"><br>
            <span>@error('name') {{$message}} @enderror</span>
        </div>

        <div>
            <input type="text" name="email" id="" placeholder="Enter Name"><br>
            <span>@error('email') {{$message}} @enderror</span>

        </div>

        <div>
            <input type="password" name="password" id="" placeholder="Enter Password"><br>
            <span>@error('password') {{$message}} @enderror</span>


        </div>
        <div>
            <button type="submit">Sign UP</button>
        </div>

    </form>


</body>

</html>