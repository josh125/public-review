<?php $this->load->view('includes/header');?>
<?php $this->load->view('includes/navbar');?>

	<section class="title-page">
		<div class="container">
			<div class="col-md-8">
				<div class="row"><br>
					<div class="col-md-1">
					<?php foreach($addreview as $row):?>
						<img src="<?php echo base_url();?>assets/upload/<?php echo $row->category_img;?>" alt="hotel_pic" width="50px" height="50px" class="img img-rounded">
					</div>
					<div class="col-xs-12 col-md-8">
						<p><?php echo ucwords($row->item_name);?></p>
						<p><?php echo ucwords($row->address);?>,<?php echo ucwords($row->country);?></p>  
					</div>
				</div><hr />

				<form id="add_a_review_form" method="post" action="<?php echo base_url(); ?>writeareview/addhotel_review">  
					
					<div class="form-group">   
						<label for="rate">Your overall rating of this hotel</label>  
						<input id="input-22" class="rating" data-min="0" data-max="5" data-step="1" data-size="xs" name="overall_rate" value="<?php echo set_value('rate')?>" required>
					</div>   	
					<div class="form-group">  
						<label for="review_title">Title of your review</label>   
						<input type="text" class="form-control" name="review_title" id="review_title" placeholder="Summarize your visit or highlight an interesting detail" required>
					</div>   

					<input type="hidden" name="main_category_item_id" value="<?php echo $row->main_category_item_id;?>">
					<input type="hidden" name="slug" value="<?php echo $row->slug;?>">
					
					<div class="form-group">  
						<label for="review">Your review</label>   
						<textarea class="form-control" type="text" name="review" rows="5" placeholder="Tell people about your experience: describe the place or activity, recommendations for travellers?" required></textarea>
					</div> 
					<button type="submit" class="btn btn-default btn-primary pull-right">Add A Review</button><br>

				</form>
				<?php endforeach;?>
						 
			</div>
			<div class="col-md-4"><br>
				<div class="panel panel-default">
					<div class="panel panel-heading">  
						<h4>Recent reviews for <?php echo ucwords($row->item_name);?></h4>  
					</div>
					<div class="panel-body">
						<div class="row recent_reviews_hotel">
							<?php foreach($reviews as $r):?>  
							<div class="col-xs-4 col-md-3">
								<img class="img-responsive img-thumbnail" src="<?php echo base_url();?>assets/img/add-review/gallery3.jpg" width="90px">
							</div>
							<div class="col-md-9"> 
								<p><?php echo $r->firstname;?></p>
								<p><strong><?php echo $r->title_review;?></strong></p>
							</div>  
							<div class="col-md-12">   
								<p><?php echo word_limiter($r->review, 10);?><a href="#">more</a></p>
							</div>
							<?php endforeach;?>	
						</div>   
					</div>
				</div>  
			</div>
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