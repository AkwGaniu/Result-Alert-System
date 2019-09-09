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
                            Add Courses for this semester
                            <small></small>                            
                        </h1>
                        
                    </div>
                    
                    <div class="col-lg-6">
                        <?php
                            if(isset($_POST['addCourse'])) {
                                $level = $_POST['level'];
                                $courseCode = $_POST['courseCode'];
                                $courseTitle = $_POST['courseTitle'];
                                $courseUnit = $_POST['courseUnit'];
                                //$courseId = rand(10, 1000);


                                mysqli_real_escape_string($connect, $courseCode);
                                mysqli_real_escape_string($connect, $courseTitle);
                                mysqli_real_escape_string($connect, $courseUnit);

                                $value = explode(" ", $courseCode);
                                $courseCode = implode($value);

                                if(empty($courseCode) || empty($courseTitle) || empty($courseUnit)|| $level == "select") {
                                    echo "Sorry! all fields are required.";
                                } else {

                                    switch($level) {
                                        case "h1f":
                                        
                                        $checksql = "SELECT * FROM courses WHERE courseCode = '$courseCode'";
                                        $checkquery = mysqli_query($connect, $checksql);
                                        $row = mysqli_num_rows($checkquery);
                                        if($row > 0){
                                            echo "Course already exist";
                                        } else  {
                                            $sql = "INSERT INTO courses (courseCode, courseTitle, courseUnit)";
                                            $sql .= "VALUES('{$courseCode}', '{$courseTitle}', $courseUnit)";

                                            $query = mysqli_query($connect, $sql);
                                            if(!$query){
                                            echo "Ooops!!!". mysqli_error($connect);
                                            } else  {
                                            echo "Course Added successfullly.";
                                            }
                                        }
                                        break;

                                        case "h1s": 
                                        
                                        $checksql = "SELECT * FROM hnd1courses WHERE courseCode = '$courseCode'";
                                        $checkquery = mysqli_query($connect, $checksql);
                                        $row = mysqli_num_rows($checkquery);
                                        if($row > 0){
                                            echo "Course already exist";
                                        } else  {
                                            $sql = "INSERT INTO hnd1courses (courseCode, courseTitle, courseUnit)";
                                            $sql .= "VALUES('{$courseCode}', '{$courseTitle}', $courseUnit)";

                                            $query = mysqli_query($connect, $sql);
                                            if(!$query){
                                            echo "Ooops!!!". mysqli_error($connect);
                                            } else  {
                                            echo "Course Added successfullly.";
                                            }
                                        }
                                        break;

                                        case "h2f": 

                                        
                                        $checksql = "SELECT * FROM hnd2firstcourses WHERE courseCode = '$courseCode'";
                                        $checkquery = mysqli_query($connect, $checksql);
                                        $row = mysqli_num_rows($checkquery);
                                        if($row > 0){
                                            echo "Course already exist";
                                        } else  {
                                            $sql = "INSERT INTO hnd2firstcourses (courseCode, courseTitle, courseUnit)";
                                            $sql .= "VALUES('{$courseCode}', '{$courseTitle}', $courseUnit)";

                                            $query = mysqli_query($connect, $sql);
                                            if(!$query){
                                            echo "Ooops!!!". mysqli_error($connect);
                                            } else  {
                                            echo "Course Added successfullly.";
                                            }
                                        }
                                        break;

                                        case "h2s": 
                                         
                                        $checksql = "SELECT * FROM hnd2secondcourses WHERE courseCode = '$courseCode'";
                                        $checkquery = mysqli_query($connect, $checksql);
                                        $row = mysqli_num_rows($checkquery);
                                        if($row > 0){
                                            echo "Course already exist";
                                        } else  {
                                            $sql = "INSERT INTO hnd2secondcourses (courseCode, courseTitle, courseUnit)";
                                            $sql .= "VALUES('{$courseCode}', '{$courseTitle}', $courseUnit)";

                                            $query = mysqli_query($connect, $sql);
                                            if(!$query){
                                            echo "Ooops!!!". mysqli_error($connect);
                                            } else  {
                                            echo "Course Added successfullly.";
                                            }
                                        }
                                        break;
                                    }
                                
                                }

                            }
                        ?>
                        <form action="" method="post">
                            <div class="form-group">
                                <label for="level/semester">Level/Semester</label>
                                <select class = "form-control"  name = "level">
                                    <option value="select">--Select level/Semester--</option>
                                    <option value="h1f">HND1 First Semester</option>
                                    <option value="h1s">HND1 Second Semester</option>
                                    <option value="h2f">HND2 First Semester</option>
                                    <option value="h2s">HND2 Second Semester</option>                                    
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="courseCode">Course Code</label>
                                <input class = "form-control" type="text" name = "courseCode">
                            </div>

                            <div class="form-group">
                                <label for="courseTitle">Course Title</label>
                                <input class = "form-control" type="text" name = "courseTitle">
                            </div>

                            <div class="form-group">
                                <label for="courseUnit">Course Unit</label>
                                <input class = "form-control" value = "<?php //(isset($_POST['courseUnit'])) ? echo $_POST['courseUnit'] ?>" type="text" name = "courseUnit">
                            </div>

                            <div class="form-group">
                                
                                <input class = "btn btn-primary position" type="submit" name = "addCourse">
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

</body>

</html>
