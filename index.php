<?php
session_start();
$_SESSION["access"] = "false";
?>

<html>
<head>
    <title>Vidyalankar Unofficial Website</title>
    <link rel = "icon" href = "assets\vit_logo_madeByMe-removebg-preview.png"
        type = "image/x-icon">
</head>


<body onload="onStart()" style="background-image: linear-gradient(#005 , #005);" >

  <style>
  @keyframes submitBtnHoverAnimation {
    from {
      background-color:#b0b;
       }
    to {
      background-color:#b0b;
      width:320px;
      font-size: 21.5;
      height:40px;
      }
  }
  .submit_btn:hover{
        animation: submitBtnHoverAnimation 0.25s forwards;
  }
  .index_intro_paragraph_table{
    height: 60;
    color: white;
    width: 100%

  }

    @keyframes colorShades1 {
        14.28%  { color: #f0f;  }
        28.56%  {  color:#f0f;  }
        42.85%  { color: white ; }
        57.13%  {  color:white; }
        71.41%  {  color:white; }
        85.69%  {  color:white; }
        100%    {  color:white; }

      }
      @keyframes colorShades2 {
          14.28%  { color: #white;  }
          28.56%  {  color:#f0f;  }
          42.85%  { color: #f0f ; }
          57.13%  {  color:white; }
          71.41%  {  color:white; }
          85.69%  {  color:white; }
          100%    {  color:white; }

        }
        @keyframes colorShades3 {
            14.28%  { color: white;  }
            28.56%  {  color:white;  }
            42.85%  { color: #a0a ; }
            57.13%  {  color: #a0a; }
            71.41%  {  color: white; }
            85.69%  {  color:white; }
            100%    {  color:white; }

          }
          @keyframes colorShades4 {
              14.28%  { color: white;  }
              28.56%  {  color:white;  }
              42.85%  { color: white ; }
              57.13%  {  color: #a0a; }
              71.41%  {  color: #a0a; }
              85.69%  {  color:white; }
              100%    {  color:white; }

          }

          @keyframes colorShades5 {
              14.28%  { color: white;  }
              28.56%  {  color: white;  }
              42.85%  { color: white ; }
              57.13%  {  color:white; }
              71.41%  {  color: #a0a; }
              85.69%  {  color: #a0a; }
              100%    {  color: white; }

          }
          @keyframes colorShades6 {
              14.28%  { color: white;  }
              28.56%  {  color:white;  }
              42.85%  { color: white ; }
              57.13%  {  color:white; }
              71.41%  {  color:white; }
              85.69%  {  color: #808; }
              100%    {  color: #808;  }

          }
          @keyframes colorShades7 {
              14.28%  { color: #808;  }
              28.56%  {  color: white;  }
              42.85%  { color: white ; }
              57.13%  {  color:white; }
              71.41%  {  color:white; }
              85.69%  {  color:white; }
              100%    {  color: #808; }


          }

  .index_intro_paragraph_1{
    color: white;
    font-size: 60;
    font-family: New Century Schoolbook, TeX Gyre Schola, serif;
    animation-name: colorShades1;
    animation-duration: 1.4s;
    animation-iteration-count: infinite;


  }
  .index_intro_paragraph_2{
    color: white;
    font-size: 60;
    font-family: New Century Schoolbook, TeX Gyre Schola, serif;
    animation-name: colorShades2;
    animation-duration: 1.4s;
    animation-iteration-count: infinite;
  }
  .index_intro_paragraph_3{
      color: white;
      font-size: 60;
      font-family: New Century Schoolbook, TeX Gyre Schola, serif;
      animation-name: colorShades3;
      animation-duration:1.4s;
      animation-iteration-count: infinite;
    }
  .index_intro_paragraph_4{
      color: white;
      font-size: 60;
      font-family: New Century Schoolbook, TeX Gyre Schola, serif;
      animation-duration:1.4s;
      animation-iteration-count: infinite;
    }
  .index_intro_paragraph_5{
      color: white;
      font-size: 60;
      font-family: New Century Schoolbook, TeX Gyre Schola, serif;
      animation-name: colorShades4;
      animation-duration: 1.4s ;
      animation-iteration-count: infinite;
    }
  .index_intro_paragraph_6{
      color: white;
      font-size: 60;
      font-family: New Century Schoolbook, TeX Gyre Schola, serif;
      animation-name: colorShades5;
      animation-duration:1.4s;
      animation-iteration-count: infinite;

    }
  .index_intro_paragraph_7{
      color: white;
      font-size: 60;
      font-family: New Century Schoolbook, TeX Gyre Schola, serif;
      animation-name: colorShades6;
      animation-duration: 1.4s;
      animation-iteration-count: infinite;

    }
  .index_intro_paragraph_8{
      color: white;
      font-size: 60;
      font-family: New Century Schoolbook, TeX Gyre Schola, serif;
      animation-name: colorShades7;
      animation-duration: 1.4s;
      animation-iteration-count: infinite;


    }


/*-------------------------------------------------------------------------*/

.flip-card {
  background-color: transparent;
  width: 100%;
  height: 320;
  perspective: 2000px;
}

.flip-card-inner {
  position: relative;
  width: 100%;
  height: 100%;
  text-align: center;
  transition: transform 0.6s;
  transform-style: preserve-3d;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
}

.flip-card:hover .flip-card-inner {
  transform: rotateY(180deg);
}

.flip-card-front, .flip-card-back {
  position: absolute;
  width: 100%;
  height: 100%;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  border-top-left-radius: 20px;
  border-top-right-radius: 20px;
 border-bottom-left-radius: 20px;
 border-bottom-right-radius: 20px;

}

.flip-card-front {
  background-color: #bbb;
  color: black;
}

.flip-card-back {
  background-image: linear-gradient( rgba(200,0,200,1) ,rgba(255,0,255,0.1));
  color: white;
  transform: rotateY(180deg);

}

 /* ********************************** */

 .flip-card2 {
   background-color: transparent;
   width: 100%;
   height: 320;
   perspective: 2000px;

 }

 .flip-card-inner2 {
   position: relative;
   width: 100%;
   height: 100%;
   text-align: center;
   transition: transform 0.6s;
   transform-style: preserve-3d;
   box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);

 }

 .flip-card2:hover .flip-card-inner2 {
   transform: rotateY(180deg);
 }

 .flip-card-front2, .flip-card-back2 {
   position: absolute;
   width: 100%;
   height: 100%;
   -webkit-backface-visibility: hidden;
   backface-visibility: hidden;
   border-top-left-radius: 20px;
   border-top-right-radius: 20px;
  border-bottom-left-radius: 20px;
  border-bottom-right-radius: 20px;

 }

 .flip-card-front2 {
   background-color: #bbb;
   color: black;
 }

 .flip-card-back2 {
   background-image: linear-gradient( rgba(200,0,200,1) ,rgba(255,0,255,0.1));
   color: white;
   transform: rotateY(180deg);


 }

 /* ********************************** */

 .flip-card3 {
   background-color: transparent;
   width: 100%;
   height: 320;
   perspective: 2000p;
 }

 .flip-card-inner3 {
   position: relative;
   width: 100%;
   height: 100%;
   text-align: center;
   transition: transform 0.6s;
   transform-style: preserve-3d;
   box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
 }

 .flip-card3:hover .flip-card-inner3 {
   transform: rotateY(180deg);
 }

 .flip-card-front3, .flip-card-back3 {
   position: absolute;
   width: 100%;
   height: 100%;
   -webkit-backface-visibility: hidden;
   backface-visibility: hidden;
   border-top-left-radius: 20px;
   border-top-right-radius: 20px;
  border-bottom-left-radius: 20px;
  border-bottom-right-radius: 20px;

 }

 .flip-card-front3 {
   background-color: #bbb;
   color: black;
 }

 .flip-card-back3{
   background-image: linear-gradient( rgba(200,0,200,1) ,rgba(255,0,255,0.1));
   color: white;
   transform: rotateY(180deg);
 }



/*-------------------------------------------------------------------------*/

@keyframes bottomTextHoverAnimation {
  from {
    color: white;
    }
  to {
    color: #f0f;
    }
}
.bottomText{
  display: flex;
  justify-content: flex-end;
  flex-direction: column;
  color: white;
}
.bottomText_1:hover{
  animation: bottomTextHoverAnimation 0.5s forwards;
  color: white;
}




  </style>

    <p align="center" class="index_intro_paragraph_table">
      <table>
        <tr>
          <th> <p class="index_intro_paragraph_1"><b>V</b></p> </th>
          <th> <p class="index_intro_paragraph_2"><b>I</b></p> </th>
          <th> <p class="index_intro_paragraph_3"><b>T</b></p> </th>
          <th> <p class="index_intro_paragraph_4">&nbsp</p> </th>
          <th> <p class="index_intro_paragraph_5"><b>C</b></p> </th>
          <th> <p class="index_intro_paragraph_6"><b>M</b></p> </th>
          <th> <p class="index_intro_paragraph_7"><b>P</b></p> </th>
          <th> <p class="index_intro_paragraph_8"><b>N</b></p> </th>

        </tr>
      </table>
    </p>



    <table align="center" border="3" style="text-align: center; width:80%; color: white;">

      <tr>
        <td style=" font-size: 50; width:50% ;  font-family: Georgia ;">
            <p><u><i><b>Login</b></i></u></p>
        </td>
        <td style=" font-size: 50 ; font-family: Georgia ;">
            <p><u><i><b>Uid</b></i></u></p>
        </td>
      </tr>

      <tr align="center" >

        <th>
            <form  class="mail_login_form" method="get">
            <br>
            <h3>Enter Your Email / Phone number</h3>
            <input type="text" name="email_name" id="email_text_id" style="width:200px; height:30px ;
               border-top-left-radius: 10px;
               border-top-right-radius: 10px;
              border-bottom-left-radius: 10px;
              padding:10px;
              border-bottom-right-radius: 10px;">
            <h3>Enter Your Password</h3>
            <input type="Password" name="password_name" id="pass_text_id" style="width:200px; height:30px ;
               border-top-left-radius: 10px;
               border-top-right-radius: 10px;
              border-bottom-left-radius: 10px;
              padding:10px;
              border-bottom-right-radius: 10px;">
            <br>
          </form>
          <br>
          <button type="submit" onclick="LoginBtnOnClicked()"  class="submit_btn" value="Login" style="width:220px; height:35px;
              font-size: 21px;
              background-color:#a0a;
              color: white;
             border-top-left-radius: 10px;
             border-top-right-radius: 10px;
            border-bottom-left-radius: 10px;
            border-bottom-right-radius: 10px;">Submit</button>

            <p> <br> </p>
        </th>

        <th>
          <form  class="mail_login_form_" method="get">
          <br>
          <h3>Enter Your Unique Identity Number ( UID )</h3>
          <input type="text" name="uid_name" id="uid_text_id_" style="width:200px; height:30px ;
             border-top-left-radius: 10px;
             border-top-right-radius: 10px;
            border-bottom-left-radius: 10px;
            padding:10px;
            border-bottom-right-radius: 10px;">

        </form>
        <br>
        <button onclick="UIDBtnOnClicked()"  class="submit_btn_2" value="Login2" style="width:220px; height:35px;
            font-size: 21px;
            background-color:#a0a;
            color: white;
           border-top-left-radius: 10px;
           border-top-right-radius: 10px;
          border-bottom-left-radius: 10px;
          border-bottom-right-radius: 10px;">Submit</button>

          <p> <br> </p>
        </th>


    </tr>

    </table>







        <table align="center" cellspacing="40px"  width="90%">

          <tr >
            <th>
                  <div class="flip-card">
                    <div class="flip-card-inner">
                      <div class="flip-card-front">
                        <img src="assets\vit_main_pathway_round.png" alt="Avatar" width="100%" style="height:320;">
                      </div>
                      <div class="flip-card-back">
                        <h2>Vidyalankar Hall</h2>
                      </div>
                    </div>
                  </div>
            </th>

            <th>
              <div class="flip-card2">
                <div class="flip-card-inner2">
                  <div class="flip-card-front2">
                    <img src="assets\vit_main_office_round.png" alt="Avatar" width="100%" style="height:320;">
                  </div>
                  <div class="flip-card-back2">
                    <h2>Vidyalankar Office</h2>
                  </div>
                </div>
              </div>
            </th>

            <th>
              <div class="flip-card3">
                <div class="flip-card-inner3">
                  <div class="flip-card-front3">
                    <img src="assets\vit_auditorium_round.png" alt="Avatar" width="100%" style="height:320;">
                  </div>
                  <div class="flip-card-back3">
                    <h2>Vidyalankar Auditorium</h2>
                  </div>
                </div>
              </div>
            </th>
          </tr>

        </table>





        <div class="bottomText">
          <p align="center" class="bottomText_1">For Any Help, Contact Site Owner</p>

        </div>





    <script >


         function LoginBtnOnClicked() {
           var email = document.getElementsByName("email_name")[0].value ;
           var password = document.getElementsByName("password_name")[0].value ;
           var param = "?email="+ email +  "&pass="+ password;
           sessionStorage.setItem("email", email);
           sessionStorage.setItem("pass", password);
           var link = "https://vitunofficialscmpn.epizy.com/login_check.php"+param;

         
           document.location.replace(link);

         }

         function UIDBtnOnClicked() {
           var uid = document.getElementById("uid_text_id_").value;
           var param = "?uid="+ uid;
           var link = "https://vitunofficialscmpn.epizy.com/uid_check.php"+param;

        
          document.location.replace(link);

         }
        
         function onStart() {
           if (window.location.href == "http://vitunofficialscmpn.epizy.com") {
             document.location.replace("https://vitunofficialscmpn.epizy.com");
           }

         }

         function getCookie(name) {
             var nameEQ = name + "=";
             var ca = document.cookie.split(';');
             for(var i=0;i < ca.length;i++) {
                 var c = ca[i];
                 while (c.charAt(0)==' ') c = c.substring(1,c.length);
                 if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
             }
             return null;
         }

    </script>









</body>

</html>
