 <!-- -->

  <!-- partial -->

  <div class="main-panel">

    <div class="content-wrapper">

      <div class="row">

        <div class="col-md-12">

          <div class="tab-content tab-transparent-content">

            <div class="tab-pane fade show active" id="home-1" role="tabpanel" aria-labelledby="home-tab">

              <div class="row">

                <div class="col-lg-12 grid-margin stretch-card">

                  <div class="card">

                  <div class="card-body">

                    <h4 class="card-title">All Enquiry</h4>

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

                    <!-- <table class="table table-striped"> -->

                    <table id="order-listing" class="table table-striped">  

                      <thead>

                        <tr>

                          <th> S.No. </th>

                          <th> Name </th>

                          <th> Email </th>

                          <th> Mobile No. </th>

                          <th> Message </th>  

                          <th> Date </th>  

                        </tr>

                      </thead>

                      <tbody>

                        <?php if ($enquiry>0){ $id = 1;

                          foreach ($enquiry as $value): ?>

                            <tr>

                              <td> <?php echo $id ?></td>

                              <td><?php echo $value['name'] ?></td>

                              <td><?php echo $value['email'] ?></td>

                              <td><?php echo $value['phone'] ?></td>

                              <td><?php echo $value['message'] ?></td>

                              <td><?php echo date('d-m-Y',strtotime($value['createdate'])) ?></td>

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

