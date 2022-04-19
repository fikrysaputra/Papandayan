<!DOCTYPE html>

<head>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/dashboard/">
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="dashboard.css" rel="stylesheet">
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
        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <head>DAFTAR HARGA</head>
                <div id="pesantiket">  
                <table class="table table-bordered">
                    <thead class="thead-dark">
                        <tr>
                        <th scope="col">No</th>
                        <th scope="col">Tipe</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Beli</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <td>1</td>
                        <td>Weekday</td>
                        <td>Pengunjung Nusantara</td>
                        <td>Rp. 20.000/orang</td>
                        <td><a href="/beli" class="btn btn-primary"><i class="fa fa-shopping-bag">&nbsp;&nbsp;&nbsp;&nbsp;BELI</i></a></td>
                        </tr>

                        <tr>
                        <td>2</td>
                        <td>Weekday</td>
                        <td>Pengunjung Mancanegara</td>
                        <td>Rp. 200.000/orang</td>
                        <td><a href="/beli" class="btn btn-primary"><i class="fa fa-shopping-bag">&nbsp;&nbsp;&nbsp;&nbsp;BELI</i></a></td>
                        </tr>

                        <tr>
                        <td>3</td>
                        <td>Weekday</td>
                        <td>Rombongan Pelajar</td>
                        <td>Rp. 18.000/orang</td>
                        <td><a href="/beli" class="btn btn-primary"><i class="fa fa-shopping-bag">&nbsp;&nbsp;&nbsp;&nbsp;BELI</i></a></td>
                        </tr>

                        <tr>
                        <td>4</td>
                        <td>Weekday</td>
                        <td>Kendaraan Roda 2</td>
                        <td>Rp. 12.000</td>
                        <td><a href="/beli" class="btn btn-primary"><i class="fa fa-shopping-bag">&nbsp;&nbsp;&nbsp;&nbsp;BELI</i></a></td>
                        </tr>

                        <tr>
                        <td>5</td>
                        <td>Weekday</td>
                        <td>Kendaraan Roda 4</td>
                        <td>Rp. 25.000</td>
                        <td><a href="/beli" class="btn btn-primary"><i class="fa fa-shopping-bag">&nbsp;&nbsp;&nbsp;&nbsp;BELI</i></a></td>
                        </tr>

                        <tr>
                        <td>6</td>
                        <td>Weekday</td>
                        <td>Kendaraan Roda 6</td>
                        <td>Rp. 110.000</td>
                        <td><a href="/beli" class="btn btn-primary"><i class="fa fa-shopping-bag">&nbsp;&nbsp;&nbsp;&nbsp;BELI</i></a></td>
                        </tr>

                        <tr>
                        <td>7</td>
                        <td>Weekday</td>
                        <td>Sepeda</td>
                        <td>Rp. 7000</td>
                        <td><a href="/beli" class="btn btn-primary"><i class="fa fa-shopping-bag">&nbsp;&nbsp;&nbsp;&nbsp;BELI</i></a></td>
                        </tr>

                        <tr>
                        <td>8</td>
                        <td>Weekend</td>
                        <td>Pengunjung Nusantara</td>
                        <td>Rp. 30.000/orang</td>
                        <td><a href="/beli" class="btn btn-primary"><i class="fa fa-shopping-bag">&nbsp;&nbsp;&nbsp;&nbsp;BELI</i></a></td>
                        </tr>

                        <tr>
                        <td>9</td>
                        <td>Weekend</td>
                        <td>Pengunjung Mancanegara</td>
                        <td>Rp. 300.000/orang</td>
                        <td><a href="/beli" class="btn btn-primary"><i class="fa fa-shopping-bag">&nbsp;&nbsp;&nbsp;&nbsp;BELI</i></a></td>
                        </tr>

                        <tr>
                        <td>10</td>
                        <td>Weekend</td>
                        <td>Rombongan Pelajar</td>
                        <td>Rp. 20.000/orang</td>
                        <td><a href="/beli" class="btn btn-primary"><i class="fa fa-shopping-bag">&nbsp;&nbsp;&nbsp;&nbsp;BELI</i></a></td>
                        </tr>

                        <tr>
                        <td>11</td>
                        <td>Weekend</td>
                        <td>Kendaraan Roda 2</td>
                        <td>Rp. 17.000</td>
                        <td><a href="/beli" class="btn btn-primary"><i class="fa fa-shopping-bag">&nbsp;&nbsp;&nbsp;&nbsp;BELI</i></a></td>
                        </tr>

                        <tr>
                        <td>12</td>
                        <td>Weekend</td>
                        <td>Kendaraan Roda 4</td>
                        <td>Rp. 35.000</td>
                        <td><a href="/beli" class="btn btn-primary"><i class="fa fa-shopping-bag">&nbsp;&nbsp;&nbsp;&nbsp;BELI</i></a></td>
                        </tr>

                        <tr>
                        <td>13</td>
                        <td>Weekend</td>
                        <td>Kendaraan Roda 6</td>
                        <td>Rp. 150.000</td>
                        <td><a href="/beli" class="btn btn-primary"><i class="fa fa-shopping-bag">&nbsp;&nbsp;&nbsp;&nbsp;BELI</i></a></td>
                        </tr>

                        <tr>
                        <td>14</td>
                        <td>Weekend</td>
                        <td>Sepeda</td>
                        <td>Rp. 10000</td>
                        <td><a href="/beli" class="btn btn-primary"><i class="fa fa-shopping-bag">&nbsp;&nbsp;&nbsp;&nbsp;BELI</i></a></td>
                        </tr>

                        <tr>
                        <td>15</td>
                        <td>Lainnya</td>
                        <td>Camping</td>
                        <td>Rp. 35.000/orang</td>
                        <td><a href="/beli" class="btn btn-primary"><i class="fa fa-shopping-bag">&nbsp;&nbsp;&nbsp;&nbsp;BELI</i></a></td>
                        </tr>

                        <tr>
                        <td>16</td>
                        <td>Lainnya</td>
                        <td>Camping Rombongan Pelajar</td>
                        <td>Rp. 23.000/orang</td>
                        <td><a href="/beli" class="btn btn-primary"><i class="fa fa-shopping-bag">&nbsp;&nbsp;&nbsp;&nbsp;BELI</i></a></td>
                        </tr>

                        <tr>
                        <td>17</td>
                        <td>Lainnya</td>
                        <td>Camping Pengunjung Mancanegara</td>
                        <td>Rp. 105.000/orang</td>
                        <td><a href="/beli" class="btn btn-primary"><i class="fa fa-shopping-bag">&nbsp;&nbsp;&nbsp;&nbsp;BELI</i></a></td>
                        </tr>

                        <tr>
                        <td>18</td>
                        <td>Weekday</td>
                        <td>Terapi Air Panas Dewasa</td>
                        <td>Rp. 20.000/orang</td>
                        <td><a href="/beli" class="btn btn-primary"><i class="fa fa-shopping-bag">&nbsp;&nbsp;&nbsp;&nbsp;BELI</i></a></td>
                        </tr>

                        <tr>
                        <td>19</td>
                        <td>Weekend</td>
                        <td>Terapi Air Panas Dewasa</td>
                        <td>Rp. 25.000/orang</td>
                        <td><a href="/beli" class="btn btn-primary"><i class="fa fa-shopping-bag">&nbsp;&nbsp;&nbsp;&nbsp;BELI</i></a></td>
                        </tr>

                        <tr>
                        <td>20</td>
                        <td>Weekday</td>
                        <td>Terapi Air Panas Anak</td>
                        <td>Rp. 10.000/orang</td>
                        <td><a href="/beli" class="btn btn-primary"><i class="fa fa-shopping-bag">&nbsp;&nbsp;&nbsp;&nbsp;BELI</i></a></td>
                        </tr>

                        <tr>
                        <td>21</td>
                        <td>Weekend</td>
                        <td>Terapi Air Panas Anak</td>
                        <td>Rp. 15.000/orang</td>
                        <td><a href="/beli" class="btn btn-primary"><i class="fa fa-shopping-bag">&nbsp;&nbsp;&nbsp;&nbsp;BELI</i></a></td>
                        </tr>

                        <tr>
                        <td>22</td>
                        <td>Lainnya</td>
                        <td>Shooting Individu/Company</td>
                        <td>Rp. 800.000</td>
                        <td><a href="/beli" class="btn btn-primary"><i class="fa fa-shopping-bag">&nbsp;&nbsp;&nbsp;&nbsp;BELI</i></a></td>
                        </tr>

                        <tr>
                        <td>23</td>
                        <td>Lainnya</td>
                        <td>Shooting Komersil</td>
                        <td>Rp. 2000.000/hari</td>
                        <td><a href="/beli" class="btn btn-primary"><i class="fa fa-shopping-bag">&nbsp;&nbsp;&nbsp;&nbsp;BELI</i></a></td>
                        </tr>

                        <tr>
                        <td>24</td>
                        <td>Lainnya</td>
                        <td>Shooting Komersil</td>
                        <td>Rp. 1.800.000 kurang dari satu hari</td>
                        <td><a href="/beli" class="btn btn-primary"><i class="fa fa-shopping-bag">&nbsp;&nbsp;&nbsp;&nbsp;BELI</i></a></td>
                        </tr>

                        <tr>
                        <td>25</td>
                        <td>Lainnya</td>
                        <td>Foto Prewedding</td>
                        <td>Rp. 500.000</td>
                        <td><a href="/beli" class="btn btn-primary"><i class="fa fa-shopping-bag">&nbsp;&nbsp;&nbsp;&nbsp;BELI</i></a></td>
                        </tr>

                        <tr>
                        <td>26</td>
                        <td>Lainnya</td>
                        <td>Umbul-Umbul</td>
                        <td>Rp. 30.000/tiang</td>
                        <td><a href="/beli" class="btn btn-primary"><i class="fa fa-shopping-bag">&nbsp;&nbsp;&nbsp;&nbsp;BELI</i></a></td>
                        </tr>

                        <tr>
                        <td>27</td>
                        <td>Lainnya</td>
                        <td>Jasa Stand (Max. 4x4m)</td>
                        <td>Rp. 500.000</td>
                        <td><a href="/beli" class="btn btn-primary"><i class="fa fa-shopping-bag">&nbsp;&nbsp;&nbsp;&nbsp;BELI</i></a></td>
                        </tr>

                        <tr>
                        <td>28</td>
                        <td>Lainnya</td>
                        <td>Toilet</td>
                        <td>Rp. 2000</td>
                        <td>Tidak Perlu Tiket</td>
                        </tr>
                    </tbody>
                    </table>
                </div>
        </main>
        </div>
    </div>
@endsection
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
<script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="dashboard.js"></script>
</body>

</html>