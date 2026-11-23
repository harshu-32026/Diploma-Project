<!-- kirdaTable -->
<?php
// error_reporting(0);
require "config.php";


// session_start();



$errors = array();

//if user signup button
if (isset($_POST['submit'])) {

    $jdate = $_POST['jdate'];
    $jkhateno = $_POST['jkhateno'];
    $jpavtino = $_POST['jpavtino'];
    $jjamatapshil = $_POST['jjamatapshil'];
    $jrakam = $_POST['jrakam'];
    $totaljrakam=$jrakam+$jrakam;
    $ndate = $_POST['ndate'];
    $nkhateno = $_POST['nkhateno'];
    $npavtino = $_POST['npavtino'];
    $njamatapshil = $_POST['njamatapshil'];
    $nrakam = $_POST['nrakam'];
    $jrakamtotalsec=$jrakam+$jrakam;

    if (count($errors) == 0) {

        $insert_data = "INSERT INTO `kirdaTable` (`jdate`,`jkhateno`, `jpavtino`, `jjamatapshil`, `jrakam`, `totaljrakam`, `ndate`, `nkhateno`, `npavtino`, `njamatapshil`, `nrakam`,`jrakamtotalsec`) VALUES ('$jdate','$jkhateno', '$jpavtino', '$jjamatapshil', '$jrakam', '$totaljrakam', '$ndate', '$nkhateno', '$npavtino', '$njamatapshil', '$nrakam','$jrakamtotalsec')";
        mysqli_query($con, $insert_data);

}

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/kirtable.css">
    
</head>
    <title>Document</title>
</head>
<body>
<form method="POST" name="kirda">
       <br><br> <b>
        <div class="container1">
        <table width="100%">
            <div id="align_c" > 
            <tr style="height: 50px;background-color:#e1f3fd;color:black;border: 4px solid black; ">
            <th colspan="2">   <p><label>तारीख :</label>  <input type="date" name="jdate" style="width:170px" required /></p>
                    <p><label>खाते नंबर : </label> <input type="number" name="jkhateno" required /></p>
                    <p><label>पावती नंबर: </label> <input type="number" name="jpavtino" required/></p>
                    <p><label>जमेचा तपशील : </label> <input type="text" name="jjamatapshil"required/></p>                       
                    <p><label>रक्कम : </label> <input type="number" name="jrakam" required/> </p>
                    </th>
                </div> 
            <div id="align_B">
               <th colspan="2"> <p><label>तारीख :</label> <input type="date" name="ndate" required/></p>
                <p><label>खाते नंबर  </label> <input type="number" name="nkhateno" required/></p>   
                <p><label>पावती नंबर: </label> <input type="number" name="npavtino" required></p>
                <p><label>जमेचा तपशील :</label> <input type="text" name="njamatapshil" required /></p>
                <p><label>रक्कम : :</label> <input type="number" name="nrakam" required/></p>
                </th>
                </tr>
            </div>
</table>
    </div>
        </b>
        <br><center>
        <button class="button" type="submit" name="submit">Add Data</button></center><br><br><br>


    <div class="contain">
    <table width="100%">
    <tr style="height: 50px; background-color:#a5dcf9;
            color:black;border: 3px solid black; ">
                <th colspan="2"><h2>जमा</h2></th>
                <th colspan="2"><h2>नावे</h2></th>
            </tr>
    </table>
        </div>
   <table id="tb2" class="table" width="100%" border="1">
            <tr style="height: 40px;background-color:#d2edfc;
            color:black; border: 3px solid black; ">
            <th>तारीख </th>
            <th>खाते नंबर</th>
            <th>पावती नंबर</th>
            <th >जमेचा तपशील</th>
            <th>रक्कम</th>
            <th>एकूण रक्कम</th>
            <th>तारीख </th>
            <th>खाते नंबर</th>
            <th>पावती नंबर</th>
            <th >नावेचा तपशील</th>
            <th>रक्कम</th>
            <th>एकूण रक्कम</th>
            </tr>

        <!-- <tr style="height: 40px;background-color:#d2edfc;
            color:black;border: 3px solid black; ">
            <td > रुपय</td>
            <td>पैसे</td>
            <td > रुपय</td>
            <td>पैसे</td>
            <td > रुपय</td>
            <td>पैसे</td>
            <td > रुपय</td>
            <td>पैसे</td>
        </tr> -->

         <?php
       

        $sql = "SELECT * FROM `kirdaTable`";
        $result = mysqli_query($con, $sql);
        // $sno = 0;
        while ($row = mysqli_fetch_assoc($result)) {
            // $sno = $sno + 1;
            // <th scope='row'>". $sno . "</th>
            echo "<tr>
            <td>" . $row['jdate'] . "</td>
            <td>" . $row['jkhateno'] . "</td>

            <td>" . $row['jpavtino'] . "</td>
            <td>" . $row['jjamatapshil'] . "</td>

            <td>" . $row['jrakam'] . "</td>
            
            <td>" . $row['totaljrakam'] . "</td>
          
            <td>" . $row['ndate'] . "</td>
            <td>" . $row['nkhateno'] . "</td>
            <td>" . $row['npavtino'] . "</td>
            <td>" . $row['njamatapshil'] . "</td>
            
            <td>" . $row['nrakam'] . "</td>
            <td>" . $row['jrakamtotalsec'] . "</td>
            </tr>";
        }
        ?>
        </table> 
    </form>
</body>
</html>