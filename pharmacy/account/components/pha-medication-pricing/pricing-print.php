<?php include "../../../../private/settings.php";

if ($_SESSION['sess_pharmacy_id']!="" || $_SESSION['sess_prescriber_id']!="")
{

$sql = "SELECT * FROM tbl_medication,tbl_medication_pricing where mp_medicine=med_id order by med_title asc";

$res=$database->get_results($sql);
$totalRecords=count($res);




 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Medication Pricing Preview</title>
		<!-- Bootstrap css -->
		<link href="<?php echo URL?>pharmacy/account/templates/black/assets/plugins/bootstrap/css/bootstrap.css" rel="stylesheet" />

		<!-- Style css -->
		<link href="<?php echo URL?>pharmacy/account/templates/black/assets/css/style.css" rel="stylesheet" />
		<link href="<?php echo URL?>pharmacy/account/templates/black/assets/css/dark.css" rel="stylesheet" />
		<link href="<?php echo URL?>pharmacy/account/templates/black/assets/css/skin-modes.css" rel="stylesheet" />
<style>




td {
	font-family:Arial, Helvetica, sans-serif;
	font-size:16px;
	color:#333;
}
.blue-text {
	color:#036;
	font-weight:bold;
}
.pink-line {
    border: none; /* Remove the default hr border */
    height: 4px; /* Set the thickness of the line */
    background-color: #F540A8; /* Set the line color */
    margin: 20px 0; /* Add margin to position the line as needed */
}

/* Style for the print button */
.print-button {
    background-color: #008CBA; /* Change the background color to your preference */
    color: #fff; /* Text color */
    border: none;
    padding: 10px 20px;
    font-size: 16px;
    cursor: pointer;
    border-radius: 5px; /* Rounded corners */
    text-align: center;
    text-decoration: none;
    display: inline-block;
    transition: background-color 0.3s ease;
}

.print-button:hover {
    background-color: #005F82; /* Change the color on hover */
}

/* Style for the PDF download button */
.pdf-button {
    background-color:#C33; /* Change the background color to your preference */
    color: #fff; /* Text color */
    border: none;
    padding: 10px 20px;
    font-size: 16px;
    cursor: pointer;
    border-radius: 5px; /* Rounded corners */
    text-align: center;
    text-decoration: none;
    display: inline-block;
    transition: background-color 0.3s ease;
}

.pdf-button:hover {
    background-color: #388E3C; /* Change the color on hover */
}


@media print {
    .pink-line {
        -webkit-print-color-adjust: exact; /* For Chrome and Safari */
        color-adjust: exact; /* For Firefox */
    }
	
	
	
	
	
	
	
}


</style>
</head>

<body style="background-color:#FFF" >

<div align="center" >

<table width="800px" >

<tr id="rowBtn"><td align="right" style="padding-top:10px"><button type="button" onclick="printPage()" id="printBtn" class="print-button">Print</button> &nbsp;&nbsp; <!--<a href="<?php echo URL?>pdf/create-prescription?id=<?php echo $_GET['id']?>" ><button type="button" id="pdfBtn" class="pdf-button">Download PDF</button></a>--></td></tr>
	<tr><td><img src="<?php echo URL?>images/Pharmacy-health-final-logo.svg" style="max-width:100%" /></td></tr>
</table>
    
    </td>
  </tr>
  </table>   
    	<div class="table-responsive table-lg mt-3 table-container">
									<table class="table table-bordered border-top " id="example1">
										<thead>
											<tr>
												
												<th class="border-bottom-0" style="max-width:200px">Medication</th>
                                                <th class="border-bottom-0">Strength</th>
                                                <th class="border-bottom-0">Unit</th>
                                                <th class="border-bottom-0">Packsize</th>
                                               
                                               
                                                <th class="border-bottom-0">Qty 1 Price</th>
                                                <th class="border-bottom-0">Qty 2 Price</th>
                                                <th class="border-bottom-0">Qty 3 Price</th>
                                              
                                                
                                               
												<th class="border-bottom-0">Availability</th>
											</tr>
										</thead>
							<?php
							
							
							if ($tier=="")
							$tier=1;
								
							

							if($totalRecords > 0) 

							{

							for ($i = 0; $i < $totalRecords; $i++) 

							{

							$srno++;

							$row = $res[$i];



							?>				
							<tbody>
								<tr>
									
									<td class="align-middle">
										<div class="d-flex">
											<div class="ml-3 mt-1">
												<strong><?php echo $row['med_title']; ?></strong> <br />
                                                <font style="color:#666; font-size:12px"><?php echo getConditionName_multi($row['med_conditions']); ?></font><br />
                                                
                                               
											</div>
										</div>
									</td>
                                    <td>
                                    	<?php echo $row['mp_strength'] ?>
                                    </td>
                                    <td><?php echo $row['mp_unit']; ?></td>
                                     <td><?php echo $row['mp_pack_size']. " ".$row['mp_pack_unit'] ?></td>
                                    
                                      
                                     
                                      
                                     <?php for ($m=1;$m<=3;$m++) { ?>
                                      <td><?php 
									  
									  
									 						  
									 									  
									    $quantity=$m;
									   //$tierField="mp_tier".$tier."_price";
									   
									   if ($tier==1)
										$baseprice = 20; 
										else if ($tier==2)
										$baseprice = 24; 
										if ($tier==3)
										$baseprice = 28; 
										
	
										//$baseprice=$row[$tierField];
										
										$medicationCost=$row['mp_medication_cost'];
										$costPrice=$row['mp_cost_price'];
										$totalCostPrice=$costPrice*$quantity;
										
										if ($totalCostPrice>=6.5)
										{
											$medicationCost=$totalCostPrice;
											
											//if ($medicationCost>=6.5 && $medicationCost<10)
											//$medicationCost=8;
											
											$tierPrice=calculatePrice_plus($quantity,$medicationCost, $tier,$costPrice);
										}
										else
										$tierPrice=calculatePrice($baseprice, $quantity);
										
										$arrTierPrice=explode(" ",$tierPrice);
										
									  echo CURRENCY.$arrTierPrice[0] ?>
                                      
                                      </td>
                                    <?php } ?> 
                                     
                                      
									
                                   

									<td class="align-middle">
										<div class="btn-group align-top">
										<?php if($row['mp_in_stock'] == 1){ ?>

										<font style="color:#090">Available</span>

										<?php }else if($row['mp_in_stock'] == 0){ ?>

										<font style="color:#F00">Unavailable</span>

										<?php } ?>


											
										</div>
									</td>
								</tr>

								<?php

}

}

else

{

	?>

	<tr>

		<th class="border-bottom-0 w-10" colspan="6" style="text-align:center;"> - No Record found - </th>
	</tr>

	<?php

}



?>				
							
							</tbody>
											</table>

												

										</div>
    
 
  </div>

</body>
</html>



<script language="javascript">
function printPage()
{
	document.getElementById("rowBtn").style.display = "none";
	
	window.print();
	
	document.getElementById("rowBtn").style.display = "block";
}
</script>
<?php } ?>
