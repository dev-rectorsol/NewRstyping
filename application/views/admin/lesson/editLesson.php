<!-- partial -->
<div class="main-panel">
  <div class="content-wrapper">
    <div class="row">
      <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Edit Lesson</h4>
            <?php
            if($this->session->flashdata('success'))
            {
            ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
              <?php echo $this->session->flashdata('success'); ?>
              <button type="button" class="close" data-dismiss="alert" aria-lebel="Close">
              <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <?php
            }
            ?>
            <?php
            if($this->session->flashdata('error'))
            {
            ?>
            <div class="alert alert-danger alert-dismissible fade show" alert="alert">
              <?php echo $this->session->flashdata('error'); ?>
              <button type="button" class="close" data-dismiss="alert" aria-lebel="Close">
              <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <?php
            }
            ?>
            <form class="forms-sample" action="<?php echo base_url('admin/lesson/lessonEdit/').$lessonData['id'] ?>" method="post" enctype="multipart/form-data">
              <div class="form-group">
                <label for="lessonName">Name</label>
                <input type="text" class="form-control" id="lessonName" name="lessonName" placeholder="Lesson Name" value="<?php echo $lessonData['lessonName'] ?>">
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="course">Courses</label>
                    <select class="form-control" id="course" name="courseId">
                      <option value="">--Select Courses --</option>
                      <?php foreach ($allCourses as $value): ?>
                      <option <?php if ($lessonData['courseId']==$value['courseId']) {
                      ?>selected<?php } ?> value="<?php echo $value['courseId'] ?>"><?php echo $value['courseName'] ?></option>
                      <?php endforeach; ?>
                    </select>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="type">Type</label>
                    <select class="form-control" id="type" name="type">
                      <option value="">-- Select Lesson Type --</option>
                      <option <?php if ($lessonData['type']=="english") {
                      ?>selected<?php } ?> value="english">English</option>
                      <option <?php if($lessonData['type']=="hindi"){?> selected <?php } ?> value="hindi">Hindi</option>
                    </select>
                  </div>
                </div>
              </div><br>
              <?php foreach ($lessonModeData as $modeData): ?>
              <div class="row">
                <div class="col-md-3">
                  <div class="form-group">
                    <label for="mode">Mode</label>
                    <select class="form-control" id="mode" name="modeId[]">
                      <option value="">--Select Mode --</option>
                      <?php foreach ($mode as $value): ?>
                      <option <?php if ($modeData['modeId']==$value['id']) {
                      ?>selected<?php } ?> value="<?php echo $value['id']?>"><?php echo $value['mode'] ?></option>
                      <?php endforeach; ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="time" >Time</label>
                    <input type="text" name="time[]" id="time" value="<?php echo $modeData['time'] ?>" placeholder="Time in Minute" class="form-control">
                  </div>
                </div>
                <div class="col-md-9">
                  <div class="form-group">
                    <label for="Description">Question</label>
                    <textarea id="Description" name="lessonDesc[]" cols="60" rows="10"><?php echo $modeData['lessonDesc'] ?></textarea>
                  </div>
                </div>
              </div>
              <div>
                <a href="javascript:void(0)" onclick="delete_Mode(<?php echo $modeData['id']?>,<?php echo $lessonData['id'] ?>)" class="btn btn-outline-danger text-dark">Delete</a>
              </div><br>
              <input type="hidden" name="lessonModeId[]" value="<?php echo $modeData['id'] ?>">
              <?php endforeach ?>
              <input type="hidden" id="get_csrf_hash" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
              <button type="submit" class="btn btn-primary mr-2">Update</button>
            </form> <hr><br>

            <!-- add more lesson mode -->
            <form action="<?php echo base_url('admin/lesson/addMoreLessonMode')?>" method="post">
              <div id="repeater">
                <div class="row">
                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="mode">Mode</label>
                      <select class="form-control" id="mode" name="modeId[]" required="">
                        <option value="">--Select Mode --</option>
                        <?php foreach ($mode as $value): ?>
                        <option value="<?php echo $value['id']?>"><?php echo $value['mode'] ?></option>
                        <?php endforeach; ?>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="time" >Time</label>
                      <input type="text" name="time[]" id="time" value="" placeholder="Time in Minute" class="form-control" required="">
                    </div>
                  </div>
                  <div class="col-md-9">
                    <div class="form-group">
                      <label for="Description">Question</label>
                      <textarea id="Description" name="lessonDesc[]" cols="60" rows="10" required=""></textarea>
                    </div>
                  </div>
                </div>
                <div class=" container" id="repeaternew"></div>
                <div class="row">
                  <div class="col-md-12">
                    <button  type="button" class="btn btn-info btn-sm icon-btn ml-2 mb-2 float-right" id="addLesson"><i class="mdi mdi-plus"></i>Add More
                    </button>
                  </div>
                </div>
              </div>
              <input type="hidden" name="lessonID" value="<?php echo $lessonData['id'] ?>">
              <input type="hidden" id="get_csrf_hash" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
              <button type="submit" class="btn btn-primary mr-2">Add</button>
            </form>
            <!-- End add more lesson mode -->
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- content-wrapper ends -->
  <!-- partial:partials/_footer.html -->
  <footer class="footer">
    <div class="footer-inner-wraper">
      <div class="d-sm-flex justify-content-center justify-content-sm-between">
        <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2020 <a href="https://www.bootstrapdash.com/" target="_blank">Rstyping.com</a>. All rights reserved.</span>
        <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Rectorsol.com <i class="mdi mdi-heart text-danger"></i></span>
      </div>
    </div>
  </footer>
 
  <!-- partial -->
</div>
<!-- main-panel ends -->
<script>
function edit(id)
{
window.location="<?php echo base_url()?>admin/lesson/lessonEdit/"+id;
}
function delete_detail(id)
{
var del = confirm("Do you want to Delete");
if (del== true)
{
window.location="<?php echo base_url()?>admin/lesson/delete/"+id;
}
}
function delete_Mode(id,lessonID)
{
var del = confirm("Do you want to Delete");
if (del== true)
{
window.location="<?php echo base_url()?>admin/lesson/deleteMode/"+id+"/"+lessonID;
}
}
</script>