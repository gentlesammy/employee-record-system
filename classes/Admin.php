<?php
    class Admin extends Db{

      //function to load all resource
        public function showAllAdmin(){
            $sql="SELECT * FROM admin";
            $stmt=$this->connection()->query($sql);

            while($row=$stmt->fetch()){
                $adminlist[]=$row;
            }
                return $adminlist;
        }//function showAllAdmin ends here

        /* &&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&*/
        //insert function or to create new data(resource) from form
        /* &&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&*/
        public function create($fields){
            //$sql="INSERT INTO admin(`admin_name`, `admin_email`, `admin_phone`)VALUES(:admin_name, :admin_email, :admin_phone);";
            //$stmt=$this->connection->prepare($sql);

            $columnvalue= implode(', ', array_keys($fields));
            $placeholdervalue = implode(", :", array_keys($fields));

            $sql="INSERT INTO admin($columnvalue)VALUES(:".$placeholdervalue.")";
            $stmt = $this->connection()->prepare($sql);

            foreach($fields as $key=>$value){
                $stmt->bindValue(':'. $key,$value);
            }
            $stmtexecute=$stmt->execute();

            if($stmtexecute){
                $reply = "staff added successfully";
                $_SESSION['success']=$reply;
                header('location:index.php');
            }else{
                 $reply = "unable to add staff, try again later";
                $_SESSION['failure']=$reply;
                header('location:create.php');
            }
        }//end of insert function

            /* &&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&*/
            //function used for getting individual staff files or resource
          /* &&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&*/
            public function read($StaffId){
                //SELECT FROM admin WHERE admin_id = :id
                $sql="SELECT * FROM admin WHERE admin_id = ?";
                $stmt = $this->connection()->prepare($sql);
                $stmt->execute([$StaffId]);
                $result=$stmt->fetch();

                return $result;
            }



             /* &&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&*/
            //function used for updating resource
          /* &&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&*/
          public function update($admin_id, $admin_name, $admin_email, $admin_phone ){

              //$sql= UPDATE admin SET name = :name,
          $sql="UPDATE admin SET admin_name = ?, admin_email = ?, admin_phone = ? WHERE admin_id =?";
          $stmt=$this->connection()->prepare($sql);
          //$stmt->bindValue(":admin_id", $admin_id, PDO::PARAM_INT);
          $stmtexec=$stmt->execute(array($admin_name, $admin_email, $admin_phone, $admin_id));

          if ($stmtexec) {
            // code...
            $reply ="record for " .$admin_name. " updated successfully";
            $_SESSION['success']=$reply;
            header('location:index.php');

          } else {
            // code...

           $reply = "unable to update employee, try again later";
           $_SESSION['failure']=$reply;
           header('location:edit.php?staffid='.$admin_id);
          }
        } //function used for updating resource


        //function for deleting resource or file
        public function delete($id){
          // "DELETE FROM admin WHERE admin_id = ?"

          $sql="DELETE FROM admin WHERE admin_id = ?";
          $stmt=$this->connection()->prepare($sql);
          $deleted=$stmt->execute([$id]);

          if ($deleted) {
            // code...
            $reply =" Employee Deleted successfully";
            $_SESSION['success']=$reply;
            header('location:index.php');

          } else {
            // code...

           $reply = "unable to delete employee, try again later";
           $_SESSION['failure']=$reply;
           header('location:index.php');
          }



        }






        }//class ends here



?>
