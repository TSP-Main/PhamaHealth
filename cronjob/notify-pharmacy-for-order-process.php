<?php include "../private/settings.php";

	 $time24HoursAgo = date('Y-m-d H:i:s', strtotime('-24 hours'));			
	 $sql = "SELECT * FROM tbl_prescriptions WHERE pres_pharmacy_stage = 1 AND pres_clincian_update <= '$time24HoursAgo' group by pres_pharmacy_id";
	
	
	$res=$database->get_results($sql);
	
	for ($i=0;$i<count($res);$i++)
	{
	$rowPres=$res[$i];
	
						
				$pharmacyID=$rowPres['pres_pharmacy_id'];
				
								
				$sqlCheck="select * from tbl_pharmacies where pharmacy_id='".$database->filter($pharmacyID)."'";
				$resCheck=$database->get_results($sqlCheck);
				$rowMemberid=$resCheck[0];				
				
				
				$receiverName=$rowMemberid['pharmacy_name'];
				$email=$rowMemberid['pharmacy_primary_email'];
				
				
				
			
			
				
				include PATH."include/email-templates/email-template.php";
				include_once PATH."mail/sendmail.php";
				
				//--------Settings all values--------
				
				
				
				
				//end Settings all values

				$sqlEmail="select * from tbl_emails where email_id=66 and email_status=1";
			    $resEmail=$database->get_results($sqlEmail);
			
				
			
				if (count($resEmail)>0)
				{
					
					
					$rowEmail=$resEmail[0];
					$emailContent=fnUpdateHTML($rowEmail['email_description']);
					$emailContent=str_replace("<pharmacy_name>",$receiverName,$emailContent);
															
					$emailContent=str_replace("\n","<br>",$emailContent);
					
					$headingContent=$emailContent;

				$mailBody=generateEmailBody($headingTemplate,$headingContent,$buttonTitle,$buttonLink,$bottomHeading,$bottomText);				
				

				$ToEmail=$email;
				$FromEmail=ADMIN_FORM_EMAIL;
				$FromName=FROM_NAME;
				
				$SubjectSend="Action Required: Process Pending Orders in Your Account";
				$BodySend=$mailBody;	
				
				

				 SendMail($ToEmail, $FromEmail, $FromName, $SubjectSend, $BodySend);
				
				}
							
							
							
							
	
	}

 ?>











      



    