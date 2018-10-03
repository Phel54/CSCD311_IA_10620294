<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Phelim">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <title>Student Record</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="view.css" rel="stylesheet">
</head>

<body>
<div >
    <div class="row" id="nav1">
        <div class="col-3">
            <H3 id="h3">STUDENT RECORDS</H3>
        </div>
        <div class="col-2">

        </div>
        <div class="col-5">
        <form>
            <p> </p>

        </form>

        </div>
        <div class= "col-1">
        <form method="post" action="view.php">


            </form>
        </div>

        <div class="col-1">
            <button type="submit" id="h6" onclick="window.location.href='index.php'">Sign Out</button><br>
        </div>



        </div>
    <div class="row" >
        <div class="col-3 tab " id="sidebar">
            <p>  </p>


                <button type="submit" onclick="window.location.href='view.php'" class="btnnn form-control" formtarget="_blank">VIEW STUDENT RECORDS</button><br><br>
                <button type="submit"  onclick="window.location.href='add.php'"  class="btnnn form-control" formtarget="_blank">ADD STUDENT</button><br><br>
                <button type="submit" onclick="" class="btnnn form-control" formtarget="_blank">DELETE STUDENT RECORD</button>


        </div>
        <div class="col-9" id="content">
            <p> </p>
            <h2>STUDENT RECORD</h2><hr>
            <form method="post" action="view.php">
            <button type="submit" id="all " name="all" style="border-color:black; ">View All</button><br><br><br>
             <input  class="form-control" type="text" placeholder="Search" aria-label="search" name="set" id="set"><br>
             <button type="submit" id="sear" name="sear" onclick="'" style="border-color:black;">Search</button>
            </form>



             <?php
                            session_start();
                            $user="root";
                            $pass="";
                            $db = "student";

                            $db= new mysqli('localhost',$user, $pass, $db) or die("Unable to connect");

                            if(isset($_POST["all"]))
                            {

                                  $query = "SELECT * FROM register";
                                                    $result = mysqli_query($db,$query);

                                                    echo "<table id='tbl2' style='border:3px solid black;' >";
                                                    echo "<th><tr><td>First Name</td><td>Last Name</td><td>Student ID</td><td>Email</td><td>Gender</td><td>Hall of Residence </td><td>Department</td> </tr></th>";
                                                    while($row = mysqli_fetch_array($result))
                                                    {
                                                        echo "<tr><td>" . $row['firstname'] . "</td><td>" . $row['lastname'] . "</td><td>" . $row['student_id']. "</td><td>" . $row['email_1'] ."</td><td>" . $row['gender']. "</td><td>" . $row['hall']."</td><td>" . $row['department'] . "</td></tr>";
                                                    }

                                                    echo "</table>";
                            }

                            elseif(isset($_POST["search"]))
                                            {
                                                $set =mysqli_real_escape_string($db,$_POST['set']);
                                                $query = "SELECT * FROM students WHERE student_id='$set'";
                                                $result = mysqli_query($db,$query);

                                                echo "<table>";
                                                echo "<th><tr><td>First Name</td><td>Last Name</td><td>Student ID</td><td>Email</td><td>Gender</td><td>Hall of Residences </td><td>Department</td></tr></th>";
                                                while($row = mysqli_fetch_array($result))
                                                {
                                                    echo "<tr><td>" . $row['firstname'] . "</td><td>" . $row['lastname'] . "</td><td>" . $row['student_id']. "</td><td>" . $row['email_1'] ."</td><td>" . $row['gender']. "</td><td>" . $row['hall']."</td><td>" . $row['department'] . "</td></tr>";
                                                }
                                                echo "</table>";

                                            }


             ?>
        </div>
    </div>
</div>

</body>
</html>