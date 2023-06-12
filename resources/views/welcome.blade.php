
    @include('header')

    <body class="antialiased">
        <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
            @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                        <a href="{{ url('/home') }}"><button class="login-btn">Home</button></a>
                    @else
                        <a href="{{ route('login') }}" ><button class="login-btn">Login</button></a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}"><button class="reg-btn">Register</button></a>
                        @endif
                    @endauth
                </div>
            @endif            
        </div>

        <div class="main-content">
            <div class="container text-center main-btns">
                <div class="row">
                    <div class="col-lg-3"></div>
                    <div class="col-lg-3 btn-login">
                        <div class="btn-group me-2" role="group" aria-label="First group">
                            <button class="login-btn">Login</button>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="btn-group me-2" role="group" aria-label="Second group">
                            <button class="reg-btn">Register</button>
                        </div>
                    </div>
                    <div class="col-lg-3"></div>
                </div>
            </div>
        </div>

    </body>
</html>
