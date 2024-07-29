<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>ADMIN</title>
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{ url('/') }}/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ url('/') }}/dist/css/adminlte.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ url('/') }}/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="{{ url('/') }}/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="{{ url('/') }}/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <!-- summernote -->
    <link rel="stylesheet" href="{{ url('/') }}/plugins/summernote/summernote-bs4.min.css">
    <!-- Select2 -->
    <link rel="stylesheet" href="{{ url('/') }}/plugins/select2/css/select2.min.css">
    <link rel="stylesheet" href="{{ url('/') }}/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <!-- jQuery, Popper.js, dan Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <!-- Header -->
        <x-template.header />
        <!-- /.header -->

        <!-- Main Sidebar Container -->
        <x-template.sidebar />
        <!-- end Sidebar -->

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Main content -->
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12 mt-4">
                            <x-template.utils.notif />
                        </div>
                    </div>
                    {{ $slot }}
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
            <div class="p-3">
                <h5>Title</h5>
                <p>Sidebar content</p>
            </div>
        </aside>
        <!-- /.control-sidebar -->

        <!-- Main Footer -->
        <x-template.footer />
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    <script src="{{ url('/') }}/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ url('/') }}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="{{ url('/') }}/dist/js/adminlte.min.js"></script>
    <!-- Select2 -->
    <script src="{{ url('/') }}/plugins/select2/js/select2.full.min.js"></script>
    <!-- Summernote -->
    <script src="{{ url('/') }}/plugins/summernote/summernote-bs4.min.js"></script>
    <!-- DataTables  & Plugins -->
    <script src="{{ url('/') }}/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="{{ url('/') }}/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="{{ url('/') }}/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="{{ url('/') }}/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="{{ url('/') }}/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="{{ url('/') }}/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="{{ url('/') }}/plugins/jszip/jszip.min.js"></script>
    <script src="{{ url('/') }}/plugins/pdfmake/pdfmake.min.js"></script>
    <script src="{{ url('/') }}/plugins/pdfmake/vfs_fonts.js"></script>
    <script src="{{ url('/') }}/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="{{ url('/') }}/plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="{{ url('/') }}/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
    <script>
        $(function() {
            // Summernote
            $('#summernote').summernote({
                fontNames: ['Arial', 'Times New Roman', 'Arial Black'],
                styleTags: ['p', 'h1', 'h2', 'h3', 'h4', 'h5', 'h6'],
                blockquoteBreakingLevel: 2,
                blockquoteBreakingLevel: 2,
                styleWithSpan: false,
                toolbar: [
                    ['style', ['style']],
                    ['font', ['bold', 'italic', 'underline', 'clear']],
                    ['fontsize', ['fontsize']],
                    ['fontname', ['fontname']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['height', ['height']],
                    ['insert', ['link', 'picture', 'video', 'table', 'hr']],
                    ['view', ['fullscreen', 'codeview']],
                ]
            });

            // Inisialisasi CodeMirror
            CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
                mode: "htmlmixed",
                theme: "monokai"
            });
        })
    </script>
    <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": false,
                "ordering": true,
                "autoWidth": false,
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            $("#example4").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "order": [
                    [3, 'desc']
                ], // Urutkan berdasarkan kolom keempat (jumlah terjual) secara descending
            }).buttons().container().appendTo('#example4_wrapper .col-md-6:eq(0)');
            $("#example3").DataTable({
                "responsive": true,
                "lengthChange": false,
                "ordering": true,
                "autoWidth": false,
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            $("#example5").DataTable({
                "responsive": true,
                "lengthChange": false,
                "ordering": true,
                "autoWidth": false,
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            $("#example6").DataTable({
                "responsive": true,
                "lengthChange": false,
                "ordering": true,
                "autoWidth": false,
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        });
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.lihat-pdf-btn').click(function() {
                var pdfUrl = $(this).data('url');
                $('#pdfFrame').attr('src', pdfUrl);
                $('#pdfModal').modal('show');
            });
        });
    </script>
</body>

</html>
