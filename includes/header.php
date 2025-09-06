<!-- <?php
session_start();
?>
<!-- <header>
    <nav class="navbar">
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="services.php">Services</a></li>
            <?php if (isset($_SESSION['user_id'])): ?>
                <li><a href="pages/dashboard.php">Dashboard</a></li>
                <li><a href="pages/logout.php">Logout</a></li>
            <?php else: ?>
                <li><a href="pages/login.php">Login</a></li>
                <li><a href="pages/signup.php">Sign Up</a></li>
            <?php endif; ?>
        </ul>
    </nav>
</header> 

<header>
        <nav class="navbar">
            <ul>
            <div class="container">
                <a href="index.php" class="logo">AI Fusion Hub</a>
                <ul class="nav-links">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="#services">Services</a></li>
                    !! <li><a href="login.php">Login</a></li>
                    <li><a href="signup.php">Sign Up</a></li> !!

                    <?php if (isset($_SESSION['user_id'])): ?>
                <li><a href="pages/dashboard.php">Dashboard</a></li>
                <li><a href="pages/logout.php">Logout</a></li>
            <?php else: ?>
                <li><a href="pages/login.php">Login</a></li>
                <li><a href="pages/signup.php">Sign Up</a></li>
            <?php endif; ?>

                </ul>
            </div>
            </ul>
        </nav>
    </header>
 

 <header class="navbar">
        <div class="container">
            <h1 class="logo">AI Tools</h1>
            <nav>
                <ul>
                    <li><a href="index.php" class="nav-link">Home</a></li>
                    <!-- <li><a href="dashboard.php" class="nav-link">Dashboard</a></li>
                    <li><a href="signup.php" class="nav-link">Sign Up</a></li>
                    <li><a href="login.php" class="nav-link">Login</a></li> 
                    <?php if (isset($_SESSION['user_id'])): ?>
                <li><a href="pages/dashboard.php">Dashboard</a></li>
                <li><a href="pages/logout.php">Logout</a></li>
            <?php else: ?>
                <li><a href="pages/login.php">Login</a></li>
                <li><a href="pages/signup.php">Sign Up</a></li>
            <?php endif; ?>
                </ul>
            </nav>
        </div>
</header>  

-->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AI Tools</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="assets/js/script.js" defer></script>
</head>
<body>
    <!-- Navigation Bar -->
    <header class="navbar">
        <div class="container">
            <h1 class="logo">AI Tools</h1>
            <nav>
                <ul>
                    <li><a href="index.php" class="nav-link">Home</a></li>
                    <li><a href="dashboard.php" class="nav-link">Dashboard</a></li>
                    <li><a href="signup.php" class="nav-link">Sign Up</a></li>
                    <li><a href="login.php" class="nav-link">Login</a></li>
                </ul>
            </nav>
        </div>
    </header>
