@extends('dashboard')
@section('content')
    <div class="container form-control">
        <h1>Student Information</h1>
   
    <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Roll</th>
            <th scope="col">Class</th>
            <th scope="col">Section</th>
            <th scope="col">Image</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($students as $info)
          <tr>
           
            <td>{{ $info->id }}</td>
            <td>{{ $info->Name }}</td>
            <td>{{ $info->Roll }}</td>
            <td>{{ $info->Class }}</td>
            <td>{{ $info->Section }}</td>
            <td>  
                <img src="{{asset('/storage/images')}}/{{ $info->Image }}" style="max-width: 60px" alt="">
            </td>
            
            <td>
                <a href="{{ url('editData1',$info->id) }}" class="btn btn-primary btn-sm ">Edit</a>
                <a href="{{ route('delete1',$info->id) }}" class="btn btn-danger btn-sm ">Delete</a>
            </td>
            
          </tr>
          @endforeach
        </tbody>
    </table>
    <a href="{{ url('index1') }}" class="btn btn-info btn-sm">Add info</a>
    
        


    </div>
@endsection
