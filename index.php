<?php
   session_start();
   include('classes/Db.php');
    include('classes/Admin.php');


    if (isset($_GET['delete'])) {
      // code...
      $id= $_GET['delete'];

      $delemp= new Admin();
      $delemp->delete($id);
    }
?>
    <?php include('include/header.php');?>

    <!-- WELCOMING SECTION GOES HERE -->

    <section class="welcome py-5">

        <div class="container text-center">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <div class="jumbotron align-middle mt-3">
                        <h1 class="display-4 text-primary ">ER SYSTEM</h1>
                        <p class="lead">Management of your employee record made easier... </p>
                        <hr class="my-4">
                        <p>Add staff, remove staff, sort staff by criteria, easily locate a staff, edit staff details... we make your work easier</p>
                        <p class="lead">

                            <a class="btn btn-lg btn-primary" href="how.php">How To Use</a>

                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <div class="headpix mb-2 py-5 bg-primary">
        <h3 class="text-center mt-5">EMPLOYEE RECORD</h3>
    </div>






    <div class="container mb-5 ">
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

    <div class="container bg-gradient-primary bg-gray py-5 text-dark" id="stafftab">
        <div class="row text-center">

            <div class="col-md-1"></div>
            <div class="col-md-10">

                <table id="stafftable" class="table table-striped table-hover table-primary table-lg table-responsive">
                    <thead>
                        <tr class="bg-dark text-white">
                            <th>SN</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Identity </th>
                            <th>View</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>


                    <tbody>
                        <?php $sn=1; ?>

                        <?php foreach($rows as $row):?>

                        <tr>
                            <td>
                                <?php echo $sn++; ?>
                            </td>
                            <td>
                                <?php echo $row['admin_name']; ?>
                            </td>
                            <td>
                                <?php echo $row['admin_email']; ?>
                            </td>
                            <td>
                                <?php echo $row['admin_phone']; ?>
                            </td>
                             <td>
                                <?php echo ($row['admin_id']+2000); ?>
                            </td>
                            <td><a href="single.php?staffid=<?php echo $row['admin_id'];?>" class="btn btn-sm btn-info">View <span><i class="fas fa-eye "></i></span></a></td>
                            <td><a href="edit.php?staffid=<?php echo $row['admin_id'];?>" class="btn btn-sm btn-primary">Edit <span><i class="fas fa-pen "></i></span></a></td>
                            <td><a href="index.php?delete=<?php echo $row['admin_id'];?>" onclick="return confirm('Are you sure you want to delete employee');" class="btn btn-sm btn-danger">Delete<span><i class="fas fa-trash-alt "></i></span></a></td>


                        </tr>

                        <?php endforeach; ?>

                    </tbody>



                </table>


            </div>
        </div>

    </div>

 <?php include('include/footer.php');?>
