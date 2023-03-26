<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
</head>
<body>
<div class="container text-center mt-3 p-4 bg-white">
    <h1 class="mb-3">Halaman Admin</h1>
    <div class="row">
        <div class="col-12">
            @component('layout.alert',['class'=>'warning','judul'=>'Peringatan'])
            {{-- @slot('class')
                warning
            @endslot
            @slot('judul')
                Peringatan
            @endslot --}}
            100 data mahasiswa perlu diperbaiki
            @endcomponent

            @component('layout.alert',['class'=>'danger','judul'=>'Awas'])
            {{-- @slot('class')
                danger
            @endslot
            @slot('judul')
                Awas
            @endslot --}}
            Hari ini deadline laporan perjalanan dinas!
            @endcomponent

            @component('layout.alert',['class'=>'success','judul'=>'Kabar Baik'])
            {{-- @slot('class')
                success
            @endslot --}}
                Bulan depan cuti panjang...
            @endcomponent
            {{-- <div class="alert alert-warning alert-dismissible fade show">
                100 data mahasiswa perlu diperbaiki
                <button type="button" class="btn-close" data-bs-dissmiss="alert"></button>
            </div>
            <div class="alert alert-danger alert-dismissible fade show">
                Hari ini deadline laporan perjalanan dinas!
                <button type="button" class="btn-close" data-bs-dissmiss="alert"></button>
            </div> --}}
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5M1Q1ZAGC+nuZB+EYdgRZgiwxhTBTkF7C"
crossorigin="anonymous"></script>
</body>
</html>