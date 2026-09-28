<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <meta charset="utf-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1"
    >

    <meta
        name="csrf-token"
        content="{{ csrf_token() }}"
    >

    <title>
        {{ config('app.name', 'Sanvado') }}
    </title>

    {{-- Fonts --}}
    <link rel="preconnect" href="https://fonts.bunny.net">

    <link
        href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600,700,800"
        rel="stylesheet"
    >

    {{-- Scripts --}}
    @vite([
        'resources/css/app.css',
        'resources/js/app.js'
    ])

    <style>

        :root {
            --sanvado-olive: #556832;
            --sanvado-olive-dark: #405125;
            --sanvado-olive-light: #eef3e6;
            --sanvado-olive-soft: #f7f9f3;

            --sanvado-text: #17200f;
            --sanvado-muted: #7a8372;

            --sanvado-border: #e4e8df;

            --sanvado-white: #ffffff;
        }


        /* =====================================================
           RESET
        ===================================================== */

        * {
            box-sizing: border-box;
        }

        html,
        body {
            margin: 0;

            width: 100%;
            height: 100%;

            overflow: hidden;
        }

        body {
            font-family:
                'Instrument Sans',
                Arial,
                sans-serif;

            color: var(--sanvado-text);

            background:
                var(--sanvado-olive-soft);

            -webkit-font-smoothing: antialiased;
        }

        button,
        input {
            font-family: inherit;
        }

        button {
            border: 0;
        }


        /* =====================================================
           APPLICATION
        ===================================================== */

        .sanvado-app {
            width: 100%;
            height: 100vh;

            display: flex;

            overflow: hidden;

            background: var(--sanvado-white);
        }


        /* =====================================================
           SIDEBAR
        ===================================================== */

        .sanvado-sidebar {
            width: 350px;
            min-width: 350px;
            height: 100%;

            display: flex;
            flex-direction: column;

            background: var(--sanvado-white);

            border-right:
                1px solid
                var(--sanvado-border);

            z-index: 50;
        }


        /* =====================================================
           SIDEBAR HEADER
        ===================================================== */

        .sidebar-header {
            padding: 20px 20px 15px;

            border-bottom:
                1px solid
                var(--sanvado-border);
        }


        .sidebar-top {
            display: flex;
            align-items: center;
            justify-content: space-between;

            margin-bottom: 20px;
        }


        /* =====================================================
           LOGO
        ===================================================== */

        .sanvado-brand {
            display: inline-flex;
            align-items: center;

            gap: 10px;
        }


        .sanvado-brand-icon {
            width: 40px;
            height: 40px;

            display: flex;
            align-items: center;
            justify-content: center;

            border-radius: 11px;

            background:
                var(--sanvado-olive);

            box-shadow:
                0 7px 18px
                rgba(85, 104, 50, .15);
        }


        .sanvado-brand-icon svg {
            width: 24px;
            height: 24px;
        }


        .sanvado-brand-name {
            font-size: 21px;
            font-weight: 700;

            letter-spacing: -.7px;
        }


        /* =====================================================
           PROFILE BUTTON
        ===================================================== */

        .profile-button {
            width: 38px;
            height: 38px;

            display: flex;
            align-items: center;
            justify-content: center;

            border-radius: 50%;

            background:
                var(--sanvado-olive-light);

            color:
                var(--sanvado-olive);

            cursor: pointer;

            transition: .2s ease;
        }


        .profile-button:hover {
            background:
                var(--sanvado-olive);

            color: white;
        }


        /* =====================================================
           SEARCH
        ===================================================== */

        .user-search {
            position: relative;
        }


        .user-search input {
            width: 100%;
            height: 44px;

            padding:
                0 42px
                0 42px;

            border:
                1px solid
                var(--sanvado-border);

            border-radius: 11px;

            outline: none;

            background:
                var(--sanvado-olive-soft);

            color:
                var(--sanvado-text);

            font-size: 13px;

            transition: .2s ease;
        }


        .user-search input:focus {
            border-color:
                var(--sanvado-olive);

            background:
                white;

            box-shadow:
                0 0 0 3px
                rgba(85, 104, 50, .08);
        }


        .search-icon {
            position: absolute;

            left: 14px;
            top: 50%;

            transform:
                translateY(-50%);

            color:
                var(--sanvado-muted);

            pointer-events: none;
        }


        .search-icon svg {
            width: 17px;
            height: 17px;
        }


        .search-clear {
            position: absolute;

            right: 10px;
            top: 50%;

            transform:
                translateY(-50%);

            width: 25px;
            height: 25px;

            display: none;

            align-items: center;
            justify-content: center;

            border-radius: 50%;

            background:
                #e4e9dd;

            color:
                var(--sanvado-muted);

            cursor: pointer;
        }


        /* =====================================================
           CONVERSATIONS TITLE
        ===================================================== */

        .conversation-title {
            display: flex;
            align-items: center;
            justify-content: space-between;

            padding:
                18px 20px 10px;
        }


        .conversation-title span:first-child {
            font-size: 12px;
            font-weight: 700;

            text-transform: uppercase;

            letter-spacing: .7px;

            color:
                var(--sanvado-muted);
        }


        .conversation-count {
            min-width: 22px;
            height: 22px;

            padding: 0 6px;

            display: flex;
            align-items: center;
            justify-content: center;

            border-radius: 20px;

            background:
                var(--sanvado-olive-light);

            color:
                var(--sanvado-olive);

            font-size: 11px;
            font-weight: 700;
        }


        /* =====================================================
           CHAT USERS
        ===================================================== */

        .chat-users {
            flex: 1;

            overflow-y: auto;

            padding:
                5px 10px 15px;
        }


        .chat-users::-webkit-scrollbar {
            width: 5px;
        }


        .chat-users::-webkit-scrollbar-thumb {
            background: #d9dfd2;

            border-radius: 20px;
        }


        .chat-user {
            width: 100%;

            display: flex;
            align-items: center;

            gap: 12px;

            padding:
                11px 10px;

            margin-bottom: 3px;

            border-radius: 12px;

            background: transparent;

            text-align: left;

            cursor: pointer;

            transition:
                background .2s ease;
        }


        .chat-user:hover {
            background:
                var(--sanvado-olive-soft);
        }


        .chat-user.active {
            background:
                var(--sanvado-olive-light);
        }


        /* =====================================================
           AVATAR
        ===================================================== */

        .chat-avatar {
            position: relative;

            width: 46px;
            min-width: 46px;
            height: 46px;

            display: flex;
            align-items: center;
            justify-content: center;

            border-radius: 50%;

            background:
                var(--sanvado-olive);

            color: white;

            font-size: 14px;
            font-weight: 700;
        }


        .chat-user:nth-child(2) .chat-avatar {
            background: #7b895e;
        }


        .chat-user:nth-child(3) .chat-avatar {
            background: #6d7a4e;
        }


        .chat-user:nth-child(4) .chat-avatar {
            background: #89966d;
        }


        .online-dot {
            position: absolute;

            right: 0;
            bottom: 1px;

            width: 11px;
            height: 11px;

            border:
                2px solid
                white;

            border-radius: 50%;

            background:
                #3db56a;
        }


        /* =====================================================
           CHAT USER DETAILS
        ===================================================== */

        .chat-user-details {
            min-width: 0;

            flex: 1;
        }


        .chat-user-top {
            display: flex;
            align-items: center;
            justify-content: space-between;

            gap: 8px;
        }


        .chat-user-name {
            overflow: hidden;

            text-overflow: ellipsis;
            white-space: nowrap;

            font-size: 14px;
            font-weight: 600;
        }


        .chat-time {
            flex-shrink: 0;

            color:
                var(--sanvado-muted);

            font-size: 10px;
        }


        .chat-preview {
            margin-top: 4px;

            overflow: hidden;

            text-overflow: ellipsis;
            white-space: nowrap;

            color:
                var(--sanvado-muted);

            font-size: 12px;
        }


        .unread-count {
            min-width: 18px;
            height: 18px;

            padding: 0 5px;

            display: flex;
            align-items: center;
            justify-content: center;

            border-radius: 20px;

            background:
                var(--sanvado-olive);

            color: white;

            font-size: 9px;
            font-weight: 700;
        }


        /* =====================================================
           SIDEBAR FOOTER
        ===================================================== */

        .sidebar-footer {
            padding: 12px 15px;

            border-top:
                1px solid
                var(--sanvado-border);
        }


        .my-profile {
            display: flex;
            align-items: center;

            gap: 10px;

            padding: 8px;

            border-radius: 11px;
        }


        .my-avatar {
            width: 38px;
            height: 38px;

            display: flex;
            align-items: center;
            justify-content: center;

            border-radius: 50%;

            background:
                var(--sanvado-olive);

            color: white;

            font-size: 12px;
            font-weight: 700;
        }


        .my-info {
            flex: 1;
            min-width: 0;
        }


        .my-name {
            overflow: hidden;

            text-overflow: ellipsis;
            white-space: nowrap;

            font-size: 13px;
            font-weight: 600;
        }


        .my-code {
            margin-top: 2px;

            color:
                var(--sanvado-muted);

            font-size: 10px;
        }


        .logout-button {
            width: 32px;
            height: 32px;

            display: flex;
            align-items: center;
            justify-content: center;

            border-radius: 8px;

            background: transparent;

            color:
                var(--sanvado-muted);

            cursor: pointer;
        }


        .logout-button:hover {
            background: #f8eeee;

            color: #bd5252;
        }


        /* =====================================================
           MAIN CHAT
        ===================================================== */

        .sanvado-chat {
            min-width: 0;

            flex: 1;
            height: 100%;

            display: flex;
            flex-direction: column;

            background:
                #fbfcfa;
        }


        /* =====================================================
           CHAT HEADER
        ===================================================== */

        .chat-header {
            min-height: 72px;

            display: flex;
            align-items: center;

            padding:
                10px 25px;

            border-bottom:
                1px solid
                var(--sanvado-border);

            background:
                white;
        }


        .mobile-menu-button {
            display: none;

            width: 38px;
            height: 38px;

            align-items: center;
            justify-content: center;

            margin-right: 10px;

            border-radius: 9px;

            background:
                var(--sanvado-olive-light);

            color:
                var(--sanvado-olive);

            cursor: pointer;
        }


        .current-user {
            display: flex;
            align-items: center;

            gap: 12px;

            flex: 1;
        }


        .current-avatar {
            position: relative;

            width: 42px;
            height: 42px;

            display: flex;
            align-items: center;
            justify-content: center;

            border-radius: 50%;

            background:
                var(--sanvado-olive);

            color: white;

            font-size: 13px;
            font-weight: 700;
        }


        .current-details h3 {
            margin: 0;

            font-size: 14px;
            font-weight: 700;
        }


        .current-status {
            display: flex;
            align-items: center;

            gap: 5px;

            margin-top: 3px;

            color:
                #4b9c67;

            font-size: 11px;
        }


        .status-dot {
            width: 6px;
            height: 6px;

            border-radius: 50%;

            background:
                #3db56a;
        }


        .chat-actions {
            display: flex;
            gap: 5px;
        }


        .chat-action {
            width: 38px;
            height: 38px;

            display: flex;
            align-items: center;
            justify-content: center;

            border-radius: 9px;

            background: transparent;

            color:
                var(--sanvado-muted);

            cursor: pointer;
        }


        .chat-action:hover {
            background:
                var(--sanvado-olive-light);

            color:
                var(--sanvado-olive);
        }


        /* =====================================================
           CHAT CONTENT SLOT
        ===================================================== */

        .chat-content {
            flex: 1;
            min-height: 0;

            display: flex;
            flex-direction: column;

            overflow: hidden;
        }


        /* =====================================================
           DEFAULT CHAT UI
           You can replace this later with your actual
           chat component.
        ===================================================== */

        .messages {
            flex: 1;

            overflow-y: auto;

            padding:
                30px 7%;

            display: flex;
            flex-direction: column;

            gap: 10px;
        }


        .message-date {
            align-self: center;

            margin:
                4px 0 15px;

            padding:
                5px 11px;

            border-radius: 20px;

            background:
                #eef1eb;

            color:
                var(--sanvado-muted);

            font-size: 10px;
        }


        .message {
            max-width: min(70%, 550px);

            display: flex;
            flex-direction: column;
        }


        .message.received {
            align-self: flex-start;
        }


        .message.sent {
            align-self: flex-end;

            align-items: flex-end;
        }


        .message-bubble {
            padding:
                11px 15px;

            border-radius: 14px;

            font-size: 13px;
            line-height: 1.5;
        }


        .received .message-bubble {
            border:
                1px solid
                var(--sanvado-border);

            border-bottom-left-radius: 4px;

            background:
                white;
        }


        .sent .message-bubble {
            border-bottom-right-radius: 4px;

            background:
                var(--sanvado-olive);

            color: white;
        }


        .message-time {
            margin-top: 4px;

            color:
                #9aa293;

            font-size: 9px;
        }


        /* =====================================================
           MESSAGE INPUT
        ===================================================== */

        .message-area {
            padding:
                15px 7% 20px;

            background:
                white;

            border-top:
                1px solid
                var(--sanvado-border);
        }


        .message-form {
            display: flex;
            align-items: center;

            gap: 8px;

            padding: 6px;

            border:
                1px solid
                var(--sanvado-border);

            border-radius: 13px;

            background:
                var(--sanvado-olive-soft);

            transition: .2s ease;
        }


        .message-form:focus-within {
            border-color:
                var(--sanvado-olive);

            background: white;

            box-shadow:
                0 0 0 3px
                rgba(85, 104, 50, .06);
        }


        .message-input {
            flex: 1;

            min-width: 0;

            height: 40px;

            padding:
                0 10px;

            border: 0;

            outline: none;

            background: transparent;

            color:
                var(--sanvado-text);

            font-size: 13px;
        }


        .message-input::placeholder {
            color:
                #a2aa9c;
        }


        .message-tool {
            width: 38px;
            height: 38px;

            display: flex;
            align-items: center;
            justify-content: center;

            flex-shrink: 0;

            border-radius: 9px;

            background: transparent;

            color:
                var(--sanvado-muted);

            cursor: pointer;
        }


        .message-tool:hover {
            background:
                white;

            color:
                var(--sanvado-olive);
        }


        .send-button {
            width: 40px;
            height: 40px;

            display: flex;
            align-items: center;
            justify-content: center;

            flex-shrink: 0;

            border-radius: 10px;

            background:
                var(--sanvado-olive);

            color: white;

            cursor: pointer;

            transition: .2s ease;
        }


        .send-button:hover {
            background:
                var(--sanvado-olive-dark);

            transform: translateY(-1px);
        }


        /* =====================================================
           MOBILE OVERLAY
        ===================================================== */

        .sidebar-overlay {
            display: none;

            position: fixed;

            inset: 0;

            background:
                rgba(20, 28, 15, .35);

            z-index: 40;
        }


        /* =====================================================
           MOBILE
        ===================================================== */

        @media (max-width: 900px) {

            .sanvado-sidebar {
                position: fixed;

                left: 0;
                top: 0;

                width: 320px;
                min-width: 320px;

                transform:
                    translateX(-100%);

                box-shadow:
                    10px 0 35px
                    rgba(0,0,0,.08);

                transition:
                    transform .25s ease;
            }


            .sanvado-sidebar.mobile-open {
                transform:
                    translateX(0);
            }


            .sidebar-overlay.mobile-open {
                display: block;
            }


            .mobile-menu-button {
                display: flex;
            }


            .chat-header {
                padding:
                    10px 15px;
            }


            .messages {
                padding:
                    25px 18px;
            }


            .message-area {
                padding:
                    10px 12px 14px;
            }

        }


        /* =====================================================
           SMALL MOBILE
        ===================================================== */

        @media (max-width: 500px) {

            .chat-actions .chat-action:nth-child(1),
            .chat-actions .chat-action:nth-child(2) {
                display: none;
            }


            .chat-header {
                min-height: 64px;
            }


            .current-avatar {
                width: 38px;
                height: 38px;
            }


            .message {
                max-width: 82%;
            }


            .message-bubble {
                padding:
                    9px 12px;

                font-size: 12px;
            }


            .message-tool {
                display: none;
            }


            .message-input {
                font-size: 12px;
            }

        }

    </style>

</head>


<body>


<div class="sanvado-app">


    {{-- =====================================================
         SIDEBAR
    ====================================================== --}}

    <aside
        id="sanvadoSidebar"
        class="sanvado-sidebar"
    >


        {{-- Sidebar Header --}}

        <div class="sidebar-header">

            <div class="sidebar-top">


                <a
                    href="{{ route('dashboard') }}"
                    class="sanvado-brand"
                >

                    <div class="sanvado-brand-icon">

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

                    <span class="sanvado-brand-name">
                        Sanvado
                    </span>

                </a>


                {{-- Profile --}}

                <button
                    type="button"
                    class="profile-button"
                    title="Profile"
                >

                    <svg
                        width="18"
                        height="18"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="1.8"
                    >
                        <circle
                            cx="12"
                            cy="8"
                            r="4"
                        />

                        <path
                            d="M4 21a8 8 0 0 1 16 0"
                        />

                    </svg>

                </button>

            </div>


            {{-- Search user --}}

            <div class="user-search">

                <span class="search-icon">

                    <svg
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                    >
                        <circle
                            cx="11"
                            cy="11"
                            r="7"
                        />

                        <path d="m20 20-4-4"/>

                    </svg>

                </span>


                <input
                    type="text"
                    id="userSearch"
                    placeholder="Search by unique user ID..."
                    autocomplete="off"
                >


                <button
                    type="button"
                    id="clearSearch"
                    class="search-clear"
                >
                    ×
                </button>

            </div>

        </div>


        {{-- Conversations --}}

        <div class="conversation-title">

            <span>
                Conversations
            </span>

            <span class="conversation-count">
                3
            </span>

        </div>


        <div
            class="chat-users"
            id="chatUsers"
        >


            {{-- User 1 --}}

            <button
                type="button"
                class="chat-user active"
                data-name="Rahul Shah"
                data-code="48271936"
            >

                <div class="chat-avatar">

                    RS

                    <span class="online-dot"></span>

                </div>


                <div class="chat-user-details">

                    <div class="chat-user-top">

                        <span class="chat-user-name">
                            Rahul Shah
                        </span>

                        <span class="chat-time">
                            10:32 PM
                        </span>

                    </div>


                    <div class="chat-preview">
                        Hey! Are you joining us today?
                    </div>

                </div>

            </button>


            {{-- User 2 --}}

            <button
                type="button"
                class="chat-user"
                data-name="Amit Patel"
                data-code="72639184"
            >

                <div class="chat-avatar">
                    AP
                </div>


                <div class="chat-user-details">

                    <div class="chat-user-top">

                        <span class="chat-user-name">
                            Amit Patel
                        </span>

                        <span class="chat-time">
                            9:48 PM
                        </span>

                    </div>


                    <div class="chat-preview">
                        Perfect. See you tomorrow!
                    </div>

                </div>


                <span class="unread-count">
                    2
                </span>

            </button>


            {{-- User 3 --}}

            <button
                type="button"
                class="chat-user"
                data-name="Priya Mehta"
                data-code="39182746"
            >

                <div class="chat-avatar">
                    PM
                </div>


                <div class="chat-user-details">

                    <div class="chat-user-top">

                        <span class="chat-user-name">
                            Priya Mehta
                        </span>

                        <span class="chat-time">
                            Yesterday
                        </span>

                    </div>


                    <div class="chat-preview">
                        Let's talk later.
                    </div>

                </div>

            </button>


        </div>


        {{-- Current user --}}

        <div class="sidebar-footer">

            <div class="my-profile">


                <div class="my-avatar">

                    {{ strtoupper(substr(auth()->user()->name, 0, 2)) }}

                </div>


                <div class="my-info">

                    <div class="my-name">

                        {{ auth()->user()->name }}

                    </div>


                    <div class="my-code">

                        ID:
                        {{ auth()->user()->unique_code }}

                    </div>

                </div>


                <form
                    method="POST"
                    action="{{ route('logout') }}"
                >

                    @csrf

                    <button
                        type="submit"
                        class="logout-button"
                        title="Logout"
                    >

                        <svg
                            width="17"
                            height="17"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="1.8"
                        >

                            <path
                                d="M10 17l5-5-5-5"
                            />

                            <path
                                d="M15 12H3"
                            />

                            <path
                                d="M21 19V5a2 2 0 0 0-2-2h-5"
                            />

                        </svg>

                    </button>

                </form>

            </div>

        </div>

    </aside>


    {{-- Mobile overlay --}}

    <div
        id="sidebarOverlay"
        class="sidebar-overlay"
    ></div>


    {{-- =====================================================
         CHAT AREA
    ====================================================== --}}

    <section class="sanvado-chat">


        {{-- Chat Header --}}

        <header class="chat-header">


            {{-- Mobile menu --}}

            <button
                type="button"
                id="mobileMenuButton"
                class="mobile-menu-button"
            >

                <svg
                    width="19"
                    height="19"
                    viewBox="0 0 24 24"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="2"
                >

                    <path d="M4 6h16"/>
                    <path d="M4 12h16"/>
                    <path d="M4 18h16"/>

                </svg>

            </button>


            {{-- Current user --}}

            <div class="current-user">


                <div class="current-avatar">

                    RS

                    <span class="online-dot"></span>

                </div>


                <div class="current-details">

                    <h3>
                        Rahul Shah
                    </h3>

                    <div class="current-status">

                        <span class="status-dot"></span>

                        Online

                    </div>

                </div>

            </div>


            {{-- Actions --}}

            <div class="chat-actions">

                <button
                    type="button"
                    class="chat-action"
                    title="Search"
                >

                    <svg
                        width="18"
                        height="18"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="1.8"
                    >
                        <circle
                            cx="11"
                            cy="11"
                            r="7"
                        />

                        <path d="m20 20-4-4"/>

                    </svg>

                </button>


                <button
                    type="button"
                    class="chat-action"
                    title="Call"
                >

                    <svg
                        width="18"
                        height="18"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="1.8"
                    >
                        <path
                            d="M22 16.9v3a2 2 0 0 1-2.2 2
                            19.8 19.8 0 0 1-8.6-3.1
                            19.5 19.5 0 0 1-6-6
                            19.8 19.8 0 0 1-3.1-8.6
                            A2 2 0 0 1 4.1 2h3a2 2 0 0 1 2 1.7
                            12.8 12.8 0 0 0 .7 2.8
                            2 2 0 0 1-.5 2.1L8 9.9
                            a16 16 0 0 0 6 6l1.3-1.3
                            a2 2 0 0 1 2.1-.5
                            12.8 12.8 0 0 0 2.8.7
                            A2 2 0 0 1 22 16.9z"
                        />

                    </svg>

                </button>


                <button
                    type="button"
                    class="chat-action"
                    title="More"
                >

                    <svg
                        width="18"
                        height="18"
                        viewBox="0 0 24 24"
                        fill="currentColor"
                    >

                        <circle
                            cx="5"
                            cy="12"
                            r="1.5"
                        />

                        <circle
                            cx="12"
                            cy="12"
                            r="1.5"
                        />

                        <circle
                            cx="19"
                            cy="12"
                            r="1.5"
                        />

                    </svg>

                </button>

            </div>

        </header>


        {{-- =================================================
             CHAT CONTENT
             Your individual page can replace this.
        ================================================== --}}

        <div class="chat-content">


            <div class="messages">


                <div class="message-date">
                    Today
                </div>


                {{-- Received --}}

                <div class="message received">

                    <div class="message-bubble">

                        Hey! 👋<br>
                        Are you joining us today?

                    </div>

                    <span class="message-time">
                        10:30 PM
                    </span>

                </div>


                {{-- Sent --}}

                <div class="message sent">

                    <div class="message-bubble">

                        Yes! I'll be there. 😊

                    </div>

                    <span class="message-time">
                        10:31 PM
                    </span>

                </div>


                {{-- Received --}}

                <div class="message received">

                    <div class="message-bubble">

                        Perfect. See you soon!

                    </div>

                    <span class="message-time">
                        10:32 PM
                    </span>

                </div>


                {{-- Sent --}}

                <div class="message sent">

                    <div class="message-bubble">

                        👍

                    </div>

                    <span class="message-time">
                        10:32 PM
                    </span>

                </div>


            </div>


            {{-- Message composer --}}

            <div class="message-area">

                <form
                    class="message-form"
                    id="messageForm"
                >


                    <button
                        type="button"
                        class="message-tool"
                        title="Emoji"
                    >
                        😊
                    </button>


                    <input
                        type="text"
                        class="message-input"
                        id="messageInput"
                        placeholder="Write a message..."
                        autocomplete="off"
                    >


                    <button
                        type="submit"
                        class="send-button"
                        title="Send"
                    >

                        <svg
                            width="18"
                            height="18"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2"
                        >

                            <path d="m22 2-7 20-4-9-9-4Z"/>

                            <path d="M22 2 11 13"/>

                        </svg>

                    </button>


                </form>

            </div>

        </div>


    </section>

</div>


<script>

    document.addEventListener('DOMContentLoaded', function () {


        /*
        |--------------------------------------------------------------------------
        | MOBILE SIDEBAR
        |--------------------------------------------------------------------------
        */

        const sidebar =
            document.getElementById('sanvadoSidebar');

        const overlay =
            document.getElementById('sidebarOverlay');

        const menuButton =
            document.getElementById('mobileMenuButton');


        function openSidebar() {

            sidebar.classList.add('mobile-open');

            overlay.classList.add('mobile-open');

        }


        function closeSidebar() {

            sidebar.classList.remove('mobile-open');

            overlay.classList.remove('mobile-open');

        }


        if (menuButton) {

            menuButton.addEventListener(
                'click',
                openSidebar
            );

        }


        if (overlay) {

            overlay.addEventListener(
                'click',
                closeSidebar
            );

        }


        /*
        |--------------------------------------------------------------------------
        | SEARCH USERS
        |--------------------------------------------------------------------------
        */

        const searchInput =
            document.getElementById('userSearch');

        const clearSearch =
            document.getElementById('clearSearch');

        const users =
            document.querySelectorAll('.chat-user');


        if (searchInput) {

            searchInput.addEventListener(
                'input',
                function () {

                    const search =
                        this.value
                            .toLowerCase()
                            .trim();


                    clearSearch.style.display =
                        search
                            ? 'flex'
                            : 'none';


                    users.forEach(function (user) {

                        const name =
                            user.dataset.name
                                .toLowerCase();

                        const code =
                            user.dataset.code
                                .toLowerCase();


                        const matches =
                            name.includes(search) ||
                            code.includes(search);


                        user.style.display =
                            matches
                                ? 'flex'
                                : 'none';

                    });

                }
            );

        }


        if (clearSearch) {

            clearSearch.addEventListener(
                'click',
                function () {

                    searchInput.value = '';

                    searchInput.dispatchEvent(
                        new Event('input')
                    );

                    searchInput.focus();

                }
            );

        }


        /*
        |--------------------------------------------------------------------------
        | CHAT USER SELECTION
        |--------------------------------------------------------------------------
        */

        users.forEach(function (user) {

            user.addEventListener(
                'click',
                function () {

                    users.forEach(function (item) {

                        item.classList.remove(
                            'active'
                        );

                    });


                    this.classList.add('active');


                    /*
                     * For now this only changes
                     * the selected conversation.
                     *
                     * Later we will load messages
                     * using AJAX.
                     */


                    if (
                        window.innerWidth <= 900
                    ) {

                        closeSidebar();

                    }

                }
            );

        });


        /*
        |--------------------------------------------------------------------------
        | DEMO MESSAGE SEND
        |--------------------------------------------------------------------------
        */

        const messageForm =
            document.getElementById('messageForm');

        const messageInput =
            document.getElementById('messageInput');

        const messages =
            document.querySelector('.messages');


        if (messageForm) {

            messageForm.addEventListener(
                'submit',
                function (event) {

                    event.preventDefault();


                    const message =
                        messageInput.value.trim();


                    if (!message) {
                        return;
                    }


                    const wrapper =
                        document.createElement('div');

                    wrapper.className =
                        'message sent';


                    wrapper.innerHTML = `

                        <div class="message-bubble">
                            ${escapeHtml(message)}
                        </div>

                        <span class="message-time">
                            Just now
                        </span>

                    `;


                    messages.appendChild(wrapper);


                    messageInput.value = '';


                    messages.scrollTop =
                        messages.scrollHeight;

                }
            );

        }


        function escapeHtml(value) {

            const div =
                document.createElement('div');

            div.textContent = value;

            return div.innerHTML;

        }


    });

</script>


</body>

</html>