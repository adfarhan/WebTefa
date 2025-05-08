<form method="POST" action="{{ route('profile.password.update') }}">
    @csrf
    <div class="form-group">
        <label for="current_password">Password Lama</label>
        <input type="password" name="current_password" required>
    </div>

    <div class="form-group">
        <label for="new_password">Password Baru</label>
        <input type="password" name="new_password" required>
    </div>

    <div class="form-group">
        <label for="new_password_confirmation">Konfirmasi Password Baru</label>
        <input type="password" name="new_password_confirmation" required>
    </div>

    <button type="submit">Simpan Perubahan</button>
</form>
