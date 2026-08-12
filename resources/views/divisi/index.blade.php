<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Data Divisi</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: #f5f7fb;
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

        .container {
            margin-top: 40px;
        }

        .card {
            border: none;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
        }

        .card-header {
            background: white;
            border-bottom: 1px solid #eee;
            padding: 20px;
        }

        .table {
            margin-bottom: 0;
        }

        .table thead {
            background: #0d6efd;
            color: white;
        }

        .btn {
            border-radius: 8px;
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

    <!-- Isi halaman -->
    <div class="container">

        <!-- Pesan berhasil -->
        @if(session('success'))
    <div id="success-alert"
        class="alert alert-success alert-dismissible fade show">
        
        {{ session('success') }}

        <button type="button"
            class="btn-close"
            data-bs-dismiss="alert">
        </button>
    </div>
        @endif

        <!-- Card Data Divisi -->
        <div class="card">

            <!-- Header Card -->
            <div class="card-header d-flex justify-content-between align-items-center">

                <div>
                    <h4 class="mb-1">Data Divisi</h4>

                    <small class="text-muted">
                        Daftar divisi perusahaan
                    </small>
                </div>

                <a href="{{ route('divisi.create') }}"
                    class="btn btn-primary">
                    + Tambah Divisi
                </a>

            </div>

            <!-- Isi Card -->
            <div class="card-body">

                <div class="table-responsive">

                    <table class="table table-bordered table-hover align-middle">

                        <thead>
                            <tr>
                                <th width="70">No</th>
                                <th>Kode</th>
                                <th>Nama Divisi</th>
                                <th width="180">Aksi</th>
                            </tr>
                        </thead>

                        <tbody>

                            @forelse($divisi as $d)

                                <tr>

                                    <td>
                                        {{ $loop->iteration }}
                                    </td>

                                    <td>
                                        <span class="badge bg-primary">
                                            {{ $d->kode }}
                                        </span>
                                    </td>

                                    <td>
                                        {{ $d->nama }}
                                    </td>

                                    <td>

                                        <a href="{{ route('divisi.edit', $d->id) }}"
                                            class="btn btn-warning btn-sm">
                                            Edit
                                        </a>

                                        <form action="{{ route('divisi.destroy', $d->id) }}"
                                            method="POST"
                                            class="d-inline">

                                            @csrf
                                            @method('DELETE')

                                            <button type="submit"
                                                class="btn btn-danger btn-sm"
                                                onclick="return confirm('Yakin hapus data?')">
                                                Hapus
                                            </button>

                                        </form>

                                    </td>

                                </tr>

                            @empty

                                <tr>
                                    <td colspan="4"
                                        class="text-center text-muted py-4">
                                        Belum ada data divisi.
                                    </td>
                                </tr>

                            @endforelse

                        </tbody>

                    </table>

                </div>

            </div>

        </div>

    </div>

   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

<script>
    setTimeout(function () {
        let alert = document.getElementById('success-alert');

        if (alert) {
            let bsAlert = bootstrap.Alert.getOrCreateInstance(alert);
            bsAlert.close();
        }
    }, 3000);
</script>

</body>

</body>

</html>