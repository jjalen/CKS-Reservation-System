<?php
include 'connect.php';

if(isset($_POST['submit']))
                {

                    $museum_tb = $_POST['museum_input'];
                    $time_tb = $_POST['time_input'];
                    $date_tb = $_POST['date_input'];
                    $person_tb = $_POST['person_input'];
                    $first_tb = $_POST['fname_input'];
                    $last_tb = $_POST['lname_input'];
                    $email_tb = $_POST['email_input'];
                    $add_tb = $_POST['address_input'];
                    $number_tb = $_POST['number_input'];
                    $affi_tb = $_POST['affil_input'];


                        $insert_query = mysqli_query($connection, "INSERT INTO reservation(museum, time, date, person, first, last, email, address, number, affiliation) VALUES('$museum_tb', '$time_tb', '$date_tb', '$person_tb', '$first_tb', '$last_tb', '$email_tb', '$add_tb', '$number_tb', '$affi_tb')");

                        if($insert_query) {
                            echo "<script> alert('Record Successfully!')</script>";
                            echo "<script> document.location='Reservation_Form.php'</script>";
                        }
                        else{
                            echo "<script> alert('Try Again!')</script>";
                        }
                    }


?>