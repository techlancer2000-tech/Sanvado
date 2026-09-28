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
                    <rect
                        x="5"
                        y="10"
                        width="14"
                        height="10"
                        rx="2"
                    />

                    <path
                        d="M8 10V7a4 4 0 0 1 8 0v3"
                    />

                </svg>

            </div>

            <h1>
                Set a new password
            </h1>

            <p>
                Choose a strong password for your Sanvado account.
            </p>

        </div>


        <form
            method="POST"
            action="{{ route('password.store') }}"
            class="auth-form"
        >

            @csrf

            <input
                type="hidden"
                name="token"
                value="{{ $request->route('token') }}"
            >


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
                    value="{{ old('email', $request->email) }}"
                    required
                    autofocus
                    autocomplete="username"
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
                    New password
                </label>

                <input
                    id="password"
                    class="form-input"
                    type="password"
                    name="password"
                    required
                    autocomplete="new-password"
                    placeholder="Enter new password"
                >

                @if($errors->get('password'))

                    <div class="form-error">
                        {{ $errors->first('password') }}
                    </div>

                @endif

            </div>


            {{-- Confirmation --}}

            <div class="form-group">

                <label
                    for="password_confirmation"
                    class="form-label"
                >
                    Confirm new password
                </label>

                <input
                    id="password_confirmation"
                    class="form-input"
                    type="password"
                    name="password_confirmation"
                    required
                    autocomplete="new-password"
                    placeholder="Confirm new password"
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
                Reset password
            </button>

        </form>

    </div>

</x-guest-layout>