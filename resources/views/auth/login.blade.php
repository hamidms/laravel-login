<!-- resources/views/auth/login.blade.php -->
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravo | Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="position-absolute top-50 start-50 translate-middle">
                    <div class="card shadow" style="width: 23rem;">
                        <div class="card-header">
                            <h3 class="text-center">Login</h3>
                        </div>
                        <div class="card-body px-5">

                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="mb-3">
                                    <label class="form-label" for="email">Email</label>
                                    <input  class="form-control" placeholder="Masukkan Email" id="email" type="email" name="email" required autofocus>
                                </div>
                            
                                <div>
                                    <label class="form-label" for="password">Password</label>
                                    <input placeholder="Masukkan Password" class="form-control" id="password" type="password" name="password" required>
                                </div>
                            
                                <div class="form-group mt-2 mb-2">
                                    <label class="form-label" for="captcha">Kode Keamanan</label>
                                    <div class="row">
                                        <div class="col-8">
                                            <div class="captcha">
                                                <button type="button" class="btn btn-danger reload" id="reload">
                                                    &#x21bb;
                                                </button>
                                                <span>{!! captcha_img('math') !!}</span>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <input class="form-control" type="text" placeholder="Kode" name="captcha">

                                        </div>
                                    </div>
                                </div>
                            
                                @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                                @endif
                                
                                <div class="d-grid gap-2 mt-4">
                                    <button type="submit" class="btn btn-primary">Login</button>
                                </div>
                                
                                <hr>
                                <p class="text-center">Pengguna Baru? <a href="/register">Daftar disini</a></p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
