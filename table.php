<?php
// error_reporting(0);
require "config.php";




$errors = array();

//if user signup button
if (isset($_POST['submit'])) {

    $srnum = $_GET['srn'];
    $date = $_POST['date'];
    $shares = $_POST['shares'];
    $vargani = $_POST['vargani'];
    $dirkar = $_POST['dirkar'];
    $alkar = $_POST['alkar'];
    $dirhaf = $_POST['dirhaf'];
    $alhaf = $_POST['alhaf'];
    $dirvaj = $_POST['dirvaj'];
    $alvaj = $_POST['alvaj'];
    $vasuli = $vargani + $dirhaf + $dirvaj;

    $dirbaki = $_POST['dirbaki'];
    $albaki = $_POST['albaki'];
    $total_loan = $_POST['total_loan'];


    if (count($errors) == 0) {

        $insert_data = "INSERT INTO `karjakhatavani` (`srnum`,`date`, `shares`, `vargani`, `dirkar`, `alkar`, `dirhaf`, `alhaf`, `dirvaj`, `alvaj`, `vasuli`,`dirbaki`, `albaki`, `total_loan`) VALUES ('$srnum','$date', '$shares', '$vargani','$dirkar', '$alkar', '$dirhaf', '$alhaf', '$dirvaj', '$alvaj', '$vasuli', '$dirbaki','$albaki','$total_loan')";
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
    <link rel="stylesheet" href="style_table.css">
    <style>

    </style>
</head>

<body>
    <center>
        <h1 class="main-head">कर्ज खतावणी </h1>
    </center>


    <hr>

    <form method="POST" name="sample">
        <b>
            <div id="container1">
                <div id="align_A">
                    
                    <p>User SRNo. : <?php echo $_GET['srn'];?></p>
                    <p>तरीख महिना : <input type="date" name="date" style="width:170px" required /></p>
                    <p>शेअर्स : <input type="number" name="shares" required /></p>
                    <p>दिर्घ कर्ज: <input type="number" name="dirkar" required /></p>
                    <p>अल्प कर्ज : <input type="number" name="alkar" required /></p>
                </div>
                <div id="align_B">
                    <p><label>वर्गणी :</label> <input type="number" name="vargani" required /> </p>
                    <p><label>दिर्घ कर्ज हप्ता:</label> <input type="number" name="dirhaf" required /></p>
                    <p><label>अल्प कर्ज हप्ता :</label> <input type="number" name="alhaf" required /></p>
                    <p><label>दिर्घ व्याज : </label> <input type="number" name="dirvaj" required /></p>
                </div>
                <div id="align_B">
                    <p><label>अल्प व्याज : </label> <input type="number" name="alvaj" required></p>
                    <p><label>दिर्घ कर्ज बकी :</label> <input type="number" name="dirbaki" required /></p>
                    <p><label>अल्प कर्ज बकी :</label> <input type="number" name="albaki" required /></p>
                    <p><label>एकूण कर्ज :</label> <input type="number" name="total_loan" required /></p>
                </div>
            </div>
        </b>
        <br>
        <center>
            <button class="button" type="submit" name="submit">Add Data</button>
        </center>

    </form>
    <hr>

    <table id="tb1" class="table" width="100%" border="1">
        <tr style="height: 20px;">
            <th rowspan="3">तरीख महिना</th>
            <th rowspan="3">शेअर्स</th>
            <th colspan="2" rowspan="2">दिलेले कर्ज</th>
            <th colspan="6">कर्ज वसुलिचा तपशील</th>
            <th colspan="2" rowspan="2">कर्ज बकी</th>
            <th colspan="2" rowspan="3">एकूण कर्ज</th>
        </tr>

        <tr style="height: 50px;">

            <th rowspan="2">वर्गणी</th>
            <th colspan="2">कर्ज हप्ता</th>
            <th colspan="2">व्याज</th>
            <th rowspan="2">ऐकुण वसुल</th>
        </tr>
        <tr style="height: 50px;">

            <td>दिर्घ</td>
            <td>अल्प</td>
            <td>दिर्घ</td>
            <td>अल्प</td>
            <td>दिर्घ</td>
            <td>अल्प</td>
            <td>दिर्घ</td>
            <td>अल्प</td>
        </tr>

        <?php
        //sesiion variable for edit admin -> rowid
       $_SESSION["admin_edit_sno"] = $_GET["srn"];
       $var=$_SESSION["admin_edit_sno"];

        $sql = "SELECT * FROM `karjakhatavani` where karjakhatavani.srnum=$var ORDER BY date DESC";
        $result = mysqli_query($con, $sql);
        $sno = 0;
        while ($row = mysqli_fetch_assoc($result)) {
            $sno = $sno + 1;
            // <th scope='row'>". $sno . "</th>
            echo "<tr>
            <td>" . $row['date'] . "</td>
            <td>" . $row['shares'] . "</td>

            <td>" . $row['dirkar'] . "</td>
            <td>" . $row['alkar'] . "</td>

            <td>" . $row['vargani'] . "</td>
            <td>" . $row['dirhaf'] . "</td>
            <td>" . $row['alhaf'] . "</td>
            <td>" . $row['dirvaj'] . "</td>
            <td>" . $row['alvaj'] . "</td>
            <td>" . $row['vasuli'] . "</td>
            
            <td>" . $row['dirbaki'] . "</td>
            <td>" . $row['albaki'] . "</td>
            <td>" . $row['total_loan'] . "</td>
            </tr>";
        }
        ?>


    </table>

</body>

</html>