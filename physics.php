<?php
session_start();
if ($_SESSION["access"] == "true") {
  // Valid Access
}else{
  header('Location: '."https://vitunofficialscmpn.epizy.com/index.php");
}
?>

<html>
<head>
    <title>Vidyalankar Unofficial Website</title>
    <link rel = "icon" href = "assets\vit_logo_madeByMe-removebg-preview.png"
        type = "image/x-icon">
</head>

<body style="background-color: #002;" >

  <style>
  @keyframes tabAnimation {
    from {
     background-image: linear-gradient(rgba(5, 12, 0, 0.445) ,rgb(0, 0, 88));
      }
    to {
       border-top-left-radius: 20px;
       border-top-right-radius: 20px;
      border-bottom-left-radius: 20px;
      border-bottom-right-radius: 20px;
      background-image: linear-gradient(rgba(0, 0, 200, 0.445) ,rgb(100, 100, 255));
      }
  }

  .newTab:hover{
    animation-name: tabAnimation ;  animation-duration: 0s;        animation: tabAnimation 0.0s forwards;

  }
  table{

     border-top-left-radius: 10px;border-top-right-radius: 10px;
      border-bottom-left-radius: 10px;border-bottom-right-radius: 10px;
  }
  </style>


    <table align="right" border="0" style="width: 100%; text-align: center ;">
        <tr>
            <td onclick="sendToHome()" class="newTab" style="width: 16.6%; height: 30; color: ivory; font-family: Arial, Helvetica, sans-serif;  background-image: linear-gradient(rgba(5, 12, 0, 0.445) ,rgb(0, 0, 88));">
                Home
            </td>
            <td onclick="sendToMaths()" class="newTab" style="width: 16.6%; height: 30; color: ivory; font-family: Arial, Helvetica, sans-serif;  background-image: linear-gradient(rgba(5, 12, 0, 0.445) ,rgb(0, 0, 88));">
                Maths
            </td>
            <td onclick="sendToPhysics()" style="width: 16.6%; height: 30;color: white ; font-weight: normal; font-size: 20; font-family: Arial, Helvetica, sans-serif; background-image: linear-gradient(#00f , #009);
             border-top-left-radius: 20px;
                border-top-right-radius: 20px;
               border-bottom-left-radius: 20px;
               border-bottom-right-radius: 20px;">
                Physics
            </td>
            <td onclick="sendToChemistry()"class="newTab" style="width: 16.6%; height: 30; color: ivory; font-family: Arial, Helvetica, sans-serif;  background-image: linear-gradient(rgba(5, 12, 0, 0.445) ,rgb(0, 0, 88));">
                Chemistry
            </td>
            <td onclick="sendToProgramming()"class="newTab" style="width: 16.6%; height: 30; color: ivory; font-family: Arial, Helvetica, sans-serif;  background-image: linear-gradient(rgba(5, 12, 0, 0.445) ,rgb(0, 0, 88));">
                Programming
            </td>
            <td onclick="sendToGraphics()"class="newTab" style="width: 16.6%; height: 30; color: ivory; font-family: Arial, Helvetica, sans-serif;  background-image: linear-gradient(rgba(5, 12, 0, 0.445) ,rgb(0, 0, 88));">
                Graphics
            </td>
        </tr>

    </table>
    <br>


        <table align="center" border="2" style="margin-top: 60px;" >
            <tr style="color:white;" >
              <th style="padding-top: 5px; padding-bottom: 5px; padding-left:20px ; padding-right:20px"> <a href="#physics_notes" style="color:white;">Physics Notes Section</a></th>
              <th  style="padding-top: 5px; padding-bottom: 5px; padding-left:20px ; padding-right:20px"> <a href="#physics_rec" style="color:white;">Physics Video Section</a></th>
            </tr>
        </table>



        <div id="physics_notes">

        <br>
        <table align="center"  border="1"  style=" background: black ; margin-top: 50 ;">

            <tr>
                <th colspan="4" style="color: white; padding-top: 5; padding-bottom: 5; font-family:cursive; font-size: 20;">Physics Notes</th>
            </tr>
            <tr style="width: 100%;" align="center">
                <th align="center" style="color: white; width: 100;  padding-top:5px; padding-bottom:5px;">Sr No.</th>
                <th style="color: white; width: 300; padding-top:5px; padding-bottom:5px;">Topic</th>
                <th style="color: white; width: 200; padding-top:5px; padding-bottom:5px;">Discription</th>
                <th style="color: white;  width: 200; padding-top:5px; padding-bottom:5px;">Download</th>

            </tr>



        </table>
        </div>

        <br>
        <div id="physics_rec">

        <br>
        <table align="center"  border="1"  style="  border-top-left-radius: 10px;border-top-right-radius: 10px; background: black ; margin-top: 50 ;">

            <tr>
                <th colspan="4" style="color: white; padding-top: 5; padding-bottom: 5; font-family:cursive; font-size: 20;">Recorded Videoes</th>
            </tr>
            <tr style="width: 100%;" align="center">
                <th align="center" style="color: white; width: 100;  padding-top:5px; padding-bottom:5px;">Date</th>
                <th style="color: white; width: 300; padding-top:5px; padding-bottom:5px;">Recorded Lecture</th>
                <th style="color: white; width: 200; padding-top:5px; padding-bottom:5px;">Topics</th>
                <th style="color: white;  width: 200; padding-top:5px; padding-bottom:5px;">Reference Video</th>

            </tr>

        </table>
        </div>







    <script>

        function sendToPhysics(){
            document.location.replace("physics.php");
        }
        function sendToHome(){
            document.location.replace("home.php");
        }
        function sendToMaths(){
            document.location.replace("maths.php");
        }
        function sendToGraphics(){
            document.location.replace("graphics.php");
        }
        function sendToChemistry(){
            document.location.replace("chemistry.php");
        }
        function sendToProgramming(){
            document.location.replace("programming.php");
        }
        function sendToLoginPage(){
            document.location.replace("index.php");
        }
        function putItem(key , value) {
            sessionStorage.setItem(key, value);
        }
        function getItem(key) {
           return sessionStorage.getItem(key);
        }
        function onStart() {
           putItem("videourl" , "na");
           var x = getItem("videourl");
        }

    </script>







</body>

</html>
