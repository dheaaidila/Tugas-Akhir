<x-app>
    <style>
        .btn-save {
            background-color: #57a85f;
            /* Warna latar belakang */
            color: #fff;
            /* Warna teks */
            border: none;
            /* Menghilangkan border */
            padding: 10px 20px;
            /* Padding teks di dalam tombol */
            text-align: center;
            /* Posisi teks di tengah tombol */
            text-decoration: none;
            /* Menghilangkan garis bawah pada teks */
            font-size: 16px;
            /* Ukuran teks */
            cursor: pointer;
            /* Menjadikan kursor menjadi pointer ketika mengarah ke tombol */
            border-radius: 50px;
            /* Radius sudut tombol */
            transition: background-color 0.3s ease;
            /* Transisi warna latar belakang saat hover */
        }

        .btn-save:hover {
            background-color: rgb(89, 155, 86);
            /* Warna latar belakang saat hover */
        }
    </style>
    <div class="container">

        <div class="card-header" style="background-color: rgb(144, 211, 102)">
            <div style="color: white;">
                <i class="fas fa-check-circle" style="font-size: 20px; margin-right: 10px;"></i>
                <span style="font-size: 20px;">KONFIRMASI PENCARIAN</span>
            </div>
        </div>
        <div class="card-body">
            <form action="{{ url('admin/percariansp2d') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group d-flex justify-content-center align-items-center">
                            <label for="" class="control-label">Pencarian Pada Bidang :</label>
                            <div class="col-md-6"> <!-- Memberikan margin kiri untuk jarak antara label dan select -->
                                <select class="form-control">
                                    <option value="opsi1">Pilih...</option>
                                    <option value="opsi2">Bidang Sumber Daya Air (SDA)</option>
                                    <option value="opsi3">Bidang Cipta Karya (CK)</option>
                                    <option value="opsi2">Bidang Bina Marga (BM)</option>

                                </select>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group d-flex justify-content-center align-items-center">
                            <label for="" class="control-label">Pencarian Berdasarkan :</label>
                            <div class="col-md-6"> <!-- Memberikan margin kiri untuk jarak antara label dan select -->
                                <select class="form-control">
                                    <option value="opsi1">Pilih...</option>
                                    <option value="opsi1">Berdasarkan No SPM</option>
                                    <option value="opsi2">Berdasarkan Tanggal SPM</option>
                                    <option value="opsi3">Berdasarkan Nama CV</option>
                                    <option value="opsi2">Berdasarkan Nama Pekerjaan</option>
                                    <option value="opsi3">Berdasarkan No Urut</option>
                                    <option value="opsi3">Berdasarkan Jumlah Uang</option>
                                </select>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group d-flex justify-content-center align-items-center">
                            <label for="" class="control-label"> Isi Berdasarkan Pillihan : </label>
                            <div class="col-md-6"> <!-- Memberikan margin kiri untuk jarak antara label dan select -->
                                <input type="text" class="form-control" name="">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-md-2"></div>
                    <label class="col-md-2.6 col-form-label label-rumkon" style="text-align: right"> Gambar Kode
                        Keamanan :
                    </label>
                    <div class="col-md-5">
                        <div>
                            <span class="captcha">{!! captcha_img('flat') !!}</span>
                            <button type="button" class="btn btn-success btn-refresh"><i
                                    class="fas fa-sync"></i></button>
                        </div>
                    </div>
                </div>

        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group d-flex justify-content-center align-items-center">
                    <label for="" class="control-label">Isikan Kode Keamanan :</label>
                    <div class="col-md-6"> <!-- Memberikan margin kiri untuk jarak antara label dan select -->
                        <input type="text" class="form-control" name="">
                    </div>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-md-6">
                <div class="form-group d-flex justify-content-center align-items-center">
                    <button type="submit" class="btn btn-save">Kosongkan</button>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group d-flex justify-content-center align-items-center">
                    <button type="submit" class="btn btn-save">Cari</button>
                </div>
            </div>
        </div>


        {{-- <button class="btn btn-primary float-right mb-3"><i class="fa fa-save"></i> Simpan </button> --}}
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
