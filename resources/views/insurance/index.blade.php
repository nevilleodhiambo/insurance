@extends('inc/main/master')

@section('content')
<main class="col-md-9 ml-sm-auto col-lg-10 px-md-4 py-4">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Overview</li>
        </ol>
    </nav>
    <a href="{{route('insurance.create')}}"  class="btn btn-success">Add Insurance</a>
    <table class="table" id="usersTable">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Insurance Name</th>
            <th scope="col">Insurance Description</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            @foreach ($insurances as $insurance)
            <th scope="row">{{$loop->iteration}}</th>
            <td>{{$insurance->name}}</td>
            <td>{{$insurance->description}}</td>
            <td>
                <a href="{{route('insurance.edit', $insurance->id)}}" class="btn btn-primary">Edit</a>
                <a href="{{route('insurance.show', $insurance->id)}}" class="btn btn-primary">Show</a>
                <form method="post" action="{{route('insurance.destroy', $insurance->id)}}">
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
    .ready(function(){
      $('#usersTable')
      .DataTable()
    });
  </script>
@endsection