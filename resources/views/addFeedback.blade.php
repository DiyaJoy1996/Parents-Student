@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card ">
                <div class="card-header">Add Feedback Information</div>

                <div class="card-body">
                <form method="POST" action="{{route('feedbacks.store')}}" enctype='multipart/form-data' >
                        @csrf

                          <div class="row">


                            <div class="col-md-4">
                            <label for="homeworkId" class=" col-form-label ">{{ __('Select HomeWork') }}</label>


                            <select class="form-control" id="homeworkId" class="form-control @error('homeworkId') is-invalid @enderror" name="homeworkId"  required autocomplete="homeworkId" autofocus>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                            </select>
                            @error('homeworkId')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                                        </div>
                                        <div class="col-md-4">
                                        <label for="teacherId" class=" col-form-label ">{{ __('Select Teacher') }}</label>


                                        <select class="form-control" id="teacherId" class="form-control @error('teacherId') is-invalid @enderror" name="teacherId"  required autocomplete="teacherId" autofocus>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                        </select>
                                        @error('teacherId')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                                    </div>

                                                    <div class="col-md-4">
                                                    <label for="studentId" class=" col-form-label ">{{ __('Select Student') }}</label>


                                                    <select class="form-control" id="studentId" class="form-control @error('studentId') is-invalid @enderror" name="studentId"  required autocomplete="studentId" autofocus>
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                    </select>
                                                    @error('studentId')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                                </div>

                              <div class="col-md-12">
                              <label for="feedback" class="col-form-label ">{{ __('Feedback') }}</label>


                                        <input id="feedback" type="text" class="form-control @error('feedback') is-invalid @enderror" name="feedback" value="{{ old('feedback') }}" required autocomplete="feedback" autofocus>

                                        @error('feedback')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror

                              </div>

                                        <div class="col-md-12 text-right">
                                          <div class="form-group row  mt-3">

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
<script>
  function loadPreview(input, id) {
      console.log("ok")
    id = id || '#preview';
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $(id)
                    .attr('src', e.target.result)
                    .width(150)
                    .height(150);

        };

        reader.readAsDataURL(input.files[0]);
    }
 }
</script>
@endsection
