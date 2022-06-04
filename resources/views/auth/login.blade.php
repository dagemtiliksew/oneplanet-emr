<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">


    <!-- Styles -->

    <link href="{{ asset('css/login.css') }}" rel="stylesheet">
    <link href="{{ asset('css/common.css') }}" rel="stylesheet">

</head>

<body>
    <div class="login">
        <div class="body">

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div style="font-weight: bold; color: rgba(20, 184, 166, 1); font-size: 20px;">
                    Electronic Medical Record
                </div>

                <div class="flex" style="justify-content: center; margin-left: 4rem; margin-top: 2.5rem">
                    <div class="flex-initial" style="padding-left: 1.75rem; padding-right: 1.75rem">
                        <p
                            style="font-size: 1.875rem; line-height: 2.25rem; color: rgba(31, 41, 55, 1); font-weight: 700; letter-spacing: 0.025em;">
                            Welcome Back
                        </p>

                        <p class="text-teal-500 font-semibold" style="color: rgba(20, 184, 166, 1); font-weight: 600">
                            One Planet
                        </p>

                        <div style="margin-top: 4rem; width: 100%;">
                            <input class="email-input" type="text" placeholder="Email" name="email" id="email"
                                required :value="old('email')" />

                            <input class="password-input" type="password" placeholder="Password" name="password"
                                id="password" required />
                        </div>

                        <div style="margin-top: 1rem; color: red;">
                            <!-- Session Status -->
                            <x-auth-session-status class="mb-4" :status="session('status')" />

                            <!-- Validation Errors -->
                            <x-auth-validation-errors class="mb-4" :errors="$errors" />
                        </div>

                        <div class="flex" style="margin-top: 2.5rem;">
                            <div class="flex-1">
                                <button class="login-button" type="submit">
                                    <p>Login now</p>
                                </button>
                            </div>
                            <div class="flex-1"
                                style="margin-left: 2rem; margin-top: 8px; align-items: center;">
                                <a class="register-button" type="button" href="/register">
                                    Create account
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
