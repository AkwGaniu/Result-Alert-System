<?php
    header('Access-Control-Allow-Origin: *');
    // error_reporting(0);

    include "db.php";
    $level = $_POST["level"];

    //$level = "h1s";
    switch($level) {
        case "h1f":
        $tableC = "courses";
        break;
        case "h1s": 
        $tableC = "hnd1courses";                                
        break;

        case "h2f":
        $tableC = "hnd2firstcourses";                    
       
        break;

        case "h2s": 
        $tableC = "hnd2secondcourses";
        break;
    }
    $sql = "SELECT courseCode, courseTitle FROM $tableC";
    $query = mysqli_query($connect, $sql);
    if($query) {
        $rowCount = mysqli_num_rows($query);
        if ($rowCount > 0) {
            while ($row = mysqli_fetch_assoc($query)) {

            $courseCode = $row['courseCode'];
            $courseTitle = $row['courseTitle'];

            $value = explode(" ", $courseCode);
            $courseCode = implode($value);

            $arr[] = ["title" => $courseTitle, "code" => $courseCode];

        }
        echo json_encode($arr);
        } else {
            echo "no";
        }
    }

?>
