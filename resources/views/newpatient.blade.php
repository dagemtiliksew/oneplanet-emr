<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>New Patient</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">


    <!-- Styles -->
   
    <link href="{{ asset('css/newpatient.css') }}" rel="stylesheet">
    <link href="{{ asset('css/home.css') }}" rel="stylesheet">
    <link href="{{ asset('css/common.css') }}" rel="stylesheet">
  </head>
  <body>
     <!-- Header -->
     <div style="background-color: rgb(229 231 235 / 1)">
      <div style="background-color: rgb(31 41 55 / 1)">
        <div style="margin-left: auto; margin-right: auto; padding-left: 1.5rem; padding-right: 1.5rem; padding-top: 0.25rem; padding-bottom: 0.25rem">
          <div style="display: flex; align-items: center;  justify-content: space-between; height: 4rem">
            <div style="display: flex; flex-grow: 1; align-items: center">
              <div style="color: white">
                Electronic Medical record
              </div>
              <div style="align-items: baseline; flex-grow: 1; margin-left: 9rem;  margin-right: 9rem">
                <div style="position: relative; z-index: 20;">
                  <input
                  type="search"
                  class="search-input"
                  placeholder="Search"
                  aria-haspopup="listbox"
                  aria-expanded="false"
                  autoComplete="off"
                />
                </div>
              </div>
            </div>
            <div>
              <svg
              style="height: 1.5rem; width: 1.5rem; color: white"
              stroke="currentColor"
              fill="none"
              viewBox="0 0 24 24"
            >
              <path
                strokeLinecap="round"
                strokeLinejoin="round"
                strokeWidth="2"
                d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"
              />
            </svg>
            </div>
          </div>
        </div>
      </div>
    </div>

     <!-- Toolbar -->
      <div style="background-color: rgb(229 231 235 / 1);">
        <div style="margin-left: auto; margin-right: auto; padding-top: 0.5rem;  padding-bottom: 0.5rem; padding-left: 1rem; padding-right: 1rem; ">
          <div style="gap: 0.5rem; width: 100%; display: flex; flex-wrap: wrap;  margin: -0.25rem">
            <button type="button" class="chip">
              <div style="display: flex; margin-right: calc(0.25rem * 0); margin-left: calc(0.25rem * calc(1 - 0)); align-items: center;">
                <div>
                  <svg
                    style="height: 1.5rem; width: 1.5rem"
                    stroke="currentColor"
                    fill="none"
                    viewBox="0 0 24 24">
                      <path
                        strokeLinecap="round"
                        strokeLinejoin="round"
                        strokeWidth={2}
                        d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"
                      />
                  </svg>
                </div>
                <a href="/">
                  Home
                </a>
              </div>
            </button>
            <button type="button" class="chip">
              <div style="display: flex; margin-right: calc(0.25rem * 0); margin-left: calc(0.25rem * calc(1 - 0)); align-items: center;">
                <div>
                  <svg
                    style="height: 1.5rem; width: 1.5rem"
                    stroke="currentColor"
                    fill="none"
                    viewBox="0 0 24 24">
                    <path
                    strokeLinecap="round"
                    strokeLinejoin="round"
                    strokeWidth={2}
                    d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"
                  />
                  </svg>
                </div>
                <a href="/new-patient">
                  New Patient
                </a>
              </div>
            </button>
          </div>
        </div>
      </div>
      

    <p style="font-size: 1.125rem; line-height: 1.75rem; padding-left: 1.5rem; padding-right: 1.5rem; padding-top: 1.0rem; padding-bottom: 1.0rem; font-weight: 700;">New Patient</p>
    <div style="background-color: rgb(249 250 251 / 1); padding: 1rem;  border-radius: 0.375rem;">
      <div style="margin-top: 2.5rem">
        <div style="display: grid; grid-template-columns: repeat(3, minmax(0, 1fr)); gap: 1.5rem">
          <div style="grid-column: span 1 / span 1;">
            <p>Demographic</p>
          </div>
          <div style="grid-column: span 2 / span 2;">
            <div style="display: grid; grid-template-columns: repeat(6, minmax(0, 1fr)); gap: 1.8rem">
              <div style="grid-column: span 3 / span 3;">
                <label for="firstName" class="label">
                  First Name 
                </label>
                <input
                  required
                  type="text"
                  name="firstName"
                  id="firstName"
                  class="input"
                />
              </div>
              <div style="grid-column: span 3 / span 3;">
                <label for="lastName" class="label">
                  Last Name 
                </label>
                <input
                  required
                  type="text"
                  name="lastName"
                  id="lastName"
                  class="input"
                />
              </div>
              <div style="grid-column: span 3 / span 3;">
                <label for="dateOfBirth" class="label">
                  Date of Birth 
                </label>
                <input
                  required
                  type="date"
                  name="dateOfBirth"
                  id="dateOfBirth"
                  class="input"
                />
              </div>
              <div style="grid-column: span 3 / span 3;">
                <label for="gender" class="label">
                  Gender 
                </label>
                <input
                  required
                  type="text"
                  name="gender"
                  id="gender"
                  class="input"
                />
              </div>
              <div style="grid-column: span 3 / span 3;">
                <label for="idNo" class="label">
                  Identification Number 
                </label>
                <input
                  required
                  type="text"
                  name="idNo"
                  id="idNo"
                  class="input"
                />
              </div>
              <div style="grid-column: span 3 / span 3;">
                <label for="martialStatus" class="label">
                  Martial Status 
                </label>
                <input
                  required
                  type="text"
                  name="martialStatus"
                  id="martialStatus"
                  class="input"
                />
              </div>
              <div style="grid-column: span 3 / span 3;">
                <label for="occupation" class="label">
                  Occupation 
                </label>
                <input
                  required
                  type="text"
                  name="occupation"
                  id="occupation"
                  class="input"
                />
              </div>
              <div style="grid-column: span 3 / span 3;">
                <label for="memo" class="label">
                  Memo 
                </label>
                <input
                  required
                  type="text"
                  name="memo"
                  id="memo"
                  class="input"
                />
              </div>
            </div>
          </div>
        </div>
      </div>
      <div style="display: none;" aria-hidden="true">
        <div style="padding-top: 1.25rem; padding-bottom: 1.25rem">
          <div style="border-top-width: 1px; border-color: rgb(229 231 235 / 1);"></div>
        </div>
      </div>

      <div style="margin-top: 2.5rem">
        <div style="display: grid; grid-template-columns: repeat(3, minmax(0, 1fr)); gap: 2rem">
          <div style="grid-column: span 1 / span 1;">
            <p>Contact Information</p>
          </div>
          <div style="grid-column: span 2 / span 2;">
            <div style="display: grid; grid-template-columns: repeat(6, minmax(0, 1fr)); gap: 1.8rem">
              <div style="grid-column: span 3 / span 3;">
                <label for="phoneNo" class="label">
                  Cell phone 
                </label>
                <input
                  required
                  type="text"
                  name="phoneNo"
                  id="phoneNo"
                  class="input"
                />
              </div>
              <div style="grid-column: span 3 / span 3;">
                <label for="cellPhone2" class="label">
                  Cell phone 2 
                </label>
                <input
                  required
                  type="text"
                  name="cellPhone2"
                  id="cellPhone2"
                  class="input"
                />
              </div>
              <div style="grid-column: span 3 / span 3;">
                <label for="homePhone" class="label">
                  Home Phone
                </label>
                <input
                  required
                  type="text"
                  name="homePhone"
                  id="homePhone"
                  class="input"
                />
              </div>
              <div style="grid-column: span 3 / span 3;">
                <label for="region" class="label">
                  Region
                </label>
                <input
                  required
                  type="text"
                  name="region"
                  id="region"
                  class="input"
                />
              </div>
              <div style="grid-column: span 3 / span 3;">
                <label for="woreda" class="label">
                  Woreda
                </label>
                <input
                  required
                  type="text"
                  name="woreda"
                  id="woreda"
                  class="input"
                />
              </div>
              <div style="grid-column: span 3 / span 3;">
                <label for="zone" class="label">
                  Zone
                </label>
                <input
                  required
                  type="text"
                  name="zone"
                  id="zone"
                  class="input"
                />
              </div>
              <div style="grid-column: span 3 / span 3;">
                <label for="kebele" class="label">
                  Kebele
                </label>
                <input
                  required
                  type="text"
                  name="kebele"
                  id="kebele"
                  class="input"
                />
              </div>
              <div style="grid-column: span 3 / span 3;">
                <label for="city" class="label">
                  City
                </label>
                <input
                  required
                  type="text"
                  name="city"
                  id="city"
                  class="input"
                />
              </div>
              
              <div style="grid-column: span 3 / span 3;">
                <label for="subCity" class="label">
                  Sub-City
                </label>
                <input
                  required
                  type="text"
                  name="subCity"
                  id="subCity"
                  class="input"
                />
              </div>
              
              <div style="grid-column: span 3 / span 3;">
                <label for="kebele" class="label">
                  Kebele
                </label>
                <input
                  required
                  type="text"
                  name="kebele"
                  id="kebele"
                  class="input"
                />
              </div>
              
              <div style="grid-column: span 3 / span 3;">
                <label for="houseNo" class="label">
                  House No
                </label>
                <input
                  required
                  type="text"
                  name="houseNo"
                  id="houseNo"
                  class="input"
                />
              </div>

              <div style="grid-column: span 3 / span 3;">
                <label for="email" class="label">
                  Email
                </label>
                <input
                  required
                  type="email"
                  name="email"
                  id="email"
                  class="input"
                />
              </div>
              
              
            </div>
          </div>
        </div>
      </div>
      <div style="display: none;" aria-hidden="true">
        <div style="padding-top: 1.25rem; padding-bottom: 1.25rem">
          <div style="border-top-width: 1px; border-color: rgb(229 231 235 / 1);"></div>
        </div>
      </div>

      <div style="margin-top: 2.5rem">
        <div style="display: grid; grid-template-columns: repeat(3, minmax(0, 1fr)); gap: 2rem">
          <div style="grid-column: span 1 / span 1;">
            <p>Emergency Contact</p>
          </div>
          <div style="grid-column: span 2 / span 2;">
            <div style="display: grid; grid-template-columns: repeat(6, minmax(0, 1fr)); gap: 1.8rem">
              <div style="grid-column: span 3 / span 3;">
                <label for="emergencyContactName" class="label">
                  Full Name
                </label>
                <input
                  required
                  type="text"
                  name="emergencyContactName"
                  id="emergencyContactName"
                  class="input"
                />
              </div>
              <div style="grid-column: span 3 / span 3;">
                <label for="emergencyContactRel" class="label">
                  Relationship to patient 
                </label>
                <input
                  required
                  type="text"
                  name="emergencyContactRel"
                  id="emergencyContactRel"
                  class="input"
                />
              </div>
              <div style="grid-column: span 3 / span 3;">
                <label for="emergencyContactPhone" class="label">
                  Contact number 
                </label>
                <input
                  required
                  type="text"
                  name="emergencyContactPhone"
                  id="emergencyContactPhone"
                  class="input"
                />
              </div>
              <div style="grid-column: span 3 / span 3;">
                <label for="emergencyContactPhone2" class="label">
                  Contact number 2
                </label>
                <input
                  required
                  type="text"
                  name="emergencyContactPhone2"
                  id="emergencyContactPhone2"
                  class="input"
                />
              </div>
            </div>
          </div>
        </div>
      </div>
      <div style="display: none;" aria-hidden="true">
        <div style="padding-top: 1.25rem; padding-bottom: 1.25rem">
          <div style="border-top-width: 1px; border-color: rgb(229 231 235 / 1);"></div>
        </div>
      </div>

    

      <div style="margin-top: 2.5rem">
        <div style="display: grid; grid-template-columns: repeat(3, minmax(0, 1fr)); gap: 2rem">
          <div style="grid-column: span 1 / span 1;">
     
          </div>
          <div style="grid-column: span 2 / span 2;">
            <div style="display: grid; grid-template-columns: repeat(6, minmax(0, 1fr)); gap: 1.5rem">
              <div style="grid-column: span 6 / span 6;">
                <button type="submit" class="submit-button">
                  Save
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>