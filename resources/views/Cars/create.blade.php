@extends('inc/main/master')

@section('content')
<main class="col-md-9 ml-sm-auto col-lg-10 px-md-4 py-4">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Overview</li>
        </ol>
    </nav>
    <form method="post" action="{{route('cars.store')}}">
        @csrf
        <div class="form-group">
          <label for="exampleInputEmail1">Car Name</label>
          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Car Name" name="name" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </main>

@endsection