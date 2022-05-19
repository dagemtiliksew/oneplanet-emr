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
        <p style="margin-top: 0.5rem; margin-bottom: 1rem; font-size: 1.875rem; line-height: 2.25rem; color: rgba(31, 41, 55, 1); font-weight: 700; letter-spacing: 0.025em;">
          Create Account
        </p>

       
        <form>
          <div>
            <label
              htmlFor="userTypeIds"
              style="display: block; font-size: 0.875rem; line-height: 1.25rem; font-weight: 500; color: rgba(55, 65, 81, 1)"
            >
              Account Type
            </label>
            <select
            required
              name="userTypeIds"
              style="margin-top: 0.25rem; display: block; width: 100%; padding: 0.5rem; background-color: rgba(243, 244, 246, 1); border-width: 1px; border-color: rgba(209, 213, 219, 1); border-radius: 0.375rem"
            >
            <option>
              Physician
            </option>
            <option>
              Nurse
            </option>
            <option>
              Receptionist
            </option>
            </select>
          </div>

          <div style="margin-top: 0.5rem">
            <label
            htmlFor="firstName"
            class="input-label"
          >
            First name
          </label>
          <input
            type="text"
            name="firstName"
            id="firstName"
            placeholder="First Name"
            required
            class="input"
          />
          </div>

          <div style="margin-top: 0.5rem">
            <label
            htmlFor="lastName"
            class="input-label"
          >
            Last name
          </label>
          <input
            type="text"
            name="lastName"
            id="lastName"
            placeholder="Last Name"
            required
            class="input"
          />
          </div>

          <div style="margin-top: 0.5rem">
            <label
            htmlFor="email"
            class="input-label"
          >
            Email
          </label>
          <input
            type="text"
            name="email"
            id="email"
            placeholder="Email"
            required
            class="input"
          />
          </div>

          <div style="margin-top: 0.5rem">
            <label
              htmlFor="password"
              class="input-label">
              Password
            </label>
            <input
              type="text"
              name="password"
              id="password"
              placeholder="Password"
              required
              class="input"
            />
          </div>

          <div style="margin-top: 0.5rem">
            <label
              htmlFor="confirmPassword"
              class="input-label">
              Confirm Password
            </label>
            <input
              type="text"
              name="confirmPassword"
              id="confirmPassword"
              placeholder="Confirm Password"
              required
              class="input"
            />
          </div>
          
          
          <div style="padding-top: 0.75rem; margin-top: 0.5rem; background-color: rgba(249, 250, 251, 1); text-align: right;">
            <a
              type="submit"
              class="register-button"
              href="/"
            >
              <span className="ml-2">Register</span>
          </a>
          </div>
          </div>
        </form>
      </div>
    </div>
  </body>
</html>