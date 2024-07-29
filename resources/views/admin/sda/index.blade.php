<x-app>
    <div class="card-header py-2">
        <h5 class="m-0 font-weight-bold text-dark" style="text-align:center; font-size: 25px">SUMBER DAYA AIR
        </h5>
    </div>
    <div class="card mt-4">
        <div class="card-header">
            <a href="" data-toggle="modal" data-target="#tambah-data" class="float-right btn btn-dark"><i
                    class="fas fa-plus"></i> Tambah Data</a>
        </div>
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead class="bg-dark">
                    <th style="color: dark;" width="10px">NO</th>
                    <th style="color: dark;" class="text-center">NAMA CV</th>
                    <th style="color: dark;" class="text-center">NAMA PEKERJAAN</th>
                    <th style="color: dark;" width="90px" class="text-center">AKSI</th>
                </thead>
                <tbody>
                    @php
                        $no = 1;
                    @endphp
                    @foreach ($list_sda->sortByDesc('created_at')->values() as $sda)
                        <tr>
                            <td class="text-center">{{ $no++ }}</td>
                            <td >{{ $sda->nama_cv }}</td>
                            <td class="text-center">
                                {{ $sda->nama_pekerjaan }}
                            </td>
                            <td class="text-center">
                                <div class="btn-group">
                                    <x-template.button.info-button url="admin/sda" id="{{ $sda->id }}" />
                                    <a href="" data-toggle="modal"
                                        data-target="#edit-data{{ $sda->id }}"class="btn btn-warning"><i
                                            class="fas fa-edit"></i></a>
                                    {{-- <x-template.button.edit-button url="admin/sda" id="{{ $sda->id }}" /> --}}
                                    <x-template.button.delete-button url="admin/sda" id="{{ $sda->id }}" />
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
                    <h4 class="modal-title" style="text-align:center; font-size: 25px">Tambah Data SDA</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ url('admin/sda') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="" class="control-label">NAMA CV</label>
                                    <input type="text" id="nama_cv" name="nama_cv" class="form-control" required>
                                    @error('nama_cv')
                                        <p class="text-danger" style="font-size: 12px">* {{ $message }}</p
                                            style="font-size: 12px">
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="" class="control-label">NAMA PEKERJAAN</label>
                                    <input type="text" id="nama_pekerjaan" name="nama_pekerjaan" class="form-control"
                                        required>
                                    @error('nama_pekerjaan')
                                        <p class="text-danger" style="font-size: 12px">* {{ $message }}</p
                                            style="font-size: 12px">
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="" class="control-label">NOMOR SPM</label>
                                    <input type="text" id="no_spm" name="no_spm" class="form-control" required>
                                    @error('no_spm')
                                        <p class="text-danger" style="font-size: 12px">* {{ $message }}</p
                                            style="font-size: 12px">
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="" class="control-label">TANGGAL SPM</label>
                                    <input type="date" id="tgl_spm" name="tgl_spm" class="form-control" required>
                                    @error('tgl_spm')
                                        <p class="text-danger" style="font-size: 12px">* {{ $message }}</p
                                            style="font-size: 12px">
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="" class="control-label">NOMOR URUT</label>
                                    <input type="text" id="no_urut" name="no_urut" class="form-control"
                                        required>
                                    @error('no_urut')
                                        <p class="text-danger" style="font-size: 12px">* {{ $message }}</p
                                            style="font-size: 12px">
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="" class="control-label">JUMLAH UANG</label>
                                    <input type="number" id="jumlah_uang" name="jumlah_uang" class="form-control"
                                        required>
                                    @error('jumlah_uang')
                                        <p class="text-danger" style="font-size: 12px">* {{ $message }}</p
                                            style="font-size: 12px">
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="" class="control-label">UPLOAD SCAN</label>
                                    <input type="file" id="" name="url_pdf" class="form-control"
                                        required>
                                    @error('url_pdf')
                                        <p class="text-danger" style="font-size: 12px">* {{ $message }}</p
                                            style="font-size: 12px">
                                    @enderror
                                </div>
                            </div>
                        </div>
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

    <!-- Modal Edit SDA -->
    @foreach ($list_sda as $sda)
        <div class="modal fade" id="edit-data{{ $sda->id }}">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" style="text-align:center; font-size: 25px">Edit Data SDA</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ url('admin/sda', $sda->id) }}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="" class="control-label">NAMA CV</label>
                                        <input type="text" id="nama_cv" name="nama_cv" class="form-control"
                                            value="{{ $sda->nama_cv }}">
                                        @error('nama_cv')
                                            <p class="text-danger" style="font-size: 12px">* {{ $message }}</p
                                                style="font-size: 12px">
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="" class="control-label">NAMA PEKERJAAN</label>
                                        <input type="text" id="nama_pekerjaan" name="nama_pekerjaan"
                                            class="form-control" value="{{ $sda->nama_pekerjaan }}">
                                        @error('nama_pekerjaan')
                                            <p class="text-danger" style="font-size: 12px">* {{ $message }}</p
                                                style="font-size: 12px">
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="" class="control-label">NOMOR SPM</label>
                                        <input type="text" id="no_spm" name="no_spm" class="form-control"
                                            value="{{ $sda->no_spm }}">
                                        @error('no_spm')
                                            <p class="text-danger" style="font-size: 12px">* {{ $message }}</p
                                                style="font-size: 12px">
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="" class="control-label">TANGGAL SPM</label>
                                        <input type="date" id="tgl_spm" name="tgl_spm" class="form-control"
                                            value="{{ $sda->tgl_spm }}">
                                        @error('tgl_spm')
                                            <p class="text-danger" style="font-size: 12px">* {{ $message }}</p
                                                style="font-size: 12px">
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="" class="control-label">NOMOR URUT</label>
                                        <input type="text" id="no_urut" name="no_urut" class="form-control"
                                            value="{{ $sda->no_urut }}">
                                        @error('no_urut')
                                            <p class="text-danger" style="font-size: 12px">* {{ $message }}</p
                                                style="font-size: 12px">
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="" class="control-label">JUMLAH UANG</label>
                                        <input type="number" id="jumlah_uang" name="jumlah_uang"
                                            class="form-control" value="{{ $sda->jumlah_uang }}">
                                        @error('jumlah_uang')
                                            <p class="text-danger" style="font-size: 12px">* {{ $message }}</p
                                                style="font-size: 12px">
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="" class="control-label">UPLOAD SCAN</label>
                                    <input type="file" id="" name="url_pdf" class="form-control"
                                        required>
                                    @error('url_pdf')
                                        <p class="text-danger" style="font-size: 12px">* {{ $message }}</p
                                            style="font-size: 12px">
                                    @enderror
                                </div>
                            </div>
                    </div>


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
    @endforeach
    <!-- End Modal Edit -->
</x-app>
