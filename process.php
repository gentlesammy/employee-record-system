<?php
    session_start();
    include('classes/Db.php');
    include('classes/Admin.php');

if(isset($_POST['insert_staff'])){

    $admin_name=$_POST['staff_name'];
    $admin_email=$_POST['staff_email'];
    $admin_phone=$_POST['staff_phone'];


    if(empty($admin_name) || empty($admin_email) || empty($admin_phone)){
        $reply="all fields are required";
        echo $reply;

                $reply="all fields are required";
                $_SESSION['failure']=$reply;
                header('location:create.php');
    }else{

        $fields=[
            'admin_name'    =>  $admin_name,
            'admin_email'   =>  $admin_email,
            'admin_phone'   =>  $admin_phone
        ];

        $newstaff= new Admin();
        $newstaff->create($fields);
    }
}



if(isset($_POST['update_staff'])){
    $admin_id   = $_POST['staffid'];
    $admin_name=$_POST['staff_name'];
    $admin_email=$_POST['staff_email'];
    $admin_phone=$_POST['staff_phone'];


      if(empty($admin_name) || empty($admin_email) || empty($admin_phone)){
        $reply="all fields are required";
        echo $reply;

                $reply="all fields are required";
                $_SESSION['failure']=$reply;
                header('location:create.php');
    }


        else{
            $newupdatetaff= new Admin();
            $newupdatetaff->update($admin_id, $admin_name, $admin_email, $admin_phone);
        }





}


?>
