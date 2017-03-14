<?php

include_once 'blade/view.home.blade.php';
include_once '/../../common/class.common.php';

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Discussion CRUD Operations</title>
		<link rel="stylesheet" href="style.css" type="text/css" />
	</head>

<body>
<center>
	<div id="header">
		<label>By : Kazi Masudul Alam</a></label>
	</div>

	<div id="form">
		<form method="post" action = "Design.html">
			<table width="100%" border="1" cellpadding="15">

				<tr>
					<td><label>Role Name : </label></td>
					<td>  
				

						    <?php
						    // this block of code prints the list box of roles with current assigned  roles

						    $var = '<select name="txtCat" id="select-from-cat">';
							$Result = $_DashBAO->getDashName();
								//if DAO access is successful to load all the Roles then show them one by one
							if($Result->getIsSuccess()){

								$Dashs = $Result->getResultObject();
							
						       for ($i=0; $i < sizeof($Dashs); $i++) { 
						       		
						       		$Dash = $Dashs[$i];
						    
						    		$var = $var. '<option value="'.$Dash->getID().'"';   			

						          	$var = $var.'>'.$Dash->getName().'</option>';
					
								}

								$var = $var.'</select>';
							}
							echo $var;
							?>	
					</td>
				</tr>
				
				</table>
				<table width="100%" border="1" cellpadding="15">
				<tr>
					<td>
						<?php
						if(isset($_GET['edit']))
						{
							?>
							<button type="submit" name="update">update</button>
							<?php
						}
						else
						{
							?>
							<button type="submit" name="save">Enter</button>
							<?php
						}
						?>
					</td>
				</tr>
			</table>
		</form>

<br />

	<table width="100%" border="1" cellpadding="15" align="center">
	<?php
	/*
	
	$Result = $_DiscussionBAO->getAllDiscussions();

	//if DAO access is successful to load all the Terms then show them one by one
	if($Result->getIsSuccess()){

		$DiscussionList = $Result->getResultObject();
	?> 
		<tr>
			<td>Questions</td>
			<td>Category</td>
			<td>Tags</td>
		</tr>
		<?php
		for($i = 0; $i < sizeof($DiscussionList); $i++) {
			$Discussion = $DiscussionList[$i];
			?>
		    <tr>
			    <td><a href = "view.discussion.php"><?php echo $Discussion->getName(); ?></a></td>
			    <td><?php echo $Discussion->getCategory(); ?></td>
			    <td><?php echo $Discussion->getTag(); ?></td>
			    <td><a href="?edit=<?php echo $Discussion->getID(); ?>" onclick="return confirm('sure to edit !'); " >edit</a></td>
			    <td><a href="?del=<?php echo $Discussion->getID(); ?>" onclick="return confirm('sure to delete !'); " >delete</a></td>
		    </tr>
	    <?php

		}

	}
	else{

		echo $Result->getResultObject(); //giving failure message
	}
*/
	?>
	</table>
	</div>
</center>
</body>
</html>