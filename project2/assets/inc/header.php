<!-- Zi RONG CAO -->
<!-- Project 2 -->
<!DOCTYPE html>
<html lang="en">
<head>
 <link REL="StyleSheet" TYPE="text/css" HREF="assets/css/style.css">

 <meta charset="utf-8" />
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <script src="assets/js/js.js"></script>
 <link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">




 <title> Project 2 </title>
</head>
<body onclick ="whereami()">
   <nav >
       <div id="logo">
          <a href="index.php" class="name">Brooklyn</a>
        </div>

    <label for="drop" class="ham"><i id = "float" class="fa fa-bars"></i></label>
    <input type="checkbox" id="drop" />

        <ul class="menu">
          <li>
            <!-- <label for="drop-1" class="ham">Homepage</label> -->
            <a href="<?php echo $path;?>index.php" <?php echo(($page == 'Homepage') ?'class="active"':'');?>>Homepage</a>
          </li>

          <li><a href="<?php echo $path;?>brooklyn.php?id=10" <?php echo(($page == 'brooklyn') ?'class="active"':'');?>>Brooklyn</a></li>
          <li>
            
            <label for="drop-2" class="ham">Food &#9662;</label>
            <a href="<?php echo $path;?>food.php?id=12" <?php echo(($page == 'FOOD' ) ?'class="active"':'');?>>Food &#9662;</a>
            <input type="checkbox" id="drop-2"/>
            <ul>
              <li><a href="food.php?id=1">Chinese Food</a></li>
              <li><a href="food.php?id=2">Japanese Food</a></li>
            </ul>
          </li>

          <li> 
            <label for="drop-3" class="ham">Fun &#9662;</label>
            <a href="<?php echo $path;?>fun.php?id=13" <?php echo(($page == 'FUN') ?'class="active"':'');?>>Fun &#9662;</a>
            <input type="checkbox" id="drop-3"/>
            <ul>
              <li><a href="fun.php?id=7">Karaoke</a></li>
              <li><a href="fun.php?id=6">Pool</a></li>
            </ul>
          </li>

          <li>
            <label for="drop-4" class="ham">Landmark &#9662;</label>
            <a href="<?php echo $path;?>landmark.php?id=14" <?php echo(($page == 'landmark') ?'class="active"':'');?>>Landmark &#9662;</a>
            <input type="checkbox" id="drop-4"/>
            <ul>
              <li><a href="landmark.php?id=4">Brooklyn Bridge</a></li>
              <li><a href="landmark.php?id=5">Transit Museum</a></li>
              <li><a href="landmark.php?id=3">Coney Island</a></li>
            </ul>
          </li>




            <li><a href="<?php echo $path;?>comments.php" <?php echo(($page == 'comment') ?'class="active"':'');?>>Comment</a></li>

          <li>
            <label for="drop-5" class="ham">About &#9662;</label>
            <a href="#" <?php echo(($page == 'about') ?'class="active"':'');?>>About &#9662;</a>
            <input type="checkbox" id="drop-5"/>
            <ul>
              <li><a href="about.php?id=8">Gallery</a></li>
              <li><a href="about.php?id=11">Source</a></li>
              <li><a href="about.php?id=9">Grading</a></li>
              <li><a href="about.php?id=15">Validate</a></li>
            </ul>
          </li>


    </ul>
    </nav>

