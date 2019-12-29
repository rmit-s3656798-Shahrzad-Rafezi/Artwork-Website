<?php
    include("header.inc");
?>
    <div class="jumbotron">
        <h1 class="text-center">Welcome to Artworks</h1>
    </div>

    <?php
    include("nav.inc");
?>

        <?php
            //connect
            $db = mysqli_connect("localhost","root","","artworks") or die(mysqli_error($db));
            
            $q = "select distinct category from artwork";
            
            $results = mysqli_query($db, $q) or die(mysqli_error($db));

            print "<form>";
			print "<select id='menu' onchange='doMenu();'>";
				print"<option selected disabled>Select...</option>";
                print"<option value='Any'>Any</option>";
            
            while($row=mysqli_fetch_array($results))
            {
                print"<option value='{$row['category']}'>{$row['category']}</option>";
            }

			print"</select>";
		print "</form>";

            $q = "select * from artwork";
            
            if(isset($_GET['category']))
            {
                $q .= " where category = '{$_GET['category']}'";
            }
            
            $results = mysqli_query($db, $q) or die(mysqli_error($db));
        
            print"<div class='row'>";
            while($row=mysqli_fetch_array($results))
            {    
                
                echo "<div class='col-sm-6 col-md-3'>";
                print "<a href='artwork.php?filename={$row['filename']}'><img class='galimage' src='uploads/{$row['filename']}'></a>";
                echo "</div>";
                
            }
            print "</div>";
        ?>
            <?php
    include("footer.inc");
?>
