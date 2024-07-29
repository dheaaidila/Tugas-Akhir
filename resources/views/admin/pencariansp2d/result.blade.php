<x-app>
    <div class="card-header py-2">
        <h5 class="m-0 font-weight-bold text-dark" style="text-align:center; font-size: 25px">HASIL PENCARIAN
        </h5>
    </div>
    <br>
    <div class="card">
        <div class="card-body">
            @if ($results->isEmpty())
                <p>Tidak ada hasil yang ditemukan.</p>
            @else
                <table id="example1" class="table table-bordered table-striped">
                    <thead class="bg-dark">
                        <tr>
                            <th style="color: dark;" class="text-center">NOMOR SPM</th>
                            <th style="color: dark;" class="text-center">TANGGAL SPM SPM</th>
                            <th style="color: dark;" class="text-center">NAMA CV</th>
                            <th style="color: dark;" class="text-center">NAMA PEKERJAAN</th>
                            <th style="color: dark;" class="text-center">NOMOR URUT</th>
                            <th style="color: dark;" class="text-center">JUMLAH UANG</th>
                            <th style="color: dark;" class="text-center">AKSI</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($results as $result)
                            <tr>
                                <td class="text-center">{{ $result->no_spm }}</td>
                                <td class="text-center">{{ $result->tgl_spm }}</td>
                                <td class="text-center">{{ $result->nama_cv }}</td>
                                <td class="text-center">{{ $result->nama_pekerjaan }}</td>
                                <td class="text-center">{{ $result->no_urut }}</td>
                                <td class="text-center">Rp. {{ number_format($result->jumlah_uang) }}</td>
                                <td class="text-center">
                                    <button class="btn btn-primary lihat-pdf-btn"
                                        data-url="{{ url($result->url_pdf) }}">
                                        FILE
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif
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
