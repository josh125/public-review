<?php $this->load->view('includes/header');?>
<?php $this->load->view('includes/navbar');?>

	<section class="title-page">
		<div class="container">
			<div class="row"><br>
				<div class="col-md-8">
					<h4 class="category-title">Add a Category Items</h4>
					<p>Please note: This category page will not appear in search results until it has been approved by moderators</p><hr />
				</div>
			</div>
				<?php echo form_open_multipart('writeareview/add_category');?>
			<div class="row">
				<div class="col-md-4">
				<?php if($this->session->flashdata('message')):?>
            	<div class="alert alert-dismissible alert-info">
				<button type="button" class="close" data-dismiss="alert">x</button>
					<strong><?php echo $this->session->flashdata('message');?></strong>
				</div><br>
            <?php endif;?>
				<?php if(validation_errors()):?>
                <div class="alert alert-dismissible alert-info">
					<button type="button" class="close" data-dismiss="alert">x</button>
                	<h4 ><?php echo validation_errors();?></h4>
                </div>
                <br>
        		<?php endif;?>  
						<div class="form-group">  
							<span><label for="country">Country</label></span> 
								<select required name="country" id="country" class="form-control">
										<option value="">-------------</option>   
										<option value="Argentina">Argentina</option>   
										<option value="Australia">Australia</option>   
										<option value="Belgium">Belgium</option>   
										<option value="Brazil">Brazil</option>   
										<option value="Canada">Canada</option>   
										<option value="Czech Republic">Czech Republic</option>   
										<option value="Finland">Finland</option>   
										<option value="France">France</option>   
										<option value="Germany">Germany</option>   
										<option value="Hong Kong">Hong Kong</option>   
										<option value="Italy">Italy</option>   
										<option value="Japan">Japan</option>   
										<option value="Malaysia">Malaysia</option>   
										<option value="Mexico">Mexico</option>   
										<option value="New Zealand">New Zealand</option>   
										<option value="Norway">Norway</option>   
										<option value="Philippines">Philippines</option>   
										<option value="Poland">Poland</option>   
										<option value="Portugal">Portugal</option>   
										<option value="Republic of Ireland">Republic of Ireland</option>   
										<option value="Singapore">Singapore</option>   
										<option value="Spain">Spain</option>   
										<option value="Sweden">Sweden</option>   
										<option value="Switzerland">Switzerland</option>   
										<option value="Taiwan">Taiwan</option>   
										<option value="The Netherlands">The Netherlands</option>   
										<option value="Turkey">Turkey</option>   
										<option value="United Kingdom">United Kingdom</option>   
										<option value="United States">United States</option>   
								</select>  
						</div>
							
						<div class="form-group">  
							<label for="name">Name</label>   
							<input type="text" class="form-control" name="name" id="name" placeholder="Name of the Hotel,Restaurant,Business,Website,People etc." >
						</div> 

						<div class="form-group">  
							<label for="address">Address</label>   
							<input type="text" class="form-control" name="address" id="address" placeholder="location, street">
						</div> 
						<div class="form-group">  
							<label for="city">City</label>   
							<input type="text" class="form-control" name="city" id="city" placeholder="City">
						</div> 
						<div class="form-group">  
							<label for="phone_no">Phone no.</label>   
							<input type="text" class="form-control" name="phone_no" id="phone_no" placeholder="Phone No.">
						</div> 
						<div class="form-group">  
							<label for="website_url">Website Url</label>   
							<input type="text" class="form-control" name="website_url" id="website_url" placeholder="ex. www.publicreview.com">
						</div> 
						<div class="form-group">  
							<label for="category">Categories</label>  
								<select required name="category_id" id="category_id" class="form-control">
									<option value="">--------------</option>   
									<option value="6">Hotel</option>   
									<option value="7">Restaurant</option>   
									<option value="8">Attraction</option>   
									<option value="1">People</option>   
									<option value="3">Business</option>   
									<option value="4">Website</option>   
									<option value="9">Movies</option>   
									<option value="10">Music</option>   
									<option value="11">Sports</option>   
									<option value="12">Gaming</option>   
									<option value="13">News</option>   
									<option value="14">Others</option>   
								</select>  
						</div>

						<div class="form-group">
							<label for="category_info">Upload Image</label>   
							<input type="file" name="userfile" size="20">
						</div>

						<div class="form-group">  
							<label for="category_info">Add Another Category Info </label>   
							<input type="text" class="form-control" name="category_info" id="category_info" placeholder="ex. Doctors, Lawyers, Horror Movies,Single Track Song etc.">
						</div>

						<div class="form-group">   
							<label for="rate">Your overall rating for this (Optional) </label>  
							<input id="input-22" class="rating" data-min="0" data-max="5" data-step="1" data-size="xs" name="overall_rate" value="" >
						</div>  

				</div><!-- end of col-md-4 -->
			</div><!-- end of row -->
				<div class="row">
					<div class="col-md-6">
							<div class="form-group">  
								<label for="review_title">Title of your review (Optional) </label>   
								<input type="text" class="form-control" name="review_title" id="review_title" placeholder="Summarize your visit or highlight an interesting detail">
							</div>   
							
							<div class="form-group">  
								<label for="review">Your review (Optional) </label>   
								<textarea class="form-control" type="text" name="review" rows="5" placeholder="Tell people about your experience: describe the place or activity, recommendations" ></textarea>
							</div> 

							<div class="form-group">
								<button type="submit" class="btn btn-default btn-lg submit_button">Submit your review</button>
							</div>	
					</div>
				</div>      
				<?php echo form_close();?>
		</div>
	</section>

	<footer class="footer-background footer-footer">
		<div class="container">
			<div class="row"><br />
				<div class="col-md-3">
					<img src="<?php echo base_url();?>assets/img/home/logo.png" alt="public-review-logo" width="132px">
				</div>
				<div id="footer-link">
					<div class="col-md-6">
	                	<p class="footer-inc"><a href="#" class="footer-color-bottom">Contact Us</a>  | <a href="#" class="footer-color-bottom">About PublicReview</a> | <a href="#" class="footer-color-bottom"> Legal </a> | <a href="#" class="footer-color-bottom">Security Policy</a> | <a href="#" class="footer-color-bottom">Privacy Policy</a></p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 col-md-offset-3">
					<p class="footer-copyright">&copy; 2015 Public Review Inc. All right reserved</p>
				</div>	
			</div>
		</div>
	</footer>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>	
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/my_script.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/star-rating.min.js"></script>	


	<script type="text/javascript">

	    $("#input-id").rating();
	    $("#input-22").rating({
	    starCaptions: {1: "Very Poor", 2: "Poor", 3: "Ok", 4: "Good", 5: "Very Good"},
	    starCaptionClasses: {1: "text-danger", 2: "text-warning", 3: "text-info", 4: "text-primary", 5: "text-success"},
	    });

	</script>	
		
</body>
</html>