<?php
	//includes the site header
	$path='./';
	$page='brooklyn';
	include $path.'assets/inc/header.php';
	
	include '/home/MAIN/zxc9821/repos/dbconn.php';
	
	if($conn){
		$res=$conn->query('Select id, contentTitle, content FROM project2');
		if($res) {
			while($row = $res->FETCH_ASSOC())	{
				$records[]=$row;
			}
		}
	}
	
	function getContent($cont)	{
		global $records;

//		var_dump($records);
			foreach($records as $thisRow)	{
			if($thisRow['id'] == $cont)	{
				echo $thisRow['content'];
			}
		}
	}
	
	getContent($_GET['id']); 
?>

<?php
	//includes the site footer
	$path='./';
	$page='Footer';
	include $path.'assets/inc/footer.php';
?>



	




