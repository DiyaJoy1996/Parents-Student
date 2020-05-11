@extends('layouts.app')


@section('content')
   <div class="container">
   <div class="row">
        <div class="col-lg-6 margin-tb">
            <div class="pull-left">
                <h2>School Information</h2>
            </div>
           
        </div>
        <div class="col-lg-6 margin-tb">
        <div class="text-right">
                <a class="btn btn-success" href="{{ route('school.create') }}"> Add School</a>
            </div>
        </div>
    </div>


    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif


    <table class="table table-bordered">
        <tr>
           
            <th>School Name</th>
          
            <th>Phone Number</th>
           
            <th>Address</th>
            <th>Post Code</th>
            <th>Area</th>
           
            <th width="120px">Action
           
            </th>
        </tr>
	    @foreach ($schools as $school)
	    <tr>
	       
	        <td>{{ $school->schoolName }}</td>
            <td>{{ $school->phoneNumber }}</td>
            <td>{{ $school->address }}</td>
            <td>{{ $school->postCode }}</td>
            <td>{{ $school->area }}</td>
          
	       
	        <td>
                <form action="{{ route('school.destroy',$school->id) }}" method="POST">
                   
                    <a class="btn btn-primary" href="{{ route('school.edit',$school->id) }}"><i class="fa fa-pencil"></i></a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                </form>
	        </td>
	    </tr>
	    @endforeach
    </table>

   </div>

@endsection