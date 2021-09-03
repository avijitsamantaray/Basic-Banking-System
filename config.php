<?php
   


	$conn = mysqli_connect("remotemysql.com",'Wz81xtGMee','bVtZHdE4e1','Wz81xtGMee');

	if(!$conn){
		die("Could not connect to the database due to the following error --> ".mysqli_connect_error());
	}

?>