@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-6 margin-tb">
            <div class="pull-left">
                <h2>Feedback</h2>
            </div>

        </div>
        <div class="col-lg-6 margin-tb">
            <div class="text-right">
                <a class="btn btn-success" href="{{ route('feedbacks.create') }}"> Add Feedback</a>
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
            <th>Homework</th>
            <th>Student</th>
            <th>Teacher</th>
            <th>Feedback</th>





            <th width="120px">Action

            </th>
        </tr>
        @foreach ($feedbacks as $feedback)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $feedback->homework->title }}</td>
            <td>{{ $feedback->teacher->name }}</td>
            <td>{{ $feedback->student->firstName }} {{ $feedback->student->lastName }}</td>
            <td>{{ $feedback->feedback }}</td>





            <td>
                <form action="{{ route('feedbacks.destroy',$feedback->id) }}" method="POST">
                    <a class="btn btn-primary" href="{{ route('feedbacks.edit',$feedback->id) }}"><i
                            class="fa fa-pencil"></i></a>
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