<?php
$this->load->view('partials/header');
?>


<div class="container">
	<h2>Contact Form</h2>
	<div class="row">
		<div class="col-md-6">
			<form method="post" action="<?php echo base_url('index.php/contact/store');?>" id="contactForm">
				<div class="form-group">
					<label for="name">Name</label>
					<input type="text" name="name" class="form-control" required>
				</div>
				<div class="form-group">
					<label for="email">E-mail</label>
					<input type="email" name="email" class="form-control" required>
				</div>
				<div class="form-group">
					<label for="email">Phone number</label>
					<input type="text" name="phone" class="form-control" required>
				</div>
				<div class="form-group">
					<label for="email">Message</label>
					<textarea name="message" class="form-control"></textarea>
				</div>
				<div class="form-group">
					<button class="btn btn-primary">Submit</button>
				</div>
			</form>

			<div class="inform"></div>
		</div>
	</div>

</div>


<?php
$this->load->view('partials/footer');
?>
