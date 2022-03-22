<?php
	//includes the site header
$path='./';
$page='Homepage';
include $path.'assets/inc/header.php';
?>

<div id = "bigimg">

    <div class="index_wrapper"> 
        <div class = "homepic">
          <p id="word">Welcome <br>To<br> Brooklyn</p>
          <p id="show"></p>
        </div>

      <div class="b">
          <div class="b1">
              <h1>Brooklyn</h1>
              <p>The City of New York is the most populous city in the United States and also in the New York State. New York City consists of five boroughs – Brooklyn, Queens, Manhattan, The Bronx, and Staten Island. However, Brooklyn is the most populous borough of New York City. There are estimated 2.649 million residents in 2017. Brooklyn was named after the village of BreukelenIn, it borders the Queens and end of Long Island. In Brooklyn, there are not only have a lot of parks and other attractions, there also have a lot of good restaurant.  I have been live in Brooklyn since 2013, and I went to a lot of place in Brooklyn which is very fun, and  worthy. So, I will introduce my favrites Resturant, Entertainment, and Landmark I have been.
              </p>

         <div class="text_wrapper">
             <div class="bx1">
                 <h2>Resturant</h2>
                 <a class="text" href="food.php?id=12">Click Me!</a>
             </div>

             <div class="bx2">
                 <h2>Fun</h2>
                 <a class="text" href="fun.php?id=13">Click Me!</a>
             </div>

             <div class="bx3">
                 <h2>Landmark</h2>
                 <a class="text" href="landmark.php?id=14">Click Me!</a>
             </div>
         </div>

         </div>

     </div>


 </div>
</div>

<?php
	//includes the site footer
	$path='./';
	$page='Footer';
	include $path.'assets/inc/footer.php';
?>

