@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card ">
                <div class="card-header">Add Feedback Information</div>

                <div class="card-body">
                    <form method="POST" action="{{route('feedbacks.store')}}">
                        @csrf

                        <div class="row">



                            <div class="col-md-4">
                                <label for="homeworkId" class=" col-form-label ">{{ __('Select Homework') }}</label>


                                <select class="form-control" id="homeworkId" class="form-control " name="homeworkId"
                                    required autocomplete="homeworkId" autofocus>
                                    @foreach ($homeworks as $homework)
                                    <option value="{{$homework->id}}">{{$homework->title}}</option>

                                    @endforeach
                                </select>

                            </div>
                            <div class="col-md-4">
                                <label for="teacherId" class=" col-form-label ">{{ __('Select Teacher') }}</label>


                                <select class="form-control" id="teacherId" class="form-control " name="teacherId"
                                    required autocomplete="teacherId" autofocus>
                                    @foreach ($teachers as $teacher)
                                    <option value="{{$teacher->id}}">{{$teacher->name}}</option>

                                    @endforeach
                                </select>

                            </div>

                            <div class="col-md-4">
                                <label for="studentId" class=" col-form-label ">{{ __('Select Student') }}</label>


                                <select class="form-control" id="studentId" class="form-control " name="studentId"
                                    required autocomplete="studentId" autofocus>
                                    @foreach ($students as $student)
                                    <option value="{{$student->id}}">{{$student->firstName}} {{$student->lastName}}
                                    </option>

                                    @endforeach
                                </select>

                            </div>

                            <div class="col-md-4">
                                <label for="feedback" class="col-form-label ">{{ __('Feedback ') }}</label>


                                <input id="feedback" type="text" class="form-control " name="feedback" required
                                    autocomplete="feedback" autofocus>



                            </div>









                            <div class="col-md-12 text-right">
                                <div class="form-group row  ">

                                    <div class="col-md-12 text-right">
                                        <button type="submit" class="btn btn-primary">
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