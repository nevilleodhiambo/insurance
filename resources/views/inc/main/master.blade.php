<!DOCTYPE html>
<html lang="en">
<head>
   @include('inc/main/header')
</head>
<body>
    @include('inc/main/nav')
    <div class="container-fluid">
        <div class="row">
            @include('inc/main/sidebar')
            @section('content')
                 @show


        </div>
    </div>
    @include('inc/main/footer')    
    @section('footer')
        @show
</body>
</html>