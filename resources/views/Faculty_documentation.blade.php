
<!DOCTYPE html>
<html>
<head>
<title></title>
<meta name="csrf-token" content="{{csrf_token()}}">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://kit.fontawesome.com/258bab96e7.js" crossorigin="anonymous"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/258bab96e7.js" crossorigin="anonymous"></script>
    <script>
        function removeBorder() {
            document.getElementById('myElement').style.border = 'none';
        }
    </script>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            text-align: right;
            direction: rtl;
            margin: 0;
            padding: 0;
            background-attachment: fixed;
        }

        .container {
            position: fixed;
            justify-content: center;
            height: 97vh;
            width: 40%;
            right: 10%;
            top: 15%;
        }

        .sidebar {
            background: linear-gradient(130deg, #a2b3c5, #dadada); 
            position: fixed;
            right: 0%;
            width: 20%;
            height: 100%;
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
        .content {
            margin-right: 30%;
            width: 200%;
            height: 80%;
            background: #F1F0FB;
            border-radius: 20px;
            border: 1px solid grey;
            overflow: auto;
            padding: 20px;
            top: 15%;
        }
        .modal-content {
            background-color: rgba(255, 255, 255, 0.9);
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
            top: 15%;
        }

        .form-group input, .form-group select {
            border: 1px solid #bdb6b6;
            border-radius: 5px;
            box-sizing: border-box;
        }

        .form-group input[type="text"] {
            width: 100%;
        }

        button[type="submit"] {
            width: 100%;
            padding: 10px;
            border: none;
            background-color: #5c9ded;
            color: #fff;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
        }

        button[type="submit"]:hover {
            background-color: #4a8cdb;
        }

        .header img {
            font-size: 35px;
        }

    

.label{
  font-size: 25px;
  font-family: "monospace", sans-serif;
}
#logo{
    position: absolute;
    top: 1.5%;
    left: 1%;
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
    .custom-close {
            background-color: #f00; /* لون الخلفية */
            color: #fff; /* لون النص */
            border: 2px solid #fff; /* لون الحدود */
            border-radius: 50%; /* يجعل الزر دائري */
            width: 40px; /* عرض الزر */
            height: 40px; /* ارتفاع الزر */
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px; /* حجم الخط */
            padding: 0;
        }
        
        .custom-close:hover {
            background-color: rgb(194, 90, 90); /* لون الخلفية عند المرور بالماوس */
            border-color: #c00; /* لون الحدود عند المرور بالماوس */
        }
        
        .custom-close:focus {
            outline: none; /* إزالة حدود التركيز الافتراضية */
        }
    
                        table {
                        width: 100%;
                        border-collapse: collapse;
                }

                th,
                td {
                        text-align: left;
                        padding: 8px;
                        border-bottom: 1px solid #ddd;
                        text-align: center;
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
    <img src="Mortarboard.ico" alt="Description of the image" width="50" height="34" top=0% >
    <img src="Back.ico" alt="Description of the image" width="50" height="34" ></div>
    <img src="Copy.ico" alt="Student Icon" style="font-size: 100%; font-family:Arial, Helvetica, sans-serif;"></div>

  </div>
 
 

    <div class="container">
        <div class="sidebar">
            <div class="mb-4 text-center">
                <img src="Administrator Male.ico" alt="Admin">
                <div>{{ Auth::user()->name }}</div>
            </div>
                    <button class="btn btn-light mb-2" style="background-color: #97CADB;" onclick="Home_button()">
                        <img src="Home Screen.ico" style="font-size:35px;">
                        <h2>الرئيسية</h2>
                    </button>
                    <br>
                    <button class="btn btn-light mb-2" style="background-color: #97CADB;" onclick=Setting()>
                        <img src="Settings.ico" style="font-size:35px;">
                        <h2>الإعدادات</h2>
                    </button>
                    <br>
<button class="btn btn-light mb-2" style="background-color: #97CADB;"onclick=Faculty_project_students_button()>  
        <img src="Student Male.ico" style="font-size:35px;">
               <h2>طلبة المشاريع</h2>
</button>
<br>
<button class="btn btn-light mb-2" style="background-color: #97CADB;" onclick=Faculty_proposal_students_button()>  
        <img src="Sign Document.ico" style="font-size:35px;">
        <h2>المقترحات</h2> 
</button>
<br>
<button class="btn btn-light mb-2" style="background-color: #97CADB;" onclick=Faculty_documentation_button()>  
        <img src="Copy.ico" style="font-size:35px;">
        <h2>ملفات التوثيق</h2> 
</button>
<br>
<button id="openModalBtn3" class="btn btn-light d-flex align-items-center mb-2" style="background-color: #97CADB; border-radius: 20px; border-style: none;">
<img src="Logout.ico">
            <a href="{{ route('logout') }}" class="btn" style=" text-decoration: none; font-size: 25px; /* حجم النص */
            margin: 5%; 
            line-height: 0;
            font-family: monospace, sans-serif;">
             تسجيل خروج 
          </a> 
        </button>
</div>
 </div>
    </div>
</div>
<div class="advertisementContener"
style="background: #F1F0FB;
width: 74%;
height: 79%;
left: 1%;
top: 17%;
position: absolute;
border-radius: 20px;
border-style: solid;
border-color:grey;
z-index: 1;">
    <table style="position: absolute;
    top: 10%;
    border=0.5">
                                <tr>



                                    <td> </td>
                                    <td>عنوان</td>


                            </tr>
                            @if(count($projects_list))
                            @foreach($projects_list as $projects)
                            @php
                                $lastFile = app('App\Models\Project')
                                                ->getLastModifiedFile($projects->Student1_ID);
                            @endphp

                            <td><a download="{{$projects->title}}.pdf" href="/users/{{$projects->Student1_ID}}/documentation/{{$lastFile}}">Download</a></td>
                                    <td>{{$projects->title}}</td>



                            </tr>
                            @endforeach
                            @else
                            <tr>
                                    <td colspan="2">لا يوجد مقترحات </td>
                            </tr>
                            @endif


                    </table>
            </div>
    </div>

</body>
<script>


                                   function Setting(){
                                     window.location.href ="http://127.0.0.1:8000/OfficerSettings"
                                 }
                                function Home_button(){
                        window.location.href ="http://127.0.0.1:8000/Faculty_Home"
                                }
                                function Faculty_project_students_button(){
                        window.location.href ="http://127.0.0.1:8000/Faculty_project_students"
                                }
                                function Faculty_proposal_students_button(){
                        window.location.href ="http://127.0.0.1:8000/Faculty_proposal_students"
                                }
                                function Faculty_documentation_button(){
                        window.location.href ="http://127.0.0.1:8000/Faculty_documentation"
                                }

     </script>




</body>
</html>




