
<!DOCTYPE html>
<html>
<head>
<title></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://kit.fontawesome.com/258bab96e7.js" crossorigin="anonymous"></script>
<style>
    /* General styles */
    body {
      font-family: Arial, sans-serif;
      text-align: right;
      direction: rtl;
      background-position: center;
      padding: 0;
      margin: 0;
      background-attachment: fixed;
    }

    .container {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 5%;
      position: relative;
      z-index: 2;
       position: fixed;
            justify-content: center;
            height: 97vh;
            width: 40%;
            right: 10%;
    }

    .form-group {
      margin-bottom: 2px;
      position: relative;
    }
    .container {
            position: fixed;
            justify-content: center;
            height: 97vh;
            width: 40%;
            right: 10%;
        }
        .sidebar {
          position: fixed;
            right: 0%;
            width: 20%;
            height: 100%;
            background: linear-gradient(130deg, #a2b3c5, #dadada);
            border-radius: 5px;
            padding: 20px;
            overflow-y: auto; 
            top:0%;
            border:#4a8cdb;
            box-shadow: 0 4px 8px rgba(19, 108, 168, 0.2); /* Adding shadow */
        }

        .sidebar button {
            display: flex;
            align-items: center;
            justify-content: flex-start;
            background: linear-gradient(130deg, #a2b3c5, #dadada);
            border: none;
            border-radius: 10px;
            width: 100%;
            padding: 5px;
            margin-bottom: 10px;
            color: #000;
            text-align: right;
            transition: background-color 0.3s, transform 0.2s;
            font-family: "monospace", sans-serif; /* تحسين نوع الخط */
            font-size: 20px; /* تحسين حجم الخط */
            position: relative; /* لضبط المواضع الداخلية */
        }
        .sidebar button:hover {
            background-color: #85b8c2;
            transform: scale(1.02);
        }

        .sidebar button:active {
            background-color:#6f9db7;
            transform: scale(0.80);
        }

        .sidebar img {
          margin-right: 3px; /* المسافة بين الأيقونة والنص */
            font-size: 20px;
        }

        .sidebar h2 {
         font-size: 25px; /* حجم النص */
         margin: 5%; /* إزالة الهوامش الافتراضية */
         line-height: 0; /* تحسين المسافة بين الأسطر */
}
.mb-4.text-center {
    text-align: center;
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
      z-index: 10;
    }

    /* Modal styles */
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

    .modal {
      background-color: rgba(255, 255, 255, 0.589);
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
      transform: scale(0.8);
      transition: transform 0.3s;
      width: 50%;
    }

    .modal-container.show {
      opacity: 1;
      visibility: visible;
    }

    .modal-container.show .modal {
      transform: scale(1);
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
    #logo{
    position: absolute;
    left: 2%;
    weight: 50;
    height: 30; /* لون الأيقونة */
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
      margin: 0 15px;
    }

    .header h2 {
      margin: 0;
      font-size: 40px;
    }

  </style> 
</head>
<body style="  position: fixed;
top: 0;
left: 0;
width: 100%;
height:100vh ;
margin: 0;
background-image: url('MainImg.jpg');
background-size: cover;
background-repeat: no-repeat;
background-position: center;
opacity: 0.9;
z-index: -1;">
   <div class="header d-flex justify-content-between align-items-center px-4" 
   style="  background: linear-gradient(130deg, #dadada,  #a2b3c5);  border-bottom-width: 2px; width: 80%; margin-right: 20%; padding: 0.5% 0;">
   <div id="logo"> 
     <img src="SMS.ico" class="mx-2" width="50" height="40">
     <img src="Mortarboard.ico" alt="Description of the image" width="50" height="34" top=1% ><img src="Back.ico" alt="Description of the image" width="50" height="34" ></div>
     <img src="Settings.ico" alt="Student Icon" style="  font-family: "monospace", sans-serif
     font-size: 20px position: relative;"></div>
   @if (session('status'))
   <div class="flash-message flash-success">
     {{ session('status') }}
   </div>
  @endif

  <div class="container">
    <div class="sidebar">
      <div class="mb-4 text-center" style="top: 5%">
      <img src="Student Male.ico" >
      <div class="user-name" style="font-size: 25px;">{{ Auth::user()->name }}</div>
    </div>
    <br><br>
    <button name="Home" class="btn btn-light d-flex align-items-center mb-2" style="background-color: #97CADB; border-radius: 20px; border-style: none;" onclick="Home_button()">
      <img src="Home Screen.ico" >
      <h2>الرئيسية</h2>
    </button>
    <br>
    <button class="btn btn-light mb-2" style="background-color: #97CADB;" onclick="Settings_button()">
        <img src="Settings.ico" style="font-size:35px;">
        <h2>الإعدادات</h2>
    </button>
    <br>
    <button id="openModalBtn1" class="btn btn-light d-flex align-items-center mb-2" style="background-color: #97CADB; border-radius: 20px; border-style: none;">
      <img src="Add List.ico">
      <h2>تقديم مقترح</h2>
    </button>
    <br>
    <button id="openModalBtn4" class="btn btn-light d-flex align-items-center mb-2" style="background-color: #97CADB; border-radius: 20px; border-style: none;" onclick="Search_button()">
      <img src="Product Documents2.ico">
      <h2>مشاريع مؤرشفة</h2>
    </button>
    <br>
    <button id="openModalBtn3" class="btn btn-light d-flex align-items-center mb-2" style="background-color: #97CADB; border-radius: 20px; border-style: none;">
      <img src="Upload Document.ico">
      <h2>تحميل التوثيق</h2>
    </button>
    <br>
    <button id="openModalBtn3" class="btn btn-light d-flex align-items-center mb-2" style="background-color: #97CADB; border-radius: 20px; border-style: none;">
    <img src="Logout.ico">
                <a href="{{ route('logout') }}" class="btn" style=" text-decoration: none;">
                </a>  <h2>تسجيل خروج </h2>
            </button>
     </div>

<div class="Settings-Contener" style="background: #F1F0FB; width: 140%; height: 80%;
left: -100%; top:7%; position: absolute; border-radius: 20px; border-style: solid; border-color:grey;
z-index: 1;">
<form action="{{ route('Student_Settings.update') }}" id="f2" name="f2" method="post" enctype="multipart/form-data">
        @csrf
<input class="name" name="name" style=" background: #F1F0FB;width: 40%;height: 10%; left: 11%;
top: 5%; position: absolute; border-radius: 10px; text-align: center; font-size:30px;
"
type="text" 
name="f2"
placeholder="تغيير الأسم";
>

<div class="Changing-Email"
style=" font-size:30px;
left: 70%;
top: 7%;
position: absolute;">تغيير الاسم <img src="Contact Details.ico" style="width: 20%;height:20%"> </div>
<input type="email" class="email" name="email"
style="
background: #F1F0FB;
width: 40%;
height: 10%;
left: 11%;
top: 25%;
position: absolute;
border-radius: 10px;
text-align: center;
font-size:30px;
"
name="f2"
placeholder="تغيير البريد الإلكتروني ";
>

<div class="Changing-Name"
style=" font-size:30px;
left: 70%;
top: 25%;
position: absolute;">تغيير البريد الالكتروني <img src="Email.ico" style="width: 15%;height:15%"></div>





<div class="Changing-Name"
style=" font-size:30px;
left: 70%;
top: 54%;
position: absolute;">تغيير كلمة المرور <img src="Password.ico" style="width: 20%;height:20%">
</div>


<input type="password" class="password" name="password"
style="
background: #F1F0FB;
width: 40%;
height: 10%;
left: 11%;
top: 60%;
position: absolute;
border-radius: 10px;
text-align: center;
font-size:30px;
"
name="password"
placeholder="تغيير كلمة المرور ";>


<button class="Saving changes" 
type="submit"
style="
background: #4B80AB;
width: 30%;
height: 10%;
left: 40%;
bottom: 2%;
position: absolute;
border-radius: 10px;
border-style: none;
font-size:25px;
"

>حفظ التغييرات</button>
</div>
</form>
<script>
function Home_button(){
        window.location.href ="http://127.0.0.1:8000/Student_Home"
                }

</script>                
</body>
</html>




