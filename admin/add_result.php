<?php include "includes/db.php"; ?>
<?php include "includes/header.php"; ?>




<div id="wrapper">

<!-- Navigation -->
<?php include "includes/navigation.php"; ?>

    <!-- /.navbar-collapse -->
</nav>

<div style = "height: 650px " id="page-wrapper">

    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Add Student Result For This Semester
                    <small></small>                            
                </h1>
                
            </div>
            <div class="col-lg-6">
                <?php
                    $value = array();
                    if(isset($_POST['addResult'])) {
                        $level = $_POST['level'];
                        $matricNum = htmlentities($_POST['matricNum']);
                        $course = $_POST['course'];
                        $score = htmlentities($_POST['score']);
                 

                        $matricNum = mysqli_real_escape_string($connect, $matricNum);
                        $score = mysqli_real_escape_string($connect, $score);

                       // echo $matricNum.','.$course.','. $score;

                        if(empty($matricNum) || empty($score)|| empty($course) || $level == "select") {
                            echo "Please check to ensure all fields are filled duely.\n As all fields are required.";
                        } else {

                            switch($level) {
                                case "h1f":
                                $table = "exam_score";
                                $tableC = "courses";
                                break;
                                case "h1s": 
                                $table = "secondsemesterscore";
                                $tableC = "hnd1courses";                                
                                break;

                                case "h2f":
                                $table = "hnd2firstsemester";  
                                $tableC = "hnd2firstcourses";                    
                               
                                break;

                                case "h2s": 
                                $table = "hnd2secondsemester";
                                $tableC = "hnd2secondcourses";
                                break;
                            }


                            $sql1 = "SELECT matricNum FROM $table WHERE matricNum = '$matricNum' and courseCode = '$course'";
                            $result = mysqli_query($connect, $sql1);
                            if($result) {
                                $row = mysqli_num_rows($result);
                                if($row > 0) {
                                    echo "Result already exist for $matricNum in the selected course";
                                } else {

                                    $sql = "INSERT INTO $table (matricNum, courseCode, score) ";
                                    $sql .= "VALUES('{$matricNum}', '{$course}', '{$score}') ";

                                    $query = mysqli_query($connect, $sql);
                                    if(!$query){
                                    echo "Ooops!!!". mysqli_error($connect);
                                    } else  {
                                    echo "Record Created successfullly.";
                                    }

                                }
                            }
                        }
                        

                            

                        
                        

                    }
                ?> 
            <form action="" method="post">

                <div class="form-group">
                    <label for="level/semester">Level/Semester</label>
                    <select class = "form-control" id = "sel"  name = "level">
                        <option value="select">--Select level/Semester--</option>
                        <option value="h1f">HND1 First Semester</option>
                        <option value="h1s">HND1 Second Semester</option>
                        <option value="h2f">HND2 First Semester</option>
                        <option value="h2s">HND2 Second Semester</option>                                    
                    </select>
                </div>

                <div class="form-group">
                    <label for="courseCode">Student Matric Number</label>
                    <input class = "form-control" style = "width: 95%;" type="text" name = "matricNum">
                </div>

                <div class="form-group">
                    <label for="courseTitle" style = "width: 50%; display: block">Courses</label>
                    <select style = "width: 75%;" class=  "courseInput" name = course  id = "cours">
                        <option value="">Select Semester above to choose course</option>
                    </select>

                    <input type="text" style = "width: 20%;" class=  "courseInput" name = "score" size = "4" placeholder="Score...">
                    
                </div>

                <div class="form-group">
                    
                    <input class = "btn btn-primary position" type="submit" name = "addResult" value = "Submit Result">
                </div>
            </form>

            </div>
        </div>
        <!-- /.row -->

    </div>
    <!-- /.container-fluid -->

</div>
<!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

<!-- jQuery -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

<script>
$(document).ready(function() {
    let levelselect = $("#sel");

    levelselect.on("mouseleave", function() {
        let real = levelselect.val();

        if (real !== "select") {
            localStorage.clear();
            $("#cours").html(`<option value="">---Choose Course---</option>`);
        let level = {"level": real};
        $.ajax({
                type: "post",

                url: "http://localhost/smsRequest/admin/includes/courseSelect.php",

                data:  level,

                success: function(response){
                    if(response == "no"){ 
                        alert(response);
                    } else {
                        localStorage.setItem("courses", response);
                        let course = JSON.parse(localStorage.getItem("courses"));
                        $.each(course, function(index) {
                            //alert (course[index].code);
                            let courses = `<option value="${course[index].code}">${course[index].title}</option>`;
                            $("#cours").append(courses);

                        });
                    }

                }

                
            });
        } else {
            $("#cours").html(`<option value="">Select Semester above to choose course</option>`);
        }
    })



})
</script>

</body>

</html>
