
<!-- partial -->
<div class="main-panel">
  <div class="content-wrapper">
    <div class="row">
      <div class="col-md-12">
        <div class="d-sm-flex justify-content-between align-items-center transaparent-tab-border {">
          <ul class="nav nav-tabs tab-transparent" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home-1" role="tab" aria-selected="true">List</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="list-tab" data-toggle="tab" href="#business-1" role="tab" aria-selected="false">Add New</a>
            </li>
          </ul>
        </div>
        <div class="tab-content tab-transparent-content">
          <div class="tab-pane fade show active" id="home-1" role="tabpanel" aria-labelledby="home-tab">
            <div class="row">
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Lesson Table</h4>
                    <!-- <p class="card-description"> Add class <code>.table-striped</code> -->
                    <!-- </p> -->
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
                    <table class="table table-striped dataTable">
                      <thead>
                        <tr>
                          <th> S.No. </th>
                          <th> Lesson Name </th>
                          <th> Course Name </th>
                          <th> Lesson Type </th>
                          <th> Created Date </th>
                          <th> Action </th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php if ($lesson>0){ $id = 1;
                        foreach ($lesson as $value): ?>
                        <tr>
                          <td> <?php echo $id ?></td>
                          <td><?php echo $value['lessonName'] ?></td>
                          <td><?php echo $value['courseName'] ?></td>
                          <td><?php echo $value['type'] ?></td>
                          <td><?php echo date('d-m-Y',strtotime($value['createdDate'])) ?></td>
                          <td>
                            <a href="javascript:void(0)" onclick="edit(<?php echo $value['lessonId'];?>)" class="btn btn-outline-primary">Edit</a>
                            <a  href="javascript:void(0)" onclick="delete_detail(<?php echo $value['lessonId'];?>)" class="btn btn-outline-danger">Delete</a>
                          </td>
                        </tr>
                        <?php $id++; endforeach;
                        } ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="tab-pane fade show" id="business-1" role="tabpanel" aria-labelledby="list-tab">
            <div class="row">
              <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Add New Lesson</h4>
                    <form class="forms-sample" action="<?php echo base_url('admin/lesson/addNew') ?>" method="post" enctype="multipart/form-data">
                      <div class="form-group">
                        <label for="lessonName">Name</label>
                        <input type="text" class="form-control" id="lessonName" name="lessonName" placeholder="Lesson Name" required="">
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="course">Courses</label>
                            <select class="form-control" id="course" name="courseId" required="">
                              <option value="">--Select Courses --</option>
                              <?php foreach ($allCourses as $value): ?>
                              <option value="<?php echo $value['courseId'] ?>"><?php echo $value['courseName'] ?></option>
                              <?php endforeach; ?>
                            </select>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="type">Type</label>
                            <select class="form-control" id="type" name="type" required="">
                              <option value="">-- Select Lesson Type --</option>
                              <option value="english">English</option>
                              <option value="hindi">Hindi</option>
                            </select>
                          </div>
                        </div>
                        <!-- <div class="col-md-6 image_upload">
                          <div id='img_contain'>
                            <img id="blah" align='middle' src="<?php echo base_url('optimum/generic-image-file-icon-hi.png'); ?>" alt="your image" title=''/>
                          </div>
                          <div class="input-group">
                            <div class="custom-file form-group">
                              <input type="file" name="lessonImage" value="" id="inputGroupFile01" class="form-control" aria-describedby="inputGroupFileAddon01">
                            </div>
                          </div>
                        </div> -->
                      </div><br>
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
                      <input type="hidden" id="get_csrf_hash" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
                      <button type="submit" class="btn btn-primary mr-2">Submit</button>
                      <button class="btn btn-light">Cancel</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
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
</script>