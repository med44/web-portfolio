
<!DOCTYPE html>
<html>
  <head>
    <title>Contact</title>
    <?php include 'includes/meta.php';?>	
  </head>
<body data-grid-framework="b3" data-grid-color="pink" data-grid-opacity="0.3" data-grid-zindex="10" data-grid-gutterwidth="30px" data-grid-nbcols="16">
    <div class="container">
			<div class="row">
									
<!--Start navigation include file - - - - - - - - - - - - - - - - - - - - - -  -->		
					
				<?php include 'includes/header.php';?>					

<!--End navigation include file - - - - - - - - - - - - - - - - - - - - - -  -->
										
	    <div class="row">
			<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 intro">
				<h2>Contact</h2>
			</div>	
		</div>
		
		<div class="row">
			<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12"></div>			
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
				<div id="form-messages"></div>
				<span class="instruction">Got a question or want to say hi? Send us a message.</span></br></br>				
				<form id="ajax-contact" method="post" action="mailer.php">
				    <div class="field form-group">
				        <label for="name">Name</label>
				        <input type="text" class="form-control" id="name" name="name" required>
				    </div>

				    <div class="field form-group">
				        <label for="email">Email</label>
				        <input type="email" class="form-control" id="email" name="email" required>
				    </div>

				    <div class="field form-group">
				        <label for="message">Message</label>
				        <textarea id="message" class="form-control" name="message" required></textarea>
				    </div>
						<div class="spacer"></div>
						<div class="hidden-lg hidden-md hidden-sm col-sm-3"></div>
						<div class="col-lg-4 col-md-4 col-sm-6 col-xs-6" id="buttonDiv">						
						    <button type="submit" id="myButton" data-loading-text="Sending..." class="btn btn-default btn-block" autocomplete="off">Send</button>
						</div>
				</form>				
			</div>
		</div>
			
			
	
	<div class="row">
	
<!--Start footer include file - - - - - - - - - - - - - - - - - - - - - -  -->		
					
					<?php include 'includes/footer.php';?>	
				
<!--End footer include file - - - - - - - - - - - - - - - - - - - - - -  -->						
			</div>			
		</div>			
	<script src="js/jquery-2.1.0.min.js" type="text/javascript" charset="utf-8"></script>
	<script src="js/app.js" type="text/javascript" charset="utf-8"></script>
	<script>
	  $('#myButton').on('click', function () {
	    var $btn = $(this).button('loading')
	    // business logic...
	    $btn.button('reset')
	  })
	</script>			   
</body>
</html>

<?php include 'includes/meta-footer.php';?>	



