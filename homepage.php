<?php
    include("header.inc");
?>

    <!-- Banner -->
    <div class="jumbotron">
        <h1 class="text-center">Welcome to Artworks</h1>
    </div>

   
    <?php
            //connect
            $db = mysqli_connect("localhost","root","","artworks") or die(mysqli_error($db));
            
            //query
            $q = "select title, filename from artwork order by artwork_id DESC limit 4";
            
            $results = mysqli_query($db, $q) or die(mysqli_error($db));
            if (mysqli_num_rows($results) >0)
            {
                $first=true;
                
    ?>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
        <?php
            while($row=mysqli_fetch_array($results))
            { 
                if ($first){
                echo "<div class='item active'>";
                print "<img src='uploads/{$row['filename']}'>";
                echo "</div>";
                $first=false;
                }
                else {
                    echo "<div class='item'>";
                    print "<img src='uploads/{$row['filename']}'>";
                    echo "</div>";  
                    
                }
            } 
            }
        ?>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>

        <?php
        include("nav.inc");
    ?>




            <div class=row>
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus massa odio, semper id libero id, condimentum tincidunt ligula. Suspendisse gravida congue egestas. Ut diam nunc, luctus porttitor tempus ac, pulvinar eget neque. Curabitur rhoncus, magna ut auctor suscipit, lectus nibh euismod ipsum, eu euismod mauris elit quis mauris. Phasellus pharetra, purus quis auctor posuere, ligula nulla tempor ex, vitae convallis magna nisl eget arcu. Nunc diam nisl, tincidunt hendrerit nibh nec, facilisis varius ligula. Morbi lacinia massa in risus vulputate tristique. Sed ornare tincidunt ipsum sit amet placerat. Sed quis auctor lacus, eget facilisis tellus. Suspendisse magna ante, fringilla a elit eget, commodo tincidunt ligula. Ut volutpat libero nec neque mattis, eu aliquet mauris aliquet.
                    </p>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus massa odio, semper id libero id, condimentum tincidunt ligula. Suspendisse gravida congue egestas. Ut diam nunc, luctus porttitor tempus ac, pulvinar eget neque. Curabitur rhoncus, magna ut auctor suscipit, lectus nibh euismod ipsum, eu euismod mauris elit quis mauris. Phasellus pharetra, purus quis auctor posuere, ligula nulla tempor ex, vitae convallis magna nisl eget arcu. Nunc diam nisl, tincidunt hendrerit nibh nec, facilisis varius ligula. Morbi lacinia massa in risus vulputate tristique. Sed ornare tincidunt ipsum sit amet placerat. Sed quis auctor lacus, eget facilisis tellus. Suspendisse magna ante, fringilla a elit eget, commodo tincidunt ligula. Ut volutpat libero nec neque mattis, eu aliquet mauris aliquet.
                    </p>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus massa odio, semper id libero id, condimentum tincidunt ligula. Suspendisse gravida congue egestas. Ut diam nunc, luctus porttitor tempus ac, pulvinar eget neque. Curabitur rhoncus, magna ut auctor suscipit, lectus nibh euismod ipsum, eu euismod mauris elit quis mauris. Phasellus pharetra, purus quis auctor posuere, ligula nulla tempor ex, vitae convallis magna nisl eget arcu. Nunc diam nisl, tincidunt hendrerit nibh nec, facilisis varius ligula. Morbi lacinia massa in risus vulputate tristique. Sed ornare tincidunt ipsum sit amet placerat. Sed quis auctor lacus, eget facilisis tellus. Suspendisse magna ante, fringilla a elit eget, commodo tincidunt ligula. Ut volutpat libero nec neque mattis, eu aliquet mauris aliquet.
                    </p>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus massa odio, semper id libero id, condimentum tincidunt ligula. Suspendisse gravida congue egestas. Ut diam nunc, luctus porttitor tempus ac, pulvinar eget neque. Curabitur rhoncus, magna ut auctor suscipit, lectus nibh euismod ipsum, eu euismod mauris elit quis mauris. Phasellus pharetra, purus quis auctor posuere, ligula nulla tempor ex, vitae convallis magna nisl eget arcu. Nunc diam nisl, tincidunt hendrerit nibh nec, facilisis varius ligula. Morbi lacinia massa in risus vulputate tristique. Sed ornare tincidunt ipsum sit amet placerat. Sed quis auctor lacus, eget facilisis tellus. Suspendisse magna ante, fringilla a elit eget, commodo tincidunt ligula. Ut volutpat libero nec neque mattis, eu aliquet mauris aliquet.
                    </p>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus massa odio, semper id libero id, condimentum tincidunt ligula. Suspendisse gravida congue egestas. Ut diam nunc, luctus porttitor tempus ac, pulvinar eget neque. Curabitur rhoncus, magna ut auctor suscipit, lectus nibh euismod ipsum, eu euismod mauris elit quis mauris. Phasellus pharetra, purus quis auctor posuere, ligula nulla tempor ex, vitae convallis magna nisl eget arcu. Nunc diam nisl, tincidunt hendrerit nibh nec, facilisis varius ligula. Morbi lacinia massa in risus vulputate tristique. Sed ornare tincidunt ipsum sit amet placerat. Sed quis auctor lacus, eget facilisis tellus. Suspendisse magna ante, fringilla a elit eget, commodo tincidunt ligula. Ut volutpat libero nec neque mattis, eu aliquet mauris aliquet.
                    </p>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus massa odio, semper id libero id, condimentum tincidunt ligula. Suspendisse gravida congue egestas. Ut diam nunc, luctus porttitor tempus ac, pulvinar eget neque. Curabitur rhoncus, magna ut auctor suscipit, lectus nibh euismod ipsum, eu euismod mauris elit quis mauris. Phasellus pharetra, purus quis auctor posuere, ligula nulla tempor ex, vitae convallis magna nisl eget arcu. Nunc diam nisl, tincidunt hendrerit nibh nec, facilisis varius ligula. Morbi lacinia massa in risus vulputate tristique. Sed ornare tincidunt ipsum sit amet placerat. Sed quis auctor lacus, eget facilisis tellus. Suspendisse magna ante, fringilla a elit eget, commodo tincidunt ligula. Ut volutpat libero nec neque mattis, eu aliquet mauris aliquet. lorem
                    </p>
                </div>

                <?php            
            $q = "select distinct username from artwork";
            
            $results = mysqli_query($db, $q) or die(mysqli_error($db));
            
            while($row=mysqli_fetch_array($results))
            {
                print "<tr>\n";
                print "<td><a href='member.php?username={$row['username']}'>{$row['username']}</a></td>\n";
                print "</tr>\n";
            }
        ?>



            </div>

            <?php
    include("footer.inc");
?>