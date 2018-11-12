<!DOCTYPE html>
<!-- This is my sledding page -->
<html> 
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>YOLO|Sledding</title>
        <link rel="icon" type="image/x-generic" href="http://www.brandonsandall.com/favicon.ico" />
        <link rel="icon" type="image/x-icon" href="favicon.ico" />
        <link rel="stylesheet" type="text/css" href="../../css/fhe.css">
    </head>
    <body>
        <header>
            <nav>
                <h1>Sledding</h1>
                    <?php include($_SERVER['DOCUMENT_ROOT']."/camp/common/mainbar.php"); ?>
            </nav>
        </header>
        <br>
        <br>
        <h2>
        Sledding down a hill for FHE.
        </h2>
        <div style="text-align:center; margin-bottom:-25px">
        <iframe width="420" height="315" src="http://www.youtube.com/embed/VwQACGEDRcE"></iframe>
        </div><br>
        <footer style="text-align: center">
             <p>Check out my YouTube channel for these and others
            <a href="http://www.youtube.com/user/YOLO51212?ob=0" style="color:black;text-decoration:underline">
            here</a>.</p>
            <br>
            <a href="http://www.brandonsandall.com/assignments/siteplan.php" style="color:black">Site Plan</a> |
            <a href="http://www.brandonsandall.com/assignments/styleguide.php" style="color:black">Style Guide</a> |
            <a href="http://www.brandonsandall.com/class/contact" style="color:black">Contact</a> |
            <?php echo "Last updated: " . date("M d, Y, h:i:s a", getlastmod()) ?>
        </footer>
    </body>
</html>