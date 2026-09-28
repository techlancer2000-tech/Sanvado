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
                        cx="12"
                        cy="12"
                        r="9"
                    />

                    <path d="M12 16v.01"/>
                    <path d="M9.5 9a2.5 2.5 0 1 1 4.3 1.8c-.9.8-1.8 1.2-1.8 2.7"/>

                </svg>

            </div>

            <h1>
                Forgot your password?
            </h1>

            <p>
                No problem. Enter your email and we'll send
                you a password reset link.
            </p>

        </div>


        @if (session('status'))

            <div class="status-message">
                {{ session('status') }}
            </div>

        @endif


        <form
            method="POST"
            action="{{ route('password.email') }}"
            class="auth-form"
        >

            @csrf


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
                    autofocus
                    placeholder="you@example.com"
                >

                @if($errors->get('email'))

                    <div class="form-error">
                        {{ $errors->first('email') }}
                    </div>

                @endif

            </div>


            <button
                type="submit"
                class="auth-button"
            >
                Email password reset link
            </button>

        </form>


        <div class="auth-switch">

            <a
                href="{{ route('login') }}"
                class="auth-link"
            >
                ← Back to login
            </a>

        </div>

    </div>

</x-guest-layout>