<?php
	function showList()
	{	

	global $database, $page, $pagingObject;
		
			 $sql = "SELECT * FROM tbl_gps ";
			 
			 if ($_GET['txtSearchByTitle'])
				 {
					 $sql.=" where 1";
			 
					if($_GET['txtSearchByTitle'] != "")
					{
						
						$sql .= "  and (gp_name like '%".$database->filter($_GET['txtSearchByTitle'])."%' || gp_postcode like '%".$database->filter($_GET['txtSearchByTitle'])."%' || gp_address like '%".$database->filter($_GET['txtSearchByTitle'])."%' || gp_email like '%".$database->filter($_GET['txtSearchByTitle'])."%' || gp_phone like '%".$database->filter($_GET['txtSearchByTitle'])."%') ";
					}
					
				
				 }
			
			
			else
			$sql.=" where 0";

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


		 $sqlCheck="select * from tbl_gps where gp_name='".$database->filter($_POST['txtGPName'])."'";
		$resCheck=$database->get_results($sqlCheck);
		
		if (count($resCheck)==0)
		{
			
			

			$names = array(
	
				'gp_name' => $_POST['txtGPName'],
				'gp_address' => $_POST['txtGPAddress'],
				'gp_postcode' => $_POST['txtPostcode'],
				'gp_email' => $_POST['txtGPEmail'],
				'gp_phone' => $_POST['txtGPPhone'],
				'gp_added_type' => 'pharmacy', 
				'gp_added_id' => $_SESSION['sess_pharmacy_id'], 
				'gp_last_updated_by' => $_SESSION['sess_pharmacy_id'],				
				'gp_added_date' => $curDate,
				'gp_status' => 1
			);
	
			$add_query = $database->insert( 'tbl_gps', $names );
		}
		else
		{
			$rowCheck=$resCheck[0];
			
			$update = array(
			'gp_name' => $_POST['txtGPName'],			
			'gp_email' => $_POST['txtGPEmail'],			
			'gp_last_updated_by' => $_SESSION['sess_pharmacy_id'],			
			'gp_added_date' => $curDate,
			

			);

		

		$where_clause = array(

			'gp_id' => $rowCheck['gp_id']

		);
	
		$updated = $database->update( 'tbl_gps', $update, $where_clause, 1 );
			
			
		}
		
		
		if( $add_query )
		{
			print "<script>window.location='index.php?c=".$component."'</script>";

		}

	}

	

	function createFormForPages($id)
			{
				global $database;			

				$sql = "SELECT * FROM tbl_gps where gp_id ='".$database->filter($id)."'";
				$results = $database->get_results( $sql );
				createFormForPagesHtml($results);

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