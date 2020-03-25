 <!-- -->
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
                    <h4 class="card-title">All Courses</h4>
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
                          <th> Course Name </th>
                          <th> Course Type </th>
                          <th> Image </th>
                          <th> Description </th>
                          <th> Status </th>  
                          <th> Created Date </th>  
                        </tr>
                      </thead>
                      <tbody>
                        <?php if ($allCourses>0){ $id = 1;
                          foreach ($allCourses as $value): ?>
                            <tr>
                              <td> <?php echo $id ?></td>
                              <td><?php echo $value['courseName'] ?></td>
                              <td><?php echo $value['courseType'] ?></td>
                              <td>
                                <img src="<?php echo base_url('/upload/images/course/')?><?php echo $value['images'] ?>" alt="image" style="height: 50px; width: 50px;">
                              </td>
                              <td><?php echo substr($value['courseDescription'], 0,15) ?></td>
                              <td>
                                <?php if ($value['courseStatus']!= 0) {?>
                                  <label class="badge badge-success">Active</label>
                                <?php } else {?>
                                  <label class="badge badge-danger">Dective</label>
                                <?php } ;?>
                              </td>
                              <td><?php echo date('d-m-Y',strtotime($value['created'])) ?></td>

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
                    <h4 class="card-title">Add New Course</h4>
                    <form class="forms-sample" action="<?php echo base_url('admin/course/addNew') ?>" method="post" enctype="multipart/form-data">
                      <div class="form-group">
                        <label for="Name">Name</label>
                        <input type="text" class="form-control" id="courseName" name="courseName" placeholder="Course Name" required="">
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                        <!-- <div class="form-group">
                          <label for="Type">Type</label>
                          <input type="text" class="form-control" id="courseType" name="courseType" placeholder="Course Type">
                        </div> -->
                        <div class="form-group">
                          <label for="Status">Status</label>
                          <select class="form-control" id="courseStatus" name="courseStatus" required="">
                            <option class="form-control" value="" selected="">-- Select Course Status --</option>
                            <option class="form-control" value="1">Active</option>
                            <option class="form-control" value="0">Deactive</option>
                          </select>
                        </div>
                      </div>
                        <div class="col-md-6 image_upload">
                          <div id='img_contain'>
                            <img id="blah" align='middle' src="<?php echo base_url('optimum/generic-image-file-icon-hi.png'); ?>" alt="your image" title=''/ >
                          </div>
                          <div class="input-group">
                            <div class="custom-file form-group">
                              <!-- <input type="file" name="files" value="" id="inputGroupFile01" class="form-control" aria-describedby="inputGroupFileAddon01"> -->
                              <input type="file" name="categoryImg" value="" id="inputGroupFile01" class="form-control" aria-describedby="inputGroupFileAddon01" required="">
                            </div>
                          </div>
                      </div>
                      </div><br>
                      <div class="form-group">
                        <label for="Description">Description</label>
                        <textarea name="courseDescription" id="Description" cols="50" rows="10" required=""></textarea>
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
          <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2019 <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap Dash</a>. All rights reserved.</span>
          <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="mdi mdi-heart text-danger"></i></span>
        </div>
      </div>
    </footer>
    <!-- partial -->
  </div>
  <!-- main-panel ends -->
