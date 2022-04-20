<!DOCTYPE html>
<html lang="en">
<?php include 'includes/head.php'; ?>
<body>
<?php
session_start();
if (!isset($_SESSION['username']))
{
    echo "You are not logged in.";
    header('Location : index.html');
    exit();
}
?>
<?php include 'includes/header.php'; ?>
<div class="container-body">
<h4><?php

    ?>
</h4>
</div>
<script src="js/responsive.js"></script>
</body>
</html>