		

		<!------ Listing Function ------------------->

		

		<?php function showRecordsListing(&$rows) { 

		

		global $component,$database,$pagingObject, $page;

		

		$totalRecords = count($rows);

		if ($page != 1)    

			$srno = (1 * $page) - 1;

		else

			$srno = 0;

		

		$sqlmenuid = "select * from tbl_components where component_option='".$database->filter($_GET['c'])."'";

			$getmenuid = $database->get_results( $sqlmenuid );

			//print_r($getmenuid);

			$menuid = $getmenuid[0]; 

		$sqlpermission="select * from tbl_rights_groups where rights_group_id='".$_SESSION['groupid']."' and rights_menu_id='".$menuid['component_id']."'";

			$permissions = $database->get_results( $sqlpermission );

			$permission = $permissions[0];

		?>	
        
        <style>
		.trrow:hover {
		  background-color:#F1F4FB;
		  cursor:pointer;
		}
		</style>
		
<form name="adminForm" action="?c=<?php echo $component?>" method="get">


<!--Page header-->
<div class="page-header d-lg-flex d-block">
			<div class="page-leftheader">
				<h4 class="page-title"><?php echo pageheading(); ?></h4>
			</div>
			<div class="page-rightheader ml-md-auto">
				
				
			</div>
		</div>
		<!--End Page header-->

			<!-- Row -->
	<div class="row flex-lg-nowrap">
		<div class="col-12">
			<div class="row flex-lg-nowrap">
				<div class="col-12 mb-3">
					<div class="e-panel card">
						<div class="card-body">
							<div class="e-table">
                            
                            
                            
                            
							<div class="row">
                           
                           					<div class="col-md-12 col-lg-12 col-xl-3">
														<div class="form-group">
															<label class="form-label">Search with Keyword:</label>
															<div class="input-group">
																<div class="input-group-prepend">
																	
																</div><input class="form-control fc-datepicker" name="txtSearch" placeholder="Search by Order ID" value="<?php echo $_GET['txtSearch']?>" type="text">
															</div>
														</div>
													</div>
                                                 
                                                 
                                                 
                           
                           
											
											
										
                                            
                                            
                                            
                                            
											<div class="col-md-12 col-lg-12 col-xl-1">
												<div class="form-group mt-5">
													<button type="submit" class="btn btn-primary btn-block">Search</button>
                                                    
                                                     <?php $qS=$_SERVER['QUERY_STRING'];
												   if (strstr($qS,"txtDateFrom"))
												   {
												    ?>
                                                    <a href="?c=<?php echo $_GET['c']?>" style="font-size:11px; color:#03C">Reset filter</a>
                                                   <?php } ?>
												</div>
											</div>
										</div>
								<div class="table-responsive table-lg mt-3">
									<table class="table table-bordered border-top text-nowrap" id="example1" width="100%">
										<thead>
											<tr>
												
												<th width="7%" class="border-bottom-0">Order No.</th>
                                                <th width="17%" class="border-bottom-0">Approved by Pharmacy Date</th>
                                                <th width="18%" class="border-bottom-0">Pharmacy</th>
                                               
                                                <th width="14%" class="border-bottom-0">Patient</th>
                                                
                                                <th width="14%" class="border-bottom-0">Days from pending to Collect</th>
                                              
                                               
										  </tr>
										</thead>
                                        <tbody>
							<?php

							if($totalRecords > 0) 

							{

							for ($i = 0; $i < $totalRecords; $i++) 

							{

							$srno++;

							$row = &$rows[$i];
							
							



							?>				
							
								<tr   >
									
                                    <td><a href="?c=prescriptions&task=detail&id=<?php echo $row['pres_id']; ?>" style="color:#06F; text-decoration:underline">PH-<?php echo $row['pres_id'] ?></a></td>
                                    <td><?php echo displayDateTimeFormat($row['pres_pharmacy_action_date'])?></td>
									<td><a href="?c=pharmacies&task=detail&id=<?php echo $row['pres_pharmacy_id']; ?>" style="color:#06F; text-decoration:underline"><?php echo getPharmacyName($row['pres_pharmacy_id']); ?></a></td>
                                    <td><a href="?c=patients&task=detail&id=<?php echo $row['pres_patient_id']; ?>" style="color:#06F; text-decoration:underline"><?php echo getUserNameByType('patient',$row['pres_patient_id']); ?></a></td>
                                   
                                    
                                    <td><?php echo timeAgo($row['pres_pharmacy_action_date']);?></td>
                                    
                                    
                                    
                                  
									

									
								</tr>
                                
                                
                                

								<?php

}

}

else

{

	?>

	<tr>

		<th class="border-bottom-0 w-10" style="text-align:center;" colspan="11"> - No Record found - </th>
	</tr>

	<?php

}



?>				
							
							</tbody>
											</table>

												<?php

												$pagingObject->displayLinks_Front(); 

												?>

										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- End Row -->

		</div>
	</div><!-- end app-content-->
</div>
				<input type="hidden" name="task" value="" />

				<input type="hidden" name="c" value="<?php echo $component?>" />
                
                <input type="hidden" name="Cid" value="<?php echo $_GET['Cid']?>" />

				<input type="hidden" name="hidCheckedBoxes" value="0" />

			</form>
            
<script language="javascript">
	function fnTakeAction(val,id)
	{
		if (val==1)
		{
		ans=confirm ("Are you sure you want to accept the request");
		
		if (ans==true)
		window.location='?c=<?php echo $_GET['c']?>&id='+id+'&task=cancelaction&action=1';
		else
		alert ("No action");
		
		}
		else if (val==2)
		{
			ans=confirm ("Are you sure you want to cancel the request");
			
			if (ans==true)
			window.location='?c=<?php echo $_GET['c']?>&id='+id+'&task=cancelaction&action=0';
			else
			alert ("No action");
			
		}
	}

</script>


             <?php } ?>

	<!-----------End Listing function------------------>

    

    
