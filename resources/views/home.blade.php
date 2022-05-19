<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">


    <!-- Styles -->
   
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
   
  
    <div class="shadow-md" style="border-bottom-width: 1px; border-color: rgb(229 231 235 / 1); margin-left: auto; margin-right: auto; max-width: 1024px; margin-top: 20px">
      <div class="patients-table-header">
        <p>Patients</p>
      </div>
      <table class="table">
        <thead>
          <tr style="background-color: rgb(243 244 246 / 1);">
            <th scope="col table-header">Full Name</th>
            <th scope="col table-header">Phone Number</th>
            <th scope="col table-header">Age</th>
            <th scope="col table-header">Gender</th>
          </tr>
        </thead>
        <tbody style="background-color: rgb(255 255 255 / 1); border-top-width: calc(1px * calc(1 - 0)); border-bottom-width: calc(1px * 0); border-color: rgb(229 231 235 / 1);">
          <tr class="table-row">
            <td class="table-data">
              <div style="display: flex; align-items: center; justify-content: center;">
                <div style="flex-shrink: 0; height: 2.5rem; width: 2.5rem">
                  <svg
                  xmlns="http://www.w3.org/2000/svg"
                  fill="none"
                  viewBox="0 0 24 24"
                  stroke="currentColor"
                  class="height: 2.5rem; width: 2.5rem; color: rgb(75 85 99 / 1);"
                >
                  <path
                    strokeLinecap="round"
                    strokeLinejoin="round"
                    strokeWidth={2}
                    d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z"
                  />
                  </svg>
                </div>
                <div style="margin-left: 1rem;">
                  <p style="color: rgb(17 24 39 / 1)">
                    Dagem Tiliksew
                  </p>
                </div>
              </div>
            </td>
            <td class="table-data">0912440101</td>
            <td class="table-data">34</td>
            <td class="table-data">Male</td>
          </tr>
          <tr class="table-row">
            <td class="table-data">
              <div style="display: flex; align-items: center; justify-content: center;">
                <div style="flex-shrink: 0; height: 2.5rem; width: 2.5rem">
                  <svg
                  xmlns="http://www.w3.org/2000/svg"
                  fill="none"
                  viewBox="0 0 24 24"
                  stroke="currentColor"
                  class="height: 2.5rem; width: 2.5rem; color: rgb(75 85 99 / 1);"
                >
                  <path
                    strokeLinecap="round"
                    strokeLinejoin="round"
                    strokeWidth={2}
                    d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z"
                  />
                  </svg>
                </div>
                <div style="margin-left: 1rem;">
                  <p style="color: rgb(17 24 39 / 1)">
                    Dagem Tiliksew
                  </p>
                </div>
              </div>
            </td>
            <td class="table-data">0912440101</td>
            <td class="table-data">34</td>
            <td class="table-data">Male</td>
          </tr>
        </tbody>
      </table>
    </div>
  
  </body>
</html>