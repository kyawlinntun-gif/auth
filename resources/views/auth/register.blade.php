@extends('layout.master')

@section('content')

    <div class="register mt-5">

        <div class="container">

            <div class="row">

                <div class="col-6 offset-3">

                    <div class="card">

                        <div class="card-header">
                            Register Form
                        </div>

                        <div class="card-body">

                            {{ Form::open(['url' => '/register', 'method' => 'post']) }}
                                {{ Form::bsText('username', '', ['label' => 'Username']) }}
                                @include('messages.errors.username')
                                {{ Form::bsEmail('email', '', ['label' => 'Email']) }}
                                @include('messages.errors.email')
                                {{ Form::bsPassword('password', ['label' => 'Password']) }}
                                @include('messages.errors.password')
                                {{ Form::bsPassword('confirm_password', ['label' => 'Confirm Password']) }}
                                @include('messages.errors.confirm_password')
                                {{ Form::submit('Submit', ['class' => 'btn btn-primary']) }}
                            {{ Form::close() }}

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>
    
@endsection