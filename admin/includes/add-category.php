<?php
require "dbh.php";

if (iset($_POST['add-category-btn'])){
    $name = $_POST['category-name'];
    $metaTitle = $_POST['category-meta-title'];
    $categoryPath = $_POST['category-path'];
}
else{
    header("Location: ../index.php");
    exit();
}