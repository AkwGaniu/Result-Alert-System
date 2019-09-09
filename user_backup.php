<?php
    session_start();
    if(!isset($_SESSION['student'])) {
        header("Location: index.html");
    }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Result Alert System</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/user_backup.css">
    <script src = "js/jquery-3.3.1.min.js"></script>
    <script src = "js/user.js"></script>
  </head>
    <body>
 
        <div class="modal" style="display: none" >
            <div id = "pdfContent" class= "modalContent" style="width: 600px; padding: 0">

                <div  class="studentDetail fit" style="margin-top: 0">
                        <h5 id = "name1"></h5>
                        <h6 id = "mat1" ></h6>
                        <h6 id = "level1" ></h6>
                </div>

                <table id = "record">
                    <th>Courses</th>
                    <th >Score</th>
                    <th >Grade</th>
                </table>
                <p id = "grade" class = "gradePoint"></p>

                <div class="linked">
                    <button  id = "exit" class="link" >Exit</button>
                    <button id = "api" class="link" onclick = "smsResult()" >Recieve Result As SMS</button>
                </div>
                                     
            </div>
        
        </div>

        <div class="header">
            <div class="logo1">
                <a href="user_backup.php" target="_self"><img src="images/logo.png" alt="Laspotech" style="width: 300px; height: 100%;"></a>
            </div>
            <h1>Result Alert System</h1>
            <div id="date" class="salute"></div>
        </div> <!--End of header-->
        

        <div class="row">
            <div class="sideNav">
                <div class="circle">                            
                    
                    <img src="images/exe.png"  alt="#" width="90%" height="200px">
                    
                    <div class="studentDetail">
                        <h4 style= "font-size: 17px;"id = "stdname"></h4>
                        <h4 id = "stdmat" ></h4>
                        <h4 id = "stdlevel" ></h4>
                        <button class="logOut-btn" onclick="logout()">LogOut</button>
                    </div>
                    

                </div>
            </div> <!--End of the side bar-->
            

            <div class=" content">
                <div class=" row">
                    <div class="contentHolder">
                        <img src="images/profile.png" alt="" class="imageDesc">
                        <div class="service_name">
                            <span>Student Profile</span>
                        </div>
                        <button class="btn but btn-primary">View Profile</button>
                    </div>

                    <div class=" contentHolder extend">
                        <img src="images/edit_profile.png" alt="" class="imageDesc">
                        <div class="service_name">
                            <span>Edit Profile</span>
                        </div>
                        <button class="btn but btn-primary">Edit Profile</button>
                    </div>
                    <div class="contentHolder">
                        <img src="images/transcript.png" alt="" class="imageDesc">
                        <div class="service_name">
                            <span>Student Transcript</span>
                        </div>
                        <button class="btn but btn-primary">Transcript Request</button>
                    </div>
                    <div class=" contentHolder">
                        <img src="images/result.png" alt="" class="imageDesc">
                        <div class="service_name">
                            <span>View Current Result</span>
                        </div>
                        <button class="btn but btn-primary" onclick="processResult(matric)">Current Result</button>
                    </div>
                </div>

                <div class=" row">
                    <div class="contentHolder">
                            <img src="images/previous_result.png" alt="" class="imageDesc">
                            <div class="service_name">
                                <span>View Previous Result</span>
                            </div>
                            <button class="btn but btn-primary">Previous Result</button>
                    </div>
                    <div class="contentHolder">
                            <img src="images/course_reg.png" alt="" class="imageDesc">
                            <div class="service_name">
                                <span>Course Registration</span>
                            </div>
                            <button class="btn but btn-primary">Register Course</button>
                    </div>
                    <div class="contentHolder extend">
                            <img src="images/courses.png" alt="" class="imageDesc">
                            <div class="service_name">
                                <span>Registered Courses</span>
                            </div>
                            <button style = "padding:10px !important" class="btn but btn-primary">Registered Courses</button>
                    </div>
                    <div class=" contentHolder" >
                            <img src="images/voteIcon.png" alt="" class="imageDesc">
                            <div class="service_name">
                                <span>Print Result</span>
                            </div>
                            <a href = "pdf_test.php" class="btn but btn-primary" >Print Result</a>
                    </div>
                </div>
            </div> 

            <!-- <div class="footer">
                    <span class="copyright">&copy All rights reserved.</span>span>
                    <span class="author"> Project developed by Enny</span>
            </div> -->

        </div><!--End of body container -->

        <!--Start of Tawk.to Script-->
<script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
    var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
    s1.async=true;
    s1.src='https://embed.tawk.to/5c3c8c02ab5284048d0ce792/default';
    s1.charset='UTF-8';
    s1.setAttribute('crossorigin','*');
    s0.parentNode.insertBefore(s1,s0);
    })();
    </script>
    <!--End of Tawk.to Script-->
        

    </body>
</html>

<script>
  //  var matric = user[1].matricNum;
//     var user = JSON.parse(localStorage.getItem("userdata"));
// $(".salute").html(user.fname);
  //  $(".salute").html(user.fname);
</script>