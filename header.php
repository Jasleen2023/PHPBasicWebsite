<!--/includes/header.php -->
<!DOCTYPE html>
<html lang="en">
    <meta name="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <title>My First Jewellery Website</title>
</html>
<body>
    <header>
        <nav>
            <ul>
            <li class="<?= basename($_SERVER['PHP_SELF']) == 'index.php' ? 'active' : '' ?>"><a href="index.php">Home</a></li>                 <li class="<?= basename($_SERVER['PHP_SELF']) == 'about.php' ? 'active' : '' ?>"><a href="about.php">About</a></li>
            <li class="<?= basename($_SERVER['PHP_SELF']) == 'index.php' ? 'active' : '' ?>"><a href="index.php">Home</a></li>                 <li class="<?= basename($_SERVER['PHP_SELF']) == 'about.php' ? 'active' : '' ?>"><a href="about.php">About</a></li>
            </ul>
        </nav>
    </header>
</body>