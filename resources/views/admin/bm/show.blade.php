<x-app>
    <div class="card-header py-2">
        <h5 class="m-0 font-weight-bold text-dark" style="text-align:center; font-size: 25px">CIPTA KARYA
        </h5>
    </div>
    <a href="{{ url('admin/bm') }}" class="btn btn-primary btn-tone btn-sm mt-4"><i class="fas fa-arrow-left"></i>
        Kembali</a>
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <dt class="font-weight-bold">NAMA CV</dt>
                    <dd>{{ $bm->nama_cv }}</dd>
                </div>
                <div class="col-md-6">
                    <dt class="font-weight-bold">NAMA PEKERJAAN</dt>
                    <dd>{{ $bm->nama_pekerjaan }}</dd>
                </div>
                <div class="col-md-6">
                    <dt class="font-weight-bold">NOMOR SPM</dt>
                    <dd>{{ $bm->no_spm }}</dd>
                </div>
                <div class="col-md-6">
                    <dt class="font-weight-bold">TANGGAL SPM</dt>
                    <dd>{{ $bm->tanggal_spm_string }}</dd>
                </div>
                <div class="col-md-6">
                    <dt class="font-weight-bold">NOMOR URUT</dt>
                    <dd>{{ $bm->no_urut }}</dd>
                </div>
                <div class="col-md-6">
                    <dt class="font-weight-bold">JUMLAH UANG</dt>
                    <dd>Rp. {{ number_format($bm->jumlah_uang) }}</dd>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-6">
        <dt class="font-weight-bold">FILE</dt>
        <dd>
            <button class="btn btn-primary lihat-pdf-btn" data-url="{{ url($bm->url_pdf) }}">
                FILE
            </button>
        </dd>
    </div>

</x-app>
