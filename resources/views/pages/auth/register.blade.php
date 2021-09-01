@extends('layout.layout')

@section('content')
    <!-- MAIN -->
    <main class="main">
        <div class="register-main-container">
            <div class="register-main">
                <h2 class="mb-3">Register</h2>
                <form action="{{ route('register') }}" method="POST">
                    @csrf
                    <label for="username">Username</label>
                    <input id="username" name="username" type="text" class="input-custom"
                        value="{{ old('username') }}" />

                    @error('username')
                        <p class="text-danger mb-3 auth-error">
                            {{ $message }}
                        </p>
                    @enderror

                    <label for="email">E-mail</label>
                    <input id="email" type="email" name="email" class="input-custom" value="{{ old('email') }}" />

                    @error('email')
                        <p class="text-danger mb-3 auth-error">
                            {{ $message }}
                        </p>
                    @enderror

                    <label for="password">Password</label>
                    <input id="password" name="password" type="password" class="input-custom" />

                    @error('password')
                        <p class="text-danger mb-3 auth-error">
                            {{ $message }}
                        </p>
                    @enderror

                    <label for="password_confirmed">Confirm password</label>
                    <input id="password_confirmed" name="password_confirmed" type="password" class="input-custom" />

                    @error('password_confirmed')
                        <p class="text-danger mb-3 auth-error">
                            {{ $message }}
                        </p>
                    @enderror
                    <button type="submit" class="btn-primary-custom w-100 mt-3">Register</button>
                </form>
            </div>
        </div>
    </main>

    <script>
        window.onload = () => {
            resizeFullHeight('register-main-container')
        }
        window.onresize = () => {
            resizeFullHeight('register-main-container')
        }
    </script>

@endsection
