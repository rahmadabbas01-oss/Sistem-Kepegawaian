<!DOCTYPE html>

<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


<title>Edit Divisi</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
    body {
        background: #f5f7fb;
        min-height: 100vh;
    }

    .navbar {
        background: #0d6efd;
        overflow: hidden;
    }

    .navbar-brand {
        color: white !important;
        font-weight: bold;
    }

    .judul-bergerak {
        display: inline-block;
        white-space: nowrap;
        font-size: 30px;
        font-weight: bold;
        letter-spacing: 8px;
        animation: bergerak 20s linear infinite;
    }

    @keyframes bergerak {
        0% {
            transform: translateX(-100%);
        }

        100% {
            transform: translateX(100vw);
        }
    }

    .container-form {
        max-width: 600px;
        margin: 60px auto;
    }

    .card {
        border: none;
        border-radius: 18px;
        box-shadow: 0 5px 25px rgba(0, 0, 0, 0.08);
    }

    .card-header {
        background: #0d6efd;
        color: #f5f7fb;
        border-radius: 18px 18px 0 0 !important;
        padding: 20px;
    }

    .form-label {
        font-weight: 600;
    }

    .form-control {
        border-radius: 10px;
        padding: 12px;
    }

    .btn {
        border-radius: 8px;
        padding: 10px 20px;
    }
</style>


</head>

<body>


<!-- Navbar -->
<nav class="navbar">
    <div class="container-fluid justify-content-center">
        <span class="navbar-brand judul-bergerak">
            SISTEM KEPEGAWAIAN
        </span>
    </div>
</nav>

<!-- Form Edit Divisi -->
<div class="container-form">

    <div class="card">

        <div class="card-header">
            <h4 class="mb-1">Edit Divisi</h4>

            <small>
                Silakan ubah data divisi
            </small>
        </div>

        <div class="card-body p-4">

            <form action="{{ route('divisi.update', $divisi->id) }}"
                method="POST">

                @csrf
                @method('PUT')

                <!-- Kode Divisi -->
                <div class="mb-3">

                    <label class="form-label">
                        Kode Divisi
                    </label>

                    <input type="text"
                        name="kode"
                        class="form-control"
                        value="{{ old('kode', $divisi->kode) }}"
                        placeholder="Contoh: D01">

                    @error('kode')
                        <div class="text-danger mt-1">
                            {{ $message }}
                        </div>
                    @enderror

                </div>

                <!-- Nama Divisi -->
                <div class="mb-4">

                    <label class="form-label">
                        Nama Divisi
                    </label>

                    <input type="text"
                        name="nama"
                        class="form-control"
                        value="{{ old('nama', $divisi->nama) }}"
                        placeholder="Contoh: IT">

                    @error('nama')
                        <div class="text-danger mt-1">
                            {{ $message }}
                        </div>
                    @enderror

                </div>

                <!-- Tombol -->
                <div class="d-flex justify-content-between">

                    <a href="{{ route('divisi.index') }}"
                        class="btn btn-secondary">
                        Kembali
                    </a>

                    <button type="submit"
                        class="btn btn-warning">
                        Update
                    </button>

                </div>

            </form>

        </div>

    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>


</body>

</html>
