<?php include "../../private/settings.php";

//Array ( [cmbDescribe] => Principal [txtFirstName] => ad [txtLastName] => dfd [txtEmail] => sdfd@ll.com [txtMobile] => 2343 434 343 [txtAgencyName] => adf [txtPName] => asdf [txtPEmail] => sdfd@ll.com [txtPPhone] => 2343434343 [txtPostcode1] => 3333 [txtPostcode2] => [txtPostcode3] => [txtPostcode4] => [txtPostcode5] =>

$recaptcha=$_POST['g-recaptcha-response'];

if ($_POST['txtPharmacyName']!="" && !empty($recaptcha))
{

	
	$sqlCheck="select * from tbl_pharmacies where pharmacy_primary_email='".$database->filter($_POST['txtPrimaryEmail'])."'";
	$resCheck=$database->get_results($sqlCheck);
	if (count($resCheck)==0)
	{
		
		 
	$curDate = date("Y-m-d H:i:s");	
		
				if (is_array($_POST['ckWeek']))	
			{
				
			$arrTime=array();
			$arrTime2=array();
			foreach ($_POST['ckWeek'] as $week)
			{
				
				$strTime=$_POST['cmbOpening_h'][$week-1].":".$_POST['cmbOpening_m'][$week-1];
				$strTime2=$_POST['cmbClosing_h'][$week-1].":".$_POST['cmbClosing_m'][$week-1];		
				$arrTime[$week]=$strTime;
				$arrTime2[$week]=$strTime2;	
				$openingWeek=serialize($_POST['ckWeek']);
				$weekTiming=serialize($arrTime);
				$closeTiming=serialize($arrTime2);		
			
			}
			}
			

		 $values = array(
			'pharmacy_name' => $_POST['txtPharmacyName'], 
			'pharmacy_address' => $_POST['txtAddress'],  
			'pharmacy_address2' => $_POST['txtAddress2'],  			 
			'pharmacy_city' => $_POST['txtCity'], 
			'pharmacy_country' => 1, 
			'pharmacy_postcode' => $_POST['txtPostcode'],
			'pharmacy_s_name' => $_POST['textSupPharma'],			
			'pharmacy_o_name' => $_POST['txtName'], 			
			'pharmacy_o_mobile' => $_POST['txtMobile'], 
			'pharmacy_o_email' => $_POST['txtOEmail'], 						
			'pharmacy_p_landline' => $_POST['txtLandline_for_pat'], 
			'pharmacy_p_email' => $_POST['txtEmail_for_pat'], 			
			'pharmacy_p_gphc' => $_POST['txtGHPC'], 			
			'pharmacy_p_opening' => $openingWeek, 
			'pharmacy_p_timings' => $weekTiming, 
			'pharmacy_p_timings_closing' => $closeTiming,			
			'pharmacy_bank_holiday' => $_POST['txtBankTimings'], 			
			'pharmacy_primary_name' => $_POST['txtPrimaryName'], 
			'pharmacy_primary_email' => $_POST['txtPrimaryEmail'], 
			'pharmacy_primary_mobile' => $_POST['txtPrimaryMobile'], 					
			'pharmacy_logo' => $_POST['images4ex'][0],							
			'pharmacy_about_us' => $_POST['txtAboutus'], 
			'pharmacy_account_name' => $_POST['txtAccountName'], 
			'pharmacy_account_number' => $_POST['txtAccountNumber'], 
			'pharmacy_account_sortno' => $_POST['txtAccountSortCode'],	
			'pharmacy_account_bankname' => $_POST['txtBankName'],
			
			'pharmacy_website' => $_POST['txtWebsite'],
			'pharmacy_status' => 0,
			'pharmacy_reg_date' => $curDate 
			
			);


		
		
		$add_query = $database->insert( 'tbl_pharmacies', $values );
		
		
		

			
			
			
			
			//$_SESSION['uid']=$lastInsertedId;
			
			
			
			include PATH."include/email-templates/email-template.php";
	
				$headingTemplate="New Pharmacy Registration Alert";	
				$headingContent=' <p>Dear Admin,</p>
    <p>A new pharmacy has successfully registered on the website. Below are the details of the registration:</p><table>
        <tr>
            <th>Field</th>
            <th>Details</th>
        </tr>
        <tr>
            <td><strong>Pharmacy Name</strong></td>
            <td>'.$_POST['txtPharmacyName'].'</td>
        </tr>
        <tr>
            <td><strong>Primary Contact Name</strong></td>
            <td>'.$_POST['txtPrimaryName'].'</td>
        </tr>
        <tr>
            <td><strong>Primary Contact Email</strong></td>
            <td>'.$_POST['txtPrimaryEmail'].'</td>
        </tr>
        <tr>
            <td><strong>Primary Contact Mobile</strong></td>
            <td>'.$_POST['txtPrimaryMobile'].'</td>
        </tr>
    </table>
    <p>Please review the registration and take the necessary actions to approve or contact the pharmacy for further details.</p>';

				include_once PATH."mail/sendmail.php";

				

				$mailBody=generateEmailBody($headingTemplate,$headingContent,$buttonTitle,$buttonLink,$bottomHeading,$bottomText);				


				$ToEmail=ADMIN_EMAIL1;
				$FromEmail=ADMIN_FORM_EMAIL;
				$FromName=FROM_NAME;
				
				$SubjectSend="New Pharmacy Registration Alert";
				$BodySend=$mailBody;	

				SendMail($ToEmail, $FromEmail, $FromName, $SubjectSend, $BodySend);
	
				
	

		echo "1";
						
	}
	else
	echo "2";



	}







 ?>











      



    