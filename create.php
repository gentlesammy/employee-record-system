<?php 
   include('classes/Db.php');
    include('classes/Admin.php');
 
?>


<?php include('include/header.php');?>

<div class="headpix mb-5 py-5 bg-primary">
    <h1 class="text-center mt-5">CREATE EMPLOYEE RECORD</h1>
</div>


    
   <div class="container">
        <div class="row">
            <div class="col-md-3">
                
            </div>
            <div class="col-md-6">
                    <?php include('include/message.php'); ?>
                </div>
        </div>
        </div>
    
    
    <?php 
        $staffs = new Admin;
        $rows= $staffs->showAllAdmin();
    ?>
    
    <div class="container">   
        <div class="row mb-5 py-2">
            <div class="col-md-2"></div>
            <div class="col-md-8">
               <form method="post" action="process.php" id="staf_form">
                  <div class="form-row">
                    <div class="col-6">
                      <input type="text" name="staff_name" class="form-control" placeholder="Staff Name">
                    </div>
                    <div class="col">
                      <input type="text" name="staff_email" class="form-control" placeholder="Staff Email">
                    </div>
                    <div class="col">
                      <input type="text" name="staff_phone" class="form-control" placeholder="Staff Phone">
                    </div>
                  </div>
                  
                  <div class="form-row">
                      <div class="col-md-6"></div>
                      <div class="col">
                          <input name="insert_staff" type="submit" class="btn btn-primary btn-block form-control my-3" value="Insert Staff Data">
                      </div>
                  </div>
                </form>
  
            </div>

        </div>
    </div>
    
    
<?php include('include/footer.php');?>