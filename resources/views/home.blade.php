@extends('dashboard')
@section('content')
    <div class="container form-control">
        <h1>Student Information</h1>
   
    <table class="table">
        <thead class="thead-dark">
          <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Roll</th>
            <th>Class</th>
            <th>Section</th>
            <th>Image</th>
            <th>Father</th>
            <th>Mother</th>
            <th>Address</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($students as $home) 
            
            <tr>
           
              <td>{{ $home->id }}</td>
              <td>{{ $home->Name }}</td>
              <td>{{ $home->Roll }}</td>
              <td>{{ $home->Class }}</td>
              <td>{{ $home->Section }}</td>
              <td>  
                  <img src="{{asset('/storage/images')}}/{{ $home->Image }}" style="max-width: 60px" alt="">
              </td>
              <td>{{ $home->details->Father }}</td>
              <td>{{ $home->details->Mother }}</td>
              <td>{{ $home->details->Address }}</td>
            </tr>
            
        
        @endforeach
               
        </tbody>
    </table>
    <a href="{{ url('index1') }}" class="btn btn-info btn-sm">Add info</a>
    
        


    </div>
@endsection
