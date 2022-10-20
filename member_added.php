<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title> Added Members</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="stylesheet" href="css.form.css">
        <link rel="stylesheet" href="css.main.css">
    </head>

    <body>
        <div id ="container">

            <div id ="content">
                <?php

                    require_once('config.php');

                        
                        if(isset($_POST['submit'])) {

                            $null_fields = array();
                            
                            //First name
                            if(empty($_POST['first_name'])) {
                                $null_fields[] = "First Name";

                            }else {
                                $firstname = trim($_POST['first_name']);
                            }

                            //Last name
                            if(empty($_POST['last_name'])) {
                                $null_fields[] = "Last Name";

                            }else {
                                $lastname = trim($_POST['last_name']);
                            }
                        

                            //Age
                            if(empty($_POST['age'])) {
                                $null_fields[] = "Age";

                            }else {
                                $age = trim($_POST['age']);
                            }
                      

                            //Gender
                            if(empty($_POST['gender'])) {
                                $null_fields[] = "Gender";

                            }else {
                                $gender = trim($_POST['gender']);
                            }
                        

                            //Relationship
                            if(empty($_POST['relationship'])) {
                                $null_fields[] = "Relationship";

                            }else {
                                $relationship = trim($_POST['relationship']);
                            }

                            if(empty($null_fields)) {

                                $null_fields = NULL;
                                $sql = "INSERT INTO familymembers VALUES('$null_variable', '$firstname', '$lastname', '$age', '$gender', '$relationship')";
                                
                                if(!mysqli-query ($connection, $sql)) {
                                    die ("Error:".mysqi_error($connection));
                                }

                                echo "Family member has been created"
                                mysqli_close($connection);

                            }
                            else {
                                
                                echo " You need to enter the following missing data: <br>";

                                foreach($null_fields as $null_field) {
                                    echo $null_field. "<br/>";
                                }
                            }
                      
                        }

                ?>

                <form action ="member_added.php" method= "post">

                    <div id ="header">
                         <h3> Add A Family Member</h3>
                    </div>

                    <div id ="btn_add">
                        <a href ="index.php"> View Members</a>
                    </div>

                    <label for = "name"> First Name </label>
                    <input type ="text" id ="first_name" name ="first_name" maxlength ="80">

                    <label for = "name"> Last Name </label>
                    <input type ="text" id ="last_name" name ="last_name" maxlength ="80">

                    <label for = "name"> Age </label>
                    <input type ="number" id ="age" name ="age" min ="1" max ="100">

                    <label for = "name"> Gender </label>
                    <select id ="gender" name ="gender">
                        <option value ="Male"> Male </option>
                        <option value ="Female"> Female </option>

                    <label for = "name"> Relationship </label>
                    <input type ="text" id ="relationship" name ="relationship" maxlength ="80">

                    <input type ="submit" value="ADD" name ="submit">

                </form>

            </div>

        </div>

    </body>
</html>