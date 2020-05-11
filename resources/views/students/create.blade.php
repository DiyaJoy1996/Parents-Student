@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">

            <div class="row">
                <div class="col-lg-12 margin-tb">
                    <div class="pull-left">
                        <h2>Add New Student</h2>
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
                    <form method="POST" action="{{route('students.store')}}" enctype="multipart/form-data" role="form"
                        multiple>
                        {{ csrf_field() }}
                        <div class="row">
                            <!-- <div class="col-md-4 text-center" style="position:relative">
                           <img class="mt-3" id="preview" style="width:170px;height:170px;border-radius:50%;object-fit: cover;" src="https://image.flaticon.com/icons/svg/727/727399.svg"/>
                           <input onchange="loadPreview(this);"  id="profilePicture" name="profilePicture"  type="file" style="border:1px solid red;position:absolute;left:0;right:0;top:0;bottom:0;margin:auto;border-radius:50%;width:150px;opacity:0" />
                           </div> -->

                            <div class="col-md-8">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="firstName"
                                                class="col-form-label text-md-right">{{ __('First Name') }}</label>


                                            <input id="firstName" type="text"
                                                class="form-control @error('firstName') is-invalid @enderror"
                                                name="firstName" value="{{ old('firstName') }}" autocomplete="firstName"
                                                autofocus>

                                            @error('firstName')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror

                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="lastName"
                                                class="col-form-label text-md-right">{{ __('Last Name') }}</label>


                                            <input id="lastName" type="text"
                                                class="form-control @error('lastName') is-invalid @enderror"
                                                name="lastName" value="{{ old('lastName') }}" required
                                                autocomplete="lastName" autofocus>

                                            @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror

                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="dob"
                                                class="col-form-label text-md-right">{{ __('DOB') }}</label>


                                            <input id="dob" type="date"
                                                class="form-control @error('dob') is-invalid @enderror" name="dob"
                                                value="{{ old('dob') }}" required autocomplete="dob" autofocus>

                                            @error('dob')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror

                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <label for="email" class="col-form-label ">{{ __('Email') }}</label>


                                        <input id="email" type="text"
                                            class="form-control @error('email') is-invalid @enderror" name="email"
                                            value="{{ old('email') }}" required autocomplete="name" autofocus>

                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror

                                    </div>
                                </div>

                            </div>






                        </div>

                </div>
                <div class="row mx-2">


                    <div class="col-md-4 ">
                        <div class="form-group">
                            <label for="address" class="col-form-label text-md-right">{{ __('Address') }}</label>


                            <input id="address" type="text" class="form-control @error('address') is-invalid @enderror"
                                name="address" value="{{ old('dob') }}" required autocomplete="address" autofocus>

                            @error('address')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror

                        </div>

                    </div>

                    <div class="col-md-4 ">

                        <div class="form-group ">
                            <label for="postCode" class=" col-form-label text-md-right">{{ __('Post Code') }}</label>


                            <input id="postCode" type="text"
                                class="form-control @error('postCode') is-invalid @enderror" name="postCode"
                                value="{{ old('postCode') }}" required autocomplete="postCode" autofocus>

                            @error('postCode')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror

                        </div>


                    </div>

                    <div class="col-md-4 ">

                        <div class="form-group">
                            <label for="area" class=" col-form-label text-md-right">{{ __('Area') }}</label>


                            <input id="area" type="text" class="form-control @error('area') is-invalid @enderror"
                                name="area" value="{{ old('area') }}" required autocomplete="area" autofocus>

                            @error('area')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror

                        </div>


                    </div>


                </div>

                <div class="row mx-2">
                    <div class="col-md-6">
                        <label for="userId" class=" col-form-label ">{{ __('User') }}</label>


                        <select class="form-control" id="userId" class="form-control " name="userId" required
                            autocomplete="userId" autofocus>
                            @foreach($users as $user)
                            <option value="{{$user->id}}">{{$user->email}}</option>
                            @endforeach
                        </select>

                    </div>

                    <div class="col-md-6">
                        <label for="parentId" class=" col-form-label ">{{ __('Parent') }}</label>


                        <select class="form-control" id="parentId" class="form-control " name="parentId" required
                            autocomplete="motherId" autofocus>
                            @foreach($parents as $parent)
                            <option value="{{$parent->id}}">{{$parent->firstName}} {{$parent->lastName}}</option>
                            @endforeach
                        </select>

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