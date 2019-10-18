<?php include('../Admin/db/conection.php');?>

<?php include('../Admin/components/head.php'); ?>

<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
 
 <?php include('../Admin/components/LeftSide.php');?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Nhân Viên</h1>
          </div><!-- /.col -->
          
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
 <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
             
                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0" style="height: 300px;">
                <table class="table table-head-fixed">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Name</th>
                      <th>Birth</th>
                      <th>Gender</th>
                      <th>Email</th>
                      <th>Position</th>
                      <th>Address</th>
                      <th>Delete</th>
                      <th>Update</th>
                      <th>Insert</th>
                    </tr>
                  </thead>
                  <tbody>
              <?php include('../Admin/controllers/SelectEmployee.php'); ?>
              <?php foreach($statement as $row): ?>
                    <tr>
                      <td><?php echo $row['id']?></td>
                      <td><?php echo $row['username']?></td>
                       <td><?php echo $row['birth']?></td>
                      <td><?php echo $row['gender']?></td>
                      <td><?php echo $row['email']?></td>
                      <td><?php echo $row['position']?></td>
                      <td><?php echo $row['address']?></td>
                      <td><a href="/controllers/DeleteEmployee.php?id=<?php echo $row['id']?>"><i class="fas fa-minus"></i></a></td>
                      <td><a href="/update.php?id=<?php echo $row['id']?>"><i class="fas fa-tools"></i></a></td>
                      <td><a href="/insert.php"><i class="fas fa-plus"></i></a></td>
                    </tr>
             <?php endforeach;?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php  include('../Admin/components/footer.php'); ?>