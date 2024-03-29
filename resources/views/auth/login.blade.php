@extends('layouts.app')

@section('content')
<div class="container">
    <div class="justify-content-center">
        <div class="card mb-3" style="max-width: 100%;height:100%">
            <div class="row no-gutters">
              <div class="col-md-7" style="border-right:2px solid whitesmoke !important">
                <img src="{{asset('images/undraw_security_o890.svg')}}" alt="login" class="card-img" >
              </div>
              <div class="col-md-5 ">
                <div class="card-body ">
                  {{-- <h5 class="card-title">Card title</h5>
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> --}}
                  <div class="card " style="height:100%">
                    <div class="card-header">{{ __('Login') }}</div>

                    <div class="card-body ">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            {{-- <div class="form-group row">
                                <div class="col-md-6 offset-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>
                            </div> --}}

                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn login-btn mx-auto">
                                        {{ __('Login') }}
                                    </button>

                                    {{-- @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    @endif --}}
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class=" d-flex justify-content-center">
                    <div class="footer-social-icon mt-5">
                        <span class="font-weight-bold">Follow us</span> <br>
                            <a target="_blank" href="https://web.facebook.com/Hamubere-102919924765309/?modal=admin_todo_tour" class="ml-3"><img class="footer-img" src="https://img.icons8.com/office/48/000000/facebook-new.png"/></a>
                            <a target="_blank" href="https://www.instagram.com/hamubere_ltd/" class="ml-3"><img  class="footer-img" src="https://img.icons8.com/color/50/000000/instagram-new.png"/></a>
                            <a target="_blank" href="https://www.twitter.com/hamubere" class="ml-3"><img class="footer-img" src="https://img.icons8.com/nolan/55/twitter.png"/></a>
                            <a target="_blank" href="mailto:hamubereltd@gmail.com" class="ml-3 "><img class="footer-img" src="https://img.icons8.com/color/48/000000/gmail.png"/></a>
                    </div>
                </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
@endsection
