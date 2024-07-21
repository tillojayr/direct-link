<!DOCTYPE html>

<html lang="en-us">
  <head>
    <meta charset="utf-8" />
    <title>Direct Link</title>
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
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
      class="border border-bottom border-3 border-dark mb-3 d-flex justify-content-between align-items-center px-lg-5">
      <div class="d-flex">
         <h2 class="fw-bold">DIRECT-LINK</h2>
      </div>
      <div class="navbar-links" id="navLinks">
        <i class="fa-solid fa-xmark" onclick="navClose()"></i>
        <a href=""
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
        <a href="employer-profile.php"
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
        </a>
        <a href="#" id="logout_btn">Logout</a>
      </div>
      <i class="fa-solid fa-bars" onclick="navOpen()"></i>
    </nav>
    <div class="mt-4">
      <div class="row">
        
        <div class="col-lg-6 col-md-12 mb-sm-5 px-5 border-end border-dark border-2">
          <h1 class="text-center mb-lg-4">Job Offers</h1>
          <div class="d-grid gap-2 mb-3">
            <button class="btn btn-secondary" id="add_job_posting_btn" type="button">Add Job Posting</button>
            </div>
          <div class="mb-4 btn btn-light shadow" style="background-color: #eee;">
            <div class="d-flex">
                  <!-- <div class="col-3 p-3" style="object-fit:cover;">
                    <img height="100" width="100"  src="https://fiverr-res.cloudinary.com/images/t_main1,q_auto,f_auto,q_auto,f_auto/gigs/266061678/original/ed2105546b534db4e4ebd2635a9184b3e244912e/customized-2x2-id-picture-with-or-without-formal-attire.jpeg" alt="">
                  </div> -->
                  <div class="col p-3" >
                    <h3 class="">Job Title</h3>
                    <p>
                      Description Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque, quod dolor? Lorem, ipsum dolor sit amet consectetur adipisicing elit. Doloremque ullam molestiae ea blanditiis, optio quaerat iure totam enim nostrum! Soluta quae doloribus et iure, corrupti deserunt voluptatibus fugiat rerum architecto. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eveniet nemo aperiam voluptates, ipsam quod nesciunt amet maiores suscipit? Eos voluptates qui quaerat animi fuga sunt? Blanditiis non doloribus fuga minima?
                    </p>
                  </div>
                </div>
          </div>
          <div class="mb-4 btn btn-light shadow" style="background-color: #eee;">
            <div class="d-flex">
                  <!-- <div class="col-3 p-3" style="object-fit:cover;">
                    <img height="100" width="100"  src="https://fiverr-res.cloudinary.com/images/t_main1,q_auto,f_auto,q_auto,f_auto/gigs/266061678/original/ed2105546b534db4e4ebd2635a9184b3e244912e/customized-2x2-id-picture-with-or-without-formal-attire.jpeg" alt="">
                  </div> -->
                  <div class="col p-3" >
                    <h3 class="text-center" >Job Title</h3>
                    <p>
                      Description Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque, quod dolor? Lorem, ipsum dolor sit amet consectetur adipisicing elit. Doloremque ullam molestiae ea blanditiis, optio quaerat iure totam enim nostrum! Soluta quae doloribus et iure, corrupti deserunt voluptatibus fugiat rerum architecto. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eveniet nemo aperiam voluptates, ipsam quod nesciunt amet maiores suscipit? Eos voluptates qui quaerat animi fuga sunt? Blanditiis non doloribus fuga minima?
                    </p>
                  </div>
                </div>
          </div>
          
          <div class="mb-4 btn btn-light shadow" style="background-color: #eee;">
            <div class="d-flex">
                  <!-- <div class="col-3 p-3" style="object-fit:cover;">
                    <img height="100" width="100"  src="https://fiverr-res.cloudinary.com/images/t_main1,q_auto,f_auto,q_auto,f_auto/gigs/266061678/original/ed2105546b534db4e4ebd2635a9184b3e244912e/customized-2x2-id-picture-with-or-without-formal-attire.jpeg" alt="">
                  </div> -->
                  <div class="col p-3" >
                    <h3 class="text-center" >Job Title</h3>
                    <p>
                      Description Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque, quod dolor? Lorem, ipsum dolor sit amet consectetur adipisicing elit. Doloremque ullam molestiae ea blanditiis, optio quaerat iure totam enim nostrum! Soluta quae doloribus et iure, corrupti deserunt voluptatibus fugiat rerum architecto. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eveniet nemo aperiam voluptates, ipsam quod nesciunt amet maiores suscipit? Eos voluptates qui quaerat animi fuga sunt? Blanditiis non doloribus fuga minima?
                    </p>
                  </div>
                </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-12">
          <h1 class="text-center mb-lg-4">Reports</h1>
          <div class=" m-5" style="background-color: #eee;">content 1</div>
          <div class="row justify-content-around">
            <div class="col-sm-4 col-6 mb-3" style="background-color: #eee; height: 200px;">content 2</div>
            <div class="col-sm-4 col-6 mb-3" style="background-color: #eee; height: 200px;">content 3</div>
          </div>
        </div>

      </div>
    </div>
    <div class="line my-4" style="height: 2px;
      background-color: #333;"></div>

    <!-- Modal -->
    <div class="modal fade" id="add_job_posting_modal" tabindex="-1" aria-labelledby="exampleModalLabel1" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel1">Add Job Posting</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
    <!-- Javascript -->
    <script>

      function navClose(){
        $('#navLinks').addClass('d-none');
      }
      function navOpen(){
        $('#navLinks').addClass('d-none');
      }
    </script>

    <!-- # JS Plugins -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <script src="plugins/bootstrap/bootstrap.min.js"></script>
    <script src="plugins/slick/slick.min.js"></script>
    <script src="plugins/scrollmenu/scrollmenu.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css "></script>

    <!-- Main Script -->
    <script src="js/script.js"></script>
    <script src="js/employer/index.js"></script>

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
  </body>
</html>
