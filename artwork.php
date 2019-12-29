<?php
    include("header.inc");
?>

    <div class="jumbotron">
        <h1 class="text-center">Artworks</h1>
    </div>

<?php
    include("nav.inc");
?>

<?php
            
            //connect
            $db = mysqli_connect("localhost","root","","artworks") or die(mysqli_error($db));
            
            $q = "select * from artwork where filename ='{$_GET['filename']}'";
            
            $results = mysqli_query($db, $q) or die(mysqli_error($db));
            
            while($row=mysqli_fetch_array($results))
            {
                print "<p id='s'>ID: {$row['artwork_id']}</p>";
                print "<p id='s'>UserName: {$row['username']}</p>";
                print "<p id='s'>Work Title: {$row['title']}</p>";
                print "<p id='s'>Category: {$row['category']}</p>";
                print "<p id='s'>Description: {$row['description']}</p>";
                print "<p id='s'>Tags: {$row['tags']}</p>";
                echo "<div class='image'>";
                print "<img src='uploads/{$row['filename']}' />";
                echo "</div>";
            }
        ?>


<?php
    include("footer.inc");
?>
