<div class="container my-5">
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-9 border-right">
			<?php foreach ($courses as $key => $value): ?>
				<div class="row">
					<div class="col-xs-3 col-sm-4 col-md-3">
						<img class="rounded" height="150px" width="200px" src="<?php echo base_url('/upload/images/course/')?><?php echo $value['images'] ?>" alt="course_img">
					</div>
					<div class="col-xs-9 col-sm-8 col-md-9">
						<h4><?php echo $value['courseName'] ?></h4>
						<p><?php echo $value['courseDescription'] ?></p>
						<a href="<?php echo base_url('home/lessonByType/').$value['courseId'].'/'.$type ?>" class="btn btn-success float-right">Lesson</a>
						<div class="date">
							<span>Publish : <?php echo date('d-M-Y',strtotime($value['created'])) ?></span>
						</div>
						<div class="star-rating" title="Rated 4 out of 5">
							<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
						</div>
					</div>
				</div><hr>
			<?php endforeach ?>
		</div>
		<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
            <h6 class="">Course List</h6>
            <ul class="">
              <li class="p-2"><a href="<?php echo base_url('lesson/').'junior_assistant'?>">Junior Assistant</a></li>
              <li class="p-2"><a href="<?php echo base_url('lesson/').'uppcl'?>">UPPCL</a></li>
              <li class="p-2"><a href="<?php echo base_url('lesson/').'high_court'?>">High court</a></li>
              <li class="p-2"><a href="<?php echo base_url('lesson/').'ro_aro'?>">RO/ARO</a></li>
              <li class="p-2"><a href="<?php echo base_url('lesson/').'crpf'?>">CRPF</a></li>
              <li class="p-2"><a href="<?php echo base_url('lesson/').'ssc'?>">SSC</a></li>
            </ul>
        </div>
	</div>

</div>
