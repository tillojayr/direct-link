<?php 

session_start();
if (!isset($_SESSION['seeker_has_login'])) {
  header('Location: login.php');
  exit();
}

?>

<!DOCTYPE html>

<html lang="en-us">
  <head>
    <meta charset="utf-8" />
    <title>Wallet - Payday Loan Service Template</title>
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, maximum-scale=5" />
    <meta name="description" content="This is meta description" />
    <meta name="author" content="Themefisher" />
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon" />
    <link rel="icon" href="images/favicon.png" type="image/x-icon" />

    <!-- theme meta -->
    <meta name="theme-name" content="wallet" />

    <!-- # Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;700&display=swap"
      rel="stylesheet" />

    <!-- # CSS Plugins -->
    <!-- <link rel="stylesheet" href="plugins/slick/slick.css" />
    <link rel="stylesheet" href="plugins/font-awesome/fontawesome.min.css" />
    <link rel="stylesheet" href="plugins/font-awesome/brands.css" />
    <link rel="stylesheet" href="plugins/font-awesome/solid.css" /> -->

    <!-- # Main Style Sheet -->
    <!-- <link rel="stylesheet" href="css/style.css" /> -->
    <link rel="stylesheet" href="css/profile.css" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
      crossorigin="anonymous" />
    <!-- <style>
      body {
        background: linear-gradient(to right, #a8e5b8, #a2d0ea);
      }
    </style> -->
  </head>

  <body>
    <!-- navigation -->
    <nav
      style="height: 80px"
      class="border border-bottom border-3 border-dark mb-5 d-flex justify-content-between align-items-center px-5">
      <div class="d-flex">
        <a href="dashboard-employer.php" class="btn btn-dark mx-3">Dashboard</a>
      </div>
      <div class="navbar-links">
        <!-- <a href=""
          ><svg
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 24 24"
            fill="currentColor"
            class="size-10 text-dark"
            style="height: 3rem; width: 3rem">
            <path
              d="M5.85 3.5a.75.75 0 0 0-1.117-1 9.719 9.719 0 0 0-2.348 4.876.75.75 0 0 0 1.479.248A8.219 8.219 0 0 1 5.85 3.5ZM19.267 2.5a.75.75 0 1 0-1.118 1 8.22 8.22 0 0 1 1.987 4.124.75.75 0 0 0 1.48-.248A9.72 9.72 0 0 0 19.266 2.5Z" />
            <path
              fill-rule="evenodd"
              d="M12 2.25A6.75 6.75 0 0 0 5.25 9v.75a8.217 8.217 0 0 1-2.119 5.52.75.75 0 0 0 .298 1.206c1.544.57 3.16.99 4.831 1.243a3.75 3.75 0 1 0 7.48 0 24.583 24.583 0 0 0 4.83-1.244.75.75 0 0 0 .298-1.205 8.217 8.217 0 0 1-2.118-5.52V9A6.75 6.75 0 0 0 12 2.25ZM9.75 18c0-.034 0-.067.002-.1a25.05 25.05 0 0 0 4.496 0l.002.1a2.25 2.25 0 1 1-4.5 0Z"
              clip-rule="evenodd" />
          </svg>
        </a>
        <a href=""
          ><svg
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 24 24"
            fill="currentColor"
            class="size-10 text-dark"
            style="height: 3rem; width: 3rem">
            <path
              fill-rule="evenodd"
              d="M3 6.75A.75.75 0 0 1 3.75 6h16.5a.75.75 0 0 1 0 1.5H3.75A.75.75 0 0 1 3 6.75ZM3 12a.75.75 0 0 1 .75-.75h16.5a.75.75 0 0 1 0 1.5H3.75A.75.75 0 0 1 3 12Zm0 5.25a.75.75 0 0 1 .75-.75h16.5a.75.75 0 0 1 0 1.5H3.75a.75.75 0 0 1-.75-.75Z"
              clip-rule="evenodd" />
          </svg>
        </a>
        <a href="profile.html"
          ><svg
            xmlns="http://www.w3.org/2000/svg"
            fill="none"
            viewBox="0 0 24 24"
            stroke-width="1.5"
            stroke="currentColor"
            class="size-10 text-dark"
            style="height: 3rem; width: 3rem">
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
          </svg>
        </a> -->
      </div>
    </nav>

    <div class="container">
      <div class="row justify-content-center">
        <div class="col-12 col-lg-10 col-xl-8 mx-auto">
          <h2 class="h2 mb-2 page-title">Company Profile</h2>
          <div class="my-2">
            <form id="profile_form">
              <div class="row mt-5 align-items-center">
                <div class="col-md-4 text-center mb-5">
                  <div class="avatar avatar-xl">
                    <img
                      src="https://bootdey.com/img/Content/avatar/avatar6.png"
                      alt="..."
                      class="avatar-img"
                      id="profileImage" />
                  </div>
                  <div class="my-3">
                    <input class="form-control" accept="image/png, image/gif, image/jpeg" type="file" id="profile" name="profile">
                  </div>
                </div>
                <div class="col">
                  <div class="row align-items-center">
                    <div class="col-md-7">
                      <h3 class="mb-1" id="name"></h3>
                      <p class="small mb-3">
                        <span class="badge badge-dark">New York, USA</span>
                      </p>
                    </div>
                  </div>
                  <div class="row mb-4">
                    <div class="col-lg-12">
                      <textarea class="form-control" id="description" name="description" rows="5"></textarea>
                    </div>
                  </div>
                </div>
              </div>
              <hr class="my-4" />
              <div class="row mb-3">
                <div class="col-lg-6">
                  <label class="form-label mb-0" for="firstname">Firstname</label>
                  <input type="text" id="firstname" name="firstname" class="form-control"/>
                </div>
                <div class="col-lg-6">
                  <label for="lastname">Lastname</label>
                  <input type="text" id="lastname" name="lastname" class="form-control"/>
                </div>
              </div>
              <div class="row mb-3">
                <div class="form-group col-lg-6">
                  <label for="email">Email</label>
                  <input type="email" class="form-control" id="email" name="email"/>
                </div>
                <div class="form-group col-lg-6">
                  <label for="phone_number">Phone Number</label>
                  <input type="number" class="form-control" id="phone_number" name="phone_number"/>
                </div>
              </div>
              <div class="form-group mb-3">
                <label for="address">Address</label>
                <input type="text" class="form-control" id="address" name="address"/>
              </div>
              <div class="row mb-3">
                <div class="col">
                  <label for="company">Company</label>
                  <input type="text" class="form-control" id="company" name="company"/>
                </div>
              </div>
              <div class="row mb-3">
                <div class="col-lg-6">
                  <label for="project_links">Project Links</label>
                  <input type="text" class="form-control" id="project_links" name="project_links"/>
                </div>
                <div class="col-lg-6">
                  <label for="linkedin">LinkedIn</label>
                  <input type="text" class="form-control" id="linkedin" name="linkedin"/>
                </div>
              </div>
              <div class="row mb-3">
                <div class="col">
                  <label for="title">Title <small>(Ex. Software Engineer)</small></label>
                  <input type="text" class="form-control" id="title" name="title"/>
                </div>
              </div>
              <hr class="my-4" />
              <div class="mb-3">
                <label for="skills" class="form-label">Skills <small>(List all your skills)</small></label>
                <textarea class="form-control" id="skills" rows="4" name="skills"></textarea>
              </div>
              <hr class="my-4" />
              <div class="mb-3">
                <label for="educ_background" class="form-label">Educational Background</label>
                <textarea class="form-control" id="educ_background" name="educ_background" rows="4"></textarea>
              </div>
              <hr class="my-4" />
              <div class="mb-3">
                <label for="work_history" class="form-label">Work History <small>(N/A if none)</small></label>
                <textarea class="form-control" id="work_history" name="work_history" rows="4"></textarea>
              </div>
              <hr class="my-4" />
              <div class="mb-5">
                <label for="other_info" class="form-label">Other information / Achievements</label>
                <textarea class="form-control" id="other_info" name="other_info" rows="4"></textarea>
              </div>
              <div class="d-flex justify-content-end">
                <button type="submit" class="btn btn-primary" id="profile_submit_button">Save Changes</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

    <!-- # JS Plugins -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <script src="plugins/bootstrap/bootstrap.min.js"></script>
    <script src="plugins/slick/slick.min.js"></script>
    <script src="plugins/scrollmenu/scrollmenu.min.js"></script>

    <!-- Main Script -->
    <script src="js/script.js"></script>
    <script src="js/profile/index.js"></script>

    <!-- validation -->
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/additional-methods.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/additional-methods.min.js"></script>

    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
      integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
      crossorigin="anonymous"></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
      integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
      crossorigin="anonymous"></script>

      <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  </body>
</html>
