@extends('dashboard')
@section('main')
    <div class="container form-control">
        <h1>More Student Information</h1>
   
    <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">Student ID</th>
            <th scope="col">Father</th>
            <th scope="col">Mother</th>
            <th scope="col">Address</th>
            
          </tr>
        </thead>
        <tbody>
            @foreach ($details as $info)
          <tr>
           
            <td>{{ $info->student_id }}</td>
            <td>{{ $info->Father }}</td>
            <td>{{ $info->Mother }}</td>
            <td>{{ $info->Address }}</td>
           
            
            <td>
                <a href="{{ url('editData2',$info->id) }}" class="btn btn-primary btn-sm ">Edit</a>
                <a href="{{ route('delete2',$info->id) }}" class="btn btn-danger btn-sm ">Delete</a>
            </td>
            
          </tr>
          @endforeach
        </tbody>
    </table>
    <a href="{{ url('indexData') }}" class="btn btn-info btn-sm">Add info</a>
    
        


    </div>
@endsection
