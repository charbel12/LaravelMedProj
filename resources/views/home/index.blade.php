@extends('layouts.app-master')

@section('content')
<div class="bg-light p-5 rounded">
    @auth
    <h1>You are logged in!</h1>
    <p>Click <a href="file-import-export">here </a> to upload the new excel sheet.</p>
    <button class="btn btn-primary">Check $ rate</button>
    @endauth

    @guest
    <h1>Search for your medicine here</h1>
    <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" type="get" action=" {{url('/search')}} ">
        <input type="search" name="query" class="form-control form-control-dark" placeholder="Search..." aria-label="Search">
        <button type="submit" class="btn btn-warning my-sm-2"> Submit </button>
    </form>
    <div class="container">
        @if(isset($details))
        <h2>Meds</h2>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Price</th>
                </tr>
            </thead>
            <tbody>
                @foreach($medicine as $med)
                <tr>
                    <td>{{$med->brand_name}}</td>
                    <td>{{$med->price}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        @endif
    </div>
    @endguest
</div>
@endsection