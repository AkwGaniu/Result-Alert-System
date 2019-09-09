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
                            List of Courses for Current Session
                            <small></small>                            
                        </h1>
                    </div> 

                    <div class= "col-lg-6">
                    <h3 class = "semesterCourses">HND1 First Semester Courses</h3>


                    <?php 
                        if(isset($_GET['del'])) {
                            $courseId = htmlentities($_GET['del']);

                            $courseId = mysqli_real_escape_string($connect, $courseId);

                            $sql = "DELETE FROM courses WHERE Id = $courseId";
                            $result = mysqli_query($connect, $sql);
                        }
                    ?>
                 
                        <table class= "table table-bordered">
                            <thead>
                                <th>Course Title</th>
                                <th>Course Code</th>
                                <th>Course Unit</th>
                                <th>Action</th>
                            </thead>
                            <tbody>
                                <?php
                                    $sql = "SELECT * FROM courses";
                                    $result = mysqli_query($connect,$sql);
                                    if ($result) {

                                        while($row = mysqli_fetch_assoc($result)){
                                           $coursecode = $row['courseCode'];
                                           $value1 = substr($coursecode, 0, 3);
                                           $value2 = substr($coursecode, 3, 3);
                                           $coursecode = $value1 . ' ' . $value2;
                                           
                                ?>
                                <tr>
                                    <td><?php echo $row['courseTitle']?></td>
                                    <td><?php echo $coursecode ?></td>
                                    <td><?php echo $row['courseUnit']?></td>
                                    <td>
                                        <a href="?del=<?php echo $row['Id']?>">Delete</a>
                                </td>
                                    </tr>
                                <?php           
                                        }

                                    }
                                ?>
                                
                            </tbody>
                        </table>
                       
                    </div>

                    <div class= "col-lg-6">
                    <h3 class = "semesterCourses">HND1 Second Semester Courses</h3>

                    <?php 
                        if(isset($_GET['del'])) {
                            $courseId = htmlentities($_GET['del']);

                            $courseId = mysqli_real_escape_string($connect, $courseId);

                            $sql = "DELETE FROM courses WHERE Id = $courseId";
                            $result = mysqli_query($connect, $sql);
                        }
                    ?>
                 
                        <table class= "table table-bordered">
                            <thead>
                                <th>Course Title</th>
                                <th>Course Code</th>
                                <th>Course Unit</th>
                                <th>Action</th>
                            </thead>
                            <tbody>
                                <?php
                                    $sql = "SELECT * FROM hnd1courses";
                                    $result = mysqli_query($connect,$sql);
                                    if ($result) {

                                        while($row = mysqli_fetch_assoc($result)){
                                           $coursecode = $row['courseCode'];
                                           $value1 = substr($coursecode, 0, 3);
                                           $value2 = substr($coursecode, 3, 3);
                                           $coursecode = $value1 . ' ' . $value2;
                                           
                                ?>
                                <tr>
                                    <td><?php echo $row['courseTitle']?></td>
                                    <td><?php echo $coursecode ?></td>
                                    <td><?php echo $row['courseUnit']?></td>
                                    <td>
                                        <a href="?del=<?php echo $row['Id']?>">Delete</a>
                                </td>
                                    </tr>
                                <?php           
                                        }

                                    }
                                ?>
                                
                            </tbody>
                        </table>
                       
                    </div>
                    
                </div>
                <!-- /.row -->
                <div class="row">

                <div class= "col-lg-6">
                    <h3 class = "semesterCourses">HND2 First Semester Courses</h3>

                    <?php 
                        if(isset($_GET['del'])) {
                            $courseId = htmlentities($_GET['del']);

                            $courseId = mysqli_real_escape_string($connect, $courseId);

                            $sql = "DELETE FROM courses WHERE Id = $courseId";
                            $result = mysqli_query($connect, $sql);
                        }
                    ?>

                        <table class= "table table-bordered">
                            <thead>
                                <th>Course Title</th>
                                <th>Course Code</th>
                                <th>Course Unit</th>
                                <th>Action</th>
                            </thead>
                            <tbody>
            <?php
                $sql = "SELECT * FROM hnd2firstcourses";
                $result = mysqli_query($connect,$sql);
                if ($result) {

                    while($row = mysqli_fetch_assoc($result)){
                       $coursecode = $row['courseCode'];
                       $value1 = substr($coursecode, 0, 3);
                       $value2 = substr($coursecode, 3, 3);
                       $coursecode = $value1 . ' ' . $value2;
                       
            ?>
            <tr>
                <td><?php echo $row['courseTitle']?></td>
                <td><?php echo $coursecode ?></td>
                <td><?php echo $row['courseUnit']?></td>
                <td>
                    <a href="?del=<?php echo $row['Id']?>">Delete</a>
            </td>
                </tr>
            <?php           
                    }

                }
            ?>
            
        </tbody>
    </table>
   
</div>

<div class= "col-lg-6">
<h3 class = "semesterCourses">HND2 Second Semester Courses</h3>

<?php 
    if(isset($_GET['del'])) {
        $courseId = htmlentities($_GET['del']);

        $courseId = mysqli_real_escape_string($connect, $courseId);

        $sql = "DELETE FROM courses WHERE Id = $courseId";
        $result = mysqli_query($connect, $sql);
    }
?>

    <table class= "table table-bordered">
        <thead>
            <th>Course Title</th>
            <th>Course Code</th>
            <th>Course Unit</th>
            <th>Action</th>
        </thead>
        <tbody>
            <?php
                $sql = "SELECT * FROM hnd2secondcourses";
                $result = mysqli_query($connect,$sql);
                if ($result) {

                    while($row = mysqli_fetch_assoc($result)){
                       $coursecode = $row['courseCode'];
                       $value1 = substr($coursecode, 0, 3);
                       $value2 = substr($coursecode, 3, 3);
                       $coursecode = $value1 . ' ' . $value2;
                       
            ?>
            <tr>
                <td><?php echo $row['courseTitle']?></td>
                <td><?php echo $coursecode ?></td>
                <td><?php echo $row['courseUnit']?></td>
                <td>
                    <a href="?del=<?php echo $row['Id']?>">Delete</a>
            </td>
                </tr>
            <?php           
                    }

                }
            ?>
            
        </tbody>
    </table>
   
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
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/admin.css">
    <script src = "../js/jquery-3.3.1.min.js"></script>
    <script src = "../js/adminForm.js"></script>

</body>

</html>
