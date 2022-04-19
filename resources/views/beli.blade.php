<!DOCTYPE html>

<head>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/dashboard/">
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="dashboard.css" rel="stylesheet">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/jumbotron/">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
    .bd-placeholder-img {
    font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
    }

            @media (min-width: 768px) {
                .bd-placeholder-img-lg {
                font-size: 3.5rem;
                }
            }
            </style>
</head>

<body>
@extends('layouts.navigator')
@section('content')
    <div class="card-body">
        <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
            <a class="navbar-brand col-md-3 col-lg-2 me-auto px-3" href="/">Form Pemesanan</a>
            <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </header>

            <form action="/beli/store" method="post">
                {{ csrf_field() }}
                <label>Nama</label> <input class="form-control" type="text" name="name" required="required" value="{{ Auth::user()->name }}"> <br/>
                <label>Pesanan</label>
                <select class="form-control" name="pesanan" required="required" class="custom-select" id="pesanan">
                    <option value="Weekday - Pengunjung Nusantara">Weekday - Pengunjung Nusantara</option>
                    <option value="Weekday - Pengunjung Mancanegara">Weekday - Pengunjung Mancanegara</option>
                    <option value="Weekday - Rombongan Pelajar">Weekday - Rombongan Pelajar</option>
                    <option value="Weekday - Kendaraan Roda 2">Weekday - Kendaraan Roda 2</option>
                    <option value="Weekday - Kendaraan Roda 4">Weekday - Kendaraan Roda 4</option>
                    <option value="Weekday - Kendaraan Roda 6">Weekday - Kendaraan Roda 6</option>
                    <option value="Weekday - Sepeda">Weekday - Sepeda</option>
                    <option value="Weekday - Terapi Air Panas Dewasa">Weekday - Terapi Air Panas Dewasa</option>
                    <option value="Weekday - Terapi Air Panas Anak">Weekday - Terapi Air Panas Anak</option>
                    <option value="Weekend - Pengunjung Nusantara">Weekend - Pengunjung Nusantara</option>
                    <option value="Weekend - Pengunjung Mancanegara">Weekend - Pengunjung Mancanegara</option>
                    <option value="Weekend - Rombongan Pelajar">Weekend - Rombongan Pelajar</option>
                    <option value="Weekend - Kendaraan Roda 2">Weekend - Kendaraan Roda 2</option>
                    <option value="Weekend - Kendaraan Roda 4">Weekend - Kendaraan Roda 4</option>
                    <option value="Weekend - Kendaraan Roda 6">Weekend - Kendaraan Roda 6</option>
                    <option value="Weekend - Sepeda">Weekend - Sepeda</option>
                    <option value="Weekend - Terapi Air Panas Dewasa">Weekend - Terapi Air Panas Dewasa</option>
                    <option value="Weekend - Terapi Air Panas Anak">Weekend - Terapi Air Panas Anak</option>
                    <option value="Camping">Camping</option>
                    <option value="Camping Rombongan Pelajar">Camping Rombongan Pelajar</option>
                    <option value="Camping Pengunjung Mancanegara">Camping Pengunjung Mancanegara</option>
                    <option value="Shooting Individu/Company">Shooting Individu/Company</option>
                    <option value="Shooting Komersil Satu Hari">Shooting Komersil Satu Hari</option>
                    <option value="Shooting Komersil Kurang dari Satu Hari">Shooting Komersil Kurang dari Satu Hari</option>
                    <option value="Foto Prewedding">Foto Prewedding</option>
                    <option value="Umbul-umbul">Umbul-umbul</option>
                    <option value="Jasa Stand">Jasa Stand</option>
                </select>
                <br/>
                <label>Jumlah</label>
                <input type="number" name="jumlah" required="required" value="{{ session('jumlah') }}"> <br/>
                <label>Hari</label>
                <input type="date" name="hari" step="1"> <br/>
                <input type="submit" value="Pesan">
            </form>
    </div>
@endsection
<script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="dashboard.js"></script>
</body>

</html>