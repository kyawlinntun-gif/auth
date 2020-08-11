@extends('layout.master')

@section('content')

    <div class="login mt-5">

        <div class="container">

            <div class="row">

                <div class="col-6 offset-3">

                    <div class="card">

                        <div class="card-header">
                            Login Form
                        </div>

                        <div class="card-body">

                            {{ Form::open(['url' => '/login', 'method' => 'post']) }}
                                {{ Form::bsEmail('email', '', ['label' => 'Email']) }}
                                @include('messages.errors.email')
                                {{ Form::bsPassword('password', ['label' => 'Password']) }}
                                @include('messages.errors.password')
                                {{-- {{ Form::bsCheckbox('remember_me', '', ['label' => 'Remember Me', 'unchecked']) }} --}}
                                <div class="form-group">
                                    <label for="checkbox">Remember me</label>
                                    <input type="checkbox" name="remember_me">
                                </div>
                                {{ Form::submit('Submit', ['class' => 'btn btn-primary']) }}
                            {{ Form::close() }}

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>
    
@endsection