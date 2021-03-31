<?php
session_start();
if (!isset($_SESSION['uname'])) {
    header("Location: ../getin.php?please_login_first");
}

/*
require "session.php";
$session = new Session();
if(!$session->logged_in)
{
	header('Location: login.php');
	exit;
}
require_once("../lib/database.php");	
$database = new Database(); */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=1, initial-scale=1.0">
    <meta name="theme-color" content="#49AA6E"/>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="../styles.css">
    <!--<link href="css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">-->

    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.13.0/css/all.css"
      integrity="sha384-Bfad6CLCknfcloXFOyFnlgtENryhrpZCe29RTifKEixXQZ38WheV+i/6YWSzkz3V"
      crossorigin="anonymous"
    />
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <title>Real News</title>
</head>
<body>
    <nav class="nav-bar">
        <strong>real_news.com</strong>
        <ul>
            <li class="select-page"><a href="#">MANAGE</a></li>
        </ul>
        <button class="login-button" onclick="window.location.href='../index.php'">USER</button>
    </nav>
    <div class="main-content">
        <div class="manage-contents-wrap">
            <div class="option">
                <a class="nolink" href="managearticles.php">
                    <h1><i class="far fa-newspaper"></i></h1>
                    <h4>Manage Cars</h4>
                </a>
            </div>
            <div class="option">
                <a class="nolink" href="manageTypes.php">
                    <h1><i class="far fa-folder-open"></i></h1>
                    <h4>Manage Types</h4>
                </a>
            </div>
            <div class="option">
                <a class="nolink" href="addUser.php">
                    <h1><i class="fas fa-users"></i></h1>
                    <h4>Add User</h4>
                </a>
            </div>
            <!---<div class="option">
                <a class="nolink" href="manageAccount.php">
                    <h1><i class="fas fa-user"></i></h1>
                    <h4>My Account</h4>
                </a>
            </div> -->
        </div>
    </div>
</body>