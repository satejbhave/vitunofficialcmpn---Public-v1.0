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

<body onload="onStart()" style="background-color: #002;" >

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
      background-image: linear-gradient(rgb(0, 0, 200) ,rgb(50, 50, 255));
      }
  }
  table{

     border-top-left-radius: 10px;border-top-right-radius: 10px;
      border-bottom-left-radius: 10px;border-bottom-right-radius: 10px;
  }
  .newTab:hover{
    animation-name: tabAnimation ;  animation-duration: 0s;        animation: tabAnimation 0.0s forwards;

  }

  /*-------------------------------------------------------------------------*/

  @keyframes bottomTextHoverAnimation {
    from {
      color: white;
      }
    to {
      background-color: #a0a;
      }
  }
  .bottomText{
    display: flex;
    align-items: center;
    justify-content: flex-end;
    flex-direction: column;
    color: white;
  }
  .bottomText_1:hover{
    animation: bottomTextHoverAnimation 0.5s forwards;
    color: white;
    border-top-left-radius: 7px;
      border-top-right-radius: 7px;
     border-bottom-left-radius: 7px;
     border-bottom-right-radius: 7px;

  }

  /*-------------------------------------------------------------------------*/
  @keyframes disapp{
    0%{
      opacity: 1;
    }
    80% {
      opacity: 1;
    }
    90% {
      opacity: 0;
    }
    100%{
      opacity: 0;
    }

  }
  @-webkit-keyframes disapp{
    0%{
      opacity: 1;
    }
    80% {
      opacity: 1;
    }
    90% {
      opacity: 0;
    }
    100%{
      opacity: 0;
    }

  }


  #toast_wrapper{
    border-width: 5px;
    transform: translate(-50% , -50%);
    left: 50% ;
    top: 75%;
    width: 400px;
    animation-delay: 5s;
    -webkit-animation-delay: 5s;
    animation-iteration-count: 1;
    -webkit-animation-iteration-count: 1;
    animation: disapp 4s forwards;
    visibility: hidden;
    -webkit-animation: disapp 4s forwards;
    border-radius: 15px;
    box-shadow: 0 15px 30px rgba(#fff, #fff, #fff, 0.8);
    font-family: "Poppins" , sans-serif;
    position: absolute;
  }
  #toast_success{
    width: 100%;
    border-radius: 15px;
    box-shadow: 0 15px 30px rgba(#fff, #fff, #fff, 0.8);
    height: auto;
    min-height: 80px;
    align-self: center;
    padding: 5px;
    display: grid;
    border-left: 30px solid #00dd00;
  } 
  #container_1{
    align-self: center;
    font-size: large;
  }

  #container_2_btn{
    align-self: center;
    font-size: large;
    left: 100%;
    top: 10%;
    height: 25px;
    width: 26px;
    border-radius: 5px;
    position: absolute;
    background-color: white;
    border: 1.8px solid white;

  }
  #container_2_btn:hover{
    border: 1.8px solid #008800;
    background-color: #00dd00;
  }

  #container_1_Title{
    font-size: large;
  }

  #container_1_Discription{
    font-size: medium;
  }
  /*-------------------------------------------------------------------------*/

</style>


    <table align="right" border="0" style="width: 100%; text-align: center ;">
        <tr>
            <td onclick="sendToHome()" style="width: 16.6%; height: 30;color: white ;      border-top-left-radius: 20px;
                 border-top-right-radius: 20px;
                border-bottom-left-radius: 20px;
                border-bottom-right-radius: 20px; font-weight: normal; font-size: 20; font-family: Arial, Helvetica, sans-serif; background-image: linear-gradient(#00f , #009);">
                Home
            </td>
            <td onclick="sendToMaths()"  class="newTab" style="width: 16.6%; height: 30; color: ivory; font-family: Arial, Helvetica, sans-serif;  background-image: linear-gradient(rgba(5, 12, 0, 0.445) ,rgb(0, 0, 88));">
                Maths
            </td>
            <td onclick="sendToPhysics()"  class="newTab" style="width: 16.6%; height: 30; color: ivory; font-family: Arial, Helvetica, sans-serif;  background-image: linear-gradient(rgba(5, 12, 0, 0.445) ,rgb(0, 0, 88));">
                Physics
            </td>
            <td onclick="sendToChemistry()" class="newTab" style="width: 16.6%; height: 30; color: ivory; font-family: Arial, Helvetica, sans-serif;  background-image: linear-gradient(rgba(5, 12, 0, 0.445) ,rgb(0, 0, 88));">
                Chemistry
            </td>
            <td onclick="sendToProgramming()" class="newTab" style="width: 16.6%; height: 30; color: ivory; font-family: Arial, Helvetica, sans-serif;  background-image: linear-gradient(rgba(5, 12, 0, 0.445) ,rgb(0, 0, 88));">
                Programming
            </td>
            <td onclick="sendToGraphics()" class="newTab" style="width: 16.6%; height: 30; color: ivory; font-family: Arial, Helvetica, sans-serif;  background-image: linear-gradient(rgba(5, 12, 0, 0.445) ,rgb(0, 0, 88));">
                Graphics
            </td>
        </tr>

    </table>

    <br>

    <table align="center" border="2" style="margin-top: 50px;" >
        <tr style="color:white; " >
          <th style="padding-top: 5px; padding-bottom: 5px; padding-left:20px ; padding-right:20px"> <a href="#home_notice" style="color:white;">Notice Section</a></th>
      </tr>
    </table>

      <div id="home_notice">
        <br>
        <table align="center"  border="1"  style=" background: black ; margin-top: 50 ;">

            <tr>
                <th colspan="4" style="color: white; padding-top: 5; padding-bottom: 5; font-family:cursive; font-size: 20;">Notice</th>
            </tr>
            <tr style="width: 100%;" align="center">
                <th align="center" style="color: white; width: 100;  padding-top:5px; padding-bottom:5px;">Sr No.</th>
                <th style="color: white; width: 300; padding-top:5px; padding-bottom:5px;">Notice</th>
                <th style="color: white; width: 200; padding-top:5px; padding-bottom:5px;">Discription</th>
                <th style="color: white;  width: 200; padding-top:5px; padding-bottom:5px;">Links</th>
            </tr>
            <tr style="width: 100%;" align="center">
                <th style="color: #f0f; width: 100;  padding-top:5px; padding-bottom:5px;">1. </th>
                <th style="color: #f0f; width: 300; padding-top:5px; padding-bottom:5px;">2nd Semester Starting From 5th August To 17th August</th>
                <th align="left" style="color: #f0f; width: 300; padding-top:5px; padding-bottom:5px;">
                    5/8/21 - Engeneering Maths <br>
                    7/8/21 - Engeneering Physics <br>
                    10/8/21 - Engeneering Chemistry <br>
                    12/8/21 - Engeneering Graphics <br>
                    14/8/21 - Engeneering Programming <br>
                    17/8/21 - PCE
                </th>
                <th style="color: #f0f;  width: auto;; padding-top:5px; padding-bottom:5px;"><a href="assets/no_notes_available.PNG" download="Maths Notes">   <p >Time Table Of Sem 2</p> </a></th>
            </tr>




        </table>
      </div>




      <div id="toast_wrapper">
        <div id="toast_success" style="background-color: white;">
          <div id="container_1">
              <p id="container_1_Title">Success</p>
              <p id="container_1_Discription">Your Changes Are Saved</p>
          </div>
          <button id="container_2_btn" onclick="closeToastOnClick()">&times;</button>
        
        </div>

      </div>








    <div >


        <br><br><br>
        <table align="center" class="bottomText">
          <tr>
            <td>
              <p align="center" class="bottomText_1" style="padding-left:20px; padding-bottom:12px; padding-right:20px; padding-top:12px; " 
                        name="bottomText_1_name" onclick="showMsgForFeedback();">&nbsp Be Sure To Give Feedback Here &nbsp</p>
            </td>
          </tr>
        </table>


    </div>










    <script>

        function sendToPhysics(){
            document.location.assign("physics.php");
        }
        function sendToHome(){
            document.location.assign("home.php");
        }
        function sendToMaths(){
            document.location.assign("maths.php");
        }
        function sendToGraphics(){
            document.location.assign("graphics.php");
        }
        function sendToChemistry(){
            document.location.assign("chemistry.php");
        }
        function sendToProgramming(){
            document.location.assign("programming.php");
        }
        function sendToLoginPage(){
            document.location.assign("index.php");
        }
        function sendToProfilePage(){
            document.location.assign("profile_page.php");
        }
        function putItem(key , value) {
            sessionStorage.setItem(key, value);
        }
        function getItem(key) {
           return sessionStorage.getItem(key);
        }
        function onStart() {
            displayProperMessage();
        }

        function displayProperMessage() {
          // ---------------- 

          var title = "Title";
          var disc = "Discription";
          var show = false;

          // ----------------
          if(!show){
            var titEle = document.getElementById("container_1_Title");
            titEle.innerHTML = title;
            var disEle = document.getElementById("container_1_Discription");
            disEle.innerHTML = disc;
            var toast_wraperEle = document.getElementById("toast_wrapper");
            toast_wraperEle.style.visibility = "hidden";
          }else{
            var titEle = document.getElementById("container_1_Title");
            titEle.innerHTML = title;
            var disEle = document.getElementById("container_1_Discription");
            disEle.innerHTML = disc;
            var toast_wraperEle = document.getElementById("toast_wrapper");
            toast_wraperEle.style.visibility = "visible";

          }
          
          

            
        }

        function closeToastOnClick() {
          
            var toast_wraperEle = document.getElementById("toast_wrapper");
            toast_wraperEle.style.visibility = "hidden";
        }

        function showMsgForFeedback() {
          var msgClick = document.getElementsByName("bottomText_1_name")[0].value ;
          let person = prompt("Kindly Write Your Feedback In Given Prompt");
          if (person == null || person == "") {
          } else {
            //Send feedback
            const d = new Date();
            var feedback = person;

            var day = d.getDate();
            var formattedDay = ("0" + day).slice(-2);

            var month = d.getMonth() + 1;
            var formattedMon = ("0" + month).slice(-2);

            var year = d.getFullYear();

            var hour = d.getHours();
            var formattedHr = ("0" + hour).slice(-2);

            var minutes = d.getMinutes();
            var formattedMin = ("0" + minutes).slice(-2);


            var date = "" + day + "-" + formattedMon + "-" + year + " [ " + hour + ":" + formattedMin + " ]" ;


            var param = "?date=" +  date + "&feedback=" + feedback;
            var link = "https://vitunofficialscmpn.epizy.com/feedback_form.php" + param;

            document.location.replace(link);

          }


        }




    </script>











</body>

</html>
