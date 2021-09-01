@extends('layout.layout')

@section('content')
    <!-- MAIN -->
    <main class="main">
        <div class="register-main-container">
            <div class="register-main">
                <h2 class="mb-3">Login</h2>
                <form action="{{ route('login') }}" method="POST">
                    @csrf
                    <label for="username">Username</label>
                    <input id="username" name="username" type="text" class="input-custom"
                        value="{{ old('username') }}" />

                    <label for="password">Password</label>
                    <input id="password" name="password" type="password" class="input-custom" />

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
