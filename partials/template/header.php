<?php
session_start();

include __DIR__ . '/../functions/functions.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="icon" href="images/js.png" sizes="16x16">
    <link
          href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
          rel="stylesheet"
          integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
          crossorigin="anonymous"
        >
    <link rel="stylesheet" href="css/style.css" />

    <title>Password Generator</title>
</head>

<body>

    <header class="container fs-2 bg-secondary">
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="index.php">Comics</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="login.php">Create</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.php">About</a>
            </li>

        </ul>
    </header>   