<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">    
</head>
<body>
    <form method="POST" action="{{route('login.submit')}}">
        @csrf
        <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" placeholder="congtung@gmail.com" class="form-control">
        @error('email')
        <span class="text-danger">{{$message}}</span>
        @enderror
        </div>
        <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" class="form-control"
        name="password" id="password" value="12346a@">
        @error('password')
        <span class="text-danger">{{$message}}</span>
        @enderror
        </div>
        <button type="submit" class="btn btn-primary mt-3">Submit</button>
        </form>
        
</body>
</html>