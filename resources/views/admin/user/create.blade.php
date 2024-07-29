<x-app>
    <div class="card-header py-2">
        <h5 class="m-0 font-weight-bold text-dark" style="text-align:center; font-size: 25px">Tambah Data User</h5>
    </div>
    <div class="card mt-4">
        <div class="card-body">
            <form href="{{ url('admin/user') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="nip">NIP:</label>
                    <input type="text" name="nip" id="nip" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="name">Nama:</label>
                    <input type="text" name="name" id="name" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="type">Role:</label>
                    <select name="type" id="type" class="form-control" required>
                        <option value="admin">Admin</option>
                        <option value="user">User</option>
                        <!-- Add more roles as needed -->
                    </select>
                </div>
                <div class="form-group text-center">
                    <button type="submit" class="btn btn-dark">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</x-app>
