
<!--seller side bar-->
<aside class="w-80 bg-white shadow-md w-fulll">
        <div class="flex flex-col justify-between p-4 bg-white">
            <div class="text-sm bg-secondary card-border">
                <div class="bg-white text-gray-900 p-5 square border border-gray-900"><?php echo $_SESSION['firstName'] . " " . $_SESSION['lastName'] ?></div>
                <div class="bg-white text-gray-900 p-2 square mt-2 border border-gray-900 cursor-pointer hover:bg-gray-900 hover:text-white">
                    <a href="seller_account.php">Inventory</a>
                </div>
                <div class="bg-white text-gray-900 p-2 square mt-2 border border-gray-900 cursor-pointer hover:bg-gray-900 hover:text-white">
                    <a href="seller_sold.php">Transactions</a>
                </div>
                <div class="bg-white text-gray-900 p-2 square mt-2 border border-gray-900 cursor-pointer hover:bg-gray-900 hover:text-white">
                    <a href="seller_payouts.php">Payouts</a>
                </div>
                <div class="bg-white text-gray-900 p-2 square mt-2 border border-gray-900 cursor-pointer hover:bg-gray-900 hover:text-white">
                    <a href="seller_new_listing.php">List new item</a>
                </div>
                <div class="bg-white text-gray-900 p-2 square mt-2 border border-gray-900 cursor-pointer hover:bg-gray-900 hover:text-white">
                    <a href="user_account.php">Buyer Account</a>
                </div>

            </div>
        </div>
    </aside>