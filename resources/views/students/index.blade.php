@extends('layouts.app')


@section('content')




<div class="row">
    <div class="col-lg-12">
        <h3 class="page-header"><i class="fa fa-user-md"></i> Profile</h3>
        <ol class="breadcrumb">
            <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
            <li><i class="icon_documents_alt"></i>Pages</li>
            <li><i class="fa fa-user-md"></i>Profile</li>
        </ol>
    </div>
</div>
@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif
<div class="row">
    <!-- profile-widget -->
    @foreach ($students as $student)
    <div class="col-lg-12">
        <div class="profile-widget profile-widget-info">
            <div class="panel-body">
                <div class="col-lg-2 col-sm-2">
                    <h4>{{$student->firstName}} {{$student->lastName}}</h4>
                    <div class="follow-ava">
                        <img src="/img/profile-widget-avatar.jpg" alt="">
                    </div>
                    <h6>Student</h6>
                </div>
                <div class="col-lg-4 col-sm-4 follow-info">
                    <p>Hello I’m {{$student->firstName}} {{$student->lastName}}, a leading expert in interactive and
                        creative design.</p>
                    <p>DOB {{$student->dob}} </p>
                    <p><i class="fa fa-twitter">{{$student->firstName}} {{$student->lastName}}</i></p>
                    <h6>
                        <span><i class="icon_clock_alt"></i>11:05 AM</span>
                        <span><i class="icon_calendar"></i>25.10.13</span>
                        <span><i class="icon_pin_alt"></i>NY</span>
                    </h6>
                </div>
                <div class="col-lg-2 col-sm-6 follow-info weather-category">
                    <ul>
                        <li class="active">

                            <i class="fa fa-comments fa-2x"> </i><br> Contrary to popular belief, Lorem Ipsum is
                            not simply
                        </li>

                    </ul>
                </div>
                <div class="col-lg-2 col-sm-6 follow-info weather-category">
                    <ul>
                        <li class="active">

                            <i class="fa fa-bell fa-2x"> </i><br> Contrary to popular belief, Lorem Ipsum is not
                            simply
                        </li>

                    </ul>
                </div>
                <div class="col-lg-2 col-sm-6 follow-info weather-category">
                    <ul>
                        <li class="active">

                            <i class="fa fa-tachometer fa-2x"> </i><br> Contrary to popular belief, Lorem Ipsum
                            is not simply
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- page start-->
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading tab-bg-info">
                <ul class="nav nav-tabs">
                    <li class="active">
                        <a data-toggle="tab" href="#recent-activity">
                            <i class="icon-home"></i>
                            Daily Activity
                        </a>
                    </li>
                    <li>
                        <a data-toggle="tab" href="#profile">
                            <i class="icon-user"></i>
                            Profile
                        </a>
                    </li>
                    <li class="">
                        <a data-toggle="tab" href="#edit-profile">
                            <i class="icon-envelope"></i>
                            Edit Profile
                        </a>
                    </li>
                </ul>
            </header>
            <div class="panel-body">
                <div class="tab-content">
                    <div id="recent-activity" class="tab-pane active">
                        <div class="profile-activity">
                            <div class="act-time">
                                <div class="activity-body act-in">
                                    <span class="arrow"></span>
                                    <div class="text">
                                        <a href="#" class="activity-img"><img class="avatar" src="img/chat-avatar.jpg"
                                                alt=""></a>
                                        <p class="attribution"><a href="#">Jonatanh Doe</a> at 4:25pm, 30th
                                            Octmber 2014</p>
                                        <p>It is a long established fact that a reader will be distracted layout
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="act-time">
                                <div class="activity-body act-in">
                                    <span class="arrow"></span>
                                    <div class="text">
                                        <a href="#" class="activity-img"><img class="avatar" src="img/chat-avatar.jpg"
                                                alt=""></a>
                                        <p class="attribution"><a href="#">Jhon Loves </a> at 5:25am, 30th
                                            Octmber 2014</p>
                                        <p>Knowledge speaks, but wisdom listens.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="act-time">
                                <div class="activity-body act-in">
                                    <span class="arrow"></span>
                                    <div class="text">
                                        <a href="#" class="activity-img"><img class="avatar" src="img/chat-avatar.jpg"
                                                alt=""></a>
                                        <p class="attribution"><a href="#">Rose Crack</a> at 5:25am, 30th
                                            Octmber 2014</p>
                                        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada
                                            fames ac turpis egestas.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="act-time">
                                <div class="activity-body act-in">
                                    <span class="arrow"></span>
                                    <div class="text">
                                        <a href="#" class="activity-img"><img class="avatar" src="img/chat-avatar.jpg"
                                                alt=""></a>
                                        <p class="attribution"><a href="#">Jimy Smith</a> at 5:25am, 30th
                                            Octmber 2014</p>
                                        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada
                                            fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae,
                                            ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam
                                            egestas semper. Aenean
                                            ultricies mi vitae est. Mauris placerat eleifend leo.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="act-time">
                                <div class="activity-body act-in">
                                    <span class="arrow"></span>
                                    <div class="text">
                                        <a href="#" class="activity-img"><img class="avatar" src="img/chat-avatar.jpg"
                                                alt=""></a>
                                        <p class="attribution"><a href="#">Maria Willyam</a> at 5:25am, 30th
                                            Octmber 2014</p>
                                        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada
                                            fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae,
                                            ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam
                                            egestas semper. Aenean
                                            ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit
                                            amet est et sapien ullamcorper pharetra. Vestibulum erat wisi,
                                            condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean
                                            fermentum, elit eget tincidunt
                                            condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac
                                            dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent
                                            dapibus, neque id cursus faucibus, tortor neque egestas augue, eu
                                            vulputate magna eros
                                            eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan
                                            porttitor, facilisis luctus, metus</p>
                                    </div>
                                </div>
                            </div>
                            <div class="act-time">
                                <div class="activity-body act-in">
                                    <span class="arrow"></span>
                                    <div class="text">
                                        <a href="#" class="activity-img"><img class="avatar" src="img/chat-avatar.jpg"
                                                alt=""></a>
                                        <p class="attribution"><a href="#">Sarah saw</a> at 5:25am, 30th Octmber
                                            2014</p>
                                        <p>Knowledge speaks, but wisdom listens.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="act-time">
                                <div class="activity-body act-in">
                                    <span class="arrow"></span>
                                    <div class="text">
                                        <a href="#" class="activity-img"><img class="avatar" src="img/chat-avatar.jpg"
                                                alt=""></a>
                                        <p class="attribution"><a href="#">Layla night</a> at 5:25am, 30th
                                            Octmber 2014</p>
                                        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada
                                            fames ac turpis egestas.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="act-time">
                                <div class="activity-body act-in">
                                    <span class="arrow"></span>
                                    <div class="text">
                                        <a href="#" class="activity-img"><img class="avatar" src="img/chat-avatar.jpg"
                                                alt=""></a>
                                        <p class="attribution"><a href="#">Andriana lee</a> at 5:25am, 30th
                                            Octmber 2014</p>
                                        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada
                                            fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae,
                                            ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam
                                            egestas semper. Aenean
                                            ultricies mi vitae est. Mauris placerat eleifend leo.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="act-time">
                                <div class="activity-body act-in">
                                    <span class="arrow"></span>
                                    <div class="text">
                                        <a href="#" class="activity-img"><img class="avatar" src="img/chat-avatar.jpg"
                                                alt=""></a>
                                        <p class="attribution"><a href="#">Maria Willyam</a> at 5:25am, 30th
                                            Octmber 2014</p>
                                        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada
                                            fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae,
                                            ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam
                                            egestas semper. Aenean
                                            ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit
                                            amet est et sapien ullamcorper pharetra. Vestibulum erat wisi,
                                            condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean
                                            fermentum, elit eget tincidunt
                                            condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac
                                            dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent
                                            dapibus, neque id cursus faucibus, tortor neque egestas augue, eu
                                            vulputate magna eros
                                            eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan
                                            porttitor, facilisis luctus, metus</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- profile -->
                    <div id="profile" class="tab-pane">
                        <section class="panel">
                            <div class="bio-graph-heading">
                                Hello I’m Jenifer Smith, a leading expert in interactive and creative design
                                specializing in the mobile medium. My graduation from Massey University with a
                                Bachelor of Design majoring in visual communication.
                            </div>
                            <div class="panel-body bio-graph-info">
                                <h1>Bio Graph</h1>
                                <div class="row">
                                    <div class="bio-row">
                                        <p><span>First Name </span>: Jenifer </p>
                                    </div>
                                    <div class="bio-row">
                                        <p><span>Last Name </span>: Smith</p>
                                    </div>
                                    <div class="bio-row">
                                        <p><span>Birthday</span>: 27 August 1987</p>
                                    </div>
                                    <div class="bio-row">
                                        <p><span>Country </span>: United</p>
                                    </div>
                                    <div class="bio-row">
                                        <p><span>Occupation </span>: UI Designer</p>
                                    </div>
                                    <div class="bio-row">
                                        <p><span>Email </span>:jenifer@mailname.com</p>
                                    </div>
                                    <div class="bio-row">
                                        <p><span>Mobile </span>: (+6283) 456 789</p>
                                    </div>
                                    <div class="bio-row">
                                        <p><span>Phone </span>: (+021) 956 789123</p>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section>
                            <div class="row">
                            </div>
                        </section>
                    </div>
                    <!-- edit-profile -->
                    <div id="edit-profile" class="tab-pane">
                        <section class="panel">
                            <div class="panel-body bio-graph-info">
                                <h1> Profile Info</h1>

                                <form class="form-horizontal" method="POST"
                                    action="{{route('students.update',$student->id)}}">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-group">
                                        <label class="col-lg-2 control-label">First Name</label>
                                        <div class="col-lg-6">
                                            <input required value="{{ $student->firstName }}" name="firstName"
                                                type="text" class="form-control" id="f-name" placeholder=" ">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-lg-2 control-label">Last Name</label>
                                        <div class="col-lg-6">
                                            <input value="{{ $student->lastName }}" required name="lastName" type="text"
                                                class="form-control" id="l-name" placeholder=" ">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-lg-2 control-label">DOB</label>
                                        <div class="col-lg-6">
                                            <input value="{{ $student->dob }}" required type="date" name="dob" id=""
                                                class="form-control" cols="30" rows="5" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-lg-2 control-label">Email</label>
                                        <div class="col-lg-6">
                                            <input value="{{ $student->email }}" required name="email" type="email"
                                                class="form-control" id="c-name" placeholder=" ">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-lg-2 control-label">Address</label>
                                        <div class="col-lg-6">
                                            <textarea required name="address" type="text" class="form-control"
                                                id="b-day" placeholder=" ">{{ $student->address }}</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-lg-2 control-label">Post Code</label>
                                        <div class="col-lg-6">
                                            <input value="{{ $student->postCode }}" required name="postCode"
                                                type="number" class="form-control" id="occupation" placeholder=" ">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-lg-2 control-label">Area</label>
                                        <div class="col-lg-6">
                                            <input value="{{ $student->area }}" required name="area" type="text"
                                                class="form-control" id="email" placeholder=" ">
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <div class="col-lg-offset-2 col-lg-10">
                                            <button type="submit" class="btn btn-primary">Save</button>
                                            <button type="button" class="btn btn-danger">Cancel</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
@endforeach
<!-- page end-->




<div class="container">
    <div class="row">
        <div class="col-lg-6 margin-tb">
            <div class="pull-left">
                @if(session('role')=='Teacher')
                <h2>Students</h2>
                @endif
                @if(session('role')=='Student')
                <h2>My Profile</h2>
                @endif
            </div>

        </div>
        <div class="col-lg-6 margin-tb">
            @if(session('role')=='Teacher')
            <div class="text-right">
                <a class="btn btn-success" href="{{ route('students.create') }}"> Add New Student</a>
            </div>
        </div>
        @endif
    </div>


    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif




</div>

@endsection