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
                    <path
                        d="M4 5h16v14H4z"
                    />

                    <path
                        d="m4 7 8 6 8-6"
                    />

                </svg>

            </div>

            <h1>
                Verify your email
            </h1>

            <p>
                Thanks for signing up. Before getting started,
                please verify your email address by clicking the
                link we just sent you.
            </p>

        </div>


        @if (session('status') === 'verification-link-sent')

            <div class="status-message">

                A new verification link has been sent
                to your email address.

            </div>

        @endif


        <form
            method="POST"
            action="{{ route('verification.send') }}"
            class="auth-form"
        >

            @csrf

            <button
                type="submit"
                class="auth-button"
            >
                Resend verification email
            </button>

        </form>


        <div class="auth-switch">

            <form
                method="POST"
                action="{{ route('logout') }}"
            >

                @csrf

                <button
                    type="submit"
                    class="auth-link"
                    style="
                        border:0;
                        background:none;
                        cursor:pointer;
                    "
                >
                    Log out
                </button>

            </form>

        </div>

    </div>

</x-guest-layout>