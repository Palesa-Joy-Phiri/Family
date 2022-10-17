<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title> Family Member Database</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/main.css">
    </head>

    <body>

        <div id="container">
            <h2> My family</h2>
            <div id="btn_add">
                <a href="#"> ADD </a>
            </div>
        </div>

        <div id="content">
 
            <!-- Start PHP to connect config file-->
            <?php
                require_once(config.php); #calling the config file and passing the path as a parameter now we can access the database in that file

                $sql = "SELECT MemberID, FirstName, LastName, Age, Gender, Relationship FROM FamilyMembers";
                $response = @mysqli_query($connection, $sql);

                if($response) {

                    #tr stands for table row and th means table heading
                    echo '<table>
                    
                        <tr> 
                            <th> Member ID </th>
                            <th> First Name</th>
                            <th> Last Name</th>
                            <th> Age </th>
                            <th> Gender </th>
                            <th> Relationship </th>
                            
                        </tr>';

                        while ($row = mysqli_fetch_array($response)) {
                            echo '

                                <tr>

                                <td> '.$row ['MemberID'].' </td>
                                <td> '.$row ['FirstName'].' </td>
                                <td> '.$row ['LastName'].' </td>
                                <td> '.$row ['Age'].' </td>
                                <td> '.$row ['Gender'].' </td>
                                <td> '.$row ['Relationship'].' </td>

                                </tr>';

                        }
                    
                        echo '</table>';
                }

                else {
                    echo "Could not get a response from database".mysqli_error(connection);
                }

                mysqli_close($connection);


            ?>

        </div>

    </body>
</html>