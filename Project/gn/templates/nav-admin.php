<nav class="bg-gray-900">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="flex items-center justify-between h-16">
      <div class="flex items-center">
        <h1><a href="index.php" class="px-3 py-2">
        <img class="w-20 hover:bg-gray-500" src="images/greentech.png" alt="Greentech-logo"/></a></h1>
        <div>
          <div class="ml-10 flex items-baseline space-x-4">

            <a href="adminHome.php" class="bg-white-900 text-gray-300 hover:bg-gray-700 hover:text-gray px-3 py-2 square-md text-sm font-medium" aria-current="page">Admin Home</a>
          </div>
        </div>
      </div>

      <div>
        <?php
        if (isset($_SESSION['ID'])) {
        ?>
        <a href="logout.php" class="border border-white text-white hover:bg-white hover:text-gray-900 px-3 py-2 square-md text-sm font-medium">Log Out</a>
        <?php
      }
        ?>
      </div>
    </div>
  </div>
</nav>