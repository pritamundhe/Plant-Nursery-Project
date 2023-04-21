<!--user side bar-->

<aside class="w-80 bg-white shadow-md w-fulll">
        <div class="flex flex-col justify-between p-4 bg-white">
            <div class="text-sm">
                <div class="bg-white text-gray-900 border border-gray-900 p-5 square"><?php echo strtoupper($_SESSION['firstName']) . " " . strtoupper($_SESSION['lastName']) ?></div>
                <div class="bg-white text-gray-900 border border-gray-900 p-2 square mt-2 cursor-pointer hover:bg-gray-900 hover:text-white">
                    <a href="user_account.php">Personal Info</a>
                </div>
                <div class="bg-white text-gray-900 border border-gray-900 p-2 square mt-2 cursor-pointer hover:bg-gray-900 hover:text-white">
                    <a href="user_wishlist.php">Wishlist</a>
                </div>
                <div class="bg-white text-gray-900 border border-gray-900 p-2 square mt-2 cursor-pointer hover:bg-gray-900 hover:text-white">
                    <a href="user_order_history.php">Order History</a>
                </div>
                <div class="bg-white text-gray-900 border border-gray-900 p-2 square mt-2 cursor-pointer hover:bg-gray-900 hover:text-white">
                    <a href="user_messages.php">Messages</a>
                </div>
                <div class="bg-white text-gray-900 border border-gray-900 p-2 square mt-2 cursor-pointer hover:bg-gray-900 hover:text-white">
                    <a href="user_change_shipping.php">Change Shipping</a>
                </div>
                <div class="bg-white text-gray-900 border border-gray-900 p-2 square mt-2 cursor-pointer hover:bg-gray-900 hover:text-white">
                    <a href="user_change_password.php">Change Password</a>
                </div>
                <!--not ready for this
                <div class="bg-white text-gray-900 border border-gray-900 p-2 square mt-2 cursor-pointer hover:bg-gray-900 hover:text-white">
                    <a href="user_change_payment.php">Change Payment</a>
                </div>
                -->
                <?php
                    if($_SESSION['role'] == 'seller' && $_SESSION['approval'] == 1){
                        echo "<div class='bg-white text-gray-900 border border-gray-900 p-2 square mt-2 cursor-pointer hover:bg-gray-900 hover:text-white'>";
                            echo "<a href='seller_account.php'>Seller account</a>";
                        echo "</div>";
                    }
                ?>
            </div>
        </div>
    </aside>
