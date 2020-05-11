@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Add School Information</div>

             <div class="card-body">
                <form method="POST" action="{{route('school.store')}}" enctype="multipart/form-data" role="form" multiple >
                {{ csrf_field() }}
               

                        <div class="form-group row">
                            <label for="schoolName" class="col-md-4 col-form-label text-md-right">{{ __('School Name') }}</label>

                            <div class="col-md-6">
                                <input id="schoolName" type="text" class="form-control" name="schoolName"  required autocomplete="schoolName" autofocus>

                               
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('Address') }}</label>

                            <div class="col-md-6">
                                <input id="address" type="text" class="form-control" name="address" required autocomplete="address" autofocus>

                              
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="postCode" class="col-md-4 col-form-label text-md-right">{{ __('Post Code') }}</label>

                            <div class="col-md-6">
                                <input id="postCode" type="text" class="form-control" name="postCode"  required autocomplete="postCode" autofocus>

                                
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="area" class="col-md-4 col-form-label text-md-right">{{ __('Area') }}</label>

                            <div class="col-md-6">
                                <input id="area" type="text" class="form-control " name="area"  required autocomplete="area" autofocus>

                               
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="phoneNumber" class="col-md-4 col-form-label text-md-right">{{ __('Phone Number') }}</label>

                            <div class="col-md-6">
                                <input id="phoneNumber" type="number" class="form-control" name="phoneNumber"  required autocomplete="phoneNumber" autofocus>

                             
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Submit') }}
                                </button>
                            </div>
                        </div>
</form>  
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
