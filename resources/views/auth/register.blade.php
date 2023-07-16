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
                            <h3 class="text-center">Register</h3>
                        </div>
                        <div class="card-body px-5">
                            <form method="POST" action="{{ route('register') }}">
                                @csrf

                                <div class="mb-3">
                                    <label class="form-label" for="name">Name</label>
                                    <input class="form-control" id="name" type="text" name="name" value="{{ old('name') }}" required autofocus>
                                </div>
                                <div class="form-group mb-2">
                                    @error('name')
                                        <label for="" class="text-danger">{{  $message }}</label>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label class="form-label" for="email">Email</label>
                                    <input class="form-control" id="email" type="email" name="email" value="{{ old('email') }}" required>
                                </div>
                                <div class="form-group mb-2">
                                    @error('email')
                                        <label for="" class="text-danger">{{  $message }}</label>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label class="form-label" for="password">Password</label>
                                    <input class="form-control" id="password" type="password" name="password" required>
                                </div>
                                <div class="form-group mb-2">
                                    @error('password')
                                        <label for="" class="text-danger">{{  $message }}</label>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label class="form-label" for="password_confirmation">Confirm Password</label>
                                    <input class="form-control" id="password_confirmation" type="password" name="password_confirmation" required>
                                </div>
                                <div class="form-group mb-2">
                                    @error('password_confirmation')
                                        <label for="" class="text-danger">{{  $message }}</label>
                                    @enderror
                                </div>

                                <div class="d-grid gap-2 mt-4">
                                    <button type="submit" class="btn btn-primary">Register</button>
                                </div>
                                
                                <hr>
                                <p class="text-center">Sudah punya Akun? <a href="/login">Login</a></p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>
