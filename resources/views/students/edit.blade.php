@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">

            <div class="row">
                <div class="col-lg-12 margin-tb">
                    <div class="pull-left">
                        <h2>Edit Student</h2>
                    </div>
                    <div class="pull-right">
                        <a class="btn btn-primary" href="{{ route('students.index') }}"> Back</a>
                    </div>
                </div>
            </div>


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
                <div class="card-header">Add Student Information</div>

                <div class="card-body">
                    <form method="POST" action="{{route('students.update',$student->id)}}" enctype="multipart/form-data"
                        role="form" multiple>
                        @csrf
                        @method('PUT')

                        <div class="row">
                            <!-- <div class="col-md-4 text-center" style="position:relative">
                           <img class="mt-3" id="preview" style="width:170px;height:170px;border-radius:50%;object-fit: cover;" src="https://image.flaticon.com/icons/svg/727/727399.svg"/>
                           <input onchange="loadPreview(this);"  id="profilePicture" name="profilePicture"  type="file" style="border:1px solid red;position:absolute;left:0;right:0;top:0;bottom:0;margin:auto;border-radius:50%;width:150px;opacity:0" />
                           </div> -->

                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="firstName"
                                                class="col-form-label text-md-right">{{ __('First Name') }}</label>


                                            <input id="firstName" type="text" name="firstName"
                                                value="{{ $student->firstName }}" class="form-control "
                                                autocomplete="firstName" autofocus>



                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="lastName"
                                                class="col-form-label text-md-right">{{ __('Last Name') }}</label>


                                            <input id="lastName" type="text" name="lastName"
                                                value="{{ $student->lastName }}" class="form-control " required
                                                autocomplete="lastName" autofocus>



                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="dob"
                                                class="col-form-label text-md-right">{{ __('DOB') }}</label>


                                            <input id="dob" type="date" name="dob" value="{{ $student->dob }}"
                                                class="form-control " required autocomplete="dob" autofocus>



                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <label for="email" class="col-form-label ">{{ __('Email') }}</label>


                                        <input id="email" type="text" name="email" value="{{ $student->email }}"
                                            class="form-control " required autocomplete="name" autofocus>



                                    </div>
                                </div>

                            </div>






                        </div>

                </div>
                <div class="row mx-2">


                    <div class="col-md-4 ">
                        <div class="form-group">
                            <label for="address" class="col-form-label text-md-right">{{ __('Address') }}</label>


                            <input id="address" type="text" class="form-control " name="address"
                                value="{{ $student->address }}" required autocomplete="address" autofocus>



                        </div>

                    </div>

                    <div class="col-md-4 ">

                        <div class="form-group ">
                            <label for="postCode" class=" col-form-label text-md-right">{{ __('Post Code') }}</label>


                            <input id="postCode" type="text" class="form-control " name="postCode"
                                value="{{$student->postCode }}" required autocomplete="postCode" autofocus>


                        </div>


                    </div>

                    <div class="col-md-4 ">

                        <div class="form-group">
                            <label for="area" class=" col-form-label text-md-right">{{ __('Area') }}</label>


                            <input id="area" type="text" class="form-control " name="area" value="{{ $student->area}}"
                                required autocomplete="area" autofocus>



                        </div>


                    </div>


                </div>



                <div class="form-group row mt-5  ">

                    <div class="col-md-12 text-right">
                        <button type="submit" class="btn btn-primary mr-4">
                            {{ __('Submit') }}
                        </button>
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

        reader.onload = function(e) {
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