@extends('layouts.app')


@section('content')
   <div class="container">
   <div class="row">
        <div class="col-lg-6 margin-tb">
            <div class="pull-left">
                <h2>Courses</h2>
            </div>
           
        </div>
        <div class="col-lg-6 margin-tb">
        <div class="text-right">
                <a class="btn btn-success" href="{{ route('courses.create') }}"> Add New Course</a>
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
            <th>Sr#</th>
            <th>Course Name</th>
        
           
            <th width="120px">Action
           
            </th>
        </tr>
	    @foreach ($courses as $course)
	    <tr>
	        <td>{{ ++$i }}</td>
	        <td>{{ $course->courseName }}</td>
           
	       
	        <td>
                <form action="{{ route('courses.destroy',$course->id) }}" method="POST">
                  
                    <a class="btn btn-primary" href="{{ route('courses.edit',$course->id) }}"><i class="fa fa-pencil"></i></a>
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