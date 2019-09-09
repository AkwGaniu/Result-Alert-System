<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Result Alert System</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/user.css">
    <script src = "js/jquery-3.3.1.min.js"></script>
    <script src = "../js/admin.js"></script>
  </head>
    <body>

        <div class="login-modal">
            <div class="modalContent">
                <img src="../images/laspolgo2.jfif" alt="Logo" class = "logo">
                <span class="login" style = "margin-left:27%">Admin Login Portal</span>
                <div id = "matDiv" class="formGroup">
                    <div class="image">
                        <img src="images/Circled User Male_64px.png" alt="" style="width: 100%; height: 100%">
                    </div>
                    <div class="inputHolder">
                        <input type="text" id =  "user" placeholder = "Enter your matric number..." >
                        <span id="errMatNum"></span>
                    </div>
                                    
                </div>
                                
                <div id = "passDiv" class="formGroup">
                    <div class="image"> 
                        <img src="images/Lock 2_64px.png" alt="" style = "width: 100%; height: 100%">
                    </div>
                    <div class="inputHolder">
                        <input type="password" id =  "pass" placeholder = "Enter your password..." >
                        <span id="errPassword"></span>
                    </div>
                </div>
                                
                <input type="submit" id="submit" onclick="processAdminLogin()" value="LOGIN">
                    
            </div>

        </div>

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

$(".modalContent").keydown(function() {
    if(event.which == 13) {
    
    processLogin();
}
})




</script>

