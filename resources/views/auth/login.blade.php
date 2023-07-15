<!-- resources/views/auth/login.blade.php -->
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>
    
<form method="POST" action="{{ route('login') }}">
    @csrf

    <div class="alert">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>

    <div>
        <label for="email">Email</label>
        <input id="email" type="email" name="email" required autofocus>
    </div>

    <div>
        <label for="password">Password</label>
        <input id="password" type="password" name="password" required>
    </div>

    <div class="form-group mt-2 mb-2">
        <div class="captcha">
            <span>{!! captcha_img('math') !!}</span>
            <button type="button" class="btn btn-danger reload" id="reload">
                &#x21bb;
            </button>
        </div>
    </div>

    <div class="form-group mb-2">
        <input type="text" placeholder="Enter Captcha" name="captcha">
        @error('captcha')
            <label for="" class="text-danger">{{  $message }}</label>
        @enderror
    </div>

    <div>
        <button type="submit">Login</button>
    </div>
</form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script>
        $('#reload').click(function(){
            $.ajax({
                type:'GET',
                url:'reload-captcha',
                success:function(data){
                    $(".captcha span").html(data.captcha)
                }
            });
        });
    </script>
  </body>
</html>
