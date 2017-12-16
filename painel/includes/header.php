<?php
session_start();
if(empty($_SESSION)):
	header("location:" . $_SERVER['SERVER_NAME'] . "/index.php" );
endif;

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Barracuda ADM</title>
	<!-- bulma -->
	<link rel="stylesheet" href="/bower_components/bulma/css/bulma.css">
        <!-- Editor de texto -->
        <!-- Include external CSS. -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.0/codemirror.min.css">
        <!-- Include Editor style. -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/2.7.3/css/froala_editor.pkgd.min.css" rel="stylesheet" type="text/css" />
        <link href="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/2.7.3/css/froala_style.min.css" rel="stylesheet" type="text/css" />

</head>
<body>
    <br>
    <div class="container is-fluid">
        <div class="columns">
            <!-- LEFT BAR / MENU LEFT  -->
            <aside class="column is-2">
                
                <h1 class="title is-4">BARRACUDA</h1>
                <h2 class="subtitle is-5">COMPUTADORES</h2>
                <div class="menu">
                    <p class="menu-label">Homepage</p>
                    <ul class="menu-list">
                        <li><a href="#">Hero</a></li>
                        <li><a href="#">Video marketing</a></li>
                        <li><a href="#">Footer</a></li>
                        <li><a href="#">Categorias</a></li>
                    </ul>
                </div>

            </aside>
            <!-- RIGHT BAR / CONTAINER RIGHT -->
            <div class="column is-10">
                <h1 class="title is-6">DASHBOARD</h1>
