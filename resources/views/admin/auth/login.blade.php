{{-- <x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />
    <h2>Admin Login </h2>
    <form method="POST" action="{{ route('admin.login') }}">
        @csrf
        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>
        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>
        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>
        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('admin.password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif
            <x-primary-button class="ms-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>{{ __('Admin Login') }}</title>
    {{-- <!-- CSS files --> --}}
    <link href= "{{asset('build/assets/admin/dist/css/tabler.min.css')}}" rel="stylesheet"/>
    <link href="{{asset('build/assets/admin/dist/css/tabler-flags.min.css')}}" rel="stylesheet"/>
    <link href="{{asset('build/assets/admin/dist/css/tabler-payments.min.css')}}" rel="stylesheet"/>
    <link href="{{asset('build/assets/admin/dist/css/tabler-vendors.min.css')}}" rel="stylesheet"/>
    {{-- <link href="{{asset('admin/dist/css/demo.min.css')}}" rel="stylesheet"/> --}}
     {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
    <style>
      @import url('https://rsms.me/inter/inter.css');
      :root {
      	--tblr-font-sans-serif: 'Inter Var', -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif;
      }
      body {
      	font-feature-settings: "cv03", "cv04", "cv11";
      }
    </style>
  </head>
  <body  class=" d-flex flex-column">
    {{-- <script src="{{asset('admin/dist/js/demo-theme.min.js')}}"></script> --}}
    <div class="page page-center">
      <div class="container container-tight py-4">
        <div class="text-center mb-4">
          <a href="/admin/login" class="navbar-brand navbar-brand-autodark">
            {{-- <img src="{{asset('admin/static/logo.svg')}}" width="32" height="32" alt="Tabler" class="navbar-brand-image"> --}}
          </a>
        </div>
        <div class="card card-md">
          <div class="card-body">
            <h2 class="h2 text-center mb-4">Admin Login</h2>
            <form method="POST" action="{{ route('admin.login')}}">
              @csrf
              <div class="mb-3">
                <label class="form-label">Email address</label>
                <input type="email" class="form-control" placeholder="your@email.com" name="email" :value="{{old('email')}}" required autofocus  autocomplete="off">
                 <x-input-error :messages="$errors->get('email')" class="mt-2" />
              </div>
              <div class="mb-2">
                <label class="form-label">
                  Password
                  <span class="form-label-description">
                    @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('admin.password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif
                  </span>
                </label>
                <div class="input-group input-group-flat">
                  <input type="password" class="form-control"  placeholder="Your password"  autocomplete="off"  name="password" required autocomplete="current-password">
                  <span class="input-group-text">
                    {{-- <a href="#" class="link-secondary" title="Show password" data-bs-toggle="tooltip"> --}}
                      <a href="#" class="link-secondary" title="Show password"
   data-bs-toggle="tooltip"
   onclick="event.preventDefault(); this.closest('.input-group').querySelector('input').type = this.closest('.input-group').querySelector('input').type === 'password' ? 'text' : 'password'">
                      <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" /><path d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6" /></svg>
                    </a>
                  </span>
                </div>
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
              </div>
              {{-- Start of form-input --}}
              {{-- eEnd of form input --}}
              <div class="mb-2">
                <label class="form-check">
                  <input type="checkbox" class="form-check-input"/>
                  <span class="form-check-label">Remember me on this device</span>
                </label>
              </div>
              <div class="form-footer">
                <button type="submit" class="btn btn-primary w-100">Sign in</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- Libs JS -->
    <!-- Tabler Core -->
    <script src="{{asset('build/assets/admin/dist/js/tabler.esm.min.js')}}" defer></script>
    {{-- <script src="{{asset('admin/dist/js/demo.min.js')}}" defer></script> --}}
  </body>
</html>
