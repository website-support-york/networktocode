<?php
/*
 * Template Name: Hubspot Form Test  
 */
get_header();
?>
<div class="container mt-5 pt-5" style="display: none;">
	<form method="post" id="sampleform-3">
		<div class="row">
			<div class="col-sm-6">
				<label>First name</label>
				<input type="text" name="firstname" class="form-control" />
			</div>
			<div class="col-sm-6">
				<label>Last name</label>
				<input type="text" name="lastname" class="form-control" />
			</div>
			<div class="col-sm-12">
				<label>Email</label>
				<input type="email" name="email" class="form-control" />
			</div>
			<div class="col-sm-12">
				<input type="submit" name="submit" class="btn btn-primary" />
			</div>
		</div>
	</form>
</div>

<?php
get_footer();