<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../../../css/bg.css" />
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
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="Singing.js"></script>

    <title>Singing Comittee Members</title>
  </head>
  <body>
  <?php
      include('../navbar_member.php');
  ?>

    <div class="p-10 h-[100vh] w-[100vw] items-center">
      <h1 class="text-yellow-200 font-bold text-center text-3xl">
        Singing Comittee Members
      </h1>
      <div class="flex gap-4">
        
        <!-- grid -->
        <div class="flex gap-5 mx-2 md:mx-10">
          <!-- Sidebar start -->
          <?php
      include('../sidebar_member.php');
  ?>
          <!-- sidebar end -->
          <!-- photos video grid start -->

          <!-- photos video grid end -->
        </div>
        <div
          id="membersGrid"
          class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 mt-10"
        ></div>
      </div>
    </div>
  </body>
  <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>
</html>
