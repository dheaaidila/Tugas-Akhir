<x-app>
    <div class="card-header py-2">
        <h5 class="m-0 font-weight-bold text-dark" style="text-align:center; font-size: 25px">SUMBER DAYA AIR
        </h5>
    </div>
    <a href="{{ url('admin/sda') }}" class="btn btn-primary btn-tone btn-sm mt-4"><i class="fas fa-arrow-left"></i>
        Kembali</a>
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <dt class="font-weight-bold">NAMA CV</dt>
                    <dd>{{ $sda->nama_cv }}</dd>
                </div>
                <div class="col-md-6">
                    <dt class="font-weight-bold">NAMA PEKERJAAN</dt>
                    <dd>{{ $sda->nama_pekerjaan }}</dd>
                </div>
                <div class="col-md-6">
                    <dt class="font-weight-bold">NOMOR SPM</dt>
                    <dd>{{ $sda->no_spm }}</dd>
                </div>
                <div class="col-md-6">
                    <dt class="font-weight-bold">TANGGAL SPM</dt>
                    <dd>{{ $sda->tanggal_spm_string }}</dd>
                </div>
                <div class="col-md-6">
                    <dt class="font-weight-bold">NOMOR URUT</dt>
                    <dd>{{ $sda->no_urut }}</dd>
                </div>
                <div class="col-md-6">
                    <dt class="font-weight-bold">JUMLAH UANG</dt>
                    <dd>Rp. {{ number_format($sda->jumlah_uang) }}</dd>
                </div>

                <div class="col-md-6">
                    <dt class="font-weight-bold">FILE</dt>
                    <dd>
                        <button class="btn btn-primary lihat-pdf-btn" data-url="{{ url($sda->url_pdf) }}">
                            FILE
                        </button>
                    </dd>
                </div>
                
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="pdfModal" tabindex="-1" role="dialog" aria-labelledby="pdfModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="pdfModalLabel">Lihat PDF</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <iframe id="pdfFrame" src="" style="width: 100%; height: 500px;" frameborder="0"></iframe>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>
</x-app>
