<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>sheriapartners.</title>
  <link rel="stylesheet" href="./style.css">

</head>
<body>
<body class="keyframes-hold">

    <div class="container">
      <!-- partial:index.partial.html -->
        <form action="database.php" class="styled-inputs">

            <div class="col">
                <!-- Text -->
                <div class="form-group">
                    <input id="text-input" type="text" placeholder=" ">
                    <label for="text-input">Name of Organisation.</label>
                </div>


                <!-- URL -->
                <div class="form-group">
                    <span>http://</span>
                    <input id="url" type="url" placeholder=" " pattern="https://.*">
                    <label for="url">Website</label>
                </div>


                <!-- Select -->
                <div class="form-group">

                    <div id="custom-select-status" class="visually-hidden" aria-live="polite"></div>
                    <div class="custom-select" id="myCustomSelect">

                        <input type="text" id="custom-select-input" aria-describedby="custom-select-info" aria-expanded="false">

                        <span id="custom-select-info" class="visually-hidden">Arrow down for options or start typing to filter.</span>
                        <span class="custom-select__icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-triangle" focusable="false" aria-hidden="true" class="icon" role="img">
                                <path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"></path>
                            </svg>
                        </span>
                        <ul class="custom-select__options hidden-all" id="custom-select-list">
                            <li>
                                <span>Sponsor</span>
                            </li>
                            <li>
                                <span>Advertiser</span>
                            </li>
                            <li>
                                <span>Social Media Campaigner</span>
                            </li>
                            <li>
                                <span>Volunteers.</span>
                            </li>

                        </ul>
                    </div>
                    <label for="custom-select-input">User Type</label>
                </div>

                <!-- Password -->
                <div class="form-group">
                    <input id="password-input" type="password" placeholder=" ">
                    <label for="password-input">Password Input</label>
                    <span class="password-view">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="password-toggle feather feather-eye">
                            <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                            <circle cx="12" cy="12" r="3"></circle>
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="password-toggle feather feather-eye-off">
                            <path d="M17.94 17.94A10.07 10.07 0 0 1 12 20c-7 0-11-8-11-8a18.45 18.45 0 0 1 5.06-5.94M9.9 4.24A9.12 9.12 0 0 1 12 4c7 0 11 8 11 8a18.5 18.5 0 0 1-2.16 3.19m-6.72-1.07a3 3 0 1 1-4.24-4.24"></path>
                            <line x1="1" y1="1" x2="23" y2="23"></line>
                        </svg>
                    </span>
                </div>
<br>
                <button>
                    Submit
                </button>


            </div>

            <div class="col">



                <div class="profile">
                    <div class="profile__image-wrapper">
                        <div class="profile__image">
                            <img src="#" alt="Image Logo Upload">
                        </div>
                        <div class="profile__icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-lock">
                                <rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect>
                                <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="profile__details">

                        <input type="file"
              id="file1"
              name="upload">
                    </div>
                </div>
            </div>

        </form>

      <p><a href="#" class="dribbble">Sheria Street</a>  <a href="#" class="dribbble"></a>  <a href="#" class="dribbble"></a></p>
    </div>
</body>
<!-- partial -->
  <script  src="./script.js"></script>

</body>
</html>
