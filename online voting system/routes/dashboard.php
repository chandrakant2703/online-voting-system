<?php
session_start();
if(!isset($_SESSION['userdata'])){
    header("location: ../");
}
?>


<html>
    <head>
        <title> Voting System - Dashboard</title>
        <link rel="stylesheet" href="../css/stylesheet.css">
    </head>
    <body>
        <div id="headerSection">
        <button id="backbtn">Back</button>
        <button id="logoutbtn">Logout</button>
        <h1>online Voting System</h1>  
        </div>
        <hr>
        <div id="profile">
        </div>
        <div id="aadhar">
        </div>
        <div id="Group">
        </div>
    </body>
</html>