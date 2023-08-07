@extends('layouts.header')

@section('content')
	<!-- BEGIN #app -->
	<div id="app" class="app">
		<!-- BEGIN login -->
		<div class="login login-v2 fw-bold">
			<!-- BEGIN login-cover -->
			<div class="login-cover">
				<div class="login-cover-img" style="background-image: url(img/login-bg/login-bg-17.jpg)" data-id="login-cover-image"></div>
				<div class="login-cover-bg"></div>
			</div>
			<!-- END login-cover -->
			
			<!-- BEGIN login-container -->
			<div class="login-container">
				<!-- BEGIN login-header -->
				<div class="login-header">
					<div class="brand">
						<div class="d-flex align-items-center">Admin
						</div>
					</div>
				</div>
				<!-- END login-header -->
				
				<!-- BEGIN login-content -->
				<div class="login-content">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-floating mb-20px">
							<input type="email" class="form-control fs-13px h-45px border-0" placeholder="Email" name="email" value="{{ old('email') }}" requiredd />
							<label class="d-flex align-items-center text-gray-600 fs-13px">Email Addres</label>
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
						</div>
						<div class="form-floating mb-20px">
							<input type="password" class="form-control fs-13px h-45px border-0" placeholder="Password" name="password" required />
							<label class="d-flex align-items-center text-gray-600 fs-13px">Password</label>
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
						</div>
						<div class="form-check mb-20px">
							<input class="form-check-input border-0" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}/>
							<label class="form-check-label fs-13px text-gray-500" for="rememberMe">
								Remember Me
							</label>
						</div>
						<div class="mb-20px">
							<button type="submit" class="btn btn-success d-block w-100 h-45px btn-lg">Sign in</button>
						</div>
						<div class="text-gray-500">
							Not a member yet? Click <a href="{{ route('register') }}" class="text-white">here</a> to register.
						</div>
					</form>
				</div>
				<!-- END login-content -->
			</div>
			<!-- END login-container -->
		</div>
		<!-- END login -->
	</div>
	<!-- END #app -->
@endsection
