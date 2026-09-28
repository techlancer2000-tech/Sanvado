<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <meta charset="utf-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1"
    >

    <title>
        {{ $title ?? 'Sanvado' }}
    </title>

    <meta
        name="description"
        content="Sanvado — Simple conversations. Meaningful connections."
    >

    {{-- Sanvado favicon --}}
    <link
        rel="icon"
        href="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 64 64'%3E%3Crect width='64' height='64' rx='16' fill='%23556832'/%3E%3Cpath d='M16 21.5C16 17.9 18.9 15 22.5 15h19c3.6 0 6.5 2.9 6.5 6.5v14c0 3.6-2.9 6.5-6.5 6.5H31l-9 7v-7h.5c-3.6 0-6.5-2.9-6.5-6.5v-14Z' fill='white'/%3E%3Ccircle cx='27' cy='28' r='2' fill='%23556832'/%3E%3Ccircle cx='32' cy='28' r='2' fill='%23556832'/%3E%3Ccircle cx='37' cy='28' r='2' fill='%23556832'/%3E%3C/svg%3E"
    >

    <link
        rel="preconnect"
        href="https://fonts.bunny.net"
    >

    <link
        href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600,700,800"
        rel="stylesheet"
    >

    <style>

        :root {
            --olive: #556832;
            --olive-dark: #405125;
            --olive-light: #eef3e6;
            --olive-soft: #f6f8f1;

            --text: #17200f;
            --text-light: #66705c;

            --border: #e2e7dc;
            --white: #ffffff;

            --danger: #c64b4b;
        }

        * {
            box-sizing: border-box;
        }

        html {
            min-height: 100%;
        }

        body {
            margin: 0;

            min-height: 100vh;

            font-family:
                'Instrument Sans',
                Arial,
                sans-serif;

            color: var(--text);

            background:
                radial-gradient(
                    circle at 10% 10%,
                    rgba(85, 104, 50, .09),
                    transparent 28%
                ),
                radial-gradient(
                    circle at 90% 90%,
                    rgba(85, 104, 50, .08),
                    transparent 28%
                ),
                #ffffff;

            -webkit-font-smoothing: antialiased;
        }

        a {
            color: inherit;
            text-decoration: none;
        }

        button,
        input {
            font-family: inherit;
        }

        /* =========================================
           PAGE
        ========================================= */

        .auth-page {
            min-height: 100vh;

            display: flex;
            flex-direction: column;
        }

        /* =========================================
           HEADER
        ========================================= */

        .auth-header {
            padding: 20px;
        }

        .auth-header-inner {
            width: min(
                100%,
                1180px
            );

            margin: 0 auto;

            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        /* =========================================
           LOGO
        ========================================= */

        .sanvado-logo {
            display: inline-flex;
            align-items: center;
            gap: 10px;
        }

        .sanvado-logo-icon {
            width: 42px;
            height: 42px;

            display: flex;
            align-items: center;
            justify-content: center;

            border-radius: 12px;

            background: var(--olive);

            box-shadow:
                0 8px 20px rgba(85, 104, 50, .16);
        }

        .sanvado-logo-icon svg {
            width: 25px;
            height: 25px;
        }

        .sanvado-logo-name {
            font-size: 21px;
            font-weight: 700;

            letter-spacing: -.6px;
        }

        /* =========================================
           MAIN
        ========================================= */

        .auth-main {
            flex: 1;

            display: flex;
            align-items: center;
            justify-content: center;

            padding:
                30px
                20px
                70px;
        }

        .auth-container {
            width: 100%;
            max-width: 470px;
        }

        /* =========================================
           AUTH CARD
        ========================================= */

        .auth-card {
            padding: 38px;

            border:
                1px solid
                var(--border);

            border-radius: 24px;

            background: rgba(255,255,255,.96);

            box-shadow:
                0 25px 70px rgba(45, 61, 27, .09);
        }

        .auth-heading {
            margin-bottom: 30px;

            text-align: center;
        }

        .auth-heading-icon {
            width: 52px;
            height: 52px;

            display: flex;
            align-items: center;
            justify-content: center;

            margin: 0 auto 18px;

            border-radius: 15px;

            background: var(--olive-light);

            color: var(--olive);
        }

        .auth-heading-icon svg {
            width: 25px;
            height: 25px;
        }

        .auth-heading h1 {
            margin: 0;

            font-size: 27px;
            line-height: 1.2;

            letter-spacing: -.8px;
        }

        .auth-heading p {
            margin: 9px 0 0;

            font-size: 14px;
            line-height: 1.6;

            color: var(--text-light);
        }

        /* =========================================
           FORM
        ========================================= */

        .auth-form {
            display: flex;
            flex-direction: column;
            gap: 19px;
        }

        .form-group {
            display: flex;
            flex-direction: column;
        }

        .form-label {
            margin-bottom: 7px;

            font-size: 13px;
            font-weight: 600;

            color: #37412f;
        }

        .form-input {
            width: 100%;

            height: 46px;

            padding:
                0
                13px;

            border:
                1px solid
                #dfe5d9;

            border-radius: 10px;

            outline: none;

            background: #ffffff;

            color: var(--text);

            font-size: 14px;

            transition:
                border-color .2s ease,
                box-shadow .2s ease,
                background .2s ease;
        }

        .form-input::placeholder {
            color: #a2aa9c;
        }

        .form-input:hover {
            border-color: #cbd4c2;
        }

        .form-input:focus {
            border-color: var(--olive);

            background: #fff;

            box-shadow:
                0 0 0 3px
                rgba(85, 104, 50, .10);
        }

        .form-error {
            margin-top: 6px;

            color: var(--danger);

            font-size: 12px;
            line-height: 1.4;
        }

        /* =========================================
           CHECKBOX
        ========================================= */

        .remember-row {
            display: flex;
            align-items: center;
            justify-content: space-between;

            gap: 10px;
        }

        .checkbox-label {
            display: inline-flex;
            align-items: center;
            gap: 8px;

            cursor: pointer;

            color: var(--text-light);

            font-size: 13px;
        }

        .checkbox {
            width: 16px;
            height: 16px;

            accent-color: var(--olive);
        }

        /* =========================================
           LINKS
        ========================================= */

        .auth-link {
            color: var(--olive);

            font-size: 13px;
            font-weight: 600;
        }

        .auth-link:hover {
            color: var(--olive-dark);

            text-decoration: underline;
        }

        /* =========================================
           BUTTON
        ========================================= */

        .auth-button {
            width: 100%;

            height: 47px;

            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;

            margin-top: 4px;

            border: 0;
            border-radius: 10px;

            background: var(--olive);

            color: white;

            font-size: 14px;
            font-weight: 600;

            cursor: pointer;

            transition:
                background .2s ease,
                transform .2s ease,
                box-shadow .2s ease;
        }

        .auth-button:hover {
            background: var(--olive-dark);

            transform: translateY(-1px);

            box-shadow:
                0 10px 25px
                rgba(85, 104, 50, .18);
        }

        .auth-button:active {
            transform: translateY(0);
        }

        /* =========================================
           FOOTER
        ========================================= */

        .auth-footer {
            padding: 20px;

            text-align: center;

            color: #8a9284;

            font-size: 12px;
        }

        /* =========================================
           BOTTOM LINK
        ========================================= */

        .auth-switch {
            margin-top: 24px;

            padding-top: 22px;

            border-top:
                1px solid
                #edf0ea;

            text-align: center;

            color: var(--text-light);

            font-size: 13px;
        }

        /* =========================================
           STATUS MESSAGE
        ========================================= */

        .status-message {
            margin-bottom: 20px;

            padding: 11px 13px;

            border:
                1px solid
                #dce8d0;

            border-radius: 10px;

            background: var(--olive-soft);

            color: var(--olive-dark);

            font-size: 13px;

            line-height: 1.5;
        }

        /* =========================================
           MOBILE
        ========================================= */

        @media (max-width: 600px) {

            .auth-header {
                padding: 14px;
            }

            .sanvado-logo-icon {
                width: 38px;
                height: 38px;

                border-radius: 10px;
            }

            .sanvado-logo-name {
                font-size: 19px;
            }

            .auth-main {
                align-items: flex-start;

                padding:
                    20px
                    14px
                    45px;
            }

            .auth-card {
                padding: 27px 20px;

                border-radius: 20px;
            }

            .auth-heading h1 {
                font-size: 24px;
            }

            .auth-heading {
                margin-bottom: 25px;
            }

            .auth-footer {
                padding: 15px;
            }
        }

        @media (max-width: 380px) {

            .auth-card {
                padding:
                    24px
                    16px;
            }

            .remember-row {
                align-items: flex-start;
                flex-direction: column;
            }
        }

    </style>

</head>


<body>

<div class="auth-page">


    {{-- HEADER --}}

    <header class="auth-header">

        <div class="auth-header-inner">

            <a
                href="{{ url('/') }}"
                class="sanvado-logo"
            >

                <div class="sanvado-logo-icon">

                    <svg
                        viewBox="0 0 64 64"
                        fill="none"
                    >

                        <path
                            d="M16 21.5C16 17.9 18.9 15 22.5 15h19c3.6 0 6.5 2.9 6.5 6.5v14c0 3.6-2.9 6.5-6.5 6.5H31l-9 7v-7h.5c-3.6 0-6.5-2.9-6.5-6.5v-14Z"
                            fill="white"
                        />

                        <circle
                            cx="27"
                            cy="28"
                            r="2"
                            fill="#556832"
                        />

                        <circle
                            cx="32"
                            cy="28"
                            r="2"
                            fill="#556832"
                        />

                        <circle
                            cx="37"
                            cy="28"
                            r="2"
                            fill="#556832"
                        />

                    </svg>

                </div>

                <span class="sanvado-logo-name">
                    Sanvado
                </span>

            </a>

        </div>

    </header>


    {{-- CONTENT --}}

    <main class="auth-main">

        <div class="auth-container">

            {{ $slot }}

        </div>

    </main>


    {{-- FOOTER --}}

    <footer class="auth-footer">

        © {{ date('Y') }} Sanvado.
        Simple conversations. Meaningful connections.

    </footer>


</div>

</body>

</html>