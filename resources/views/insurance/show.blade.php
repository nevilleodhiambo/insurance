@extends('inc/main/master')

@section('content')
<main class="col-md-9 ml-sm-auto col-lg-10 px-md-4 py-4">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Overview</li>
        </ol>
    </nav>
    <p>Id:{{$insurance->id}}</p>
    <p>Name:{{$insurance->name}}</p>
    <p>description:{{$insurance->description}}</p>
    </main>

@endsection