<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Authentication Register &mdash; Arfa</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
        integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w=="
        crossorigin="anonymous" />


    <link rel="stylesheet" href="../vendor/bootstrap/dist/css/bootstrap.min.css">

    <link rel="stylesheet" href="../assets/css/style.css">
    <!-- <link rel="stylesheet" href="../vendor/themify-icons/themify-icons.css"> -->
    <link rel="stylesheet" href="../assets/css/bootstrap-override.css">


</head>

<body>
    @include('sweetalert::alert')

    <section class="container h-100">
        <div class="row justify-content-sm-center h-100 align-items-center">
            <div class="col-xxl-4 col-xl-5 col-lg-6 col-md-7 col-sm-8">
                <div class="card shadow-lg">
                    <div class="card-body p-4">
                        <h1 class="fs-4 text-center fw-bold mb-4">Register</h1>
                        <form method="post" action="/register">
                            @csrf
                            <div class="mb-3">
                                <label class="mb-2 text-muted" for="username">Username</label>
                                <div class="input-group input-group-join mb-3">
                                    <input type="text" placeholder="Masukkan username"
                                        class="form-control
                                    @error('username') is-invalid @enderror"
                                        name="username" id="username" value="{{ old('username') }}" required autofocus>
                                    <span class="input-group-text rounded-end">&nbsp<i
                                            class="fa fa-user"></i>&nbsp</span>
                                    @error('username')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="mb-2 text-muted" for="email">Email address</label>
                                <div class="input-group input-group-join mb-3">
                                    <input id="email" type="email" placeholder="Masukkan email"
                                        class="form-control
                                    @error('email') is-invalid @enderror"
                                        name="email" id="email" value="{{ old('email') }}" required autofocus>
                                    <span class="input-group-text rounded-end">&nbsp<i
                                            class="fa fa-envelope"></i>&nbsp</span>
                                    @error('email')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="mb-3">
                                <div class="mb-2 w-100">
                                    <label class="text-muted" for="password">Password</label>
                                </div>
                                <div class="input-group input-group-join mb-3">
                                    <input type="password" name="password" id="password"
                                        class="form-control
                                    @error('password') is-invalid @enderror"
                                        placeholder="Masukkan password" required>
                                    <span class="input-group-text rounded-end password cursor-pointer">&nbsp<i
                                            class="fa fa-eye"></i>&nbsp</span>
                                    @error('password')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="d-flex align-items-center">

                                <button type="submit" class="btn btn-primary ms-auto">
                                    Register
                                </button>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer py-3 border-0">
                        <div class="text-center">
                            Login sebagai siswa? <a href="/loginsiswa" class="text-dark">Klik disini</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <script src="../assets/js/login.js"></script>
</body>

</html>
