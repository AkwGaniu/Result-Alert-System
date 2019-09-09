<?php
    session_start();
    if(!isset($_SESSION['student'])) {
        header("Location: index.html");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student Result</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src = "js/jquery-3.3.1.min.js"></script>
    <script src = "js/user.js"></script>
    <style>

        
        .container {
            margin-top: 20px;
        }

        .share {
            margin-left: 35px;    
        }
        
        #firstSemester, #secondSemester, #thirdSemester, #forthSemester{
            display: none;
        }
     

        th h1 {
            /* text-align: center; */
            font-weight: bold;
            font-size: 1.5em;
        }

        th .laspoLogo {
            /* margin: 0px 25%; */
            width: 100%;
            height: 50%
        }

        .studentDetail {
            margin-top: 10px;
            border-bottom: 1.5px solid rgb(109, 108, 108);
            border-top: 1.5px solid rgb(109, 108, 108);
            padding: 2px 10px;
            margin-bottom: 10px;
        }

        .studentDetail h5, h6 {
            font-weight: bold;
            font-size: 1em;
        }

        table {
            margin-bottom: 5px !important;
        }
        

        .linked {
            width: 50%;
            margin-left: 25%;
            margin-right: 25%;
            text-align: center;
        }

        .btn-share{
            width: 40%;
        }

        .grades {
            font-size: 1em;
            width: 100%;
            font-size: 18px;       
            padding-left: 80px;
        }

        .gradePoint {
            font-size: 20px;
            width: 100%;
            color: green;
            float: right;
            border: 1px solid grey;
            padding-left: 5px;
            margin-bottom: 20px; 
        }

    </style>
</head>
<body>

    <div class="container">

        <div id = "pdfContent" >
            <table style="width: 100%; text-align: left;">
                <th style="width:20%">
                    <img src="images/laspologo3.jpeg" alt="Laspo Logo" class = "laspoLogo">
                </th>

                <th style="width:80%;">
                    <h1>LAGOS STATE POLYTECHNIC, IKORODU<br/>
                    SCHOOL OF TECHNOLOGY<br/>
                    DEPARTMENT OF COMPUTER SCIENCE</h1>
                </th>
            </table>
        </div>
        <div  class="studentDetail">
            <h5 class = "name"></h5>
            <h6 class = "mat" ></h6>
            <h6 class = "level" ></h6>
        </div>
            
        <div class="row">
            <div class="col-sm-6" id = "firstSemester">

                <table id = "result" class="table table-bordered table-hover">
                    <thead>
                        <th>Course Title</th>
                        <th>Code</th>
                        <th>Unit</th>
                        <th>Score</th>
                        <th>GP</th>
                        <th>CP</th>
                        <th>Grade</th>
                    </thead>
                    <tbody>
                        

                    </tbody>
                    
                </table>      
                <span id="no-result" style = "display: none; padding-bottom:40px; padding-left:35%; font-size:2em; color: red">There is no result to display</span>
                <p  class = "grades">
                    <span id = "tcu1"></span>
                    <span class = "share" id = "tcp1"></span>
                    <span class = "share" id = "gpa1"></span>
                    <span class = "share cgpa1"></span>
                </p>
                <p class = "gradePoint">
                    <span>Summary: </span>
                    <span class = "share" id = "ctcu1"></span>
                    <span class = "share cgpa1"></span>
                    <span class = "share" id = "remark1">Good Standing</span>
                </p>
            </div>

            <div class="col-sm-6" id = "secondSemester">

                <table id = "result1" class="table table-bordered table-hover">
                    <thead>
                        <th>Course Title</th>
                        <th>Code</th>
                        <th>Unit</th>
                        <th>Score</th>
                        <th>GP</th>
                        <th>CP</th>
                        <th>Grade</th>
                    </thead>
                    <tbody>
                        

                    </tbody>
                    
                </table>      
                <span id="no-result" style = "display: none; padding-bottom:40px; padding-left:35%; font-size:2em; color: red">There is no result to display</span>
                <p  class = "grades">
                    <span id = "tcu2"></span>
                    <span class = "share" id = "tcp2"></span>
                    <span class = "share" id = "gpa2"></span>
                    <span class = "share cgpa2"></span>
                </p>
                <p class = "gradePoint">
                    <span>Summary: </span>
                    <span class = "share" id = "ctcu2"></span>
                    <span class = "share cgpa2"></span>
                    <span class = "share" id = "remark2">Good Standing</span>
                </p>
            </div>                                      
        
        </div>


        <div class="row">
            <div class="col-sm-6" id = "thirdSemester">

                <table id = "result2" class="table table-bordered table-hover">
                    <thead>
                        <th>Course Title</th>
                        <th>Code</th>
                        <th>Unit</th>
                        <th>Score</th>
                        <th>GP</th>
                        <th>CP</th>
                        <th>Grade</th>
                    </thead>
                    <tbody>
                        

                    </tbody>
                    
                </table>      
                <span id="no-result" style = "display: none; padding-bottom:40px; padding-left:35%; font-size:2em; color: red">There is no result to display</span>
                <p  class = "grades">
                    <span id = "tcu3"></span>
                    <span class = "share" id = "tcp3"></span>
                    <span class = "share" id = "gpa3"></span>
                    <span class = "share cgpa3"></span>
                </p>  
                <p class = "gradePoint">
                    <span>Summary: </span>
                    <span class = "share" id = "ctcu3"></span>
                    <span class = "share cgpa3"></span>
                    <span class = "share" id = "remark3">Good Standing</span>
                </p>
            </div>

            <div class="col-sm-6" id = "forthSemester">

                <table id = "result3" class="table table-bordered table-hover">
                    <thead>
                        <th>course Title</th>
                        <th>Code</th>
                        <th>Unit</th>
                        <th>Score</th>
                        <th>GP</th>
                        <th>CP</th>
                        <th>Grade</th>
                    </thead>
                    <tbody>
                        

                    </tbody>
                    
                </table>      
                <span id="no-result" style = "display: none; padding-bottom:40px; padding-left:35%; font-size:2em; color: red">There is no result to display</span>
                <p  class = "grades">
                    <span id = "tcu4"></span>
                    <span class = "share" id = "tcp4"></span>
                    <span class = "share" id = "gpa4"></span>
                    <span class = "share cgpa4"></span>
                </p>
                <p class = "gradePoint">
                    <span>Summary: </span>
                    <span class = "share" id = "ctcu4"></span>
                    <span class = "share cgpa4"></span>
                    <span class = "share" id = "remark4">Good Standing</span>
                </p>
            </div>                                      
        
        </div>

    </div>
        
    <!-- Button to print out the student result -->
        <div id ="ignoreContent">
            <div id = "getPdf" class="linked">
                <a href="user_backup.php" class="btn btn-share btn-success">Exit</a>
                <button  onclick="printPage()" class="btn btn-share btn-primary" >Download Result</button>
        </div>
    </div>
    
  
</body>
</html>

<script>
$(document).ready(function() {
   
printResult(matric);

var formalResult = JSON.parse(localStorage.getItem("result"));
let totalGP1 = formalResult[1].totalGP;
let totalCP1 = formalResult[1].totalCU;
 
printResult1(matric,totalGP1,totalCP1);

var formalResult1 = JSON.parse(localStorage.getItem("result1"));

let totalGP2 = formalResult1[1].totalGP;
let totalCP2 = formalResult1[1].totalCU;

printResult2(matric,totalGP2,totalCP2);


var formalResult2 = JSON.parse(localStorage.getItem("result2"));

let totalGP3 = formalResult2[1].totalGP;
let totalCP3 = formalResult2[1].totalCU;

  
    
    printResult3(matric,totalGP3,totalCP3);
});

function printPage() {
        $("#getPdf").hide();
        window.print();
        location.reload();
}
    
    

// PDG GENERATOR WITH HTML2CANVAS
//   function getPDF() {
//     html2canvas(document.body, {
//         onrendered: function (canvas) {

//             var img = canvas.toDataURL("image/png");
//             var doc = new jsPDF();
//             doc.addImage(img, 'JPEG', 20, 20);
//             doc.save('test.pdf');

//         }
//     });
//   }  
 







// PDF GENERATOR WITHOUT IMAGE
    // var pdfDoc  = new jsPDF();
    // var specialElementHandlers =  {
    //     '#ignoreContent' : function(element, rederer) {
    //         return true;
    //     }
    // };

    // $(document).ready(function() {

    //     $("#getPdf").click(function() {
    //         pdfDoc.fromHTML($('#pdfContent').html(), 10, 10, {
    //             'width' : 110,
    //             'elementHandlers' : specialElementHandlers
    //         });
    //         pdfDoc.save('MyFirstPDF.pdf');
    //     });

    // });

</script>