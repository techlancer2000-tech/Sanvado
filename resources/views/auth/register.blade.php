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
                    <circle
                        cx="9"
                        cy="8"
                        r="4"
                    />

                    <path
                        d="M3 21a6 6 0 0 1 12 0"
                    />

                    <path d="M19 8v6"/>
                    <path d="M16 11h6"/>

                </svg>

            </div>

            <h1>
                Create your account
            </h1>

            <p>
                Join Sanvado and start meaningful conversations.
            </p>

        </div>


        <form
            method="POST"
            action="{{ route('register') }}"
            class="auth-form"
        >

            @csrf


            {{-- Name --}}

            <div class="form-group">

                <label
                    for="name"
                    class="form-label"
                >
                    Name
                </label>

                <input
                    id="name"
                    class="form-input"
                    type="text"
                    name="name"
                    value="{{ old('name') }}"
                    required
                    autofocus
                    autocomplete="name"
                    placeholder="Enter your name"
                >

                @if($errors->get('name'))

                    <div class="form-error">
                        {{ $errors->first('name') }}
                    </div>

                @endif

            </div>


            {{-- Email --}}

            <div class="form-group">

                <label
                    for="email"
                    class="form-label"
                >
                    Email address
                </label>

                <input
                    id="email"
                    class="form-input"
                    type="email"
                    name="email"
                    value="{{ old('email') }}"
                    required
                    autocomplete="username"
                    placeholder="you@example.com"
                >

                @if($errors->get('email'))

                    <div class="form-error">
                        {{ $errors->first('email') }}
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
                    autocomplete="new-password"
                    placeholder="Create a password"
                >

                @if($errors->get('password'))

                    <div class="form-error">
                        {{ $errors->first('password') }}
                    </div>

                @endif

            </div>


            {{-- Confirm password --}}

            <div class="form-group">

                <label
                    for="password_confirmation"
                    class="form-label"
                >
                    Confirm password
                </label>

                <input
                    id="password_confirmation"
                    class="form-input"
                    type="password"
                    name="password_confirmation"
                    required
                    autocomplete="new-password"
                    placeholder="Confirm your password"
                >

                @if($errors->get('password_confirmation'))

                    <div class="form-error">
                        {{ $errors->first('password_confirmation') }}
                    </div>

                @endif

            </div>


            <button
                type="submit"
                class="auth-button"
            >

                Create account

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


        @if(Route::has('login'))

            <div class="auth-switch">

                Already have an account?

                <a
                    href="{{ route('login') }}"
                    class="auth-link"
                >
                    Sign in
                </a>

            </div>

        @endif

    </div>

</x-guest-layout>