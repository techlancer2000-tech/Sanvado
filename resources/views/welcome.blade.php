<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Sanvado — Simple conversations. Meaningful connections.</title>

    <meta
        name="description"
        content="Sanvado makes connecting with people simple. Find people using their unique code and start meaningful conversations."
    >

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

        /* =====================================================
           VARIABLES
        ===================================================== */

        :root {
            --olive: #556832;
            --olive-dark: #405125;
            --olive-light: #eef3e6;
            --olive-soft: #f6f8f1;

            --text: #17200f;
            --text-light: #66705c;

            --white: #ffffff;
            --border: #e5e9df;

            --container: 1180px;
        }


        /* =====================================================
           RESET
        ===================================================== */

        * {
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            margin: 0;
            padding: 0;

            font-family:
                'Instrument Sans',
                Arial,
                sans-serif;

            color: var(--text);
            background: var(--white);

            -webkit-font-smoothing: antialiased;
        }

        a {
            color: inherit;
            text-decoration: none;
        }

        button {
            font-family: inherit;
        }


        /* =====================================================
           COMMON
        ===================================================== */

        .container {
            width: min(
                calc(100% - 40px),
                var(--container)
            );

            margin: 0 auto;
        }


        /* =====================================================
           NAVBAR
        ===================================================== */

        .navbar-wrapper {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;

            z-index: 100;

            padding: 16px 20px;
        }

        .navbar {
            width: min(
                100%,
                1180px
            );

            margin: 0 auto;

            height: 66px;

            padding: 0 16px;

            display: flex;
            align-items: center;
            justify-content: space-between;

            background: rgba(255, 255, 255, .94);

            border: 1px solid rgba(229, 233, 223, .9);

            border-radius: 18px;

            box-shadow:
                0 8px 30px rgba(30, 45, 15, .06);

            backdrop-filter: blur(15px);
        }


        /* =====================================================
           LOGO
        ===================================================== */

        .brand {
            display: flex;
            align-items: center;
            gap: 10px;

            flex-shrink: 0;
        }

        .brand-icon {
            width: 40px;
            height: 40px;

            display: flex;
            align-items: center;
            justify-content: center;

            border-radius: 12px;

            background: var(--olive);
        }

        .brand-icon svg {
            width: 24px;
            height: 24px;
        }

        .brand-name {
            font-size: 20px;
            font-weight: 700;

            letter-spacing: -.5px;
        }


        /* =====================================================
           NAVIGATION
        ===================================================== */

        .nav-links {
            display: flex;
            align-items: center;
            gap: 34px;

            margin-left: auto;
            margin-right: 35px;
        }

        .nav-links a {
            font-size: 14px;
            font-weight: 500;

            color: #66705c;

            transition: .2s ease;
        }

        .nav-links a:hover {
            color: var(--olive);
        }


        /* =====================================================
           NAV ACTIONS
        ===================================================== */

        .nav-actions {
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .login-button {
            padding: 11px 16px;

            border-radius: 10px;

            font-size: 14px;
            font-weight: 600;

            color: #4d5647;

            transition: .2s ease;
        }

        .login-button:hover {
            background: var(--olive-soft);
            color: var(--olive);
        }

        .primary-button {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 8px;

            padding: 12px 18px;

            border: 0;
            border-radius: 11px;

            background: var(--olive);
            color: white;

            font-size: 14px;
            font-weight: 600;

            cursor: pointer;

            transition:
                transform .2s ease,
                background .2s ease,
                box-shadow .2s ease;
        }

        .primary-button:hover {
            background: var(--olive-dark);

            transform: translateY(-1px);

            box-shadow:
                0 10px 25px rgba(85, 104, 50, .2);
        }


        /* =====================================================
           HERO
        ===================================================== */

        .hero {
            position: relative;

            overflow: hidden;

            padding:
                155px
                0
                100px;

            background:
                radial-gradient(
                    circle at 80% 25%,
                    rgba(85, 104, 50, .12),
                    transparent 30%
                ),

                radial-gradient(
                    circle at 10% 90%,
                    rgba(85, 104, 50, .08),
                    transparent 28%
                ),

                #ffffff;
        }

        .hero::before {
            content: "";

            position: absolute;

            width: 420px;
            height: 420px;

            right: -220px;
            top: 120px;

            border-radius: 50%;

            background: rgba(85, 104, 50, .035);

            filter: blur(5px);
        }

        .hero-grid {
            position: relative;

            display: grid;

            grid-template-columns:
                minmax(0, 1fr)
                minmax(0, 1fr);

            gap: 80px;

            align-items: center;
        }


        /* =====================================================
           HERO CONTENT
        ===================================================== */

        .hero-content {
            max-width: 590px;
        }

        .eyebrow {
            display: inline-flex;
            align-items: center;
            gap: 8px;

            padding: 8px 13px;

            border:
                1px solid
                #dfe6d5;

            border-radius: 999px;

            background: var(--olive-soft);

            color: var(--olive);

            font-size: 13px;
            font-weight: 600;
        }

        .eyebrow-dot {
            width: 7px;
            height: 7px;

            border-radius: 50%;

            background: var(--olive);
        }

        .hero h1 {
            margin: 22px 0 0;

            font-size: clamp(
                48px,
                5vw,
                72px
            );

            line-height: 1.04;

            letter-spacing: -3.5px;

            font-weight: 800;
        }

        .hero h1 span {
            color: var(--olive);
        }

        .hero-description {
            max-width: 560px;

            margin: 25px 0 0;

            font-size: 18px;

            line-height: 1.75;

            color: var(--text-light);
        }

        .hero-buttons {
            display: flex;
            align-items: center;
            gap: 12px;

            margin-top: 30px;
        }

        .secondary-button {
            display: inline-flex;
            align-items: center;
            justify-content: center;

            padding: 12px 19px;

            border:
                1px solid
                var(--border);

            border-radius: 11px;

            background: white;

            font-size: 14px;
            font-weight: 600;

            transition: .2s ease;
        }

        .secondary-button:hover {
            border-color: var(--olive);

            color: var(--olive);

            background: var(--olive-soft);
        }

        .hero-points {
            display: flex;
            flex-wrap: wrap;

            gap: 20px;

            margin-top: 26px;
        }

        .hero-point {
            display: flex;
            align-items: center;
            gap: 7px;

            font-size: 13px;

            color: var(--text-light);
        }

        .check {
            width: 18px;
            height: 18px;

            display: flex;
            align-items: center;
            justify-content: center;

            border-radius: 50%;

            background: var(--olive-light);

            color: var(--olive);

            font-size: 11px;
            font-weight: 800;
        }


        /* =====================================================
           CHAT PREVIEW
        ===================================================== */

        .hero-preview {
            position: relative;

            width: 100%;

            max-width: 520px;

            margin-left: auto;
        }

        .chat-card {
            overflow: hidden;

            background: white;

            border:
                1px solid
                #e8ece4;

            border-radius: 25px;

            box-shadow:
                0 35px 90px rgba(52, 68, 33, .14),
                0 8px 30px rgba(0, 0, 0, .04);
        }

        .chat-header {
            display: flex;
            align-items: center;
            justify-content: space-between;

            padding: 18px 20px;

            border-bottom:
                1px solid
                #edf0eb;
        }

        .chat-user {
            display: flex;
            align-items: center;
            gap: 11px;
        }

        .avatar {
            position: relative;

            width: 44px;
            height: 44px;

            display: flex;
            align-items: center;
            justify-content: center;

            border-radius: 50%;

            background: var(--olive-light);

            color: var(--olive);

            font-size: 13px;
            font-weight: 700;
        }

        .online-dot {
            position: absolute;

            width: 11px;
            height: 11px;

            right: 0;
            bottom: 1px;

            border:
                2px solid
                white;

            border-radius: 50%;

            background: #39a85c;
        }

        .chat-user-info strong {
            display: block;

            font-size: 14px;
        }

        .chat-user-info span {
            display: block;

            margin-top: 3px;

            font-size: 11px;

            color: #3ba45a;
        }

        .chat-menu {
            color: #8b9484;

            font-size: 20px;
        }


        /* =====================================================
           CHAT BODY
        ===================================================== */

        .chat-body {
            min-height: 365px;

            padding: 25px 20px;

            background: #fbfcfa;

            display: flex;
            flex-direction: column;

            gap: 18px;
        }

        .message-row {
            display: flex;
        }

        .message-row.received {
            justify-content: flex-start;
        }

        .message-row.sent {
            justify-content: flex-end;
        }

        .message {
            max-width: 72%;

            padding: 11px 14px;

            border-radius: 16px;

            font-size: 13px;

            line-height: 1.55;

            box-shadow:
                0 2px 8px rgba(0, 0, 0, .025);
        }

        .received .message {
            border-top-left-radius: 5px;

            background: white;

            color: #4e5749;
        }

        .sent .message {
            border-top-right-radius: 5px;

            background: var(--olive);

            color: white;
        }


        /* =====================================================
           CHAT INPUT
        ===================================================== */

        .chat-input-area {
            padding: 14px;

            border-top:
                1px solid
                #edf0eb;

            background: white;
        }

        .chat-input {
            height: 46px;

            display: flex;
            align-items: center;

            padding: 0 7px 0 14px;

            border:
                1px solid
                #e1e6dc;

            border-radius: 11px;

            background: #fafbf9;
        }

        .chat-placeholder {
            flex: 1;

            color: #a1a89a;

            font-size: 13px;
        }

        .send-button {
            width: 34px;
            height: 34px;

            display: flex;
            align-items: center;
            justify-content: center;

            border: 0;
            border-radius: 9px;

            background: var(--olive);

            color: white;
        }


        /* =====================================================
           FLOATING CARDS
        ===================================================== */

        .floating-card {
            position: absolute;

            display: flex;
            align-items: center;
            gap: 10px;

            padding: 12px 15px;

            border:
                1px solid
                #e9ede5;

            border-radius: 14px;

            background: white;

            box-shadow:
                0 18px 40px rgba(40, 55, 25, .12);

            animation: float 5s ease-in-out infinite;
        }

        .floating-card.left {
            left: -45px;
            top: 65px;
        }

        .floating-card.right {
            right: -35px;
            bottom: 35px;

            animation-delay: 1.5s;
        }

        .floating-avatar {
            width: 37px;
            height: 37px;

            display: flex;
            align-items: center;
            justify-content: center;

            flex-shrink: 0;

            border-radius: 50%;

            background: var(--olive-light);

            color: var(--olive);

            font-size: 11px;
            font-weight: 700;
        }

        .floating-text strong {
            display: block;

            font-size: 12px;
        }

        .floating-text span {
            display: block;

            margin-top: 2px;

            font-size: 10px;

            color: #8a9382;
        }

        @keyframes float {
            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-8px);
            }
        }


        /* =====================================================
           SECTION
        ===================================================== */

        .section {
            padding: 100px 0;
        }

        .section-light {
            background: var(--olive-soft);
        }

        .section-heading {
            max-width: 650px;

            margin: 0 auto;

            text-align: center;
        }

        .section-label {
            display: block;

            margin-bottom: 12px;

            color: var(--olive);

            font-size: 12px;
            font-weight: 700;

            letter-spacing: 2px;

            text-transform: uppercase;
        }

        .section-heading h2 {
            margin: 0;

            font-size: clamp(
                32px,
                4vw,
                44px
            );

            line-height: 1.15;

            letter-spacing: -1.8px;
        }

        .section-heading p {
            margin: 16px 0 0;

            font-size: 17px;

            line-height: 1.7;

            color: var(--text-light);
        }


        /* =====================================================
           FEATURES
        ===================================================== */

        .features {
            display: grid;

            grid-template-columns:
                repeat(3, minmax(0, 1fr));

            gap: 18px;

            margin-top: 55px;
        }

        .feature {
            padding: 28px;

            border:
                1px solid
                #e8ece4;

            border-radius: 22px;

            background: white;

            transition:
                transform .25s ease,
                box-shadow .25s ease,
                border-color .25s ease;
        }

        .feature:hover {
            transform: translateY(-5px);

            border-color:
                rgba(85, 104, 50, .25);

            box-shadow:
                0 20px 50px rgba(85, 104, 50, .08);
        }

        .feature-icon {
            width: 48px;
            height: 48px;

            display: flex;
            align-items: center;
            justify-content: center;

            border-radius: 14px;

            background: var(--olive-light);

            color: var(--olive);
        }

        .feature-icon svg {
            width: 23px;
            height: 23px;
        }

        .feature h3 {
            margin: 21px 0 0;

            font-size: 17px;
        }

        .feature p {
            margin: 9px 0 0;

            font-size: 14px;

            line-height: 1.7;

            color: var(--text-light);
        }


        /* =====================================================
           HOW IT WORKS
        ===================================================== */

        .steps {
            position: relative;

            display: grid;

            grid-template-columns:
                repeat(3, minmax(0, 1fr));

            gap: 50px;

            margin-top: 60px;
        }

        .step {
            position: relative;

            text-align: center;
        }

        .step-number {
            width: 62px;
            height: 62px;

            display: flex;
            align-items: center;
            justify-content: center;

            margin: 0 auto;

            border-radius: 18px;

            background: var(--olive);

            color: white;

            font-size: 16px;
            font-weight: 700;

            box-shadow:
                0 12px 25px
                rgba(85, 104, 50, .18);
        }

        .step h3 {
            margin: 20px 0 0;

            font-size: 17px;
        }

        .step p {
            max-width: 280px;

            margin: 8px auto 0;

            font-size: 14px;

            line-height: 1.7;

            color: var(--text-light);
        }


        /* =====================================================
           CTA
        ===================================================== */

        .cta {
            padding: 100px 0;
        }

        .cta-box {
            position: relative;

            overflow: hidden;

            padding: 75px 30px;

            border-radius: 30px;

            background: var(--olive);

            text-align: center;
        }

        .cta-box::before {
            content: "";

            position: absolute;

            width: 350px;
            height: 350px;

            right: -120px;
            top: -180px;

            border-radius: 50%;

            background: rgba(255,255,255,.07);
        }

        .cta-box::after {
            content: "";

            position: absolute;

            width: 280px;
            height: 280px;

            left: -120px;
            bottom: -170px;

            border-radius: 50%;

            background: rgba(0,0,0,.06);
        }

        .cta-content {
            position: relative;
            z-index: 1;
        }

        .cta-icon {
            width: 55px;
            height: 55px;

            display: flex;
            align-items: center;
            justify-content: center;

            margin: 0 auto;

            border-radius: 16px;

            background: white;
        }

        .cta-box h2 {
            margin: 22px 0 0;

            color: white;

            font-size: clamp(
                30px,
                4vw,
                43px
            );

            letter-spacing: -1.5px;
        }

        .cta-box p {
            max-width: 570px;

            margin: 14px auto 0;

            color: rgba(255,255,255,.76);

            font-size: 16px;

            line-height: 1.7;
        }

        .cta-button {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 8px;

            margin-top: 28px;

            padding: 13px 21px;

            border-radius: 11px;

            background: white;

            color: var(--olive);

            font-size: 14px;
            font-weight: 700;

            transition: .2s ease;
        }

        .cta-button:hover {
            background: #f6f7f2;

            transform: translateY(-1px);
        }


        /* =====================================================
           FOOTER
        ===================================================== */

        .footer {
            border-top:
                1px solid
                #edf0eb;

            padding: 28px 0;
        }

        .footer-inner {
            display: flex;
            align-items: center;
            justify-content: space-between;

            gap: 20px;
        }

        .footer-brand {
            display: flex;
            align-items: center;
            gap: 9px;
        }

        .footer-brand .brand-icon {
            width: 34px;
            height: 34px;

            border-radius: 10px;
        }

        .footer-brand .brand-icon svg {
            width: 20px;
            height: 20px;
        }

        .footer-brand span {
            font-weight: 700;
        }

        .footer-copy {
            color: #899183;

            font-size: 12px;
        }

        .footer-links {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .footer-links a {
            font-size: 13px;

            color: #66705c;
        }

        .footer-links a:hover {
            color: var(--olive);
        }


        /* =====================================================
           TABLET
        ===================================================== */

        @media (max-width: 1000px) {

            .hero-grid {
                grid-template-columns:
                    1fr;

                gap: 65px;
            }

            .hero-content {
                max-width: 720px;

                margin: 0 auto;

                text-align: center;
            }

            .hero-description {
                margin-left: auto;
                margin-right: auto;
            }

            .hero-buttons,
            .hero-points {
                justify-content: center;
            }

            .hero-preview {
                margin: 0 auto;
            }

            .nav-links {
                gap: 20px;
                margin-right: 15px;
            }

            .features {
                grid-template-columns:
                    repeat(2, minmax(0, 1fr));
            }

            .steps {
                gap: 20px;
            }
        }


        /* =====================================================
           MOBILE
        ===================================================== */

        @media (max-width: 700px) {

            .container {
                width: min(
                    calc(100% - 28px),
                    var(--container)
                );
            }

            .navbar-wrapper {
                padding: 10px 12px;
            }

            .navbar {
                height: 58px;

                padding: 0 10px;

                border-radius: 15px;
            }

            .brand-icon {
                width: 35px;
                height: 35px;

                border-radius: 10px;
            }

            .brand-icon svg {
                width: 21px;
                height: 21px;
            }

            .brand-name {
                font-size: 18px;
            }

            .nav-links {
                display: none;
            }

            .login-button {
                display: none;
            }

            .primary-button {
                padding: 10px 13px;

                font-size: 12px;
            }


            /* HERO */

            .hero {
                padding:
                    110px
                    0
                    65px;
            }

            .hero-grid {
                gap: 50px;
            }

            .eyebrow {
                font-size: 11px;

                padding: 7px 11px;
            }

            .hero h1 {
                font-size: 45px;

                letter-spacing: -2.5px;
            }

            .hero-description {
                font-size: 15px;

                line-height: 1.65;
            }

            .hero-buttons {
                flex-direction: column;

                width: 100%;
            }

            .hero-buttons a {
                width: 100%;
            }

            .hero-points {
                justify-content: center;

                gap: 10px 16px;
            }

            .hero-point {
                font-size: 11px;
            }


            /* CHAT */

            .hero-preview {
                max-width: 100%;
            }

            .chat-card {
                border-radius: 20px;
            }

            .chat-body {
                min-height: 300px;

                padding: 20px 15px;
            }

            .message {
                max-width: 80%;

                font-size: 12px;
            }

            .floating-card {
                display: none;
            }


            /* SECTIONS */

            .section {
                padding: 70px 0;
            }

            .section-heading h2 {
                font-size: 31px;

                letter-spacing: -1px;
            }

            .section-heading p {
                font-size: 14px;
            }


            /* FEATURES */

            .features {
                grid-template-columns: 1fr;

                margin-top: 40px;
            }

            .feature {
                padding: 23px;
            }


            /* STEPS */

            .steps {
                grid-template-columns: 1fr;

                gap: 45px;

                margin-top: 45px;
            }


            /* CTA */

            .cta {
                padding: 70px 0;
            }

            .cta-box {
                padding:
                    55px
                    20px;

                border-radius: 24px;
            }

            .cta-box h2 {
                font-size: 30px;
            }

            .cta-box p {
                font-size: 14px;
            }


            /* FOOTER */

            .footer {
                padding: 24px 0;
            }

            .footer-inner {
                flex-direction: column;

                text-align: center;
            }

        }


        /* =====================================================
           SMALL MOBILE
        ===================================================== */

        @media (max-width: 400px) {

            .hero h1 {
                font-size: 39px;
            }

            .brand-name {
                font-size: 17px;
            }

            .primary-button {
                padding:
                    9px
                    11px;
            }

            .chat-body {
                min-height: 270px;
            }

        }

    </style>
</head>

<body>


{{-- =========================================================
     NAVBAR
========================================================= --}}

<header class="navbar-wrapper">

    <nav class="navbar">

        <a
            href="{{ url('/') }}"
            class="brand"
        >

            <div class="brand-icon">

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

            <span class="brand-name">
                Sanvado
            </span>

        </a>


        <div class="nav-links">

            <a href="#features">
                Features
            </a>

            <a href="#how-it-works">
                How it works
            </a>

            <a href="#about">
                About
            </a>

        </div>


        <div class="nav-actions">

            @auth

                <a
                    href="{{ url('/dashboard') }}"
                    class="primary-button"
                >
                    Dashboard
                </a>

            @else

                @if(Route::has('login'))

                    <a
                        href="{{ route('login') }}"
                        class="login-button"
                    >
                        Log in
                    </a>

                @endif

                @if(Route::has('register'))

                    <a
                        href="{{ route('register') }}"
                        class="primary-button"
                    >
                        Get started
                    </a>

                @endif

            @endauth

        </div>

    </nav>

</header>


{{-- =========================================================
     HERO
========================================================= --}}

<section class="hero">

    <div class="container">

        <div class="hero-grid">


            {{-- HERO CONTENT --}}

            <div class="hero-content">

                <div class="eyebrow">

                    <span class="eyebrow-dot"></span>

                    Simple conversations. Meaningful connections.

                </div>


                <h1>

                    Talk to people.
                    <span>Simply.</span>

                </h1>


                <p class="hero-description">

                    Sanvado makes connecting with people effortless.
                    Find someone using their unique code and start
                    a conversation without the complexity.

                </p>


                <div class="hero-buttons">

                    @if(Route::has('register'))

                        <a
                            href="{{ route('register') }}"
                            class="primary-button"
                        >

                            Start chatting

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

                        </a>

                    @endif


                    <a
                        href="#how-it-works"
                        class="secondary-button"
                    >
                        See how it works
                    </a>

                </div>


                <div class="hero-points">

                    <div class="hero-point">

                        <span class="check">
                            ✓
                        </span>

                        Easy to use

                    </div>


                    <div class="hero-point">

                        <span class="check">
                            ✓
                        </span>

                        Private conversations

                    </div>


                    <div class="hero-point">

                        <span class="check">
                            ✓
                        </span>

                        Free to start

                    </div>

                </div>

            </div>


            {{-- CHAT PREVIEW --}}

            <div class="hero-preview">


                {{-- FLOATING LEFT --}}

                <div class="floating-card left">

                    <div class="floating-avatar">
                        AK
                    </div>

                    <div class="floating-text">

                        <strong>
                            New message
                        </strong>

                        <span>
                            Hey! Are you there?
                        </span>

                    </div>

                </div>


                {{-- CHAT --}}

                <div class="chat-card">


                    <div class="chat-header">

                        <div class="chat-user">

                            <div class="avatar">

                                RS

                                <span
                                    class="online-dot"
                                ></span>

                            </div>


                            <div class="chat-user-info">

                                <strong>
                                    Rahul Shah
                                </strong>

                                <span>
                                    Online
                                </span>

                            </div>

                        </div>


                        <div class="chat-menu">
                            ⋮
                        </div>

                    </div>


                    <div class="chat-body">


                        <div class="message-row received">

                            <div class="message">

                                Hey! 👋
                                <br>
                                Are you joining us today?

                            </div>

                        </div>


                        <div class="message-row sent">

                            <div class="message">

                                Yes! I'll be there
                                in a few minutes.

                            </div>

                        </div>


                        <div class="message-row received">

                            <div class="message">

                                Perfect.
                                See you soon!

                            </div>

                        </div>


                        <div class="message-row sent">

                            <div class="message">
                                👍
                            </div>

                        </div>

                    </div>


                    <div class="chat-input-area">

                        <div class="chat-input">

                            <div class="chat-placeholder">
                                Write a message...
                            </div>


                            <div class="send-button">

                                <svg
                                    width="16"
                                    height="16"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="2"
                                >

                                    <path d="m22 2-7 20-4-9-9-4Z"/>
                                    <path d="M22 2 11 13"/>

                                </svg>

                            </div>

                        </div>

                    </div>

                </div>


                {{-- FLOATING RIGHT --}}

                <div class="floating-card right">

                    <div class="floating-avatar"
                         style="background:#556832;color:white;">
                        SV
                    </div>

                    <div class="floating-text">

                        <strong>
                            Sanvado
                        </strong>

                        <span>
                            Connected securely
                        </span>

                    </div>

                    <span
                        style="color:#556832;font-weight:700;"
                    >
                        ✓
                    </span>

                </div>

            </div>

        </div>

    </div>

</section>


{{-- =========================================================
     FEATURES
========================================================= --}}

<section
    id="features"
    class="section"
>

    <div class="container">

        <div class="section-heading">

            <span class="section-label">
                Everything you need
            </span>

            <h2>
                Conversations without the clutter.
            </h2>

            <p>
                Sanvado keeps communication simple so you can
                focus on the conversation, not the interface.
            </p>

        </div>


        <div class="features">


            <div class="feature">

                <div class="feature-icon">

                    <svg
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="1.8"
                    >
                        <path d="M21 15a4 4 0 0 1-4 4H8l-5 3V7a4 4 0 0 1 4-4h10a4 4 0 0 1 4 4v8Z"/>
                    </svg>

                </div>

                <h3>
                    Simple messaging
                </h3>

                <p>
                    Start conversations quickly with a clean,
                    distraction-free messaging experience.
                </p>

            </div>


            <div class="feature">

                <div class="feature-icon">

                    <svg
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="1.8"
                    >
                        <rect
                            x="3"
                            y="5"
                            width="18"
                            height="14"
                            rx="2"
                        />

                        <path d="M7 9h10"/>
                        <path d="M7 13h6"/>

                    </svg>

                </div>

                <h3>
                    Unique identity
                </h3>

                <p>
                    Every user gets a unique code that makes finding
                    and connecting with people simple.
                </p>

            </div>


            <div class="feature">

                <div class="feature-icon">

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
                            height="11"
                            rx="2"
                        />

                        <path d="M8 10V7a4 4 0 0 1 8 0v3"/>

                    </svg>

                </div>

                <h3>
                    Privacy focused
                </h3>

                <p>
                    Your conversations belong to you. Sanvado is
                    designed with privacy and simplicity in mind.
                </p>

            </div>


            <div class="feature">

                <div class="feature-icon">

                    <svg
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="1.8"
                    >
                        <path d="M18 8a6 6 0 0 0-12 0c0 7-3 7-3 9h18c0-2-3-2-3-9Z"/>
                        <path d="M10 21h4"/>
                    </svg>

                </div>

                <h3>
                    Stay connected
                </h3>

                <p>
                    Keep your conversations accessible and stay
                    connected with the people that matter.
                </p>

            </div>


            <div class="feature">

                <div class="feature-icon">

                    <svg
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="1.8"
                    >
                        <path d="M4 17V7"/>
                        <path d="M10 17V4"/>
                        <path d="M16 17v-7"/>
                        <path d="M22 17V2"/>
                    </svg>

                </div>

                <h3>
                    Fast & lightweight
                </h3>

                <p>
                    A focused experience that stays fast across
                    desktop, tablet and mobile devices.
                </p>

            </div>


            <div class="feature">

                <div class="feature-icon">

                    <svg
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="1.8"
                    >
                        <circle
                            cx="12"
                            cy="12"
                            r="8"
                        />

                        <path d="M12 3v18"/>
                        <path d="M3 12h18"/>

                    </svg>

                </div>

                <h3>
                    Built to grow
                </h3>

                <p>
                    Start with simple conversations and expand
                    into a complete communication platform.
                </p>

            </div>

        </div>

    </div>

</section>


{{-- =========================================================
     HOW IT WORKS
========================================================= --}}

<section
    id="how-it-works"
    class="section section-light"
>

    <div class="container">

        <div class="section-heading">

            <span class="section-label">
                How it works
            </span>

            <h2>
                Start a conversation in seconds.
            </h2>

        </div>


        <div class="steps">


            <div class="step">

                <div class="step-number">
                    01
                </div>

                <h3>
                    Create your account
                </h3>

                <p>
                    Sign up with your basic details and get
                    your personal Sanvado code.
                </p>

            </div>


            <div class="step">

                <div class="step-number">
                    02
                </div>

                <h3>
                    Find someone
                </h3>

                <p>
                    Enter their unique Sanvado code to find
                    the person you want to connect with.
                </p>

            </div>


            <div class="step">

                <div class="step-number">
                    03
                </div>

                <h3>
                    Start chatting
                </h3>

                <p>
                    Send a message and start your conversation.
                    That's it.
                </p>

            </div>

        </div>

    </div>

</section>


{{-- =========================================================
     CTA
========================================================= --}}

<section
    id="about"
    class="cta"
>

    <div class="container">

        <div class="cta-box">

            <div class="cta-content">

                <div class="cta-icon">

                    <svg
                        width="28"
                        height="28"
                        viewBox="0 0 64 64"
                        fill="none"
                    >

                        <path
                            d="M16 21.5C16 17.9 18.9 15 22.5 15h19c3.6 0 6.5 2.9 6.5 6.5v14c0 3.6-2.9 6.5-6.5 6.5H31l-9 7v-7h.5c-3.6 0-6.5-2.9-6.5-6.5v-14Z"
                            fill="#556832"
                        />

                        <circle
                            cx="27"
                            cy="28"
                            r="2"
                            fill="white"
                        />

                        <circle
                            cx="32"
                            cy="28"
                            r="2"
                            fill="white"
                        />

                        <circle
                            cx="37"
                            cy="28"
                            r="2"
                            fill="white"
                        />

                    </svg>

                </div>


                <h2>
                    Your next conversation
                    starts here.
                </h2>


                <p>
                    Create your Sanvado account and start connecting
                    with people through a simpler way to communicate.
                </p>


                @if(Route::has('register'))

                    <a
                        href="{{ route('register') }}"
                        class="cta-button"
                    >

                        Create your account

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

                    </a>

                @endif

            </div>

        </div>

    </div>

</section>


{{-- =========================================================
     FOOTER
========================================================= --}}

<footer class="footer">

    <div class="container">

        <div class="footer-inner">


            <div class="footer-brand">

                <div class="brand-icon">

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

                <span>
                    Sanvado
                </span>

            </div>


            <div class="footer-copy">
                © {{ date('Y') }} Sanvado. All rights reserved.
            </div>


            <div class="footer-links">

                @if(Route::has('login'))

                    <a href="{{ route('login') }}">
                        Login
                    </a>

                @endif

                @if(Route::has('register'))

                    <a href="{{ route('register') }}">
                        Register
                    </a>

                @endif

            </div>

        </div>

    </div>

</footer>


</body>
</html>