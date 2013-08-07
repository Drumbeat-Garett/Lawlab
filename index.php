<?php include_once('header.php'); ?>

	<div class="row form_section show-grid">
		<h1>Fixed Fee Conveyancing from $1100!</h1>
		<h4>Register now without obligation for our special online price!</h4>
		<div class="separator">
			<form id="register_form" action="inc/process.php" method="POST"> 
			<div class="row">
				<div class="col-lg-6"><input type="text" class="form-control input-lg" name="first_name" id="first_name" value="" placeholder="First Name" /></div>
				<div class="col-lg-6"><input type="text" class="form-control input-lg" name="last_name" id="last_name" value="" placeholder="Last Name" /></div>
			</div>
			<div class="row">
				<div class="col-lg-6"><input type="text" class="form-control input-lg" name="email" id="email" value="" placeholder="Email" /></div>
				<div class="col-lg-6"><input type="text" class="form-control input-lg" name="phone" id="phone" value="" placeholder="Phone Number" /></div>
			</div>
			<div class="row">
				<div class="col-lg-6"><select class="form-control input-lg" name="state" id="state">
											<option value="0">State</option>
											<option value="ACT">ACT</option>
											<option value="NSW">NSW</option>
											<option value="NT">NT</option>
											<option value="QLD">QLD</option>
											<option value="SA">SA</option>
											<option value="TAS">TAS</option>
											<option value="VIC">VIC</option>
											<option value="WA">WA</option>
									</select>
				</div>
				<div class="col-lg-6 radio_selector_section">
					<span class="txt_title">I am interested in *</span>&nbsp; &nbsp; 
					<label>
					  <input type="radio" name="interest" id="interest" value="0" checked="checked"> Buying
					</label>&nbsp; &nbsp; 
					<label>
						<input type="radio"  name="interest" id="interest" value="1"> Selling
					</label>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<input type="hidden" name="country" id="country" />
					<input type="submit" class="btn btn-lg btn-block btn-register" value="Register" />
				</div>
			</div>
			</form>
		</div>
	</div>
	<div class="row footer">
		<div class="col-lg-8"><div class="footer_info"><ul><li><a href="www.lawlab.com.au">www.lawlab.com.au</a></li><li>&copy; Lawlab Pty Ltd ABN 63 109 721 833</li></ul></div></div>
		<div class="col-lg-4"><button class="btn btn-contact btn-contact-desktop">Call Us: 1800 529 522</button><a class="btn btn-contact btn-contact-mobile" href="tel:1800 529 522">Call Us: 1800 529 522</a></div>
	</div>

<?php include_once('footer.php'); ?>