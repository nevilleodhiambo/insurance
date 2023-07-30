

{{-- <script>
  $(document).ready(function(){
   var baseurl = "http://127.0.0.1:8000/customers";
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.opne("GET", baseurl + "/all", true);
   xmlhttp.onreadystatechange = function(){
     if(xmlhttp.readyState==4 $$xmlhttp.status == 200){
       var customers = JSON.parse(xmlhttp.responseText);
       $("#example").DataTable({
         data:customers,
         "columns" : [
           {"data" : "{{$fname}}"},
           {"data" : "{{$lname}}"},
           {"data" : "{{email}}"},
           {"data" : "{{pno}}"},
           {"data" : "{{sno}}"},
           {"data" : "{{national}}"},
           {"data" : "{{car?->name}}"},
           {"data" : "{{name}}"},
           {"data" : "{{no_plate}}"},
           {"data" : "{{date_issued}}"},
           {"data" : "{{date_expire}}"},
         ]
       })
     }
   }
   xmlhttp.send();
  });
</script> --}}

@extends('inc/main/master')

@section('content')
<main class="col-md-9 ml-sm-auto col-lg-10 px-md-4 py-4">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Overview</li>
        </ol>
    </nav>

    <a href="{{route('customers.create')}}" class="btn btn-success">Add Customers</a>

    <table class="table" id="usersTable">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Email</th>
      <th scope="col">P Number</th>
      <th scope="col">S Number</th>
      <th scope="col">National ID</th>
      <th scope="col">Car</th>
      <th scope="col">Insurance</th>
      <th scope="col">Location</th>
      <th scope="col">Number Plate</th>
      <th scope="col">Date Issued</th>
      <th scope="col">Expiry Date</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <tr>
        @foreach ($customers as $customer)
        <th scope="row">{{$loop->iteration}}</th>
        <td>{{$customer->fname}}</td>
        <td>{{$customer->lname}}</td>
        <td>{{$customer->email}}</td>
        <td>{{$customer->pno}}</td>
        <td>{{$customer->sno}}</td>
        <td>{{$customer->national}}</td>
        <td>{{$customer->car?->name}}</td>
        <td>{{$customer->insurance?->name}}</td>
        <td>{{$customer->location?->name}}</td>
        <td>{{$customer->no_plate}}</td>
        <td>{{$customer->date_issued}}</td>
        <td>{{$customer->date_expire}}</td>
        <td>
            <a href="{{route('customers.edit', $customer->id)}}" class="btn btn-primary">Edit</a>
            <a href="{{route('customers.show', $customer->id )}}" class="btn btn-primary">Show</a>
            <form action="{{route('customers.destroy', $customer->id)}}" method="post">
              @csrf
              @method('delete')
              <input type="submit" value="Delete" class="btn btn-danger">
            </form>
        </td>
      </tr>
            
        @endforeach
     
   
  </tbody>
</table>


   </main>


@endsection

@section('footer')
    <script>
      $(document)
      .ready(function () {
        $('#usersTable')
          .DataTable();
      });
    </script>

  @endsection