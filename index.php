<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
  }
  if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: login.php");
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Stock Information</title>
<script src="plotly-latest.min.js"></script>
<script src="realtimeanalysis.js"></script>
<meta charset="utf-8">

<style>

body {
    font-family: Arial, Helvetica, sans-serif;
}

/* Style the header */
header {
    background-color: #666;
    padding: 30px;
    text-align: center;
    font-size: 35px;
    color: white;
}

/* Container for flexboxes */
section {
    display: -webkit-flex;
    display: flex;
}

/* Style the navigation menu */
nav {
    -webkit-flex: 1;
    -ms-flex: 1;
    flex: 1;
    background: #ccc;
    padding: 20px;
}

/* Style the list inside the menu */
nav ul {
    list-style-type: none;
    padding: 0px;
}

/* Style the content */
article {
    -webkit-flex: 5;
    -ms-flex: 5;
    flex: 5;
    background-color: #f1f1f1;
    padding: 10px;
}

/* Style the footer */
footer {
    background-color: #777;
    padding: 10px;
    text-align: center;
    color: white;
}

</style>
</head>
<body>

<header>
  <h2>Real time Data Analysis Dashboard</h2>
</header>

<section>
  <nav>
    <ul>
     	<H3>Team members</H3>
        <nav>
          <P>Jaykumar Savani</P>
          <P>Divyang Hirpara</P>
          <P>Heena Kausar</P>
	  <li><a href="index.php?logout='1'";">Logout</a></li>
        </nav>
    </ul>
  </nav>
  
  <article>
    <div id="myDiv"></div>
  </article>
</section>

<footer>
  <H2>The Oxford College Of Engineering</H2>
</footer>

</body>
</html>
