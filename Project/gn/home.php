<?php
    include 'db_connection.php';
    session_start();
    //TEMPLATES
    include 'templates/head.html';
    include 'templates/nav-bar.php';

      
    include 'templates/search-bar.php';

    if(isset($_SESSION['ID'])){
        $sql = "SELECT * FROM Users WHERE user_ID=$_SESSION[ID]";
        $result = $conn->query($sql);
        $user = $result->fetch_assoc();
        if($user['role'] == 'buyer'){
            ?>

            <div class="bg-white">
                <div class="max-w-3xl mx-auto py-2 px-4 sm:px-6 lg:py-2 lg:px-8 lg:flex lg:items-center lg:justify-between">
                    <h2 class="text-2xl font-extrabold tracking-tight text-gray-900 sm:text-3xl">
                        <span class="block"></span>
                        <span class="block text-blue-800">Join our community of sellers today!</span>
                    </h2>
                    <div class="mt-8 flex lg:mt-0 lg:flex-shrink-0">
                        <div class="inline-flex rounded-md shadow">
                            <a href='sellerRegistration.php' class="inline-flex items-center justify-center px-3 py-2 border-2 border-solid border-gray-900 text-gray-900 font-medium square-md text-white bg-white hover:bg-green-600 hover:text-white"> Get started </a>
                        </div>
                    </div>
                </div>
            </div>
            <?php
        }
    }else{
        ?>
        <div class="bg-white">
            <div class="max-w-3xl mx-auto py-0 px-2 sm:px-6 lg:py-2 lg:px-0 lg:flex lg:items-center lg:justify-between">
                <h2 class="text-2xl font-extrabold tracking-tight text-gray-900 sm:text-3xl">
                   
                    <span class="block text-green-700">Sign up to become a part of community.</span>
                </h2>
                <div class="mt-8 flex lg:mt-0 lg:flex-shrink-0">
                    <div class="inline-flex rounded-md shadow">
                        <a href='register.php' class="inline-flex items-center justify-center px-3 py-2 border-2 border-solid border-gray-900 text-gray-900 font-medium square-md text-white bg-white hover:bg-green-600 hover:text-white"> Get started </a>
                    </div>
                </div>
            </div>
        </div>
        <?php
    }
?>
    <!--Popular Products-->
    <div class="bg-white">
        <form action="product_details.php" method="POST" id="transfer">
        <div class="max-w-2xl mx-auto py-6 px-4 sm:py-4 sm:px-6 lg:max-w-7xl lg:px-1">
            <h2 class="text-2xl font-extrabold tracking-tight text-gray-900">Popular Plants</h2>
            <div class="mt-6 grid grid-cols-1 gap-y-10 gap-x-6 sm:grid-cols-2 lg:grid-cols-5 xl:gap-x-8">
                <?php
           $sql = "SELECT product_ID, COUNT(*) FROM Transactions GROUP BY product_ID ORDER BY 1 DESC;";
           $result = $conn->query($sql);
           
           if ($result && $result->num_rows > 0) {
               while($res = mysqli_fetch_array($result)) {
                   $sql = "SELECT * FROM products WHERE product_ID=$res[product_ID];";
                   $search = $conn->query($sql);
                   if ($search && $search->num_rows > 0) {
                       $product = $search->fetch_assoc();
                       //<!--Product 1-->
                       echo "<div class='group relative'>";
                           echo "<div class='w-full min-h-80 bg-gray-200 aspect-w-1 aspect-h-1 rounded-md overflow-hidden square group-hover:opacity-75 lg:h-70 lg:aspect-none'>";
                               echo "<img src='" . $product['image'] . "' alt='placeholder' class='w-full h-full object-center object-cover lg:w-full lg:h-full'>";
                           echo "</div>";
                           echo "<div class='mt-4 flex justify-between'>";
                               echo "<div>";
                                   echo "<h3 class='text-sm text-gray-700'>";
                                   echo "<button form='transfer' name='product' value='" . $product['product_ID'] . "'>";
                                   echo "<span aria-hidden='true' class='absolute inset-0'></span>";
                                       echo $product['title'];
                                   echo "</button>";
                                   echo "</h3>";
                               echo "</div>";
                           echo "</div>";
                       echo "</div>";
                   } else {
                       // Handle the case where the SQL query does not return any rows for the given product_ID
                   }
               }
           } else {
               // Handle the case where the SQL query does not return any rows
           }
           
                ?>
            </div>
        </div>
        </form>
    </div>

    <!-- Featured Products -->

<?php 
// TEMPLATES
include 'templates/footer.html';
?>
