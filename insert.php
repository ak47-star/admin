<?php include('../Admin/components/head.php'); ?>

<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

 <?php include('../Admin/components/LeftSide.php')?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
       
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
<section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Thêm Nhân Viên</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="/controllers/InsertEmployee.php" method="POST">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="username" placeholder="Enter name">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Birth</label>
                     <input class="form-control" type="date" name="birth">
                  </div>


                                  
                 <div class="col-sm-12">
                      <!-- radio -->
                      <div class="form-group">
                        <label for="exampleInputEmail1">Gender</label>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="gender" value="male" checked="">
                          <label class="form-check-label">Male</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="gender" value="fale" checked="">
                          <label class="form-check-label">Fale</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="gender" value="other" checked="">
                          <label class="form-check-label">Other</label>
                        </div>
                      </div>
                    </div>

                   <div class="col-sm-12">
                    <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" name="email" placeholder="Enter email">
                  </div>
                  </div>

                   <div class="col-sm-12">
                    <div class="form-group">
                    <label for="exampleInputEmail1">Position</label>
                    <input type="text" class="form-control" name="position" id="exampleInputEmail1" placeholder="Enter position">
                  </div>
                  </div>

                   <div class="col-sm-12">
                    <div class="form-group">
                    <label for="exampleInputEmail1">Address</label>
                    <input type="text" class="form-control" name="address" id="exampleInputEmail1" placeholder="Enter address">
                  </div>
                  </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
            <!-- /.card -->
          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->

  <!-- /.content-wrapper -->
 <?php include('../Admin/components/footer.php')?>