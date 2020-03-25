<?php include('layout/css.php') ?>
<div class="wrapper">
	<div class="image-holder">
		<img src="<?php echo base_url('join') ?>/images/officeworker.png" alt="">
	</div>
	<form id="Mamberform" action="<?php echo base_url('media/join/addMember1'); ?>" method="post" enctype="multipart/form-data">
		<div id="wizard">
			<!-- Education 3 -->
			<h4></h4>
			<section>

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
							<input type="hidden" name="join_amount" class="form-control required error">
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
