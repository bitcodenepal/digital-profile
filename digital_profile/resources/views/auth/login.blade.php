@extends('layouts.app')

@section('login-content')
    <div class="card">
        <div class="card-body login-card-body">
            <p class="login-box-msg">तपाइँको सत्र सुरू गर्न साइन इन गर्नुहोस्</p>
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="input-group mb-3">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="तपाईंको इमेल ठेगाना हाल्नुहोस">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                        </div>
                    </div>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="input-group mb-3">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="तपाईको पासवर्ड हाल्नुहोस">
                    <div class="input-group-append">
                        <div class="input-group-text">
                          <span class="fas fa-lock"></span>
                        </div>
                    </div>
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                            <label class="form-check-label" for="remember">
                                {{ __('साईन ईन भएको सम्झनुहोस्') }}
                            </label>
                        </div>
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary btn-block">
                            {{ __('साईन ईन') }}
                        </button>
                    </div>
                </div>

                {{-- <div class="form-group row mt-3">
                    <div class="col-12 text-center">
                        @if (Route::has('password.request'))
                            <a class="btn btn-danger btn-block" href="{{ route('password.request') }}">
                                {{ __('तपाईको पासवर्ड बिर्सनुभयो?') }}
                            </a>
                        @endif
                    </div>
                </div> --}}
            </form>
        </div>
    </div>
@endsection
