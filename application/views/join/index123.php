<?php include('layout/css.php') ?>
<div class="wrapper">
	<div class="image-holder">
		<img src="<?php echo base_url('join') ?>/images/officeworker.png" alt="">
	</div>
	<form id="Mamberform" action="<?php echo base_url('media/join/addMember'); ?>" method="post" enctype="multipart/form-data">
		<div id="wizard">
			<!-- Presonal 1 -->
			<h4></h4>
			<section>
				<div class="form-row form-group">
					<div class="form-holder">
						<label for="">
							First Name *
						</label>
						<input type="text" name="first_name" class="form-control required" placeholder="First Name *">
					</div>
					<div class="form-holder">
						<label for="">
							Last Name *
						</label>
						<input type="text" name="last_name" class="form-control required" placeholder="Last Name *">
					</div>
				</div>
				<div class="form-row form-group">
					<div class="form-holder">
						<label for="">
							Phone *
						</label>
						<input type="text" class="form-control required" name="mobile" placeholder="Phone *">
					</div>
					<div class="form-holder">
						<label for="">
							Email Address *
						</label>
						<input type="email" name="email" class="form-control required" placeholder="Email Address *">
					</div>
				</div>
				<div class="form-row form-group">
					<div class="form-holder">
						<label for="">
							Password *
						</label>
						<input type="password" id="password" name="password" class="form-control required" placeholder="Password *">
					</div>
					<div class="form-holder">
						<label for="">
							Conform Password *
						</label>
						<input type="text" name="confirmpassword" class="form-control required" placeholder="Conform Password *">
					</div>
				</div>
				<div class="form-row">
					<div class="form-holder">
						<label class="file">
							<input type="file" id="file" name="profile_image" class="form-control required" aria-label="File browser example">
							<span class="file-custom"></span>
						</label>
					</div>

			</section>

			<!-- Billing 2 -->
			<h4></h4>
			<section>
				<div class="form-row">
					<label for="">
						Address *
					</label>
					<input type="text" class="form-control required" name="address" placeholder="Street address" style="margin-bottom: 20px">
					<input type="text" class="form-control" name="apartment" placeholder="Apartment, suite, unit etc. (optional)">
				</div>
				<div class="form-row">
					<label for="">
						Country *
					</label>
					<div class="form-holder">
						<select name="country" id="" class="form-control required">
							<option value="India" class="option">India</option>
							<option value="Nepal" class="option">Nepal</option>
							<option value="sri lanka" class="option">Sri Lanka</option>
						</select>
						<i class="zmdi zmdi-caret-down"></i>
					</div>
				</div>
				<div class="form-row">
					<label for="">
						Town / City *
					</label>
					<input type="text" name="city" class="form-control required" name="Town / City *">
				</div>
				<div class="form-row">
					<label for="">
						Postcode / Zip *
					</label>
					<input type="text" name="postcode" class="form-control required" placeholder="Postcode / Zip *">
				</div>
			</section>

			<!-- Education 3 -->
			<h4></h4>
			<section>
				<div class="form-row form-group">
					<div class="form-holder">
						<label for="">
							College Name *
						</label>
						<input type="text" class="form-control required" name="college-name" placeholder="College Name *">
					</div>
					<div class="form-holder">
						<label for="">
							Enrollment No *
						</label>
						<input type="text" class="form-control required" name="enrollment_no" placeholder="Enrollment No *">
					</div>
				</div>
				<div class="form-row form-group">
					<div class="form-holder">
						<label for="">
							Session *
						</label>
						<input type="text" class="form-control required" name="edu-session" placeholder="Session *">
					</div>
					<div class="form-holder">
						<label for="">
							College City *
						</label>
						<input type="text" class="form-control required" name="edu-college-city" placeholder="College City *">
					</div>
				</div>
				<div class="form-row form-group">
					<div class="checkbox">
						<label>
							<input type="radio" name="join_amount" value="1" class="form-control required"> ₹200 for 1 Year
							<span class="checkmark"></span>
						</label>
					</div>
				</div>
				<div class="form-row form-group">
					<div class="checkbox">
						<label>
							<input type="radio" name="join_amount" value="2" class="form-control required"> ₹500 for 3 Year
							<span class="checkmark"></span>
						</label>
					</div>
				</div>
				<div class="form-row form-group">
					<div class="checkbox">
							<input type="hidden" id="join_amount" name="join_amount" class="form-control required error">
					</div>
				</div>
			</section>
			<!-- Education 4 -->
			<h4></h4>
			<section>
				<div class="product">
					<div class="item">
						<div class="left">
							<div class="purchase">
								<h6>
									<a href="#" id="label"></a>
								</h6>
							</div>
						</div>
						<span class="price" id="price"></span>
					</div>
				</div>
				<div class="checkout">
					<p class="shipping">
						<span class="heading">Shipping</span>
						there are no shipping methods available. please double check your address, or contact us if you need any help.
					</p>
					<div class="total">
						<span class="heading">Subtotal:</span>
						<span class="total-price" id="subtotal"></span>
					</div>
				</div>
				<input type="hidden" id="get_csrf_hash" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
			</section>

		</div>
	</form>
</div>

<?php include('layout/footer.php') ?>
