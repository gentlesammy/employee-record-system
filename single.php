<?php 

   include('classes/Db.php');
   include('classes/Admin.php');



    if(isset($_GET['staffid'])){
        
        $StaffId  = $_GET['staffid'];
        
        $viewstaff=new Admin(); 
        $staffrecord=$viewstaff->read($StaffId);
        
        
        
    }else{
        $reply="Hey mr, what are you trying to acheieve?"; 
        $_SESSION['failure']=$reply;
        header('location:index.php');
    }
 
?>




<?php include('include/header.php');?>
  
  <div class="headpix mb-5 py-5 bg-primary">
    <h1 class="text-center mt-5">STAFF RECORD FOR <span class="text-dark"><?php echo strtoupper($staffrecord["admin_name"]);?></span></h1>
</div>
   
       <h1 class="text-center mt-5"> </h1>
       <div class="container">
            <div class="row">
                <div class="col-md-3">

                </div>
                <div class="col-md-6">
                        <?php include('include/message.php'); ?>
                </div>
            </div>
        </div>
      
          <div class="container my-5">
              <div class="row">
                  <div class="col-md-3"></div>
                  <div class="col-md-6">
                    
                    <div class="card" style="">
                          <img class="card-img-top" src="images/book.jpeg" alt="Card image cap" height="200">
                          <div class="card-body">
                            <h5 class="card-title text-center"> Staff Id <?php echo($staffrecord["admin_id"] + 2000);  ?></h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          </div>
                          <ul class="list-group list-group-flush">
                            <li class="list-group-item">Name:  &nbsp; <?php echo $staffrecord["admin_name"]; ?></li>
                            <li class="list-group-item">Email: &nbsp; <?php echo $staffrecord["admin_email"]; ?></li>
                            <li class="list-group-item">Phone: &nbsp; <?php echo $staffrecord["admin_phone"]; ?></li>
                          </ul>
                          <div class="card-body">
                            <a href="index.php" class="card-link">Back Home</a>
                            <a href="create.php" class="card-link">Add New Staff</a>
                      </div>
                    </div>
                      
                  </div>
              </div>
          </div>
    
    
<?php include('include/footer.php');?>
    
