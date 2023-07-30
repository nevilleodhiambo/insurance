@extends('inc/main/master')

@section('content')
<main class="col-md-9 ml-sm-auto col-lg-10 px-md-4 py-4">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Overview</li>
        </ol>
    </nav>
    <p>Id: {{$customer->id}}</p>
    <p>First Name: {{$customer->fname}}</p>
    <p>Last Name: {{$customer->lname}}</p>
    <p>Location: {{$customer->location_id}}</p>
    <p>Email: {{$customer->email}}</p>
    <p>National ID: {{$customer->national}}</p>
    <p>Primary Number: {{$customer->pno}}</p>
    <p>Secondary Numbber: {{$customer->sno}}</p>
    <p>Type of Car: {{$customer->cartype_id}}</p>
    <p>Type of Insurance: {{$customer->top_id}}</p>
    <p>Date of Issuance: {{$customer->date_issued}}</p>
    <p>Expiry Date: {{$customer->date_expire}}</p>
   </main>

@endsection