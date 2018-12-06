
<?php

if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM `register_team` WHERE CONCAT(`teammates`, `teamname`, `college`, `user_name`, `email`, `phone1`, `phone2`, `event_name`, `fees`)LIKE'%".$valueToSearch."%'";
    $search_result = filterTable($query);
    
}
 else {
    $query = "SELECT * FROM `register_team` ";
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

            }
            .c6{
                background: black;
                color: white;
                height: 30px;
                width: 100px;
                border: transparent;
                font-size: 18px;
            }
            
        </style>
        
        <form action="sabrang_team_event_data.php" method="post">

          <center>  <input class="c4" type="text" name="valueToSearch" placeholder="VALUE TO SEARCH"><br><br></center>
           <center><input class="c6" type="submit" name="search" value="Filter"><br><br></center>
            
            <table style="width: 50%; height: 100%; margin: auto; ">
                
                     <th colspan="9"  class="c3"> SABRANG CARNIVAL 2K18 PARTICIPANT'S DATA(TEAM) </th>

                <tr>

                    <th class="c1">EVENT NAME</th>
                    <th class="c1">TEAM MATES(NO)</th>
                    <th class="c1">TEAM NAME</th>
                    <th class="c1">TEAM LEADER</th>
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
                    <td><?php echo $row['teammates'];?></td>
                    <td><?php echo $row['teamname'];?></td>
                    <td><?php echo $row['user_name'];?></td>
                    <td><?php echo $row['college'];?></td>
                    <td><?php echo $row['email'];?></td>
                    <td><?php echo $row['phone1'];?></td>
                    <td><?php echo $row['phone2'];?></td>
                    <td>
                        <?php echo $row['fees'];?></td>
                </tr>
                <?php endwhile;?>
            </table>
        </form>
        
    </body>
</html>