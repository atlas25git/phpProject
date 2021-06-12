<!DOCTYPE html>
<html>
<?php 
include('adminpartials/session.php');
include("adminpartials/head.php")?>

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

<?php 
  include("adminpartials/header.php");
  include("adminpartials/aside.php");

?>
  <!-- Left side column. contains the logo and sidebar -->


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>

      <h1>Atlas25</h1>
    </section>

    <!-- Main content -->
   <section class="content">
      <div class="row">
        <div class="col-sm-3"></div>
       
        <div class="col-sm-6">
      
      <form role="form" action="producthandler.php" method="POST" enctype="multipart/form-data">
        <h1>Products</h1>
           
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" placeholder="Enter Product Name" name="name">
                </div>

                <div class="form-group">
                    <label for="name">Price</label>
                    <input type="text" class="form-control" id="price" placeholder="Price" name="price">
                </div>

                <div class="form-group">
                    <label for="picture">Product Image</label>
                    <input type="file" class="form-control" id="file" name="file">
                </div>

                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea id="description" class="form-control" rows="10" name="description" placeholder="Enter Description"></textarea>
                </div>
                
                <div class="form-group">
                    <label for="category">Category</label>
                    <select id="category" name="category">
                       <?php
                       include('../partials/connect.php');
                       $cat="SELECT* from categories";
                        $results=mysqli_query($connect,$cat);
                        while($row=mysqli_fetch_assoc($results)){
                          echo "<option value=".$row['id'].">".$row['name']."</option>";
                        }

                       ?>

                        <!-- <option>Shirt</option>
                        <option>Pants</option> -->
                    </select>
                </div>
         </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>

            </div>
            <div class="col-sm-3"></div>

          </div>
      </div>
   </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 <?php include("adminpartials/footer.php")?>