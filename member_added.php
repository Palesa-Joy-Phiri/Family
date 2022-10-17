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

                        //First name
                        if(isset($_POST{'submit'})) {
                            $null_fields[] = array():

                        }else {
                            $firstname = trim($_POST['first_name'])
                        }

                        //Last name
                        if(isset($_POST{'submit'})) {
                            $null_fields[] = array():

                        }else {
                            $ = trim($_POST[''])
                        }

                        //Age
                        if(isset($_POST{'submit'})) {
                            $null_fields[] = array():

                        }else {
                            $ = trim($_POST[''])
                        }

                        //Gender
                        if(isset($_POST{'submit'})) {
                            $null_fields[] = array():

                        }else {
                            $ = trim($_POST[''])
                        }

                        //Relationship
                        if(isset($_POST{'submit'})) {
                            $null_fields[] = array():

                        }else {
                            $ = trim($_POST[''])
                        }






                ?>

            </div>

        </div>

    </body>
</html>