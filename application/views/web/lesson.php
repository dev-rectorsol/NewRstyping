<div class="container my-5">
	<div class="row">
		<div class="col-md-9">
			<?php if (!empty($lesson)) { ?>
				<?php foreach ($lesson as $value){ ?>
					<div class="row">
						<div class="col-md-12">
							<h4><?php echo $value['lessonName'] ?></h4>
							<div class="float-right">
								<a href="<?php echo base_url('quiz/easy/lesson/').$value['id']; ?>" class="btn btn-success btn-sm">Easy</a>
								<a href="<?php echo base_url('quiz/medium/lesson/').$value['id']; ?>" class="btn btn-success btn-sm">Medium</a>
								<a href="<?php base_url('quiz/high/lesson/').$value['id']; ?>" class="btn btn-success btn-sm">Hard</a>
							</div>
							<div class="date">
								<span>Publish : <?php echo date('d-M-Y',strtotime($value['createdDate'])) ?></span>
							</div>
							<div class="star-rating" title="Rated 4 out of 5">
								<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
							</div>
						</div>
					</div><hr>
				<?php } } else { ?>
					<div class="row">
						<div class="col-md-12">
							<h4>Sorry Data Not Found</h4><br>
							<div class="float-right">
								<a href="<?php echo base_url('home/lessonByType/').'junior_assistant'.'/'.$type ?>" class="btn btn-success btn-sm">Junior Assistant</a>
								<a href="<?php echo base_url('home/lessonByType/').'uppcl'.'/'.$type ?>" class="btn btn-success btn-sm">UPPCL</a>
								<a href="<?php echo base_url('home/lessonByType/').'high_court'.'/'.$type ?>" class="btn btn-success btn-sm">High court</a>
								<a href="<?php echo base_url('home/lessonByType/').'ro_aro'.'/'.$type ?>" class="btn btn-success btn-sm">RO/ARO</a>
								<a href="<?php echo base_url('home/lessonByType/').'crpf'.'/'.$type ?>" class="btn btn-success btn-sm">CRPF</a>
								<a href="<?php echo base_url('home/lessonByType/').'ssc'.'/'.$type ?>" class="btn btn-success btn-sm">SSC</a>
							</div>
						</div>
					</div><hr>
			<?php } ?>
		</div>
		<div class="col-md-3">
			<h6 class="">Course List</h6>
			<ul class="">
				<li class="p-2"><a href="<?php echo base_url('lesson/').'junior_assistant' ?>">Junior Assistant</a></li>
              	<li class="p-2"><a href="<?php echo base_url('lesson/').'uppcl' ?>">UPPCL</a></li>
              	<li class="p-2"><a href="<?php echo base_url('lesson/').'high_court' ?>">High court</a></li>
              	<li class="p-2"><a href="<?php echo base_url('lesson/').'ro_aro' ?>">RO/ARO</a></li>
              	<li class="p-2"><a href="<?php echo base_url('lesson/').'crpf' ?>">CRPF</a></li>
              	<li class="p-2"><a href="<?php echo base_url('lesson/').'ssc' ?>">SSC</a></li>
			</ul>
		</div>
	</div>
</div>
