<div class="col-md-3">
    <!-- *** CUSTOMER MENU ***
_________________________________________________________ -->
    <div class="panel panel-default sidebar-menu">

        <div class="panel-heading">
            <h3 class="panel-title">Customer section</h3>
        </div>

        <?php if ($_SERVER['REQUEST_URI'] == "/lazy/customer-orders.php")
        echo"
        <div class='panel-body'>
            <ul class='nav nav-pills nav-stacked'>
                <li class='active'>
                    <a href='customer-orders.php'><i class='fa fa-list'></i> My orders</a>
                </li>
                <li>
                    <a href='customer-wishlist.php'><i class='fa fa-heart'></i> My wishlist</a>
                </li>
                <li>
                    <a href='customer-account.php'><i class='fa fa-user'></i> My account</a>
                </li>
                <li>
                    <a href='../logout.php'><i class='fa fa-sign-out'></i> Logout</a>
                </li>
            </ul>
        </div>";
        ?>
        <?php if ($_SERVER['REQUEST_URI'] == "/lazy/customer-wishlist.php")
        echo"
        <div class='panel-body'>
            <ul class='nav nav-pills nav-stacked'>
                <li>
                    <a href='customer-orders.php'><i class='fa fa-list'></i> My orders</a>
                </li>
                <li class='active'>
                    <a href='customer-wishlist.php'><i class='fa fa-heart'></i> My wishlist</a>
                </li>
                <li>
                    <a href='customer-account.php'><i class='fa fa-user'></i> My account</a>
                </li>
                <li>
                    <a href='../logout.php'><i class='fa fa-sign-out'></i> Logout</a>
                </li>
            </ul>
        </div>";
        ?>
        <?php if ($_SERVER['REQUEST_URI'] == "/lazy/customer-account.php")
        echo"
        <div class='panel-body'>
            <ul class='nav nav-pills nav-stacked'>
                <li>
                    <a href='customer-orders.php'><i class='fa fa-list'></i> My orders</a>
                </li>
                <li>
                    <a href='customer-wishlist.php'><i class='fa fa-heart'></i> My wishlist</a>
                </li>
                <li class='active'>
                    <a href='customer-account.php'><i class='fa fa-user'></i> My account</a>
                </li>
                <li>
                    <a href='../logout.php'><i class='fa fa-sign-out'></i> Logout</a>
                </li>
            </ul>
        </div>";
        ?>

    </div>
    <!-- /.col-md-3 -->

    <!-- *** CUSTOMER MENU END *** -->
</div>
