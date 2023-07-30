@extends('inc/main/master')

@section('content')
<main class="col-md-9 ml-sm-auto col-lg-10 px-md-4 py-4">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Overview</li>
        </ol>
    </nav>
    <a href="{{route('cars.create')}}" class="btn btn-success">Add Car</a>
    <table class="table" id="usersTable">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Car Name</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            @foreach($cars as $car)
            <th scope="row">{{$loop->iteration}}</th>
            <td>{{$car->name}}</td>
            <td>
                <a href="{{route('cars.edit', $car->id)}}" class="btn btn-primary">Edit</a>
                 <a href="{{route('cars.show', $car->id)}}" class="btn btn-primary">Show</a>
                 <form action="{{route('cars.destroy', $car->id)}}" method="post">
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