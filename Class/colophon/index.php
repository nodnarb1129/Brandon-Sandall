<!DOCTYPE html>
<!-- This is my Colophon page -->
<html> 
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>YOLO|Colophon</title>
        <link rel="icon" type="image/x-generic" href="http://www.brandonsandall.com/favicon.ico" />
        <link rel="icon" type="image/x-icon" href="favicon.ico" />
        <link rel="stylesheet" type="text/css" href="../../css/fhe.css">
        <style type="text/css">
        body {
        background-image:url("/images/background.png");
        background-repeat:repeat;
        background-attachment:fixed;
        background-size: 100%
        }
        #h3{font-family:fantasy;text-align:center;font-size:175%;margin-top:-5px;margin-bottom:25px}
        a{color:white;text-decoration:none;font:bold;}
        a:hover{color:black}
        td.menu{    
            display:block;
            text-align: center;
            border: 5px white;
            padding: 10px;
            width: 150px;
            border-radius: 120px; 
            background-color: gray;
            color: white;
            box-shadow: 0 0 5px #000;}
        table.menu {
        width: 120;
        font-size:50%;
        position:absolute;
        visibility:hidden;
        }
        </style>
        <script type="text/javascript">
        function showmenu(elmnt)
        {
        document.getElementById(elmnt).style.visibility="visible";
        }
        function hidemenu(elmnt)
        {
        document.getElementById(elmnt).style.visibility="hidden";
        }
        </script>
    </head>
    <body>
        <header>
            <nav>
                <h1>Colophon</h1>
                    <div id="h3">
                    <table id="table1">
                    <tr id="tr1">
                    <td onmouseover="showmenu('Rock_Climbing')" onmouseout="hidemenu('Rock_Climbing')">
                    <a href="/rockclimbing">Rock Climbing</a><br />
                    <table class="menu" id="Rock_Climbing">
                    <tr><td class="menu"><a href="/rockclimbing/regional">Regional</a></td></tr>
                    <tr><td class="menu"><a href="/rockclimbing/logan">Logan</a></td></tr>
                    </table>
                    </td>
                    <td onmouseover="showmenu('Mission')" onmouseout="hidemenu('Mission')">
                    <a href="/mission">Mission</a><br />
                    <table class="menu" id="Mission">
                    <tr><td class="menu"><a href="/mission/coldwater">Cold Water</a></td></tr>
                    <tr><td class="menu"><a href="/mission/payback">Payback</a></td></tr>
                    </table>
                    <td onmouseover="showmenu('FHE')" onmouseout="hidemenu('FHE')">
                    <a href="/fhe">FHE</a><br />
                    <table class="menu" id="FHE">
                    <tr><td class="menu"><a href="/fhe/sledding">Sledding</a></td></tr>
                    </table>
                    </td>  
                    <td onmouseover="showmenu('Work')" onmouseout="hidemenu('Work')">
                    <a href="/work">Work</a><br />
                    <table class="menu" id="Work">
                    <tr><td class="menu"><a href="/work/office">Morning Office</a></td></tr>
                    <tr><td class="menu"><a href="/work/oldspice">Old Spice</a></td></tr>
                    </table>
                    </td> 
                    <td onmouseover="showmenu('Moab')" onmouseout="hidemenu('Moab')">
                    <a href="/moab">Moab</a><br />
                    <table class="menu" id="Moab">
                    <tr><td class="menu"><a href="/moab/mejumping">Me Jumping</a></td></tr>
                    <tr><td class="menu"><a href="/moab/video">Main Video</a></td></tr>
                    </table>
                    </td>
                    </tr>
                    </table>
                    </div>
            </nav>
        </header>
        <br>
        <br>
        <h2>
        I will be using HTML5 becuase it is used as the core technology of the Internet. 
        This serves as the fifth revision of HTML and is the newest version. 
        It is also defined as the markup language for structuring and representing 
        content on the web. I will also be implementing the use of CSS to style 
        all pages. CSS stands for Cascading Style sheet and is the primary design 
        program for HTML5. By using CSS it will be my goal to make it appear 
        aesthetically pleasing to all viewers, allowing for easy and efficient 
        navigation throughout the various pages embedded within the site.
        </h2>
        <br>
        <footer style="text-align: center">
            <a href="http://www.brandonsandall.com/assignments/siteplan.php" style="color:black">Site Plan</a> |
            <a href="http://www.brandonsandall.com/assignments/styleguide.php" style="color:black">Style Guide</a> |
            <a href="http://www.brandonsandall.com/class/contact" style="color:black">Contact</a> |
            <?php echo "Last updated: " . date("M d, Y, h:i:s a", getlastmod()) ?>
        </footer>
    </body>
</html>