@extends('layouts.app')

@section('content')
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}

<section  class="Register" id="Register">

    <div class="container">
<div class="d-flex justify-content-center h-100">
<div class="card2">
    <div class="card-header">Register</div>
  <div class="card-body">
      <form  method="POST" action="{{ route('register') }}">
        @csrf
          <div class="input-group form-group">
              <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-user"></i></span>
              </div>

              <input id="name" type="text"  placeholder="Your Name"class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

              @error('name')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
                          </div>
                          <div class="input-group form-group">
              <div class="input-group-prepend">
                  <span class="input-group-text"><i class="far fa-envelope"></i></span>
              </div>
                <input id="email" type="email" placeholder="Email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

              @error('email')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror

                          </div>
                          {{-- <div class="input-group form-group">
              <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-birthday-cake"></i></span>
              </div>
                              <input type="date" class="form-control" placeholder="Date of birth" />

                          </div> --}}
                          {{-- <div class="input-group form-group">
              <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-mobile-alt"></i></span>
              </div>
                              <input type="number" class="form-control" placeholder="You Phone Number" />

                          </div> --}}

          <div class="input-group form-group">
              <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-key"></i></span>
              </div>
              <input id="password" type="password" placeholder="Password"class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

              @error('password')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror

                          </div>

                          <div class="input-group form-group">
              <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-key"></i></span>
              </div>
              <input id="password-confirm" type="password" placeholder="Repet Password" class="form-control" name="password_confirmation" required autocomplete="new-password">

          </div>

          <div class="form-group">
            <button type="submit" class="btn float-right login_btn">
                {{ __('Register') }}
            </button>

          </div>
      </form>
  </div>
  <div class="card-footer">
      <div class="d-flex justify-content-center links">
          Already have an account?<a href="{{ url('/login') }}">Sign in</a>
      </div>

  </div>
</div>
</div>
</div>
      {{-- {/* <div className="Introimage">

          <img src="modelpic.jpg" alt="my pic" />
      </div> */} --}}
  </section>@endsection
