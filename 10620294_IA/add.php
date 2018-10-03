<?php

session_start();
$user="root";
$pass="";
$db = "student";

$db= new mysqli('localhost',$user, $pass, $db) or die("Unable to connect");

if(isset($_POST['SUBMIT']))
{
     $firstname =mysqli_real_escape_string($db, $_POST['firstname']);
       $lastname = mysqli_real_escape_string($db,$_POST['lastname']);
       $othername = mysqli_real_escape_string($db,$_POST['othername']);
       $gender = mysqli_real_escape_string($db, $_POST['gender']);
       $disability = mysqli_real_escape_string($db,$_POST['disability']);
       $dob = mysqli_real_escape_string($db, $_POST['dob']);
       $student_id = mysqli_real_escape_string($db, $_POST['student_id']);
       $hall = mysqli_real_escape_string($db, $_POST['hall']);
       $college = mysqli_real_escape_string($db,$_POST['college']);
       $department = mysqli_real_escape_string($db,$_POST['department']);
       $phone_number = mysqli_real_escape_string($db, $_POST['phone_number']);
       $email_1 = mysqli_real_escape_string($db, $_POST['email_1']);
       $height = mysqli_real_escape_string($db,$_POST['height']);
       $weight = mysqli_real_escape_string($db,$_POST['weight']);
       $parent = mysqli_real_escape_string($db, $_POST['parent']);
       $house = mysqli_real_escape_string($db,$_POST['house']);
       $contact = mysqli_real_escape_string($db,$_POST['contact']);
       $email_2= mysqli_real_escape_string($db,$_POST['email_2']);

       $sql = "INSERT Into register (firstname, lastname, othername, gender, disability, dob, student_id, hall, college, department, phone_number, email_1, height, weight, parent, house, contact, email_2) VALUES ('$firstname', '$lastname', '$othername', '$gender', '$disability',  '$dob', '$student_id', '$hall', '$college', '$department', '$phone_number', '$email_1', '$height', '$weight', '$parent', '$house', '$contact', '$email_2')";

        mysqli_query($db,$sql);
                $_SESSION['message'] = "Student Successfully Added";
                header("location: view.php");
            }



?>















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

        <div class="col-3">

        </div>
        <div class="col-4">
            <p> </p>

        </div>

        <div class="col-2">
            <button type="submit" id="h6" onclick="window.location.href='index.php'">Sign Out</button><br>
        </div>



    </div>
    <div class="row" >
        <div class="col-3 tab" id="sidebar">
            <p>  </p>



            <button type="submit" onclick="window.location.href='view.php'" class="btnnn form-control">VIEW STUDENT RECORDS</button><br><br>
            <button type="submit"  onclick="window.location.href='add.php'"  class="btnnn form-control">ADD STUDENT</button><br><br>
            <button type="submit" onclick="" class="btnnn form-control">DELETE STUDENT RECORD</button>


        </div>
        <div class="col-9" id="content">
            <p> </p>
            <h2>ADD STUDENT</h2><hr><BR>
            <form method="post" action=" " >
                <table CELLSPACING="20px" cellpadding="10px" id="tbl" >
                    <tr>
                        <td>
                            <label>FIRSTNAME :</label>

                        </td>
                        <td>
                            <INPUT type="text" placeholder="FIRSTNAME" name="firstname" required class="form-control">
                        </td>
                        <TD>
                            <label>LASTNAME :</label>

                        </TD>
                        <td>
                            <input type="text" placeholder="LASTNAME" name="lastname" required class="form-control">
                        </td>

                    </tr>
                    <tr>
                        <td>
                            <label>OTHERNAMES  :</label>

                        </td>
                        <td>
                            <input type="text" placeholder="OTHERNAMES" name="othername" required class="form-control">
                        </td>
                        <TD>
                            <LABEL>GENDER   :</LABEL>

                        </TD>
                        <td>
                            <input type="radio" name="gender" value="male"> Male
                            <input type="radio" name="gender" value="female"> Female
                        </td>

                    </tr>
                    <tr>
                        <td>
                            <LABEL>DISABILITY :</LABEL>

                        </td>
                        <td>
                            <SELECT NAME="DISABILITY" class="form-control">
                                <OPTION>YES</OPTION>
                                <OPTION>NO</OPTION>

                            </SELECT>
                        </td>
                        <td>
                            <label>DATE OF BIRTH :</label>
                        </td>
                        <td>
                            <INPUT TYPE="date" placeholder="DATE OF BIRTH" name="dob" required class="form-control">
                        </td>
                    </tr>
                    <tr>
                        <TD>
                            <label>STUDENT ID :</label>
                        </TD>
                        <TD>
                            <INPUT TYPE="text" PLACEHOLDER="STUDENT ID" name="student_id" required class="form-control">
                        </TD>
                        <td>
                            <LABEL>HALL OF RESIDENCE :</LABEL>
                        </td>
                        <td>
                            <INPUT TYPE="TEXT" placeholder="HALL" name="hall" REQUIRED class="form-control">
                        </td>
                    </tr>
                    <tr>
                        <TD>
                            <label>COLLEGE :</label>
                        </TD>
                        <TD>
                            <INPUT TYPE="text" PLACEHOLDER="COLLEGE" name="college" required class="form-control">
                        </TD>
                        <td>
                            <LABEL>DEPARTMENT :</LABEL>
                        </td>
                        <td>
                            <INPUT TYPE="TEXT" placeholder="DEPARMENT" name="department" REQUIRED class="form-control">
                        </td>
                    </tr>
                    <tr>
                        <TD>
                            <label>PHONE NUMBER :</label>
                        </TD>
                        <TD>
                            <INPUT TYPE="text" PLACEHOLDER="PHONE NUMBER" name="phone_number" required class="form-control">
                        </TD>
                        <td>
                            <LABEL>EMAIL ADDRESS :</LABEL>
                        </td>
                        <td>
                            <INPUT TYPE="TEXT" placeholder="EMAIL ADDRESS" name="email_1" REQUIRED class="form-control">
                        </td>
                    </tr>
                    <tr>
                        <TD>
                            <label>HEIGHT :</label>
                        </TD>
                        <TD>
                            <INPUT TYPE="text" PLACEHOLDER="HEIGHT" name="height" required class="form-control">
                        </TD>
                        <td>
                            <LABEL>WEIGHT :</LABEL>
                        </td>
                        <td>
                            <INPUT TYPE="TEXT" placeholder="WEIGHT" name="weight" REQUIRED class="form-control">
                        </td>
                    </tr>
                    <tr>
                        <TD>
                            <label>PARENT/GUARDIAN NAME :</label>
                        </TD>
                        <TD>
                            <INPUT TYPE="text" PLACEHOLDER="PARENT/GUARDIAN" name="parent" required class="form-control">
                        </TD>
                        <td>
                            <LABEL>HOUSE ADDRESS :</LABEL>
                        </td>
                        <td>
                            <INPUT TYPE="TEXT" placeholder="HOUSE" name="house" REQUIRED class="form-control">
                        </td>
                    </tr>
                    <tr>
                        <TD>
                            <label>PHONE NUMBER OF GUARDIAN :</label>
                        </TD>
                        <TD>
                            <INPUT TYPE="text" PLACEHOLDER="CONTACT" name="contact" required class="form-control">
                        </TD>
                        <td>
                            <LABEL>EMAIL ADDRESS :</LABEL>
                        </td>
                        <td>
                            <INPUT TYPE="TEXT" placeholder="EMAIL ADDRESS" name="email_2" REQUIRED class="form-control">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="">CLICK HERE TO SUBMIT :</label>
                        </td>
                        <TD>
                            <button type="submit"  class="sub form-control" id="SUBMIT" name="SUBMIT">SUBMIT</button>
                        </TD>
                    </tr>

                </table>
            </form>

        </div>
   </div>



    </div>
</div>

</body>
</html>