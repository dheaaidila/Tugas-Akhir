<!DOCTYPE html>
<html lang="en">
<style>
    .alert-danger {
        background-color: red;
        border-color: red;
    }
</style>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{ url('/') }}/dist/img/kemenag.png">
    <title>SI SP2D DPUTR</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ url('/') }}/plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="{{ url('/') }}/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ url('/') }}/dist/css/adminlte.min.css">
</head>

<body class="hold-transition login-page"
    style="background-image: url('{{ url('/') }}/dist/img/bg-3.png');  background-size: cover; background-repeat: no-repeat;">
    <div class="login-box">
        <div class="login-logo">
            <a href="{{ url('/') }}/index2.html"><b></b></a>
        </div>
        <!-- /.login-logo -->

        <div class="card">
            <div class="card-header">{{ __('Login') }}</div>

            <div class="card-body">
                <form method="POST" action="{{ url('login') }}">
                    @csrf
                    <div class="form-group row">
                        <label for="nip" class="col-md-4 col-form-label text-md-right">{{ __('Nip/nup') }}</label>

                        <div class="col-md-6">
                            <input id="nip" type="nip" class="form-control @error('nip') is-invalid @enderror"
                                name="nip" value="{{ old('nip') }}" required autocomplete="nip" autofocus>

                            @error('nip')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="password"
                            class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                        <div class="col-md-6">
                            <input id="password" type="password"
                                class="form-control @error('password') is-invalid @enderror" name="password" required
                                autocomplete="current-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="captcha" class="col-md-4 col-form-label text-md-right">{{ __('Kode') }}</label>
                        <div class="col-md-6">
                            <input id="captcha" type="text"
                                class="form-control @error('captcha') is-invalid @enderror" name="captcha" required
                                autofocus>
                            <div class="crt mt-2 g-3">


                                <span>{!! captcha_img('flat') !!}</span>
                                <button type="button" class="btn btn-success btn-refresh"><i
                                        class="fas fa-sync"></i></button>

                            </div>
                            @error('captcha')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>



                    <div class="form-group row mb-0">
                        <div class="col-md-8 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Login') }}
                            </button>

                            @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                        </div>
                    </div>

                </form>
            </div>
            <!-- /.login-card-body -->
        </div>
    </div>
    <!-- /.login-box -->

    <style>
        .card {
            width: 500px;
        }
    </style>
    <!-- jQuery -->
    <script src="{{ url('/') }}/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ url('/') }}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="{{ url('/') }}/dist/js/adminlte.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.btn-refresh').click(function() {
                $.ajax({
                    type: 'GET',
                    url: '{{ url('refresh-captcha') }}',
                    success: function(data) {
                        $('.crt span').html(data.captcha);
                    }
                });
            });
        });
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script type="text/javascript">
        $('#pdfModal').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget) // Button that triggered the modal
            var pdfUrl = button.data('pdf-url') // Extract info from data-* attributes
            var modal = $(this)
            modal.find('.modal-body iframe').attr('src', pdfUrl)
        })
    </script>
</body>

</html>
