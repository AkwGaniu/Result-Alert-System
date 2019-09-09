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
                            Result Summary 
                            <small></small>                            
                        </h1>
                        
                    </div>
                    
                    <div class="col-lg-12">
                        <table class= "table">
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
                                    <td><?php echo $row['courseTitle']?><td>cggfgfgfgf</td></td>
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
