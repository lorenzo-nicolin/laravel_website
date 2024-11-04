@extends('Templates.main') 

@section('content')
<div class="container">
    <h1>Welcome to Our Website!</h1>
    <p>This is the About page.</p>

    <!-- Example of a card component -->
    <div class="card" style="width: 18rem;">
        <img src="https://via.placeholder.com/100" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
    </div>

    <!-- Example of a button link to another page -->
</div>

@endsection