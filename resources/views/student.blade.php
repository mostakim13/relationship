<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

    <title>Document</title>
</head>
<body>

    <div class="container form-control">
        <h1>Student Information</h1>
    <form action="{{ route('storeData1') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
          <label for="name" class="form-label">Name</label>
          <input type="text" class="form-control" id="name1" name="name" placeholder="Enter name">
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">Roll</label>
            <input type="text" class="form-control" id="roll1" name="roll" placeholder="Enter roll">
          </div>
          <div class="mb-3">
            <label for="name" class="form-label">Class</label>
            <input type="text" class="form-control" id="class1" name="class" placeholder="Enter class">
          </div>
          <div class="mb-3">
            <label for="name" class="form-label">Section</label>
            <input type="text" class="form-control" id="section1" name="section" placeholder="Enter section">
          </div>
          <div class="mb-3">
            <label for="name" class="form-label">Image</label>
            <input type="file" class="form-control" id="image1" name="image">
          </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
  
        <a href="{{ url('morePage') }}" type="submit" class="btn btn-primary">Add more</a>
    </form>
    </div>

        <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="{{ asset('assets/js/popper.min.js') }}" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="{{ asset('assets/js/bootstrap.min.js') }}" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    
</body>
</html>