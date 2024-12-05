<?php
	function showList()
	{	

	global $database, $page, $pagingObject;
		
			$sql = "SELECT * FROM tbl_gps where 1";
			if($_GET['txtSearchByTitle'] != "")
			{
			$sql .= " and (gp_name like '%".$database->filter($_GET['txtSearchByTitle'])."%'  || gp_postcode like '%".$database->filter($_GET['txtSearchByTitle'])."%' || gp_name like '%".$database->filter($_GET['txtSearchByTitle'])."%' || gp_address like '%".$database->filter($_GET['txtSearchByTitle'])."%' || gp_email like '%".$database->filter($_GET['txtSearchByTitle'])."%' || gp_phone like '%".$database->filter($_GET['txtSearchByTitle'])."%') ";
			}

			$sql .= " order by gp_name asc";	

		$pagingObject->setMaxRecords(PAGELIMIT); 

		$sql = $pagingObject->setQuery($sql);

		$results = $database->get_results( $sql );

		showRecordsListing( $results );		

	}



	function saveFormValues()
	{
	global $database, $component;		

		$curDate=date("Y-m-d");		

		$names = array(

			'gp_name' => $_POST['txtGPName'],
			'gp_address' => $_POST['txtGPAddress'],
			'gp_postcode' => $_POST['txtPostcode'],
			'gp_email' => $_POST['txtGPEmail'],
			'gp_phone' => $_POST['txtGPPhone'],
			'gp_added_type' => 'admin', 
			'gp_added_id' => $_SESSION['user_id'], 
			'gp_added_date' => $curDate,
			'gp_status' => 1
		);

		$add_query = $database->insert( 'tbl_gps', $names );
		if( $add_query )
		{
			print "<script>window.location='index.php?c=".$component."'</script>";

		}

	}
	
	
	function saveFormBulkValues()
	{
		global $database, $component;		

		$curDate=date("Y-m-d");	
		
		if (isset($_FILES['flCSV']) && $_FILES['flCSV']['error'] == UPLOAD_ERR_OK) {
        $builderId = $_POST['cmbBuilder'];
       $csvFile = $_FILES['flCSV']['tmp_name'];
	   
	   if (($handle = fopen($csvFile, 'r')) !== FALSE) {
            // Skip the first row if it contains headers
            $header = fgetcsv($handle);
			 while (($data = fgetcsv($handle, 1000, ',')) !== FALSE) {
				 
				  $name = ucwords(strtolower($data[1]));
				  $address=$data[4];
				  
				  if ($data[5]!="")
				  $address.=", ".ucwords(strtolower($data[5]));
				  
				  if ($data[6]!="")
				  $address.=", ".ucwords(strtolower($data[6]));
				  
				  if ($data[7]!="")
				  $address.=", ".ucwords(strtolower($data[7]));
				  
				  if ($data[8]!="")
				  $address.=", ".ucwords(strtolower($data[8]));
				  
				  if ($data[9]!="")
				  $postcode=$data[9];
				  
				  $status=$data[12];
				  $phone=$data[17];
				  
				  if ($status=="A")
				  $statusVal=1;
				  else
				  $statusVal=0;	
				  
				 
				 $sqlGP="select * from tbl_gps where gp_name='".$database->filter($name)."'";
				 $resGP=$database->get_results($sqlGP);
				 
				 if (count($resGP)==0)
				 {			 		  
				  
					  $names = array(
						'gp_name' => $name,
						'gp_address' => $address,
						'gp_postcode' => $postcode,
						'gp_phone' => $phone,
						'gp_added_type' => 'admin', 
						'gp_added_id' => $_SESSION['user_id'], 
						'gp_added_date' => $curDate,
						'gp_status' => $statusVal
						);
						
						$add_query = $database->insert( 'tbl_gps', $names );
				 }
				 else
				 {
					 $rowGP=$resGP[0];
					 
						$update = array(
						'gp_name' => $name,
						'gp_address' => $address,
						'gp_postcode' => $postcode,
						'gp_phone' => $phone,
						'gp_added_type' => 'admin', 
						'gp_added_id' => $_SESSION['user_id'], 
						'gp_added_date' => $curDate,
						'gp_status' => $statusVal		
			
						);

						$where_clause = array(
						'gp_id' => $rowGP['gp_id']
						);
	
						$updated = $database->update( 'tbl_gps', $update, $where_clause, 1 );
					 
				 }
				  
				 print "<script>window.location='index.php?c=".$component."'</script>";
				  
			 }
		}
	}

		

	}


	

	function createFormForPages($id)
			{
				global $database;			

				$sql = "SELECT * FROM tbl_gps where gp_id ='".$database->filter($id)."'";
				$results = $database->get_results( $sql );
				createFormForPagesHtml($results);

			}
	
	function createFormForBulk($id)
			{
				global $database;				
				createFormForPagesBulkHtml($results);

			}

	

	

	function saveModificationsOperation()
	{	

			global $database,$component;
						
			$curDate=date("Y-m-d");	
			$update = array(
			'gp_name' => $_POST['txtGPName'],
			'gp_address' => $_POST['txtGPAddress'],
			'gp_postcode' => $_POST['txtPostcode'],
			'gp_email' => $_POST['txtGPEmail'],
			'gp_phone' => $_POST['txtGPPhone'],			
			'gp_added_date' => $curDate
			

			);

//Add the WHERE clauses

		$where_clause = array(

			'gp_id' => $_POST['id']

		);
	
		$updated = $database->update( 'tbl_gps', $update, $where_clause, 1 );
		
		if( $updated )

		{

			print "<script>window.location='index.php?c=".$component."&Cid=10'</script>";

		}

			 

	}

/*	

	function publishSelectedItems()

	{

		global $database,$component;	

		

		for($i = 0; $i < count($_GET['deletes']); $i++)

		{

			 $provinceIdToPublish = $_GET['deletes'][$i]; 

			

			$update = array(

				'categories_status' => 1

			);
			

			

			$where_clause = array(

				'categories_id' => $provinceIdToPublish

			);

			$updated = $database->update( 'tbl_blog_categories', $update, $where_clause, 1 );

		}

		

		if( $updated )

		{

			print "<script>window.location='index.php?c=".$component."&Cid=10'</script>";

		}

	}

	

	function unpublishSelectedItems()

	{

		global $database,$component;	

		

		for($i = 0; $i < count($_GET['deletes']); $i++)

		{

			 $provinceIdToPublish = $_GET['deletes'][$i];

			

			 

			$update = array(

				'categories_status' => 0

			);

			


			$where_clause = array(

				'categories_id' => $provinceIdToPublish

			);

			$updated = $database->update( 'tbl_blog_categories', $update, $where_clause, 1 );
			
		}

		

		if( $updated )

		{

			print "<script>window.location='index.php?c=".$component."&Cid=10'</script>";

		}

	}

	

	

	function removeSelectedItems()

	{

		global $database,$component;	

		

		for($i = 0; $i < count($_GET['deletes']); $i++)

		{

			 $provinceIdToPublish = $_GET['deletes'][$i];

		

			$where_clause = array(

				'categories_id' => $provinceIdToPublish

			);

			$delete = $database->delete( 'tbl_blog_categories', $where_clause, 1 );

		}

		

		if( $delete )

		{

			print "<script>window.location='index.php?c=".$component."&Cid=10'</script>";

		}

	}

	function removeDeletedItems()

	{

		global $database,$component;	

		

			 $provinceIdToPublish = $_GET['id'];

			

			//Add the WHERE clauses

			$where_clause = array(

				'categories_id' => $provinceIdToPublish

			);

			$del = $database->delete( 'tbl_blog_categories', $where_clause, 1 );
			print "<script>window.location='index.php?c=".$component."&Cid=10'</script>";

		}
*/

?>	