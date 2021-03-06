@extends('layout.app')

@section('content')

<div class="text-center">
    <h2 class="mb-5">Powered By:</h2>
<div class="d-flex justify-content-around">

    <div class="col-md-4"><a href="https://hng.tech/" target="_blank"><img src="{{ asset('hng logo.png') }}" class="img-fluid" alt=""> </a></div>
    <div class="col-md-4"><a href="https://internship.zuri.team/" target="_blank"><img src="{{ asset('zuri logo.png') }}" class="img-fluid" alt=""></a> </div>
</div>



</div>

<div class="container jumbotron mt-3 main">

        <div class="text-center">
            <h3>Eno-obong Etuk Enoh</h3>
            <h2>Resume`</h2>
        </div>

            <div class="mb-5">
                <h4 class="d-flex justify-content-between mb-2"><strong>Email: </strong>enoobongenoh25@gmail.com </h4>
                <h4 class="d-flex justify-content-between mb-2"><strong>Gender: </strong>Male </h4>
                <h4 class="d-flex justify-content-between"><strong>Mobile Number: </strong>08062242300 </h4>
            </div>


            <h4 class="d-flex justify-content-between mb-5"> <strong>National Youth Service Corp: </strong> November 2013 to October 2014</h4>

            <div class="mb-5">
                <h3 class="d-flex justify-content-between mb-2"><strong>Education</strong></h3>
                <h4 class="d-flex justify-content-between mb-2"><strong>Institution attained: </strong>University Of Port Harcourt, Rivers State</h4>
                <h4 class="d-flex justify-content-between mb-2"><strong>Degree obtained : </strong>BSc. Industrial Chemistry</h4>
                <h4 class="d-flex justify-content-between"><strong>Period of Study : </strong>January 2009 to December 2012</h4>
            </div>

            <div class="mb-5">
                <h3 class="mb-2"><strong>Professional Training</strong></h3>
                <h4>[PHP => LARAVEL]</h4>
            </div>

            <div class="mb-5">
                <h3 class="mb-2"><strong>Skills</strong></h3>
                <h4>HTML/CSS<h4>
                <h4>[PHP => LARAVEL]</h4>
                <h4>IBM Cloud</h4>
                <h4>Public Speaking</h4>
                <h4>Creative writing</h4>
            </div>

            <div class="mb-5">
                <h3 class="mb-2"><strong>Work Experience</strong></h3>
                <h4>Tutor: Start Innovation Hub, 263 Oron Road Uyo</h4>
            </div>

            <div class="mb-5">
                <h3 class="mb-2"><strong>Projects</strong></h3>
                <h4>Links to Projects:</h4>
                <h5><a href="https://github.com/Eno-obongEnoh25" target="_blank">Github</a></h5>
                {{-- <h5><a href="https://blog-enoh.herokuapp.com/blog" target="_blank" class="text-white">Blog app</a></h5>
                <h5><a href="https://e-commerce-enoh.herokuapp.com/welcome" target="_blank" class="text-white">E-commerce app(under construction)</a></h5> --}}
            </div>

            <div class="text-center"><h3>Please fill in the form below to contact me</h3></div>



    <div class="text-center">
<div class="row">


    <div class="col-md-6">
        <div class="form text-center" style="width: 20rem">
            <form action="/form" method="Post">
                @csrf
                <div>
                    <input type="text" name="name"
                    class="form-control @error('name') border-danger @enderror"
                    placeholder="Input Your Name"
                    value="{{old('name')}}"><br><br>
                    <div class="text-danger">
                    @error('name')
                    {{$message}}
                    @enderror
                    </div>
                </div>

                <div>
                    <input type="text" name="email"
                    class="form-control @error('email') border-danger @enderror"
                    placeholder="Input Your Email"
                    value="{{old('email')}}"><br><br>
                    <div class="text-danger">
                    @error('email')
                    {{$message}}
                    @enderror
                    </div>
                </div>

                <div>
                    <input type="text" name="phone_number"
                    class="form-control @error('phone_number') border-danger @enderror"
                    placeholder="Input Your Phone Number"
                    value="{{old('phone_number')}}"><br><br>
                    <div class="text-danger">
                    @error('phone_number')
                    {{$message}}
                    @enderror
                    </div>
                </div>

                <button  class="btn btn-primary border-0 p-2 px-4 text-light">Submit</button>
            </form>
        </div>
    </div>

    <div class="col-md-6">
        @if (session('success'))
    <div style="width: 20rem; margin: 0 auto"
        class="text-center p-3 mb-2 bg-success text-white">
        {{ session('success') }}
    </div>
@endif
        {{-- @foreach ($users as $user)
            <h4>{{ $user->name }}</h4>
            <h4>{{ $user->email }}</h4>
            <h4 class="mb-5">{{ $user->phone_number }}</h4><br><br>

            <div class="d-flex justify-content-end">
                {{ $users->links() }}
            </div>
            @endforeach --}}
        </div>
</div>


    </div>

</div>

@endsection








