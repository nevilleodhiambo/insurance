@extends('inc/main/master')

@section('content')

<main class="col-md-9 ml-sm-auto col-lg-10 px-md-4 py-4">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Overview</li>
        </ol>
    </nav>
    <form method="post" action="{{route('customers.update', $customer->id)}}">
        @csrf
        @method('put')
        <div class="form-row">
          <div class="form-group col-md-14">
            <label for="inputEmail4">First Name</label>
            <input type="text" class="form-control" id="inputEmail4" placeholder="Enter First Name"value="{{$customer->fname}}" name="fname">
          </div>
          <div class="form-group col-md-14">
            <label for="inputPassword4">Last Name</label>
            <input type="text" class="form-control" id="inputPassword4" placeholder="Enter Last Name" value="{{$customer->lname}}" name="lname">
          </div>
        </div>

        <div class="form-group">
          <label for="inputAddress2">Email</label>
          <input type="email" class="form-control" id="inputAddress2" placeholder="Enter Email" value="{{$customer->email}}" name="email">
        </div>

        <div class="form-group">
            <label for="inputAddress2">Primary Number</label>
            <input type="text" class="form-control" id="inputAddress2" value="{{$customer->pno}}" placeholder="Enter Primary Phone Number" name="pno">
          </div>

          <div class="form-group">
            <label for="inputAddress2">Secondary Number</label>
            <input type="text" class="form-control" id="inputAddress2" placeholder="Enter Secondary Phone Number" value="{{$customer->sno}}" name="sno">
          </div>

        <div class="form-row">
          <div class="form-group col-md-14">
            <label for="inputCity">National ID</label>
            <input type="text" class="form-control" name="national" value="{{$customer->national}}">
          </div>

          <div class="form-group col-md-4">
            <label for="inputState">Car Type</label>
            <select id="inputState" class="form-control" name="cartype_id" value="{{$customer->cartype_id}}">
              <option selected>Choose Car</option>

              @foreach ($cars as $car)
              <option value="{{$car->id}}">{{$car->name}}</option>                  
              @endforeach

            </select>
          </div>

          <div class="form-group col-md-4">
            <label for="inputState">Insurance Type</label>
            <select id="inputState" class="form-control" name="top_id" value="{{$customer->top_id}}">
              <option selected>Choose Insurance</option>

              @foreach ($insurances as $insurance)
              <option value="{{$insurance->id}}">{{$insurance->name}}</option>                  
              @endforeach
            </select>
          </div>

          <div class="form-group col-md-4">
            <label for="inputState">Location</label>
            <select id="inputState" class="form-control" name="location_id" value="{{$customer->location_id}}">
              <option selected>Choose Location</option>

              @foreach ($locations as $location)
              <option value="{{$location->id}}">{{$location->name}}</option>                  
              @endforeach
            </select>

          </div>

          <div class="form-group">
            <label for="inputAddress2">Number Plate</label>
            <input type="text" class="form-control" id="inputAddress2" value="{{$customer->no_plate}}" placeholder="Enter Number Plate" name="no_plate">
          </div>

          <div class="form-group">
            <label for="inputAddress2">Date of Issuance</label>
            <input type="date" class="form-control" id="inputAddress2" value="{{$customer->date_issued}}" placeholder="Enter Date of Issuance"  name="date_issued">
          </div>

          <div class="form-group">
            <label for="inputAddress2">Date of Expiry</label>
            <input type="date" class="form-control" id="inputAddress2" placeholder="Enter Date of Expiry" name="date_expire" value="{{$customer->date_expire}}">
          </div>
         
      
        <button type="submit" class="btn btn-primary">Update</button>
      </form>
     
  
</main>

  @endsection