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
     <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <div id="comment">        
                Review Pengguna
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-auto g-auto">
            <form action="/comment/store" method="post">
                @csrf
                <input type="hidden" name="name" required="required" value="{{ Auth::user()->name }}"><br/>
                <br/>
                review &nbsp; <textarea type="text" name="comments" required="required"></textarea><br/>
                <br/>
                <input type="submit" class="btn btn-success" value="Posting Review">
            </form>
            </div>
            </div>
            </div>
                    <div class="col">
                    <div>
                        @foreach($comments as $c)
                        <div class="card w-100">
                            <div class="card-body">
                            <p class="text-primary">{{ $c->name }}</p>
                            <p class="card-text">{{ $c->comments }}</p>
                            <a href="/comment/edit/{{ $c->id }}" class="btn btn-warning">Edit</a>
                            <a href="/comment/hapus/{{ $c->id }}" class="btn btn-danger">Hapus</a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    </div>
        </main>
@endsection
<script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="dashboard.js"></script>
</body>

</html>