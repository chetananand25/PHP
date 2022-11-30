<?php
session_start();
if(isset($_SESSION['username']))
{
	echo "<p align='right'><a href ='logout.php'>log out</a></p>";
	echo "<p align='right'>WELCOME TO ".$_SESSION["username"]."</p>";

	if(time()>=$_SESSION['end'])
	{
		session_destroy();
		header("location:login.php");
		
	}
}
?>

<html>

<head>
    <title>job search</title>

    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }
        
        body {
            scroll-behavior: smooth;
            overflow-x: hidden;
        }
        
        header {
            width: 100%;
            height: 100vh;
            background: url(https://wallpaperaccess.com/download/web-design-1657878);
            background-size: cover;
            background-attachment: fixed;
        }
        
        nav {
            display: flex;
            justify-content: space-between;
            padding: 0px 80px;
            position: fixed;
            width: 100%;
            height: 80px;
            background: white;
        }
        
        .logo {
            font-family: serif;
            font-size: 2.5em;
        }
        
        .logo span {
            color: violet;
        }
        
        .menu a {
            text-decoration: none;
            padding: 0px 5px;
            color: black;
            font-family: sans-serif;
            font-size: 17px;
        }
        
        .menu a:first-child {
            color: skyblue;
        }
        
        .menu a:hover {
            color: magenta;
        }
        
        .icon i {
            font-size: 18px
        }
        
        .icon i:hover {
            color: aquamarine;
        }
        
        .icon a {
            text-decoration: none;
            background: blueviolet;
            margin: left 30px;
            padding: 5px 10px;
            border-radius: 5px;
        }
        
        .h-text {
            color: BLACK;
            max-width: 400px;
            position: absolute;
            top: 10%;
            left: 25%;
            right: 0%;
            transform: translate(-50px, 40px);
            text-align: center;
        }
        
        .h-text h1 {
            font-family: sans-serif;
            font-size: 2.5em;
            line-height: 1.5em;
        }
        
        .h-text h2 {
            font-family: sans-serif;
            font-size: 2.5em;
            line-height: 1.5em;
            margin-left: 15%;
        }
        
        .h-text h3 {
            font-family: sans-serif;
            font-size: 2em;
            line-height: 1.5em;
            margin-left: 25%;
        }
    </style>
    <link rel=" stylesheet " type="text/css " href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css ">

    <body>
        <header>
            <nav>
                <div class="logo ">Job<span>P</span>or<span>T</span>al</div>
                <div class="menu ">
                    <a href="# ">HOME</a>
                    <a href="# ">JOBS</a>
                    <a href="# ">COMPANIES</a>
                    <a href="# ">LOCATION</a>
                </div>

                <div class="icon ">
                    <i class="fa fa-search "></i>
                </div>
            </nav>

            <section class="h-text ">
                <h1>YOUR DREAM </h1>
                <h2>JOB IS WATING</h2>
                <H3>FOR YOU......</H3>
            </section>


        </header>
    </body>
</head>

</html>
