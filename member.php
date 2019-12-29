<?php
    include("header.inc");
?>


    <?php
    include("nav.inc");
?>
        <div class="jumbotron">
            <h1 class="text-center">Welcome to Artworks</h1>
        </div>


        <?php
            
            //connect
            $db = mysqli_connect("localhost","root","","artworks") or die(mysqli_error($db));
            
            $q = "select filename from artwork where username ='{$_GET['username']}'";
            
            $results = mysqli_query($db, $q) or die(mysqli_error($db));

            print"<div class='row'>";
            while($row=mysqli_fetch_array($results))
            {
                echo "<div class='col-sm-6 col-md-3'>";
                print "<a href='artwork.php?filename={$row['filename']}'><img class='galimage' src='uploads/{$row['filename']}' /></a>";
                echo "</div>";
            }
            print"</div>";
?>


            <?php
    include("footer.inc");
?>
