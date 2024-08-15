<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Officer Home</title>

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
    <img src="Home Screen.ico" alt="Student Icon" style="font-size: 100%; font-family:Arial, Helvetica, sans-serif;"></div>

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
            <button class="btn btn-light mb-2" style="background-color: #97CADB;" onclick="Settings_button()">
                <img src="Settings.ico" style="font-size:35px;">
                <h2>الإعدادات</h2>
            </button>
            <br>
            <button class="btn btn-light mb-2" style="background-color: #97CADB;" onclick="proposals_view_button()">
                <img src="Sign Document.ico" style="font-size:35px;">
                <h2>المقترحات</h2>
            </button>
            <br>
            <button class="btn btn-light mb-2" style="background-color: #97CADB;"onclick=Projects_students_view_button()>
                <img src="Copy.ico" style="font-size:35px;">
                <h2>المشاريع</h2>
            </button>
            <br>
            <button id="openModalBtn4" class="btn btn-light" style="background-color: #97CADB;" data-toggle="modal" data-target="#exampleModal">
                <img src="Advertisement Page.ico" style="font-size:35px;">
                <h2>إضافة إعلان</h2>
            </button>
            <br>
            <button>
                <img src="Logout.ico" style="font-size:35px;">
                <a href="{{ route('logout') }}" class="btn">
                  <div class ="label"> 
                    تسجيل خروج
                  </div>
                </a>
            </button>
        </div>

        <div class="content"  >
            <h2 class="text-center mb-4">طلبات التسجيل</h2>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        
                        <th>الأسم</th>
                        <th>تاريخ طلب التسجيل</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @if($inactive_users->count())
                        @foreach($inactive_users as $user)
                            <tr>
                                
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->created_at }}</td>
                                <td>
                                  <button class="btn btn-success">
                                      <a href="{{ route('add_request_account', $user->id) }}" class="text-white">قبول</a>
                                  </button>
                              </td>
                                <td>
                                  <button class="btn btn-danger">
                                      <a href="{{ route('drop_request_account', $user->id) }}" class="text-white">رفض</a>
                                  </button>
                              </td>
                            
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="4" class="text-center">لا يوجد طلبات تسجيل</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content"style=" padding: 0.5% ; font-size: 19px;top:5%; ">
                <div class="modal-header" style=" padding: 1% ;
                font-size: 10px; ">
                  <h5 class="modal-title" id="exampleModalLabel" style="text-align: center; width: 100%;font-family:Georgia, 'Times New Roman', Times, serif;">إضافة إعلان</h5>
                  <button type="button" class="custom-close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('Officer_Home.add_advertisement') }}" id="f4" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="ad_target">Target</label>
                            <select name="ad_target" id="ad_target" class="form-control" required>
                                <option value="ALL">All</option>
                                <option value="STUDENTS">Students</option>
                                <option value="FACULTIES">Faculties</option>
                                <option value="OFFICERS">Officers</option>
                                <option value="SPECIFIC">Specific</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="ad_specific_target">Specific Target</label>
                            <input type="text" name="ad_specific_target" id="ad_specific_target" class="form-control" placeholder="Specific target">
                        </div>
                        <div class="form-group">
                            <label for="ad_title">Title</label>
                            <input type="text" name="ad_title" id="ad_title" class="form-control" placeholder="Title">
                        </div>
                        <div class="form-group">
                            <label for="ad_content">Content</label>
                            <textarea id="ad_content" name="ad_content" class="form-control" rows="5" required maxlength="300" minlength="20" placeholder="Content"></textarea>
                        </div>
                        <div class="form-group form-check">
                            <input type="checkbox" name="ad_enabled" id="ad_enabled" class="form-check-input">
                            <label class="form-check-label" for="ad_enabled">Enabled</label>
                        </div>
                        <button type="submit" class="btn btn-primary" style="width: 20%;margin-right: 38%">إرسال</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        function proposals_view_button() {
            window.location.href = "{{ route('proposals_view.index') }}";
        }

        function Projects_students_view_button() {
            window.location.href = "{{ url('Projects_students_view') }}";
        }

        function Settings_button() {
            window.location.href = "{{ url('OfficerSettings') }}";
        }

        function Home_button() {
            window.location.href = "{{ url('Officer_Home') }}";
        }

        //function removeBorder() {
         //   document.getElementById('myElement').style.border = 'none';
        //}
   
    </script>

    @if($errors->has('ad_error'))
        <h1>{{ $errors->first('ad_error') }}</h1>
    @endif
</body>
</html>
