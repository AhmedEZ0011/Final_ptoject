<!DOCTYPE html>
<html>

<head>




  <title></title>
  <meta name="csrf-token" content="{{csrf_token()}}">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://kit.fontawesome.com/258bab96e7.js" crossorigin="anonymous"></script>

  <style>
    /* Container styles */
    .container {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 5%;
      position: relative;
      z-index: 2;
    }

    /* Button styles */


    /* Modal container styles */
    .modal-container {
      position: absolute;
      inset: 0;
      background-color: rgba(0, 0, 0, 0.5);
      display: flex;
      justify-content: center;
      align-items: center;
      opacity: 0;
      visibility: hidden;
      transition: opacity 0.3s, visibility 0.3s;
      z-index: 1;

    }

    /* Modal styles */
    .modal {

      background-color: rgba(255, 255, 255, 0.589);
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
      transform: scale(0.8);
      transition: transform 0.3s;
      height: 60%;
      width: 50%;

    }

    /* Show modal styles */
    .modal-container.show {
      opacity: 1;
      visibility: visible;
    }

    .modal-container.show .modal {
      transform: scale(1);
    }

    body {
      font-family: Arial, sans-serif;
      background-color: #f5f5f5;
      text-align: right;
      direction: rtl;
      margin: 0;
      padding: 0;
    }

    a{
      color: #000;
    }
    .container {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .popup {
      background-color: #d3d0d0;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      width: 500px;
      height: 200px;
      position: relative;

    }

    .close-btn {
      position: absolute;
      top: 15px;
      right: 15px;
      background: none;
      border: none;
      font-size: 18px;
      cursor: pointer;
      color: red;
    }

    .header {
      display: flex;
      align-items: center;
      justify-content: center;
      margin-bottom: 1px;
    }

    .header .cloud-icon {
      font-size: 40px;
      width: 40px;
      height: 40px;
      margin-right: 15px;
      margin-left: 15px;
    }

    .header h2 {
      margin: 0;
      font-size: 40px;
    }

    .form-group {
      margin-bottom: 2px;
      position: relative;
    }

    .form-group input {
      width: calc(100% - 10px);
      padding: 1px;
      padding-left: 30px;
      border: 1px solid #bdb6b6;
      border-radius: 5px;
      box-sizing: border-box;
    }

    button[type="submit"] {
      width: 30%;
      padding: 10px;
      border: none;
      background-color: #5c9ded;
      color: #fff;
      font-size: 16px;
      border-radius: 5px;
      cursor: pointer;
      margin-top: 4%;
      margin-right: 37%;
    }

    button[type="submit"]:hover {
      background-color: #4a8cdb;
    }
    .flash-message {
    border-radius: 5px;
    font-size: 25px;
    text-align: center;
    width: 78%;
    height: 7%;
    left: 0%;
    top: 13%;
    position: absolute;
}

.flash-success {
    background-color: #d4edda;
    color: #155724;
    border: 1px solid #c3e6cb;
}


  </style>

</head>

<body style=" background:#F1F0FB;   
    
">

  <div class="heder" style="
      width: 70%;
      height: 10%;
      left: 2%;
      top: 2%;
      position: absolute;
      border-bottom: 5px solid black;">

    <a href="{{ route('logout') }}">
      <i name="logout" class="fa-solid fa-arrow-right-from-bracket" style="font-size:35px; 
      position: absolute;
      left:2%;
      top:25%;" action="{{route('Sing_up.store')}}" method="post"></i>
    </a>
    
      <i name="settings" class="fa-solid fa-gear" style="font-size:25px; 
      position: absolute;
      left:8%;
      top:40%;" onclick="Settings_button()"></i>
    
      <i class="fa-solid fa-bell" style="font-size:25px; 
      position: absolute;
      left:13%;
      top:40%;"></i>
    
    <div class="Home-page" style="left:50%;
     top:30%;
     font-size:40px;
      position: absolute;">
      <i class="fa-solid fa-house"></i>     Home   
    </div>
  </div>

  @if (session('status'))
  <div class="flash-message flash-success">
      {{ session('status') }}
  </div>
@endif



  <div class="ContenFunction" style="
      width: 20%;
      height: 95%;
      right: 2%;
      top: 2%;
      position: absolute;
      background: #97CADB;
      border-radius: 40px;
      
  ">
    <div class="UserName_Icon">
      <i class="fa-solid fa-user-tie" style="font-size:40px; 
    position: absolute;
    left:80%;
    top:9%;
        
         "></i>
      <div class="UserName" style="
    position:absolute;
    font-size:20px;
    right:27%;
    top:12%;
    ">{{ Auth::user()->name}}</div>
    </div>
    <button name="Home" class="Home" style="
  background-color: #97CADB;
  height: 9%;
  left: 4%;
  right:4%;
  top: 20%;
  position: absolute;
  border-radius: 20px;
  border-style: none;
  
  " onclick="Home_button()">

      <i class="fa-solid fa-house" style="font-size:35px; 
        right:4%;
        top:20%;
        position: absolute;
        "></i>
      <h2>الرئيسية</h2>
    </button>

    <button id="openModalBtn1" class="btn-primary" style="background-color: #97CADB;
  height: 9%;
  left: 4%;
  right:4%;
  top: 30%;
  position: absolute;
  border-radius: 20px;
  border-style: none;
">
      <i class="fa-solid fa-cloud-arrow-down" style="font-size:35px; 
  right:4%;
  top:20%;
  position: absolute;"></i>
      <h2>تقديم مقترح</h2>
    </button>



    <button id="openModalBtn2" class="btn-primary" style="background-color: #97CADB;
        height: 9%;
        left: 4%;
        right:4%;
        top: 50%;
        position: absolute;
        border-radius: 20px;
        border-style: none;
">
      <i class="fa-regular fa-clipboard" style="font-size:35px; 
        right:4%;
        top:20%;
        position: absolute;"></i>
      <h2>إرسال تقرير  </h2>
    </button>
    <button id="openModalBtn3" class="btn-primary" style="background-color: #97CADB;
        height: 9%;
        left: 4%;
        right:4%;
        top: 60%;
        position: absolute;
        border-radius: 20px;
        border-style: none;
">
      <i class="fa-solid fa-file-arrow-down" style="font-size:35px; 
        right:4%;
        top:20%;
        position: absolute;"></i>
      <h2>تحميل التوثيق</h2>
    </button>
    <button id="openModalBtn4" class="btn-primary" style="background-color: #97CADB;
        height: 9%;
        left: 4%;
        right:4%;
        top: 40%;
        position: absolute;
        border-radius: 20px;
        border-style: none;
        
">
      <i class="fa-solid fa-book-bookmark" style="font-size:35px; 
        right:4%;
        top:20%;
        position: absolute;"></i>

      <h2>مشاريع مؤرشفة</h2>

  </div>




  <div class="advertisement" style="background: #97CADB;
  width: 20%;
  height: 10%;
  left: 30%;
  top: 20%;
  position: absolute;
  border-radius: 20px;
  z-index: 1;">

    <i class="fa-regular fa-clipboard" style=" font-size:37px; 
                position: absolute;
                right: 15%;
                top: 20%;
                "></i>
    <div class="advertisementName" style="position:absolute;
  font-size:33px;
  right:35%;
  top:25%;">
      الإعلانات
    </div>

  </div>
  <div class="advertisementContener" style="background: #F1F0FB;
width: 60%;
height: 69%;
left: 11%;
top: 27%;
position: absolute;
border-radius: 20px;
border-style: solid;
border-color:grey;
">

  </div>





</body>

</html>