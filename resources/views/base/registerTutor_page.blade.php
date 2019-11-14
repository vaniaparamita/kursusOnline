@extends('base/script_page')
@section('content')
    <div class="main">
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <br>
                <div class="col-md-12 col-md-offset-1">
                <div class="card" style="display:block; margin-left:auto; margin-right:auto;">
                        <div class="card-body"> 
            <form class="signup-form" role="form" method="POST" action="{{ url('/register') }}">
                {{ csrf_field() }}
                
                <h2 class="form-title">Daftar Akun Imam Courses</h2>

                <form action="/registerSiswa">
                    <button class="button2" disabled="disabled" style="float:left">Murid</button>
                </form>
                <form action="#">
                    <button class="button">Tutor</button>
                </form>

                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                    <label for="name">Nama Lengkap</label>

                    <div class="form-title">
                        <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                        @if ($errors->has('name'))
                            <span class="help-block">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                    <label for="phone">No Telepon</label>

                    <div class="form-title">
                        <input id="phone" type="number" class="form-control" name="phone" required>

                        @if ($errors->has('phone'))
                            <span class="help-block">
                                <strong>{{ $errors->first('phone') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <label for="email">Email</label>

                    <div class="form-title">
                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <label for="password">Kata Sandi</label>

                    <div class="form-title">
                        <input id="password" type="password" class="form-control" name="password" required>

                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <label for="password-confirm">Confirm Password</label>

                    <div class="form-title">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                    </div>
                </div>
                
                

                <div class="col-md-6">
                    <input id="role" type="text" class="form-control" name="role" required style="display:none" value="tutor">

                    @if ($errors->has('role'))
                        <span class="help-block">
                            <strong>{{ $errors->first('role') }}</strong>
                        </span>
                    @endif
                </div>

                

                            
                <div class="form-group">
                    <div class="form-title">
                        <button type="submit" class="btn btn-primary">
                            Register
                        </button>
                    </div>
                </div>
                
            </form>
            <p class="loginhere">
                Sudah punya akun ?<a href="#" class="loginhere-link"> Masuk Sekarang</a>
            </p>
        </div>
    </div>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>
@endsection
