<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Register</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">


    <!-- Styles -->

    <link href="{{ asset('css/register.css') }}" rel="stylesheet">
    <link href="{{ asset('css/common.css') }}" rel="stylesheet">
</head>

<body>
    <div class="register">
        <div class="body">
            <p
                style="margin-top: 0.5rem; margin-bottom: 1rem; font-size: 1.875rem; line-height: 2.25rem; color: rgba(31, 41, 55, 1); font-weight: 700; letter-spacing: 0.025em;">
                Create Account
            </p>

            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div>
                    <div style="margin-top: 0.5rem">
                        <label htmlFor="name" class="input-label">
                            Name
                        </label>
                        <input type="text" name="name" id="name" placeholder="Name" required class="input"
                            :value="old('name')" />
                    </div>

                    <div style="margin-top: 0.5rem">
                        <label htmlFor="email" class="input-label">
                            Email
                        </label>
                        <input type="text" name="email" id="email" placeholder="Email" required class="input"
                            :value="old('email')" />
                    </div>

                    <div style="margin-top: 0.5rem">
                        <label htmlFor="password" class="input-label">
                            Password
                        </label>
                        <input type="password" name="password" id="password" placeholder="Password" required
                            class="input" />
                    </div>

                    <div style="margin-top: 0.5rem">
                        <label htmlFor="confirmPassword" class="input-label">
                            Confirm Password
                        </label>
                        <input type="password" name="confirmPassword" id="confirmPassword" placeholder="Confirm Password"
                            required class="input" />
                    </div>

                    <div style="margin-top: 1rem; color: red;">
                        <!-- Validation Errors -->
                        <x-auth-validation-errors class="mb-4" :errors="$errors" />
                    </div>

                    <div
                        style="padding-top: 0.75rem; margin-top: 0.5rem; background-color: rgba(249, 250, 251, 1); text-align: right;">
                        <button type="submit" class="register-button">
                            <span className="ml-2">Register</span>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
