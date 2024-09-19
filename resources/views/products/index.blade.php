@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Products</h1>
        <div class="row">
            {{-- @foreach ($products as $product) --}}
                <div class="col-md-4">
                    <div class="card mb-4">
                        <img src="" class="card-img-top" alt="">
                        <div class="card-body">
                            <h5 class="card-title"></h5>
                            <p class="card-text"></p>
                            <p class="card-text"><strong>$</strong></p>
                            <a href="" class="btn btn-primary">View Details</a>
                        </div>
                    </div>
                </div>
           
        {{-- </div>
        {{ $products->links() }}  <!-- Pagination Links -->
    </div> --}}
@endsection
