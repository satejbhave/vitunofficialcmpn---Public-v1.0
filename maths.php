
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

<body style="background-color: #002;" onload="onStart()" >

  <style>


  #scroll_up_btn_id {
  display: none;
  position: fixed;
  bottom: 20px;
  right: 30px;
  z-index: 99;
  font-size: 18px;
  border: none;
  outline: none;
  background-color: red;
  color: white;
  cursor: pointer;
  padding: 15px;
  border-radius: 4px;
}

#scroll_up_btn_id:hover {
  background-color: #555;
}

  html {scroll-behavior: smooth;
  }

  @keyframes tabAnimation {
    from {
     background-image: linear-gradient(rgba(5, 12, 0, 0.445) ,rgb(0, 0, 88));
      }
    to {
       border-top-left-radius: 20px;
       border-top-right-radius: 20px;
      border-bottom-left-radius: 20px;
      border-bottom-right-radius: 20px;
      background-image: linear-gradient(rgb(0, 0, 200) ,rgb(50, 50, 255));
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
            <td onclick="sendToHome()" class="newTab"
                style="width: 16.6%; height: 30 ;     color: ivory; font-family: Arial, Helvetica, sans-serif; background-image: linear-gradient(rgba(5, 12, 0, 0.445) ,rgb(0, 0, 88));">
                Home
            </td>
            <td onclick="sendToMaths()"
                style="width: 16.6%; height: 30; color: white ; font-weight: normal; font-size: 20; font-family: Arial, Helvetica, sans-serif; background-image: linear-gradient(#00f , #009);
                   border-top-left-radius: 20px;
                   border-top-right-radius: 20px;
                  border-bottom-left-radius: 20px;
                  border-bottom-right-radius: 20px;">
                Maths
            </td>
            <td onclick="sendToPhysics()" class="newTab"
                style="width: 16.6%; height: 30; color: ivory; font-family: Arial, Helvetica, sans-serif;  background-image: linear-gradient(rgba(5, 12, 0, 0.445) ,rgb(0, 0, 88));">
                Physics
            </td>
            <td onclick="sendToChemistry()" class="newTab"
                style="width: 16.6%; height: 30; color: ivory; font-family: Arial, Helvetica, sans-serif;  background-image: linear-gradient(rgba(5, 12, 0, 0.445) ,rgb(0, 0, 88));">
                Chemistry
            </td>
            <td onclick="sendToProgramming()"class="newTab"
                style="width: 16.6%; height: 30; color: ivory; font-family: Arial, Helvetica, sans-serif;  background-image: linear-gradient(rgba(5, 12, 0, 0.445) ,rgb(0, 0, 88));">
                Programming
            </td>
            <td onclick="sendToGraphics()"class="newTab"
                style="width: 16.6%; height: 30; color: ivory; font-family: Arial, Helvetica, sans-serif;  background-image: linear-gradient(rgba(5, 12, 0, 0.445) ,rgb(0, 0, 88));">
                Graphics
            </td>
        </tr>

    </table>

    <br>

    <table align="center" border="2" style="margin-top: 50px;" >
        <tr style="color:white; " >
          <th style="padding-top: 5px; padding-bottom: 5px; padding-left:20px ; padding-right:20px"> <a href="#maths_notes" style="color:white;">Maths Notes Section</a></th>
          <th  style="padding-top: 5px; padding-bottom: 5px; padding-left:20px ; padding-right:20px"> <a href="#maths_rec" style="color:white;">Recorded Video Section</a></th>
        </tr>
    </table>





    <div id="maths_notes">
      <br>
      <table align="center"  border="1"  style=" background: black ; margin-top: 50 ;">

        <tr>
            <th colspan="4" style="color: white; padding-top: 5; padding-bottom: 5; font-family:cursive; font-size: 20;">Maths Notes</th>
        </tr>
        <tr style="width: 100%;" align="center">
            <th align="center" style="color: white; width: 100;  padding-top:5px; padding-bottom:5px;">Sr No.</th>
            <th style="color: white; width: 300; padding-top:5px; padding-bottom:5px;">Topic</th>
            <th style="color: white; width: 200; padding-top:5px; padding-bottom:5px;">Discription</th>
            <th style="color: white;  width: 200; padding-top:5px; padding-bottom:5px;">Download</th>

        </tr>

        <tr style="width: 100%; height: 40;" align="center">
           <td style="color: white;">1.</td>
           <td style="color: white;">17/6/21 Maths Lecture</basfd></td>
           <td style="color: white;">Topics - <ol style="text-align: start;"><li>Gamma Function</li><li>Beta Function</li></ol></td>
           <td> <a href="assets/no_notes_available.PNG" download="Maths Notes">  <img  src="assets/download_icon_1.png" style="transform: translateX(-70px); width: 20; height: 20; position: absolute; " > <p >Download</p> </a></td>

        </tr>











<!-------------------->
<tr style="width: 100%; height: 40;" align="center">
   <td style="color: white;">1.</td>
   <td style="color: white;">17/6/21 Maths Lecture</basfd></td>
   <td style="color: white;">Topics - <ol style="text-align: start;"><li>Gamma Function</li><li>Beta Function</li></ol></td>
   <td> <a href="assets/no_notes_available.PNG" download="Maths Notes">  <img  src="assets/download_icon_1.png" style="transform: translateX(-70px); width: 20; height: 20; position: absolute; " > <p >Download</p> </a></td>

</tr>
<tr style="width: 100%; height: 40;" align="center">
   <td style="color: white;">1.</td>
   <td style="color: white;">17/6/21 Maths Lecture</basfd></td>
   <td style="color: white;">Topics - <ol style="text-align: start;"><li>Gamma Function</li><li>Beta Function</li></ol></td>
   <td> <a href="assets/no_notes_available.PNG" download="Maths Notes">  <img  src="assets/download_icon_1.png" style="transform: translateX(-70px); width: 20; height: 20; position: absolute; " > <p >Download</p> </a></td>

</tr>
<tr style="width: 100%; height: 40;" align="center">
   <td style="color: white;">1.</td>
   <td style="color: white;">17/6/21 Maths Lecture</basfd></td>
   <td style="color: white;">Topics - <ol style="text-align: start;"><li>Gamma Function</li><li>Beta Function</li></ol></td>
   <td> <a href="assets/no_notes_available.PNG" download="Maths Notes">  <img  src="assets/download_icon_1.png" style="transform: translateX(-70px); width: 20; height: 20; position: absolute; " > <p >Download</p> </a></td>

</tr>
<tr style="width: 100%; height: 40;" align="center">
   <td style="color: white;">1.</td>
   <td style="color: white;">17/6/21 Maths Lecture</basfd></td>
   <td style="color: white;">Topics - <ol style="text-align: start;"><li>Gamma Function</li><li>Beta Function</li></ol></td>
   <td> <a href="assets/no_notes_available.PNG" download="Maths Notes">  <img  src="assets/download_icon_1.png" style="transform: translateX(-70px); width: 20; height: 20; position: absolute; " > <p >Download</p> </a></td>

</tr>
<tr style="width: 100%; height: 40;" align="center">
   <td style="color: white;">1.</td>
   <td style="color: white;">17/6/21 Maths Lecture</basfd></td>
   <td style="color: white;">Topics - <ol style="text-align: start;"><li>Gamma Function</li><li>Beta Function</li></ol></td>
   <td> <a href="assets/no_notes_available.PNG" download="Maths Notes">  <img  src="assets/download_icon_1.png" style="transform: translateX(-70px); width: 20; height: 20; position: absolute; " > <p >Download</p> </a></td>

</tr>
<tr style="width: 100%; height: 40;" align="center">
   <td style="color: white;">1.</td>
   <td style="color: white;">17/6/21 Maths Lecture</basfd></td>
   <td style="color: white;">Topics - <ol style="text-align: start;"><li>Gamma Function</li><li>Beta Function</li></ol></td>
   <td> <a href="assets/no_notes_available.PNG" download="Maths Notes">  <img  src="assets/download_icon_1.png" style="transform: translateX(-70px); width: 20; height: 20; position: absolute; " > <p >Download</p> </a></td>

</tr>
<tr style="width: 100%; height: 40;" align="center">
   <td style="color: white;">1.</td>
   <td style="color: white;">17/6/21 Maths Lecture</basfd></td>
   <td style="color: white;">Topics - <ol style="text-align: start;"><li>Gamma Function</li><li>Beta Function</li></ol></td>
   <td> <a href="assets/no_notes_available.PNG" download="Maths Notes">  <img  src="assets/download_icon_1.png" style="transform: translateX(-70px); width: 20; height: 20; position: absolute; " > <p >Download</p> </a></td>

</tr>
<tr style="width: 100%; height: 40;" align="center">
   <td style="color: white;">1.</td>
   <td style="color: white;">17/6/21 Maths Lecture</basfd></td>
   <td style="color: white;">Topics - <ol style="text-align: start;"><li>Gamma Function</li><li>Beta Function</li></ol></td>
   <td> <a href="assets/no_notes_available.PNG" download="Maths Notes">  <img  src="assets/download_icon_1.png" style="transform: translateX(-70px); width: 20; height: 20; position: absolute; " > <p >Download</p> </a></td>

</tr>
<tr style="width: 100%; height: 40;" align="center">
   <td style="color: white;">1.</td>
   <td style="color: white;">17/6/21 Maths Lecture</basfd></td>
   <td style="color: white;">Topics - <ol style="text-align: start;"><li>Gamma Function</li><li>Beta Function</li></ol></td>
   <td> <a href="assets/no_notes_available.PNG" download="Maths Notes">  <img  src="assets/download_icon_1.png" style="transform: translateX(-70px); width: 20; height: 20; position: absolute; " > <p >Download</p> </a></td>

</tr>

<tr style="width: 100%; height: 40;" align="center">
   <td style="color: white;">1.</td>
   <td style="color: white;">17/6/21 Maths Lecture</basfd></td>
   <td style="color: white;">Topics - <ol style="text-align: start;"><li>Gamma Function</li><li>Beta Function</li></ol></td>
   <td> <a href="assets/no_notes_available.PNG" download="Maths Notes">  <img  src="assets/download_icon_1.png" style="transform: translateX(-70px); width: 20; height: 20; position: absolute; " > <p >Download</p> </a></td>

</tr>    <tr style="width: 100%; height: 40;" align="center">
       <td style="color: white;">1.</td>
       <td style="color: white;">17/6/21 Maths Lecture</basfd></td>
       <td style="color: white;">Topics - <ol style="text-align: start;"><li>Gamma Function</li><li>Beta Function</li></ol></td>
       <td> <a href="assets/no_notes_available.PNG" download="Maths Notes">  <img  src="assets/download_icon_1.png" style="transform: translateX(-70px); width: 20; height: 20; position: absolute; " > <p >Download</p> </a></td>

    </tr>    <tr style="width: 100%; height: 40;" align="center">
           <td style="color: white;">1.</td>
           <td style="color: white;">17/6/21 Maths Lecture</basfd></td>
           <td style="color: white;">Topics - <ol style="text-align: start;"><li>Gamma Function</li><li>Beta Function</li></ol></td>
           <td> <a href="assets/no_notes_available.PNG" download="Maths Notes">  <img  src="assets/download_icon_1.png" style="transform: translateX(-70px); width: 20; height: 20; position: absolute; " > <p >Download</p> </a></td>

        </tr>    <tr style="width: 100%; height: 40;" align="center">
               <td style="color: white;">1.</td>
               <td style="color: white;">17/6/21 Maths Lecture</basfd></td>
               <td style="color: white;">Topics - <ol style="text-align: start;"><li>Gamma Function</li><li>Beta Function</li></ol></td>
               <td> <a href="assets/no_notes_available.PNG" download="Maths Notes">  <img  src="assets/download_icon_1.png" style="transform: translateX(-70px); width: 20; height: 20; position: absolute; " > <p >Download</p> </a></td>

            </tr>    <tr style="width: 100%; height: 40;" align="center">
                   <td style="color: white;">1.</td>
                   <td style="color: white;">17/6/21 Maths Lecture</basfd></td>
                   <td style="color: white;">Topics - <ol style="text-align: start;"><li>Gamma Function</li><li>Beta Function</li></ol></td>
                   <td> <a href="assets/no_notes_available.PNG" download="Maths Notes">  <img  src="assets/download_icon_1.png" style="transform: translateX(-70px); width: 20; height: 20; position: absolute; " > <p >Download</p> </a></td>

                </tr>    <tr style="width: 100%; height: 40;" align="center">
                       <td style="color: white;">1.</td>
                       <td style="color: white;">17/6/21 Maths Lecture</basfd></td>
                       <td style="color: white;">Topics - <ol style="text-align: start;"><li>Gamma Function</li><li>Beta Function</li></ol></td>
                       <td> <a href="assets/no_notes_available.PNG" download="Maths Notes">  <img  src="assets/download_icon_1.png" style="transform: translateX(-70px); width: 20; height: 20; position: absolute; " > <p >Download</p> </a></td>

                    </tr>

<!--------------------->




    </table>
    </div>

    <br>

    <div id="maths_rec">
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

        <tr style="width: 100%; height: 40;" align="center">
           <td style="color: white;">25-06-21</td>
           <td style="color: white;"><a style="color: blue;" href="lecturesvideoes/maths180621.html">No Recorded Lecture</a></basfd></td>
           <td style="color: white;"><ol style="text-align: start;"><li>Gamma Function</li><li>Beta Function</li></ol></td>
           <td style="color: white;"><ol  style="text-align: start;">
                                <li><a style="color: blue;" href="https://www.youtube.com/watch?v=IaG-24IhULY"  >Beta Function</a></li>
                                <li><a style="color: blue;" href="https://www.youtube.com/watch?v=SduCO-r_TOA" >Gamma Function</a></li></ol></td>

        </tr>


    </table>
    </div>
























    <script>

        function sendToPhysics() {
            document.location.replace("physics.php");
        }
        function sendToHome() {
            document.location.replace("home.php");
        }
        function sendToMaths() {
            document.location.replace("maths.php");
        }
        function sendToGraphics() {
            document.location.replace("graphics.php");
        }
        function sendToChemistry() {
            document.location.replace("chemistry.php");
        }
        function sendToProgramming() {
            document.location.replace("programming.php");
        }
        function sendToLoginPage() {
            document.location.replace("index.php");
        }

        function putItem(key , value) {
            sessionStorage.setItem(key, value);
        }

        function putVideoURLItem(integer) {
            sessionStorage.setItem("videourl", integer);

        }
        function getItem(key) {
           return sessionStorage.getItem(key);
        }
        function onStart() {
    
        }

    </script>






</body>

</html>
