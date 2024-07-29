<x-app>
    <style>
        .btn-save {
            background-color: #343a40;
            color: #fff;
            border: none;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            font-size: 16px;
            cursor: pointer;
            border-radius: 50px;
            transition: background-color 0.3s ease;
        }

        .btn-save:hover {
            background-color: #343a40;
        }
    </style>
    <div class="card-header py-2">
        <h5 class="m-0 font-weight-bold text-dark" style="text-align:center; font-size: 25px">PENCARIAN SP2D
        </h5>
    </div>
    <br>
    <div class="card">
        <div class="card-header" style="background-color: #343a40">
            <div style="color: white;">
                <i class="fas fa-check-circle" style="font-size: 20px; margin-right: 10px;"></i>
                <span style="font-size: 20px;">KONFIRMASI PENCARIAN</span>
            </div>
        </div>
        <div class="card-body">
            <form action="{{ url('admin/pencariansp2d') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group row">
                            <label for="bidang" class="col-md-4 col-form-label text-md-right">Pencarian Pada Bidang
                                :</label>
                            <div class="col-md-6">
                                <select class="form-control" name="bidang" id="bidang" required>
                                    <option value="">Pilih...</option>
                                    <option value="SDA">Bidang Sumber Daya Air (SDA)</option>
                                    <option value="CK">Bidang Cipta Karya (CK)</option>
                                    <option value="BM">Bidang Bina Marga (BM)</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group row">
                            <label for="kriteria" class="col-md-4 col-form-label text-md-right">Pencarian Berdasarkan
                                :</label>
                            <div class="col-md-6">
                                <select class="form-control" name="kriteria" id="kriteria" required>
                                    <option value="">Pilih...</option>
                                    <option value="no_spm">Berdasarkan No SPM</option>
                                    <option value="tgl_spm">Berdasarkan Tanggal SPM</option>
                                    <option value="nama_cv">Berdasarkan Nama CV</option>
                                    <option value="nama_pekerjaan">Berdasarkan Nama Pekerjaan</option>
                                    <option value="no_urut">Berdasarkan No Urut</option>
                                    <option value="jumlah_uang">Berdasarkan Jumlah Uang</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group row">
                            <label for="isi_kriteria" class="col-md-4 col-form-label text-md-right">Isi Berdasarkan
                                Pilihan :</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="isi_kriteria" id="isi_kriteria" required>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-md-4 col-form-label text-md-right">
                        Gambar Kode Keamanan :
                    </label>
                    <div class="col-md-6">
                        <span class="captcha">{!! captcha_img('flat') !!}</span>
                        <button type="button" class="btn btn-success btn-refresh"><i class="fas fa-sync"></i></button>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group row">
                            <label for="kode_keamanan" class="col-md-4 col-form-label text-md-right">Isikan Kode
                                Keamanan :</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="kode_keamanan" id="kode_keamanan" required>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group row justify-content-end">
                            <div class="col-md-6">
                                <button type="reset" class="btn btn-save">Kosongkan</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                            <div class="col-md-6">
                                <button type="submit" class="btn btn-save">Cari</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>

    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.btn-refresh').click(function() {
                $.ajax({
                    type: 'GET',
                    url: '{{ url('refresh-captcha') }}',
                    success: function(data) {
                        $('.captcha').html(data.captcha);
                    }
                });
            });
        });
    </script>
</x-app>
