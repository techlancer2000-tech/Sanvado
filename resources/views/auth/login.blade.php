<x-guest-layout>

    <div class="auth-card">

        <div class="auth-heading">

            <div class="auth-heading-icon">

                <svg
                    viewBox="0 0 24 24"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="1.8"
                >
                    <path d="M15 3h4a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-4"/>
                    <path d="m10 17 5-5-5-5"/>
                    <path d="M15 12H3"/>
                </svg>

            </div>

            <h1>
                Welcome back
            </h1>

            <p>
                Sign in to continue your conversations.
            </p>

        </div>


        <form
            method="POST"
            action="{{ route('login') }}"
            class="auth-form"
        >

            @csrf


            {{-- Login --}}

            <div class="form-group">

                <label
                    for="login"
                    class="form-label"
                >
                    Email or Unique Code
                </label>

                <input
                    id="login"
                    class="form-input"
                    type="text"
                    name="login"
                    value="{{ old('login') }}"
                    required
                    autofocus
                    autocomplete="username"
                    placeholder="Enter email or 8-digit code"
                >

                @if($errors->get('login'))

                    <div class="form-error">
                        {{ $errors->first('login') }}
                    </div>

                @endif

            </div>


            {{-- Password --}}

            <div class="form-group">

                <label
                    for="password"
                    class="form-label"
                >
                    Password
                </label>

                <input
                    id="password"
                    class="form-input"
                    type="password"
                    name="password"
                    required
                    autocomplete="current-password"
                    placeholder="Enter your password"
                >

                @if($errors->get('password'))

                    <div class="form-error">
                        {{ $errors->first('password') }}
                    </div>

                @endif

            </div>


            {{-- Remember / Forgot --}}

            <div class="remember-row">

                <label
                    for="remember_me"
                    class="checkbox-label"
                >

                    <input
                        id="remember_me"
                        type="checkbox"
                        class="checkbox"
                        name="remember"
                    >

                    <span>
                        Remember me
                    </span>

                </label>


                @if(Route::has('password.request'))

                    <a
                        href="{{ route('password.request') }}"
                        class="auth-link"
                    >
                        Forgot password?
                    </a>

                @endif

            </div>


            {{-- Button --}}

            <button
                type="submit"
                class="auth-button"
            >

                Sign in

                <svg
                    width="17"
                    height="17"
                    viewBox="0 0 24 24"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="2"
                >
                    <path d="M5 12h14"/>
                    <path d="m13 6 6 6-6 6"/>
                </svg>

            </button>

        </form>


        {{-- Register --}}

        @if(Route::has('register'))

            <div class="auth-switch">

                Don't have an account?

                <a
                    href="{{ route('register') }}"
                    class="auth-link"
                >
                    Create one
                </a>

            </div>

        @endif

    </div>

</x-guest-layout>