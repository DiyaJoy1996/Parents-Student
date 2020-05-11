@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card ">
                <div class="card-header">Add Time Table Information</div>

                <div class="card-body">
                <form method="POST" action="{{route('timeTables.store')}}" enctype='multipart/form-data' >
                        @csrf

                          <div class="row">


                            <div class="col-md-4">
                            <label for="courseId" class=" col-form-label ">{{ __('Select Course') }}</label>


                            <select class="form-control" id="courseId" class="form-control @error('courseId') is-invalid @enderror" name="courseId"  required autocomplete="courseId" autofocus>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                            </select>
                            @error('courseId')
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
                              <label for="classroom" class="col-form-label ">{{ __('Classroom') }}</label>


                                        <input id="classroom" type="text" class="form-control @error('classroom') is-invalid @enderror" name="classroom" value="{{ old('classroom') }}" required autocomplete="classroom" autofocus>

                                        @error('classroom')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror

                              </div>

                              <div class="col-md-4 ">
                               <div class="form-group">
                                          <label for="subject" class="col-form-label text-md-right">{{ __('Subject') }}</label>


                                              <input id="subject" type="text" class="form-control @error('subject') is-invalid @enderror" name="subject" value="{{ old('subject') }}" required autocomplete="subject" autofocus>

                                              @error('subject')
                                                  <span class="invalid-feedback" role="alert">
                                                      <strong>{{ $message }}</strong>
                                                  </span>
                                              @enderror

                                  </div>

                               </div>

                               <div class="col-md-4 ">

                               <div class="form-group ">
                                          <label for="date" class=" col-form-label text-md-right">{{ __('Date') }}</label>


                                              <input id="date" type="date" class="form-control @error('date') is-invalid @enderror" name="date" value="{{ old('date') }}" required autocomplete="date" autofocus>

                                              @error('date')
                                                  <span class="invalid-feedback" role="alert">
                                                      <strong>{{ $message }}</strong>
                                                  </span>
                                              @enderror

                                      </div>


                              </div>

                              <div class="col-md-4 ">

                              <div class="form-group">
                                          <label for="time" class=" col-form-label text-md-right">{{ __('Time') }}</label>


                                              <input id="time" type="time" class="form-control @error('time') is-invalid @enderror" name="time" value="{{ old('time') }}" required autocomplete="time" autofocus>

                                              @error('time')
                                                  <span class="invalid-feedback" role="alert">
                                                      <strong>{{ $message }}</strong>
                                                  </span>
                                              @enderror

                                      </div>


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
