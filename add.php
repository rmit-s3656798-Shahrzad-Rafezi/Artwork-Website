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
session_start();
 if(!isset($_SESSION['username'])) // check if session variable exist
 { 
     header("Location:loginpage.php");
     exit(0); 
 } 
  else 
  {
    print "<p id='f'>Welcome {$_SESSION['username']}</p>";
  }
?>

            <h2>Add your artwork</h2>
            <form method="post" action="process_add.php" enctype=multipart/form-data>
                <table>
                    <tr>
                        <td>Title</td>
                        <td><input type="text" name="title" /></td>
                    </tr>
                    <tr>
                        <td>Category</td>
                        <td><input type="text" name="category" /></td>
                    </tr>
                    <tr>
                        <td>Description</td><br>
                        <td><textarea rows=10 cols=50 name=description></textarea><br></td>
                    </tr>
                    <tr>
                        <td>Tags</td>
                        <td><input type="text" name="tags" /></td>
                    </tr>
                    <tr>
                        <td>Image</td>
                        <td><input type="file" name="image" /></td>
                    </tr>
                    <tr>
                        <td><input type="submit" /></td>
                    </tr>
                </table>
            </form>

            <?php
    include("footer.inc");
?>
