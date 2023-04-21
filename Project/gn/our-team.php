<?php
    include 'db_connection.php';
?>

<?php
session_start();
?>

<?php
//TEMPLATES
    include 'templates/head.html';
    include 'templates/nav-bar.php';
    include 'templates/search-bar.php';
?>
<!-- component -->
<div class="py-0 bg-gray-50 overflow-hidden">
    <div class="container m-auto px-6 space-y-8 text-gray-500 md:px-12">
        <div>
            <h2 class="mt-4 text-2xl text-gray-900 font-bold md:text-4xl">Our Team</h2>
        </div>
        <div class="mt-16 grid border divide-x divide-y rounded-xl overflow-hidden sm:grid-cols-2 lg:divide-y-0 lg:grid-cols-3 xl:grid-cols-4">
            <div class="relative group bg-white transition hover:z-[1] hover:shadow-2xl">
                <div class="relative p-8 space-y-8">
                    <img src="https://tailus.io/sources/blocks/stacked/preview/images/avatars/burger.png" class="w-10" width="512" height="512" alt="burger illustration">
                    
                    <div class="space-y-2">
                        <h5 class="text-xl text-gray-800 font-medium transition">Pritam Mundhe</h5>
                        <p class="text-sm text-gray-600">Back-end</p>
                    </div>
                    <div class="flex justify-between items-center">
                        <ul class="flex justify-around w-full">
                            <li><a href="#" class="hover:text-blue-500"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="#" class="hover:text-blue-500"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="#" class="hover:text-blue-500"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                            <li><a href="#" class="hover:text-blue-500"><i class="fa fa-github" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="relative group bg-white transition hover:z-[1] hover:shadow-2xl">
                <div class="relative p-8 space-y-8">
                    <img src="https://tailus.io/sources/blocks/stacked/preview/images/avatars/trowel.png" class="w-10" width="512" height="512" alt="burger illustration">
                    
                    <div class="space-y-2">
                        <h5 class="text-xl text-gray-800 font-medium transition">Bhavesh Duse</h5>
                        <p class="text-sm text-gray-600">Back-end</p>
                    </div>
                    <div class="flex justify-between items-center">
                        <ul class="flex justify-around w-full">
                            <li><a href="#" class="hover:text-blue-500"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="#" class="hover:text-blue-500"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="#" class="hover:text-blue-500"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                            <li><a href="#" class="hover:text-blue-500"><i class="fa fa-github" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="relative group bg-white transition hover:z-[1] hover:shadow-2xl">
                <div class="relative p-8 space-y-8">
                    <img src="https://tailus.io/sources/blocks/stacked/preview/images/avatars/package-delivery.png" class="w-10" width="512" height="512" alt="burger illustration">
                    
                    <div class="space-y-2">
                        <h5 class="text-xl text-gray-800 font-medium transition">Aditya Dehade</h5>
                        <p class="text-sm text-gray-600">Front-end</p>
                    </div>
                    <div class="flex justify-between items-center">
                        <ul class="flex justify-around w-full">
                            <li><a href="#" class="hover:text-blue-500"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="#" class="hover:text-blue-500"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="#" class="hover:text-blue-500"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                            <li><a href="#" class="hover:text-blue-500"><i class="fa fa-github" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="relative group bg-white transition hover:z-[1] hover:shadow-2xl lg:hidden xl:block">
                <div class="relative p-8 space-y-8 border-dashed rounded-lg transition duration-300 group-hover:bg-white group-hover:border group-hover:scale-90">
                    <img src="https://tailus.io/sources/blocks/stacked/preview/images/avatars/metal.png" class="w-10" width="512" height="512" alt="burger illustration">
                    
                    <div class="space-y-2">
                        <h5 class="text-xl text-gray-800 font-medium transition">Yash Bhamare</h5>
                        <p class="text-sm text-gray-600">Front-end</p>
                    </div>
                    <div class="flex justify-between items-center">
                        <ul class="flex justify-around w-full">
                            <li><a href="#" class="hover:text-blue-500"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="#" class="hover:text-blue-500"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="#" class="hover:text-blue-500"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                            <li><a href="#" class="hover:text-blue-500"><i class="fa fa-github" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
      
<?php // TEMPLATES
  include 'templates/footer.html';
?>
