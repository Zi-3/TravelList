
<?php  

      require('../../../dbconn2185.php');


if($con) {

    if(!empty($_POST['name']) && !empty($_POST['comments'])){

        $stmt = $con->prepare("INSERT INTO ProjComments (name,comments) VALUES (?,?)");
        $stmt->bind_param("ss",$_POST['name'],$_POST['comments']);
        $stmt->execute();
        $stmt->close();
    }
}

$res=$con->query('SELECT name, comments FROM ProjComments');
        if($res){
            while($thisRow = mysqli_fetch_array($res,MYSQLI_ASSOC)){
                // record 
                $records[]=$thisRow;
            }
        }
                


mysqli_close($con);
?>

<?php
    //includes the site header
    $path='./';
    $page='comments';
    include $path.'assets/inc/header.php';
?>

            <div class="content">
                <h1>Leave a Comment!</h1>
                <h4>Please leave your quetion or any information about Brooklyn</h4>
                <div>
                    <form action="comments.php" method="POST" onsubmit ="return check()">
                        <div class="ques1">
                            <p>Name： <span class="cap">*</span></p>
                            <input type="text" name="name" id="name" placeholder="Name">
                        </div>
                        <div class="ques2">
                            <p>Comment： <span class = "cap">*</span></p>
                            <textarea name="comments" id="comment"></textarea>
                        </div>
                        <div>
                            <input name = "submit" type="submit" class="sub" value="Post">
                        </div>

                    </form>
                    <br>

                    <h1>All comments</h1>
                    <br>
                    <div>
                     <?php 

                       foreach($records as $thisRow){
                        echo 'Your Name: '.$thisRow['name'].'<br><br>';
                        echo 'Your Comment: '.$thisRow['comments'].'<br/><br/><hr><br/>';
                    }
                ?></div>



                </div>
            </div>

            <?php
    //includes the site footer
    $path='./';
    $page='Footer';
    include $path.'assets/inc/footer.php';
?>