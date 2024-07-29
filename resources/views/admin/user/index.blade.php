<x-app>
    <div class="card-header py-2">
        <h5 class="m-0 font-weight-bold text-dark" style="text-align:center; font-size: 25px">DATA PEGAWAI
        </h5>
    </div>
    <div class="card mt-4">
        <div class="card-header">
            <a href="{{ url('admin/user/create') }}" data-toggle="modal" data-target="#tambah-data"
                class="float-right btn btn-dark"><i class="fas fa-plus"></i> Tambah Data</a>
        </div>
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead class="bg-dark">
                    <th style="color: dark;" width="10px">NO</th>
                    <th style="color: dark;" class="text-center">NIP/NUP</th>
                    <th style="color: dark;" class="text-center">NAMA LENGKAP</th>
                    <th style="color: dark;" class="text-center">UNIT KERJA</th>
                    <th style="color: dark;" width="90px" class="text-center">AKSI</th>
                </thead>
                <tbody>
                    @php
                        $no = 1;
                    @endphp
                    @foreach ($list_user as $user)
                        <tr>
                            <td class="text-center">{{ $no++ }}</td>
                            <td class=>{{ $user->nip }}</td>
                            <td class=>{{ $user->name }}</td>
                            <td class="text-center">
                                {{ $user->type }}
                            </td>
                            <td class="text-center">
                                <div class="btn-group">
                                    <x-template.button.info-button url="admin/ck" id="" />
                                    <a href="" data-toggle="modal"
                                        data-target="#edit-data"class="btn btn-warning"><i class="fas fa-edit"></i></a>
                                    {{-- <x-template.button.edit-button url="admin/ck" id="" /> --}}
                                    <x-template.button.delete-button url="admin/ck" id="" />
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <!-- Modal Tambah  -->
    <div class="modal fade" id="tambah-data">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" style="text-align:center; font-size: 25px">Tambah Data Pegawai</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ url('admin/user') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="" class="control-label">NIP/NUP</label>
                                    <input type="text" id="nip" name="nip" class="form-control" required>
                                    @error('nama_cv')
                                        <p class="text-danger" style="font-size: 12px">* {{ $message }}</p
                                            style="font-size: 12px">
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="" class="control-label">NAMA LENGKAP</label>
                                    <input type="text" id="nama" name="nama" class="form-control" required>
                                    @error('nama')
                                        <p class="text-danger" style="font-size: 12px">* {{ $message }}</p
                                            style="font-size: 12px">
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="" class="control-label">UNIT KERJA</label>
                                    <select class="form-control" name="division" id="" required>
                                        <option value="">Pilih Unit Kerja</option>
                                        <option value="SDA">SUMBER DAYA AIR</option>
                                        <option value="CK">CIPTA KARYA</option>
                                        <option value="BM">BINA MARGA</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="" class="control-label">PASSWORD</label>
                                    <input type="text" id="password" name="password" class="form-control" required>
                                    @error('password')
                                        <p class="text-danger" style="font-size: 12px">* {{ $message }}</p
                                            style="font-size: 12px">
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row"></div>
                        <div class="row">
                            <div class="col-md-12 modal-footer justify-content-between">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <button class="btn btn-primary float-right">Simpan</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- End Modal Tambah-->
</x-app>
