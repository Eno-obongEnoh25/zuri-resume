@extends('layout.app')

@section('content')

<div class="text-center">
    <h2 class="mb-5">Powered By:</h2>
    <div class="row">
        <div class="col-md-4"><img src="{{ asset('zuri logo.png') }}" class="img-fluid" alt=""> </div>
        <div class="col-md-4"><img src="{{ asset('hng logo.png') }}" class="img-fluid" alt=""> </div>
        <div class="col-md-4"><img src="{{ asset('I4G-Logo-Color-Cropped.png') }}" class="img-fluid" alt=""> </div>
    </div>

</div>

<div class="container jumbotron mt-3">


    <div class="text-center">
            <h2>Resume`</h2>
        @if (session('success'))
            <div style="width: 20rem; margin: 0 auto"
                class="text-center p-3 mb-2">
                {{ session('success') }}
            </div>
        @endif
        <div class="row">
            <div class="col-md-4 form">

                <h3>Personal Information</h3>

                <form action="/form" method="Post">
                    @csrf
                    <div>
                        <input type="text" name="first_name"
                        class="form-control @error('first_name') border-danger @enderror"
                        placeholder="Input Your First Name"
                        value="{{old('first_name')}}"><br><br>
                        <div class="text-danger">
                        @error('first_name')
                        {{$message}}
                        @enderror
                        </div>
                    </div>

                    <div>
                        <input type="text" name="last_name"
                        class="form-control @error('last_name') border-danger @enderror"
                        placeholder="Input Your Last Name"
                        value="{{old('last_name')}}"><br><br>
                        <div class="text-danger">
                        @error('last_name')
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

                    <h3>Professional Information</h3>

                    <div>
                        <input type="text" name="stack"
                        class="form-control @error('stack') border-danger @enderror"
                        placeholder="State Your Stack"
                        value="{{old('stack')}}"><br><br>
                        <div class="text-danger">
                        @error('stack')
                        {{$message}}
                        @enderror
                        </div>
                    </div>

                    <div>
                        <input type="text" name="slack_email"
                        class="form-control @error('slack_email') border-danger @enderror"
                        placeholder="Input Your Slack Email"
                        value="{{old('slack_email')}}"><br><br>
                        <div class="text-danger">
                        @error('slack_email')
                        {{$message}}
                        @enderror
                        </div>
                    </div>

                    <div>
                        <input type="text" name="link_to_github_repo"
                        class="form-control @error('link_to_github_repo') border-danger @enderror"
                        placeholder="Input the link to your Github repository"
                        value="{{old('link_to_github_repo')}}"><br><br>
                        <div class="text-danger">
                        @error('link_to_github_repo')
                        {{$message}}
                        @enderror
                        </div>
                    </div>

                    <div>
                        <input type="text" name="link_to_heroku"
                        class="form-control @error('link_to_heroku') border-danger @enderror"
                        placeholder="Input Your Link to Heroku"
                        value="{{old('link_to_heroku')}}"><br><br>
                        <div class="text-danger">
                        @error('link_to_heroku')
                        {{$message}}
                        @enderror
                        </div>
                    </div>

                    <div>
                        <input type="number" name="years_of_experience"
                        class="form-control @error('years_of_experience') border-danger @enderror"
                        placeholder="State your years of experince"
                        value="{{old('years_of_experience')}}"><br><br>
                        <div class="text-danger">
                        @error('years_of_experience')
                        {{$message}}
                        @enderror
                        </div>
                    </div>

                    <button  class="btn btn-primary border-0 p-2 px-4 text-light">Submit</button>

                </form>

            </div>

            <div class="col-md-8 table">

                @foreach ($users as $user)

                <h3 class="mb-2"><strong>Personal Information</strong></h3>
                    <div>
                        <h5>Name: {{$user->last_name}}, {{ $user->first_name }}</h5>
                    </div><br><br>

                    <div>
                        <h5>E-mail: {{$user->email}}</h5>
                    </div><br><br>

                    <div>
                        <h5>Phone Number: {{$user->phone_number}}</h5>
                    </div>
                    <br><br>

                    <h3 class="mb-2"><strong>Professional Information</strong></h3>
                    <div>
                        <h5>Stack: {{$user->stack}}</h5>
                    </div><br><br>

                    <div>
                        <h5>Slack E-mail: {{$user->slack_email}}</h5>
                    </div><br><br>

                    <div>
                        <h5>Github Repository: {{$user->link_to_github_repo}}</h5>
                    </div><br><br>

                    <div>
                        <h5>Heroku Link: {{$user->link_to_heroku}}</h5>
                    </div><br><br>

                    <div>
                        <h5>Years of Experience: {{$user->years_of_experience}}</h5>
                    </div><br><br>


                    <div>
                        <h5>
                            <form action="{{route('form.destroy', $user)}}" method="post">
                                @csrf
                                @method('DELETE')
                               Delete Your Details <button class="border-0"><i class="fa fa-trash text-danger" aria-hidden="true"></i></button>
                            </form>
                        </h5>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
</div>

@endsection








