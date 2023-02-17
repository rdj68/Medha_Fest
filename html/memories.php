<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../css/bg.css" />
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/index.min.css"
    />
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
      tailwind.config = {
        theme: {
          extend: {
            fontFamily: {
              sans: ["Inter", "sans-serif"],
            },
          },
        },
      };
    </script>
    <script src="../js/memories.js"></script>
  </head>
  <body class="overflow-auto">
    <!-- navbar start -->
    <?php
include('navbar.php');
    ?>
    <!-- navbar ends -->

    <!-- Heading -->
    <h1 data-aos="zoom-in" data-aos-duration=1000
      class="text-yellow-300 hidden text-center font-serif text-3xl sm:block sm:text-5xl m-4 bg-black"
    >
      Medha Memories
    </h1>

    <!-- Year wise button list start-->
    <ul
      class="nav nav-pills mx-10 mt-5 gap-5 grid grid-cols-3 md:grid-cols-3 lg:grid-cols-6 lg:flex-grow text-center list-none pl-0 mb-4"
      id="pills-tab3"
      role="tablist"
    >
      <li class="nav-item" role="presentation">
        <button data-aos="zoom-in"
          type="button"
          class="nav-link block font-medium text-xs leading-tight uppercase rounded w-full md:w-auto lg:w-full px-6 py-3 my-2 md:mr-2 focus:outline-none focus:ring-0 active"
          id="pills-home-tab3"
          data-bs-toggle="pill"
          data-bs-target="#pills-home3"
          role="tab"
          aria-controls="pills-home3"
          aria-selected="true"
          onclick="handleToggle('all')"
        >
          All
        </button>
      </li>
      <li class="nav-item" role="presentation">
        <button data-aos="zoom-in"
          type="button"
          class="nav-link block font-medium text-xs leading-tight uppercase rounded w-full md:w-auto lg:w-full px-6 py-3 my-2 md:mx-2 focus:outline-none focus:ring-0"
          id="pills-profile-tab3"
          data-bs-toggle="pill"
          data-bs-target="#pills-profile3"
          role="tab"
          aria-controls="pills-profile3"
          aria-selected="false"
          onclick="handleToggle('2017')"
        >
          2017
        </button>
      </li>
      <li class="nav-item" role="presentation">
        <button data-aos="zoom-in"
          type="button"
          class="nav-link block font-medium text-xs leading-tight uppercase rounded w-full md:w-auto lg:w-full px-6 py-3 my-2 md:ml-2 focus:outline-none focus:ring-0"
          id="pills-contact-tab3"
          data-bs-toggle="pill"
          data-bs-target="#pills-contact3"
          role="tab"
          aria-controls="pills-contact3"
          aria-selected="false"
          onclick="handleToggle('2018')"
        >
          2018
        </button>
      </li>
      <li class="nav-item" role="presentation">
        <button data-aos="zoom-in"
          type="button"
          class="nav-link block font-medium text-xs leading-tight uppercase rounded w-full md:w-auto lg:w-full px-6 py-3 my-2 md:ml-2 focus:outline-none focus:ring-0"
          id="pills-contact-tab3"
          data-bs-toggle="pill"
          data-bs-target="#pills-contact3"
          role="tab"
          aria-controls="pills-contact3"
          aria-selected="false"
          onclick="handleToggle('2019')"
        >
          2019
        </button>
      </li>
      <li class="nav-item" role="presentation">
        <button data-aos="zoom-in"
          type="button"
          class="nav-link block font-medium text-xs leading-tight uppercase rounded w-full md:w-auto lg:w-full px-6 py-3 my-2 md:ml-2 focus:outline-none focus:ring-0"
          id="pills-contact-tab3"
          data-bs-toggle="pill"
          data-bs-target="#pills-contact3"
          role="tab"
          aria-controls="pills-contact3"
          aria-selected="false"
          onclick="handleToggle('2020')"
        >
          2020
        </button>
      </li>
      <li class="nav-item" role="presentation">
        <button data-aos="zoom-in"
          type="button"
          class="nav-link block font-medium text-xs leading-tight uppercase rounded w-full md:w-auto lg:w-full px-6 py-3 my-2 md:ml-2 focus:outline-none focus:ring-0"
          id="pills-contact-tab3"
          data-bs-toggle="pill"
          data-bs-target="#pills-contact3"
          role="tab"
          aria-controls="pills-contact3"
          aria-selected="false"
          onclick="handleToggle('2023')"
        >
          2023
        </button>
      </li>
    </ul>

    <!--Year wise button list ends-->

    <!-- grid -->
    <div class="flex flex-col gap-5 mx-2 md:mx-10">
      <!-- Sidebar start -->
      <?php
            include('sidebar.php');
        ?>
      <!-- sidebar end -->
      <!-- photos video grid start -->
      <div data-aos="fade-right" data-aos-duration=1000 
        id="mainContainer"
        class="grid main-container p-3 grid-cols-1 grid-flow-cols gap-4 lg:grid-cols-3 md:grid-cols-2 overflow-auto"
      >
        <div 
          class="text-white c-2021 overflow-auto hover:border-gray-500 cursor-pointer p-3 flex flex-col items-center border-[1px] border-gray-700 h-[400px] rounded-lg"
        >
          <iframe  src="../res/medha-2020.pdf" width="100%" height="500px">
          </iframe>
        </div>
      </div>
      <!-- photos video grid end -->
    </div>
    </div>
    <!-- grid end -->
    <!-- Footer start -->
    <footer class="text-center h-[50px] bg-gray-900 text-white sticky bottom-0">
      <div class="container pt-1 gap-4">
        <div class="flex justify-center mb-6">
          <a
            href="https://www.facebook.com/AVCOEngg"
            type="button"
            class="rounded-full hover:scale-110 border-2 border-white text-white leading-normal uppercase hover:bg-black hover:bg-opacity-5 focus:outline-none focus:ring-0 transition duration-150 ease-in-out w-9 h-9 m-1"
          >
            <svg
              aria-hidden="true"
              focusable="false"
              data-prefix="fab"
              data-icon="facebook-f"
              class="w-2 h-full mx-auto"
              role="img"
              xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 320 512"
            >
              <path
                fill="currentColor"
                d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z"
              ></path>
            </svg>
          </a>

          <a
            href="#!"
            type="button"
            class="rounded-full hover:scale-110 border-2 border-white text-white leading-normal uppercase hover:bg-black hover:bg-opacity-5 focus:outline-none focus:ring-0 transition duration-150 ease-in-out w-9 h-9 m-1"
          >
            <svg
              aria-hidden="true"
              focusable="false"
              data-prefix="fab"
              data-icon="twitter"
              class="w-3 h-full mx-auto"
              role="img"
              xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 512 512"
            >
              <path
                fill="currentColor"
                d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"
              ></path>
            </svg>
          </a>

          <a
            href="https://www.avcoe.org/"
            type="button"
            class="rounded-full hover:scale-110 border-2 border-white text-white leading-normal uppercase hover:bg-black hover:bg-opacity-5 focus:outline-none focus:ring-0 transition duration-150 ease-in-out w-9 h-9 m-1"
          >
            <svg
              aria-hidden="true"
              focusable="false"
              data-prefix="fab"
              data-icon="google"
              class="w-3 h-full mx-auto"
              role="img"
              xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 488 512"
            >
              <path
                fill="currentColor"
                d="M488 261.8C488 403.3 391.1 504 248 504 110.8 504 0 393.2 0 256S110.8 8 248 8c66.8 0 123 24.5 166.3 64.9l-67.5 64.9C258.5 52.6 94.3 116.6 94.3 256c0 86.5 69.1 156.6 153.7 156.6 98.2 0 135-70.4 140.8-106.9H248v-85.3h236.1c2.3 12.7 3.9 24.9 3.9 41.4z"
              ></path>
            </svg>
          </a>

          <a
            href="https://instagram.com/medha_official_?igshid=YmMyMTA2M2Y="
            type="button"
            class="rounded-full hover:scale-110 border-2 border-white text-white leading-normal uppercase hover:bg-black hover:bg-opacity-5 focus:outline-none focus:ring-0 transition duration-150 ease-in-out w-9 h-9 m-1"
          >
            <svg
              aria-hidden="true"
              focusable="false"
              data-prefix="fab"
              data-icon="instagram"
              class="w-3 h-full mx-auto"
              role="img"
              xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 448 512"
            >
              <path
                fill="currentColor"
                d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"
              ></path>
            </svg>
          </a>

          <a
            href="https://www.linkedin.com/showcase/alumni---avcoe/"
            type="button"
            class="rounded-full hover:scale-110 border-2 border-white text-white leading-normal uppercase hover:bg-black hover:bg-opacity-5 focus:outline-none focus:ring-0 transition duration-150 ease-in-out w-9 h-9 m-1"
          >
            <svg
              aria-hidden="true"
              focusable="false"
              data-prefix="fab"
              data-icon="linkedin-in"
              class="w-3 h-full mx-auto"
              role="img"
              xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 448 512"
            >
              <path
                fill="currentColor"
                d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z"
              ></path>
            </svg>
          </a>

          <a
            href="https://youtube.com/@amrutvahinicollegeofengine5363"
            type="button"
            class="rounded-full hover:scale-110 border-2 border-white text-white leading-normal uppercase hover:bg-black hover:bg-opacity-5 focus:outline-none focus:ring-0 transition duration-150 ease-in-out w-9 h-9 m-1"
          >
            <svg
              aria-hidden="true"
              focusable="false"
              data-prefix="fab"
              data-icon="youtube"
              xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 576 512"
              class="w-3 h-full mx-auto"
            >
              <!--! Font Awesome Pro 6.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
              <path
                fill="currentColor"
                d="M549.655 124.083c-6.281-23.65-24.787-42.276-48.284-48.597C458.781 64 288 64 288 64S117.22 64 74.629 75.486c-23.497 6.322-42.003 24.947-48.284 48.597-11.412 42.867-11.412 132.305-11.412 132.305s0 89.438 11.412 132.305c6.281 23.65 24.787 41.5 48.284 47.821C117.22 448 288 448 288 448s170.78 0 213.371-11.486c23.497-6.321 42.003-24.171 48.284-47.821 11.412-42.867 11.412-132.305 11.412-132.305s0-89.438-11.412-132.305zm-317.51 213.508V175.185l142.739 81.205-142.739 81.201z"
              />
            </svg>
          </a>
        </div>
      </div>
    </footer>
    <!-- Footer end -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
  </body>
  <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>
</html>
