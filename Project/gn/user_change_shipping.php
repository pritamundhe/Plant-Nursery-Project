<?php
    include 'db_connection.php';
    session_start();

    if(isset($_POST['save'])){
        $sql = "UPDATE Users
        SET first_name = '$_POST[first_name]', last_name = '$_POST[last_name]', address_first_line = '$_POST[first_address]', address_second_line = '$_POST[second_address]', city = '$_POST[city]', state_abbreviation = '$_POST[region]', zip_code = $_POST[zip]
        WHERE user_ID=$_SESSION[ID]";
        if ($conn->query($sql) === TRUE) {
            //echo "Record updated successfully";
        } else {
            //echo "Error: " . $sql . "<br>" . $conn->error;
        }
        $_SESSION['firstName'] = $_POST['first_name'];
        $_SESSION['lastName'] = $_POST['last_name'];
        $_SESSION['addressFirstLine'] = $_POST['first_address'];
        $_SESSION['addressSecondLine'] = $_POST['second_address'];
        $_SESSION['city'] = $_POST['city'];
        $_SESSION['state'] = $_POST['region'];
        $_SESSION['zip'] = $_POST['zip'];
    }
?>

<?php
//TEMPLATES
    include 'templates/head.html';
    include 'templates/nav-bar.php';
    include 'templates/search-bar.php';
?>

<main class="flex w-full">
    <?php
    //TEMPLATES
        include 'templates/user-side-bar.php';
    ?>

    <section class="w-full p-4">
        <div class="w-full text-md">
            <div class="mt-10 sm:mt-0">
                <div class="md:grid md:grid-cols-3 md:gap-6">
                    <div class="mt-5 md:mt-0 md:col-span-2">
                        <form action="user_change_shipping.php" method="POST">
                            <div class="shadow overflow-hidden sm:rounded-md">
                                <div class="px-4 py-5 bg-white sm:p-6">
                                    <div class="grid grid-cols-6 gap-6">
                                        <div class="col-span-6 sm:col-span-3">
                                            <label for="first_name" class="block text-sm font-medium text-gray-700">First name</label>
                                            <input type="text" name="first_name" id="first_name" value="<?php echo $_SESSION['firstName'] ?>" autocomplete="given-name" class="appearance-none rounded relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm">
                                        </div>

                                        <div class="col-span-6 sm:col-span-3">
                                            <label for="last_name" class="block text-sm font-medium text-gray-700">Last name</label>
                                            <input type="text" name="last_name" id="last_name" value="<?php echo $_SESSION['lastName'] ?>" autocomplete="family-name" class="appearance-none rounded relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm">
                                        </div>

                                        <div class="col-span-6 sm:col-span-4">
                                            <label for="email" class="block text-sm font-medium text-gray-700">Email address</label>
                                            <input type="text" name="email" id="email" value="<?php echo $_SESSION['email'] ?>" autocomplete="email" class="appearance-none rounded relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm">
                                        </div>

                                        <div class="col-span-6">
                                            <label for="first_address" class="block text-sm font-medium text-gray-700">Street address 1st line</label>
                                            <input type="text" name="first_address" id="first_address" value="<?php echo $_SESSION['addressFirstLine'] ?>" autocomplete="street-address" class="appearance-none rounded relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm">
                                        </div>

                                        <div class="col-span-6">
                                            <label for="second_address" class="block text-sm font-medium text-gray-700">Street address 2nd line</label>
                                            <input type="text" name="second_address" id="second_address" value="<?php echo $_SESSION['addressSecondLine'] ?>" autocomplete="street-address" class="appearance-none rounded relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm">
                                        </div>

                                        <div class="col-span-6 sm:col-span-6 lg:col-span-2">
                                            <label for="city" class="block text-sm font-medium text-gray-700">City</label>
                                            <input type="text" name="city" id="city" value="<?php echo $_SESSION['city'] ?>" autocomplete="address-level2" class="appearance-none rounded relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm">
                                        </div>

                                        <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                                            <label for="region" class="block text-sm font-medium text-gray-700">District</label>
                                            <select id="region" name="region" type="text" class="appearance-none rounded relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm">
                                                <option value="">---</option>
                                                <option value="NH" <?php if($_SESSION['state'] == 'NH') echo 'selected ' ?>>Nashik</option>
                                                <option value="ND" <?php if($_SESSION['state'] == 'ND') echo 'selected ' ?>>Nandurbar</option>
                                                <option value="PA" <?php if($_SESSION['state'] == 'PA') echo 'selected ' ?>>Pune</option>
                                                <option value="RI" <?php if($_SESSION['state'] == 'RI') echo 'selected ' ?>>Ratnagiri</option>
                                                <option value="SC" <?php if($_SESSION['state'] == 'SC') echo 'selected ' ?>>Sangli</option>
                                                
                                            </select>
                                        </div>

                                        <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                                            <label for="zip" class="block text-sm font-medium text-gray-700">ZIP / Postal code</label>
                                            <input type="text" name="zip" id="zip" value="<?php echo $_SESSION['zip'] ?>" autocomplete="postal-code" class="appearance-none rounded relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm">
                                        </div>
                                    </div>
                                </div>
                                <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                                    <button type="submit" name="save" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-gray-900 hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Save</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php // TEMPLATES
include 'templates/footer.html';
?>