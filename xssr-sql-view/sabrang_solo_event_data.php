<?php

session_start();



if (!$_SESSION) {

    header("Location: login.php");

    exit();

}



if(isset($_POST['filter']))

{

    $value = $_POST['value'];

    // search in all table columns

    // using concat mysql function

    $query = "SELECT * FROM `register` WHERE CONCAT( `event_name`, `participation_type`, `user_name`, `college`, `email`, `phone1`, `phone2`, `fees`) LIKE '%".$value."%'";

    $search_result = filterTable($query);

    

}

 else {

    $query = "SELECT * FROM `register`";

    $search_result = filterTable($query);

}



// function to connect and execute the query

function filterTable($query)

{

    $connect = mysqli_connect("db4free.net", "sabrang1", "9984434231", "sabrang_db1");

    $filter_Result = mysqli_query($connect, $query);

    return $filter_Result;

}





?>



<!DOCTYPE html>

<html>

    <head>

        <title>PHP HTML TABLE DATA SEARCH</title>

        <style>

            table,tr,th,td

            {

                border: 1px solid black;

            }

        </style>

    </head>

    <body class="c2">

        <style type="text/css">

            .c1{

                color: black;

                font-weight: bold;



            }

            .c2{

                

                background-image: linear-gradient(to right,#48dc64, #50d458,#63c33d,#6db92f, #7daa18);

                background-size: cover;

            }

            .c3{

                font-size: 30px;

                color: #ffffff;

                

                padding: 10px;

            }

            .c4{

                height: 28px;

                width: 160px;

                background: transparent;

                border-style: double;

                color: black;

                font-size: 18px;

                text-align: center;

                margin-top:20px;



            }

            .c6{

                background: black;

                color: white;

                height: 30px;

                width: 110px;

                border: transparent;

                font-size: 18px;

            }

             .c7{

                background: black;

                color: white;

                height: 40px;

                width: 180px;

                border: transparent;

                font-size: 15px;

                margin: auto;



            }

            .c6:hover{

                background: white;

                color: black;

            }

            .c7:hover{

                background: white;

                color: black;

            }

            .c8{

                width:50%; 

                height:100%;

                 margin: auto;

            }

        </style>

        

        <form action="sabrang_solo_event_data.php" method="post">



          <center>  <input class="c4" type="text" name="value" placeholder="VALUE TO SEARCH"><br><br></center>

           <center><input class="c6" type="submit" name="filter" value="Filter"><br><br></center>

          <center> <h3> To View all Participant's list in any perticular event , Filter by event name!!</h3></center>



          

          <br><br>

          <p align="right"><a href="logout.php">Logout</a></p>

            

            <table class="c8">

                

                     <th colspan="9"  class="c3"> SABRANG CARNIVAL 2K18 PARTICIPANT'S DATA(SOLO) </th>



                <tr>





                    <th class="c1">EVENT NAME</th>

                    <th class="c1">CATEGORY</th>

                    <th class="c1">PARTICIPANT NAME</th>

                    <th class="c1">COLLEGE</th>

                    <th class="c1">EMAIL</th>

                    <th class="c1">PHONE1</th>

                    <th class="c1">PHONE2</th>

                    <th class="c1">FEES</th>

                </tr>



      <!-- populate table from mysql database -->

                <?php while($row = mysqli_fetch_array($search_result)):?>

                <tr>

                    

                    <td><?php echo $row['event_name'];?></td>

                    <td><?php echo $row['participation_type'];?></td>

                    <td><?php echo $row['user_name'];?></td>

                    <td><?php echo $row['college'];?></td>

                    <td><?php echo $row['email'];?></td>

                    <td><?php echo $row['phone1'];?></td>

                    <td><?php echo $row['phone2'];?></td><td><?php echo $row['fees'];?></td>

                </tr>

                <?php endwhile;?>

            </table>

         </form>

                            <form action="sabrang_team_event_data.php" method ="post">

             <center> <button class="c7"><a href="sabrang_team_event_data.php">View Team_Events Data</a></button></center>

             </form>

         



        

    </body>

</html>