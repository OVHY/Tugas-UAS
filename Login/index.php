<?php
session_start();

if( !isset($_SESSION["login"]) ) {
    header("Location: login.php");
    exit;
}

require 'functions.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman user</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <nav>
        <div class="wrapper">
            <div class="logo"><a href=''>Belajar PHP</a></div>
            <div class="menu">
                <ul>
                    <li><a href="#home">Home</a></li>
                    <li><a href="../Login/profil/profil.php">Profil</a></li>
                    <li><a href="logout.php" class="tbl-biru">Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="wrapper">
        <!-- untuk home -->
        <section id="home">
            <img src="https://img.freepik.com/free-vector/web-development-programmer-engineering-coding-website-augmented-reality-interface-screens-developer-project-engineer-programming-software-application-design-cartoon-illustration_107791-3863.jpg?size=626&ext=jpg&ga=GA1.2.1769275626.1605867161"/>
            <div class="kolom">
                <p class="deskripsi">Belajar PHP Sederhana</p>
                <h2>Tetap Semangat!!</h2>
                <p>Ini adalah sebuah web sederhana untuk tugas UAS</p>
            </div>
        </section>
    </div>
    <div id="copyright">
        <div class="wrapper">
            &copy; 2023. <b>Yovita!</b> 
        </div>
    </div>
</body>
</html>