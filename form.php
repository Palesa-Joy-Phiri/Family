<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title> Add New Member</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/form.css">
    </head>

    <body>
        <div id ="container">
            <div id ="content">

            </div>

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
    
    </body>
</html>