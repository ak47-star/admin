<?php include('../Admin/components/head.php') ?>

<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
 <?php 
  include('../Admin/db/conection.php');
  $id = $_GET['id'];
  $statement = $pdo->prepare(" select * FROM users WHERE id ="."{$id}");
  $statement->execute();
  $employee = $statement->fetch();
 ?>

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
                <h3 class="card-title"> Sửa Nhân Viên</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" method="POST" action="controllers/UpdateEmployee.php?id= <?php echo $_GET['id'];?>">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" name="name" class="form-control" value="<?php echo $employee['username'] ?>" id="exampleInputEmail1" placeholder="Enter name">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Birth</label>
                     <input class="form-control" name="birth" value="<?php echo $employee['birth']?> " type="date" name="birth">
                  </div>


                                  
                 <div class="col-sm-12">
                      <!-- radio -->
                      <div class="form-group">
                        <label for="exampleInputEmail1">Gender</label>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="gender" checked="">
                          <label class="form-check-label">Male</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="gender" checked="">
                          <label class="form-check-label">Fale</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="gender" checked="">
                          <label class="form-check-label">Other</label>
                        </div>
                      </div>
                    </div>

                   <div class="col-sm-12">
                    <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" value="<?php echo $employee['email']  ?>" placeholder="Enter email">
                  </div>
                  </div>

                   <div class="col-sm-12">
                    <div class="form-group">
                    <label for="exampleInputEmail1">Position</label>
                    <input type="text" name="position" class="form-control" id="exampleInputEmail1" value="<?php echo $employee['position']  ?>" placeholder="Enter position">
                  </div>
                  </div>

                   <div class="col-sm-12">
                    <div class="form-group">
                    <label for="exampleInputEmail1">Address</label>
                    <input type="text" name="address" class="form-control" id="exampleInputEmail1" placeholder="Enter address" value="<?php echo $employee['address']  ?>" >
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
  <?php  include('../Admin/components/footer.php'); ?>