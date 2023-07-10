<!-- resources/views/auth/change-password.blade.php -->

<form method="POST" action="{{ route('change-password') }}">
    @csrf

    <div>
        <label for="current_password">Current Password</label>
        <input id="current_password" type="password" name="current_password" required>
    </div>

    <div>
        <label for="new_password">New Password</label>
        <input id="new_password" type="password" name="new_password" required>
    </div>

    <div>
        <label for="new_password_confirmation">Confirm New Password</label>
        <input id="new_password_confirmation" type="password" name="new_password_confirmation" required>
    </div>

    <div>
        <button type="submit">Change Password</button>
    </div>
</form>
