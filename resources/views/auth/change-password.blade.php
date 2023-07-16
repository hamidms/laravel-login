@extends('layouts.app')

@section('content')

<div class="position-absolute top-50 start-50 translate-middle">
    <div class="card shadow" style="width: 23rem;">
        <div class="card-header">
            <h3 class="text-center">Change Password</h3>
        </div>

        <div class="card-body px-5">
    
            <form method="POST" action="{{ route('change-password') }}">
                @csrf
    
                <div class="mb-3">
                    <label class="form-label" for="current_password">Current Password</label>
                    <input class="form-control" id="current_password" type="password" placeholder="Password saat ini" name="current_password" required>
                </div>
    
                <div class="mb-3">
                    <label class="form-label" for="new_password">New Password</label>
                    <input class="form-control" id="new_password" type="password" placeholder="Password baru" name="new_password" required>
                </div>
    
                <div class="mb-3">
                    <label class="form-label" for="new_password_confirmation">Confirm New Password</label>
                    <input class="form-control" id="new_password_confirmation" type="password" placeholder="Konfirmasi password baru" name="new_password_confirmation" required>
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
    
                <div class="d-grid gap-2 my-4">
                    <button type="submit" class="btn btn-primary">Change Password</button>
                </div>
                <hr>
                <p class="text-center">Kembali ke <a href="/dashboard">Dashboard</a></p>
            </form>
        </div>

    </div>
</div>
@endsection