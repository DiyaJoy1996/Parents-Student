@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-6 margin-tb">
            <div class="pull-left">
                <h2>Messages</h2>
            </div>

        </div>
        <div class="col-lg-6 margin-tb">
            <div class="text-right">
                <a class="btn btn-success" href="{{ route('messages.create') }}"> Add Message</a>
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
            <th>User</th>
            <th>Title</th>
            <th>Message</th>
            <th>Status</th>





            <th width="120px">Action

            </th>
        </tr>
        @foreach ($messages as $message)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $message->user->email }}</td>
            <td>{{ $message->title }}</td>
            <td>{{ $message->message }} </td>
            <td>{{ $message->status }}</td>





            <td>
                <form action="{{ route('messages.destroy',$message->id) }}" method="POST">
                    <a class="btn btn-primary" href="{{ route('messages.edit',$message->id) }}"><i
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