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
						<div class="d-flex align-items-center">Register
						</div>
					</div>
				</div>
				<!-- END login-header -->
				
				<!-- BEGIN login-content -->
				<div class="login-content">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        {{-- name --}}
                        <div class="form-floating mb-20px">
							<input type="text" class="form-control fs-13px h-45px border-0" placeholder="name" name="name" value="{{ old('name') }}" requiredd />
							<label class="d-flex align-items-center text-gray-600 fs-13px">Fulname</label>
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
						</div>
                        {{-- end name --}}
                        {{-- email --}}
                        <div class="form-floating mb-20px">
							<input type="email" class="form-control fs-13px h-45px border-0" placeholder="Email" name="email" value="{{ old('email') }}" requiredd />
							<label class="d-flex align-items-center text-gray-600 fs-13px">Email Addres</label>
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
						</div>
                        {{-- end email --}}
                        {{-- pass --}}
						<div class="form-floating mb-20px">
							<input type="password" class="form-control fs-13px h-45px border-0" placeholder="Password" name="password" required />
							<label class="d-flex align-items-center text-gray-600 fs-13px">Password</label>
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
						</div>
                        <div class="form-floating mb-20px">
							<input type="password" class="form-control fs-13px h-45px border-0" placeholder="Confirm Password" name="password_confirmation" required />
							<label class="d-flex align-items-center text-gray-600 fs-13px">Confirm Password</label>
                            @error('password_confirmation')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
						</div>
                        {{-- end pass --}}
					
						<div class="mb-20px">
							<button type="submit" class="btn btn-success d-block w-100 h-45px btn-lg">{{ __('Register') }}</button>
						</div>
						<div class="text-gray-500">
							Already Acoount?<a href="{{ route('login') }}" class="text-white"> here</a>
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
