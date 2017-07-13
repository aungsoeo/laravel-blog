@extends('layouts.master')

@section('content')
 <div class="col-md-8 ">
 		<div class="panel panel-default">
            <div class="panel-heading">Register</div>
            	<div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="/register">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="name" >Name</label>
                             <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                        </div>

                        <div class="form-group">
                            <label for="email" >E-Mail Address</label>
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
                        </div>

                        <div class="form-group">
                            <label for="password" >Password</label>
                                <input id="password" type="password" class="form-control" name="password" required>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" >Confirm Password</label>
                                <input id="password_confirmation" type="password" class="form-control" name="password_confirmation" required>
                        </div>

                        <div class="form-group">
                            <div >
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>

                        @include('layouts.errors')
                    </form>
                </div>
        </div>
 </div>



@endsection
