<?php
session_start();
if (!isset($_SESSION['role'])) {
    header("Location:../login.php");
    exit();
}
if ($_SESSION['role'] != "admin") {
    header("Location:../login.php");
    exit();
} ?>
<nav class="navbar navbar-expand-lg navbar-light bg-info">
    <a class="navbar-brand" href="admin_profile.php">Welcome <span id="myname"><?php echo ($_SESSION["UserName"]); ?></span></a>
    <ul class="navbar-nav mr-5">
        <li class="nav-item"><a class="navbar-brand" href="orders.php">All Orders</a></li>
    </ul>
    <ul class="navbar-nav mr-5">
        <li class="nav-item"><a class="navbar-brand" href="add_product.php">Add product</a></li>
    </ul>
    <ul class="navbar-nav mr-5">
        <li class="nav-item"><a class="navbar-brand" href="add_user.php">Add User</a></li>
    </ul>
    <ul class="navbar-nav mr-5">
        <li class="nav-item"><a class="navbar-brand" href="all_products.php">All products</a></li>
    </ul>
    <ul class="navbar-nav mr-5">
        <li class="nav-item"><a class="navbar-brand" href="all_users.php">all users</a></li>
    </ul>
    <ul class="navbar-nav mr-5">
        <li class="nav-item"><a class="navbar-brand" href="checks.php">checks</a></li>
    </ul>
    <form class="form-inline my-lg-0" style="position: absolute;right:10px;" action="../authenticator.php" method="post">
        <button class="btn btn-danger my-2 my-sm-0" name="logout" type="submit">Logout</button>
    </form>
    </div>
</nav>