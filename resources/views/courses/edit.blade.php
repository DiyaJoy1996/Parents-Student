@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
        
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
            <div class="card ">
                <div class="card-header">Edit Course</div>

                <div class="card-body">
                <form method="POST"  action="{{route('courses.update',$course->id)}}"  >
                @csrf
        @method('PUT')

                          <div class="row">


                            <div class="col-md-12">
                            <div class="form-group">
                              <label for="courseName" class="col-form-label text-md-right">{{ __('Course Name') }}</label>


                                <input id="courseName" type="text" class="form-control " name="courseName" value="{{$course->courseName }}" required autocomplete="courseName" autofocus>

                               

                             </div>
                            </div>










                                        <div class="col-md-12 text-right">
                                          <div class="form-group row mt-5  ">

                                                             <div class="col-md-12 text-right">
                                                             <button type="submit" class="btn btn-primary mr-4">
                                                                 {{ __('Submit') }}
                                                             </button>
                                                             </div>

                                                     </div>
                                        </div>

                          </div>


                </div>



            </div>
            </form>
    </div>
    </div>

</div>

@endsection
