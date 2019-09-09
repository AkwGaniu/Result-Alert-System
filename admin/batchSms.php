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
                            Batch Result Sending To Students After Coloation
                            <small></small>                            
                        </h1>
                        
                    </div>
                    
                    <div class="col-lg-6">
                        
                        <div class =  "batchSend">
                            <h2 class = "info">Click the button below, to send the respective result of each student to them via SMS</h2>
                            <button class = "button" onclick = "sendBatch()" id = "batchSend" >Send Batch SMS To Students</button>
                        </div>

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
