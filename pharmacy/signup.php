<?php include "../private/settings.php";
include PATH."include/headerhtml.php"
 ?>
  <link type="text/css" href="<?php echo URL?>patient/orakuploader/orakuploader.css" rel="stylesheet"/>
  <body style="padding-top:0px;">  
<section class="register_screen">
    <div class="container">
        <div class="logo_box">
        <a href="<?php echo URL?>" class="logo"><img src="<?php echo URL?>images/Pharmacy-health-final-logo.svg" style="max-width:220px"></a>
        </div>
        <div class="register_box">
        <form id="frmApp" name="frmApp" method="POST" class="grid spacer-24">
            <div class="top">
            <h2 class="title_h2" style="text-align:center">Pharmacy Sign up</h2>
                 
            </div>
            <div class="row" style="background:#015280; padding:10px 15px 7px 15px; color:#fff; margin-bottom:15px">
            	<h6>Pharmacy Details</h6>
            </div>
            
            <div class="row">
                            
                            
                            				
											<div class="col-sm-12 col-md-12">
												<div class="form-group">
													<label class="form-label"> Name of Pharmacy<span class="text-red"> *</span></label>
												  <input type="text" class="form-control"  value="" name="txtPharmacyName" data-validation="required" data-validation-error-msg="Please enter your pharmacy Name" maxlength="200">
												</div>
											</div>
                                            <div class="col-sm-12 col-md-12">
												<div class="form-group">
													<label class="form-label">Address <span class="text-red">*</span></label>
													<input type="text" class="form-control" placeholder="" value="" name="txtAddress" data-validation="required" data-validation-error-msg="Please enter your address">
												</div>
											</div>
											<div class="col-sm-12 col-md-12">
												<div class="form-group">
													<label class="form-label">Address 2</label>
													<input type="text" class="form-control" placeholder="" name="txtAddress2" value="" >
												</div>
											</div>
										
										</div>
                                        
                                        <div class="row">
                            
                            
                            				
											<div class="col-sm-6 col-md-6">
												<div class="form-group">
													<label class="form-label">City <span class="text-red">*</span></label>
													<input type="text" class="form-control" placeholder="" name="txtCity" value="" data-validation="required" data-validation-error-msg="Please enter city name">
												</div>
											</div>
                                            
                                            <div class="col-sm-6 col-md-6">
												<div class="form-group">
													<label class="form-label">Postcode <span class="text-red">*</span></label>
													<input type="text" class="form-control" placeholder="" name="txtPostcode" value="" maxlength="6" data-validation="required" data-validation-error-msg="Please enter postcode">
												</div>
											</div>
											
										
										</div>
                                        
                                        <div class="row">
                            
                            
                            				
											
                                            
                                            	
											<div class="col-sm-6 col-md-6">
												<div class="form-group">
													<label class="form-label">GPhC Pharmacy Premise Number </label>
													<input type="text" class="form-control" placeholder="" name="txtGHPC" value=""  >
												</div>
											</div>
                                            
                                            <div class="col-sm-6 col-md-6">
												<div class="form-group">
													<label class="form-label">Name of Superintendent Pharmacist</label>
													<input type="text" class="form-control" placeholder="" name="textSupPharma" value=""  >
												</div>
											</div>
											
										
										</div>
                                        
                                        
                                        
            
           <div class="row">
                            
                            
                            				
											<div class="col-sm-4 col-md-4">
												<div class="form-group">
													<label class="form-label">Name of Owner<span class="text-red">*</span></label>
													<input type="text" class="form-control" placeholder="" value="" name="txtName" maxlength="70">
												</div>
											</div>
											<div class="col-sm-4 col-md-4">
												<div class="form-group">
													<label class="form-label">Email of Owner</label>
													<input type="text" class="form-control" placeholder="" value="" name="txtOEmail" >
												</div>
											</div>
                                            
                                            <div class="col-sm-4 col-md-4">
												<div class="form-group">
													<label class="form-label">Mobile of Owner </label>
													<input type="text" class="form-control" placeholder="" value="" name="txtMobile" >
												</div>
											</div>
										
										</div>
                                         <div class="form-group">
                                            <label class="form-label">Pharmacy Logo Image</label>
                                            <div id="images4ex" orakuploader="on"></div>
                                        </div>
                                        
                                        <div class="row" style="background:#015280; padding:10px 15px 7px 15px; color:#fff; margin-bottom:15px">
            							<h6>Primary Contact Details</h6>
           								 </div>
                            
                                        <div class="row">
                            
                            
                            				
											<div class="col-sm-4 col-md-4">
												<div class="form-group">
													<label class="form-label">Name <span class="text-red">*</span></label>
													<input type="text" class="form-control" placeholder="" value="" name="txtPrimaryName" maxlength="70" data-validation="required" data-validation-error-msg="Please enter primary contact name">
												</div>
											</div>
											<div class="col-sm-4 col-md-4">
												<div class="form-group">
													<label class="form-label">Email <span class="text-red">*</span></label>
													<input type="text" class="form-control" placeholder="" value="" name="txtPrimaryEmail" data-validation="required" data-validation-error-msg="Please enter primary contact email">
												</div>
											</div>
                                            
                                            <div class="col-sm-4 col-md-4">
												<div class="form-group">
													<label class="form-label">Mobile <span class="text-red">*</span></label>
													<input type="text" class="form-control" placeholder="" value="" name="txtPrimaryMobile" data-validation="required" data-validation-error-msg="Please enter primary contact mobile">
												</div>
											</div>
										
										</div>
                                        
                                         <div class="row" style="background:#015280; padding:10px 15px 7px 15px; color:#fff; margin-bottom:15px">
            							<h6>Contact Details for Patients</h6>
           								 </div>                           
                          
                                        
                                        <div class="row">                        
                            
                            				
											<div class="col-sm-6 col-md-6">
												<div class="form-group">
													<label class="form-label">Landline <span class="text-red">*</span></label>
													<input type="text" class="form-control" placeholder="" value="" name="txtLandline_for_pat" maxlength="70" data-validation="required" data-validation-error-msg="Please enter landline number">
												</div>
											</div>
											<div class="col-sm-6 col-md-6">
												<div class="form-group">
													<label class="form-label">Email </label>
													<input type="text" class="form-control" placeholder="" value="" name="txtEmail_for_pat" >
												</div>
											</div>
                                            
                                            <div class="col-sm-12 col-md-12">
												<div class="form-group">
													<label class="form-label">Opening Timings </label>
													<div class="custom-controls-stacked">
                                
                                			<?php
											$arrWeek=array();
											$arrTimings=array();
											
											if ($row['pharmacy_p_opening']!="")
											$arrWeek=unserialize(fnUpdateHTML($row['pharmacy_p_opening']));
											
											if ($row['pharmacy_p_timings']!="")
											$arrTimings=unserialize(fnUpdateHTML($row['pharmacy_p_timings']));
											
											if ($row['pharmacy_p_timings_closing']!="")
											$arrTimings2=unserialize(fnUpdateHTML($row['pharmacy_p_timings_closing']));
											//print_r ($arrTimings2);
											
											 $mydays = array('Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday','Sunday');
											
											$val=1;
											
											for ($j=0;$j<7;$j++)
											{
												
												
												
											 ?>
                                            
                                            			<div class="row" >
                                                        	<div class="col-md-12">
														<label class="custom-control custom-checkbox" >
															<input type="checkbox" class="custom-control-input" name="ckWeek[]" id="ck_<?php echo $val?>" onclick="openDiv(<?php echo $val?>)" value="<?php echo $val?>" <?php if (in_array($val,$arrWeek)) echo "checked"; ?> > 
                                                         </label>      
															<span class="custom-control-label"><?php echo $mydays[$j] ?></span>
                                                          </div>
                                                        </div>
                                                           <div id="timings_<?php echo $val?>" <?php if (!in_array($val,$arrWeek)) echo 'style="display:none"'; ?>>
                                                            <div class="row" >
                                                            	<div class="col-md-12" style="background-color:#dcf5f7; border:1px solid #5CBBC0;padding-bottom:4px">
                                                                
                                                                <div class="row">
                                                                	<div class="col-md-12" style="padding-top:6px">
                                                                	
																		<?php 
																		$arrOt=array();
																		if ($arrTimings[$val]!="")
																		$arrOt=explode(":",$arrTimings[$val]);
																		 ?>
                                                                    </div>
                                                                
                                                            		<div class="col-md-3 col-6" >
                                                                    <label class="form-label" style="font-size:13px">Opening Timings </label>
                                                                	<select class="form-control" id="cmb_o_<?php echo $val?>" name="cmbOpening_h[]">
                                                                    	<option value="">Hours</option>
                                                                        <?php for ($h=1;$h<=24;$h++) 
																		{
																			if (strlen($h)==1)
																			$prefix="0";
																			else
																			$prefix="";
																			
																			 ?>
                                                                        <option value="<?php echo $prefix.$h?>" <?php if ($arrOt[0]==$prefix.$h) echo "selected"; ?>><?php echo $prefix.$h?></option>
                                                                        <?php } ?>
																		
                                                                    </select></div>
                                                                    <div class="col-md-3 col-6">
                                                                    <label class="form-label">&nbsp;</label>
                                                                    <select class="form-control mb-4" id="cmb_o_<?php echo $val?>" name="cmbOpening_m[]">
                                                                    	<option value="">Minutes</option>
                                                                        
                                                                         <?php for ($m=0;$m<=55;$m=$m+5) 
																		{
																			if (strlen($m)==1)
																			$prefix="0";
																			else
																			$prefix="";
																			
																			 ?>
                                                                        <option value="<?php echo $prefix.$m?>" <?php if ($arrOt[1]==$prefix.$m) echo "selected"; ?>><?php echo $prefix.$m?></option>
                                                                        <?php } ?>
                                                                        
                                                                    </select>
                                                                    </div>
                                                                    
                                                                    <div class="col-md-3 col-6">
                                                                   <label class="form-label" style="font-size:13px">Closing Time</label>
                                                                    
                                                                    <?php 
																		$arrOt2=array();
																		if ($arrTimings2[$val]!="")
																		$arrOt2=explode(":",$arrTimings2[$val]);
																		 ?>
                                                                    
                                                                    
                                                                	<select class="form-control" id="cmb_c_<?php echo $val?>" name="cmbClosing_h[]">
                                                                    	<option value="">Hours</option>
                                                                        
                                                                         <?php for ($h=1;$h<=24;$h++) 
																		{
																			if (strlen($h)==1)
																			$prefix="0";
																			else
																			$prefix="";
																			
																			 ?>
                                                                        <option value="<?php echo $prefix.$h?>" <?php if ($arrOt2[0]==$prefix.$h) echo "selected"; ?>><?php echo $prefix.$h?></option>
                                                                        <?php } ?>
                                                                        
                                                                    </select></div>
                                                                    
                                                                    <div class="col-md-3 col-6">
                                                                    <label class="form-label">&nbsp;</label>
                                                                    <select class="form-control" id="cmb_c_<?php echo $val?>" name="cmbClosing_m[]">
                                                                    	<option value="">Minutes</option>
                                                                        
                                                                          <?php for ($m=0;$m<=55;$m=$m+5) 
																		{
																			if (strlen($m)==1)
																			$prefix="0";
																			else
																			$prefix="";
																			
																			 ?>
                                                                        <option value="<?php echo $prefix.$m?>" <?php if ($arrOt2[1]==$prefix.$m) echo "selected"; ?>><?php echo $prefix.$m?></option>
                                                                        <?php } ?>
                                                                        
                                                                        
                                                                    </select>
                                                                    </div>
                                                                 </div>
                                                                    
                                                                    
                                                                  </div>
                                                               </div>
                                                               
                                                               
                                                              
                                                              </div> 
                                                                <div class="col-md-2">
                                                            </div>
                                                            
														</label>
                                                        
                                                  <?php 
												  $val=$val+1;
												  } ?>      
                                                        
														
														
													</div>
												</div>
											</div>
                                            
                                            
										
										</div>
            
          					 <div class="form-group">
								<label class="form-label">Bank Holiday Opening Description</label>
								<textarea name="txtBankTimings" class="form-control"><?php echo $row['pharmacy_bank_opening']?></textarea> 
							</div>
                            
                            <div class="row" style="background:#015280; padding:10px 15px 7px 15px; color:#fff; margin-bottom:15px">
            					<h6>Profile Page Updates</h6>
           					 </div> 
                             
                            <div class="form-group">
								<label class="form-label">About us</label>
								<textarea name="txtAboutus" class="form-control" rows="8"><?php echo $row['pharmacy_about_us']?></textarea>
							</div>
                            
                             <div class="form-group">
								<label class="form-label">Website Link</label>
								<input class="form-control mb-4" type="text" id="txtWebsite" name="txtWebsite" value="<?php echo $row['pharmacy_website']?>" >
							</div>
                            
                          <div class="row" style="background:#015280; padding:10px 15px 7px 15px; color:#fff; margin-bottom:15px">
            					<h6>Bank Account Details</h6>
           					 </div> 
                             
                              <div class="form-group">
								<label class="form-label">Account Name</label>
								<input class="form-control mb-4" type="text" id="txtAccountName" name="txtAccountName" value="<?php echo $row['pharmacy_account_name']?>" >
							</div>
                            
                             <div class="form-group">
								<label class="form-label">Account Number:</label>
								<input class="form-control mb-4" type="text" id="txtAccountNumber" name="txtAccountNumber" value="<?php echo $row['pharmacy_account_number']?>" >
							</div>
                            
                             <div class="row">
                            		<div class="col-sm-6 col-md-6">
                            
                                         <div class="form-group">
                                            <label class="form-label">Sort Code</label>
                                            <input class="form-control mb-4" type="text" id="txtAccountSortCode" name="txtAccountSortCode" value="<?php echo $row['pharmacy_account_sortno']?>" >
                                        </div>
                                     </div>
                             
                            <div class="col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Name of Bank</label>
                                    <input class="form-control mb-4" type="text" id="txtBankName" name="txtBankName" value="<?php echo $row['pharmacy_account_bankname']?>" >
                                </div>
                            </div>
                           </div>
            
            
             
                <div class="col-sm-12 mt-4 pt-2">
                 <div class="checkbox form-group">
                    <label class="custom_checkbox">
                        <input type="checkbox" name="CkTerms" id="CkTerms" value="1" class="form-check-input" data-validation="required" data-validation-error-msg="Please accept terms and conditions">
                    I have read, understood and agree to Pharma Health <a href="#">Terms & Conditions</a></label>
                 </div>
                    
<div><input class="g-recaptcha" data-validation="recaptcha" data-validation-recaptcha-sitekey="6Lc38CkUAAAAAGSzBr9awm5tAfiMLHitD5f21vI4"></div>
                      
                         <div class="button_box">
                         <div id="error-container" align="left" style="padding-top:20px; padding-bottom:20px; color:#F00"></div>
                              <button id="submitBtn" type="submit" class="btn btn-danger btn-lg d-inline-flex align-items-center ps-5 pe-5 w100p">Submit</button></div>
                        
                        
                        <div class="signup_box">                           
                            <h6>Already registered? <a href="<?php echo URL?>pharmacy/account/">Sign in</a></h6>
                        
                    </div>
                </div>


            </div>
            </form>
        </div>
    </div>
</section>
<?php include PATH."include/footer-simple.php"; ?>


<script src="<?php echo URL?>js/form-validator/jquery.form-validator.js"></script>
<script src="<?php echo URL?>js/jquery.inputmask.bundle.js"></script>

<script type="text/javascript" src="orakuploader/jquery-ui.min.js"></script>
<script type="text/javascript" src="orakuploader/orakuploader.js"></script>
			
				<script>
				
				$('#password').on('focus', function () {
				   $(this).attr('type', 'password'); 
				});
				
				function phoneFormat()
				  {
					  var phones = [{ "mask": "#### ### ###"}, { "mask": "(###) ###-##############"}];
					$('#txtPhone').inputmask({ 
					mask: phones, 
					greedy: false, 
					definitions: { '#': { validator: "[0-9]", cardinality: 1}} });
				  }
			
				(function($, window) {
			
					// setup datepicker
					
					phoneFormat();
			
					window.applyValidation = function(validateOnBlur, forms, messagePosition, xtraModule) {
			
			
			
						if( !forms )
			
							forms = 'form';
			
						if( !messagePosition )
			
							messagePosition = 'bottom';
			
			
			
						$.validate({
			
							form : forms,
			
							validateOnBlur : validateOnBlur,
			
							errorMessagePosition : messagePosition,
			
							scrollToTopOnError : true,
			
							sanitizeAll : 'trim', // only used on form C
			
			
			
							// borderColorOnError : 'purple',
			
			
			
							modules : 'security, location,' +( xtraModule ? ','+xtraModule:''),
			
							onModulesLoaded: function() {
			
			
			
							   // $('#country-suggestions').suggestCountry();
			
								//$('#swedish-county-suggestions').suggestSwedishCounty();
			
			
			
							   $('#password').displayPasswordStrength();
			
			
			
							},
			
			
			
						
			
			
			
							onValidate : function($f) {
			
								console.log('about to validate form '+$f.attr('id'));
			
								var $callbackInput = $('#callback');
			
								if( $callbackInput.val() == 1 ) {
			
									return {
			
										element : $callbackInput,
			
										message : 'This validation was made in a callback'
			
									};
			
								}
			
			
			
							},
			
			
			
							onError : function($form) {
			
							  //alert('Invalid '+$form.attr('id'));
			
			
			
							},
			
			
			
							onSuccess : function($form) {
			
							// alert('Valid '+$form.attr('id'));
							
							
							
			
							 $("#submitBtn").attr('disabled','disabled');
			
							 $("#submitBtn").html("Please wait..</div>");
			
								
			
								var myform = document.getElementById("frmApp");
			
								var fd = new FormData(myform);	
			
								   $.ajax({		
								   type: "POST",			
								   url: "<?php echo URL?>pharmacy/ajax/insert-record.php",			
								   data: fd,			
								   cache: false,			
								   processData: false,			
								   contentType: false,						   
			
			
			
								   success: function(msg){	
								  // alert (msg);		
									if (msg==1)			
									  window.location='<?php echo URL?>pharmacy/thanks';	
									   else if (msg==2)			
									   {
			
										$("#submitBtn").removeAttr("disabled");			
										$("#submitBtn").html("Submit");	
										$("#error-container").html("Your email id is already registered with us, please login to your account");	
			
									   }
			
			
			
								  }
			
			
			
								 });
			
			
			
								return false;
			
			
			
							}
			
			
			
						});
			
			
			
					};
			
			
			
			
			
				   window.applyValidation(true, '#frmApp', $('#error-container'), 'sanitize');
			
			
			
			
			
				})(jQuery, window);
			
			
			function openDiv(id)
			 {
				 
				if ($("#ck_"+id).prop('checked')== true)
				$("#timings_"+id).show();
				else
				$("#timings_"+id).hide();
				 
				
				
				 
			 }
			 
			 $(document).ready(function(){
		$('#images4ex').orakuploader({
		orakuploader : true,
		orakuploader_path : 'orakuploader/',

		orakuploader_main_path : '../images/pharmacies',
		orakuploader_thumbnail_path : '../images/pharmacies',
		
		orakuploader_use_main : true,
		orakuploader_use_sortable : true,
		orakuploader_use_dragndrop : true,
		
		orakuploader_add_image : 'orakuploader/images/add.png',
		orakuploader_add_label : 'Browser for images',
		
		orakuploader_resize_to	     : 600,
		orakuploader_thumbnail_size  : 400,
		orakuploader_maximum_uploads : 1,
		orakuploader_attach_images: [],
		
		orakuploader_main_changed    : function (filename) {
			$("#mainlabel-images").remove();
			$("div").find("[filename='" + filename + "']").append("<div id='mainlabel-images' class='maintext'>Main Image</div>");
		}

	});
});
			
			
			</script>
