<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Proposals View</title>

   
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://kit.fontawesome.com/258bab96e7.js" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/258bab96e7.js" crossorigin="anonymous"></script>

    <style>
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

                a {
                        text-decoration: none;
                        color: black;
                }

                button {
                        border-radius: 5px;
                        border: none;
                }
                
    /* Container styles */
 
    /* Modal container styles */
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

        .header h2 {
            font-size: 25px;
        }
        #logo{
    position: absolute;
    top: 2%;
    left: 3%;
    weight: 50;
    height: 30; /* لون الأيقونة */
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

    </style>
</head>
<body style="position: fixed; top: 0; left: 0; width: 100%; height: 100vh; margin: 0; background-image: url('MainImg.jpg'); background-size: cover; background-repeat: no-repeat; background-position: center; opacity: 0.9; z-index: -1;">
    <div class="header d-flex justify-content-between align-items-center px-4" 
    style="  background: linear-gradient(130deg, #dadada,  #a2b3c5);  border-bottom-width: 2px; width: 80%; margin-right: 20%; padding: 0.5% 0;">
    <div id="logo"> 
      <img src="SMS.ico" class="mx-2" width="50" height="40">
      <img src="Mortarboard.ico" alt="Description of the image" width="50" height="34" top=0% >
      <img src="Back.ico" alt="Description of the image" width="50" height="34" ></div>
      <img src="Sign Document.ico" alt="Student Icon" style="font-size: 100%; font-family:Arial, Helvetica, sans-serif;"></div>
  
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
            <button class="btn btn-light mb-2" style="background-color: #97CADB;" onclick=proposals_view_button()>
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
                      </div></a>
            </button>
        </div>
    </div>
    <div class="Contener" style="background: #F1F0FB; width: 75%; height: 75%; left: 1%; top: 20%; position: absolute; border-radius: 20px; border-style: solid; border-color:grey; overflow: auto;">
        <div>
            <div style="position: absolute; right: 46%; top: 2%;">
                <i style="font-size: 27px;">طلبات المقترحات</i>
            </div>
            <br>
            <table style="position: absolute; top: 10%;">
                <tr>
                    <td></td>
                    <td></td>
                    <td>ملف</td>
                    <td>الطلبة المقدمين</td>
                    <td>عنوان</td>
                    <td>تاريخ تقديم</td>
                </tr>
               @if(count($proposal_list))
    @foreach($proposal_list as $proposals)
        @php
            $routeData = [
                "ProposalID" => $proposals->id,
                "Title" => $proposals->title,
                "StudentsID" => [$proposals->Student1_ID, $proposals->Student2_ID, $proposals->Student3_ID]
            ];
        @endphp
        <tr>
            <td>
                <button style="background-color: rgb(218, 55, 55);">
                    <a href="{{ route('proposals_view.modify', ["state" => 'reject', "data" => trim(json_encode($routeData), '{}') ]) }}">رفض</a>
                </button>
            </td>
            <td>
                <button onclick="acceptProposal(this);" href="{{ route('proposals_view.modify', ["state" => 'accept', "data" => trim(json_encode($routeData), '{}') ]) }}" class="btn-primary" style="background-color: rgb(93, 202, 93);">
                    قبول
                </button>
            </td>
            <td>
                <a download href="/users/{{$proposals->Student1_ID}}/proposals/{{$proposals->Student1_Path}}">Download</a>
            </td>

            @php
                $studentsList = [
                    "First" => ["ID" => $proposals->Student1_ID, "Name" => $proposals->Student1_Name],
                    "Second" => ["ID" => $proposals->Student2_ID, "Name" => $proposals->Student2_Name],
                    "Third" => ["ID" => $proposals->Student3_ID, "Name" => $proposals->Student3_Name]
                ];
                echo "<td><ul style='text-align:right'>";
                foreach ($studentsList as $student) {
                    if($student["ID"] == null) {
                        continue;
                    } else {
                        echo "<li>".$student["Name"]." (".$student["ID"].")</li>";
                    }
                }
                echo "</ul></td>";
            @endphp

            <td>{{$proposals->title}}</td>
            <td>{{$proposals->created_at}}</td>
        </tr>
    @endforeach
@else
    <tr>
        <td colspan="8">لا يوجد مقترحات</td>
    </tr>
@endif
             </table>
                </div>
        </div>
        </div>
    
    <form id="f0" name="f0" method="post" enctype="multipart/form-data">
        @csrf
    </form>
    
    <div class="modal-container" id="modalContainer1">
        <div class="modal">
            <button class="close-btn" id="closeModalBtn1">❌</button>
            <div class="header">
                <img src="Upload to the Cloud.png" class="cloud-icon">
                <h2>انشاء مشروع</h2>
            </div>
            <div class="form-group">
                <label for="project-supoervisor-id">رقم القيد المشرف الخاص المقترح</label>
                <select id="project-supoervisor-id" name="project-supoervisor-id" required form="f0">
                    @foreach($teachers as $teacher)
                    <option value="{{$teacher->id}}">{{$teacher->name}}</option>
                    @endforeach
                </select>
                <label for="project-input-lastdate">موعد النهائي للمشروع</label>
                <input type="date" id="project-input-lastdate" name="project-input-lastdate" maxlength="200" minlength="5" form="f0">
            </div>
            <button type="submit" form="f0">إرسال</button>
        </div>
    </div>
    
</body>
<script>
    const openModalBtn4 = document.getElementById('openModalBtn4');
    const closeModalBtn4 = document.getElementById('closeModalBtn4');
    const modalContainer4 = document.getElementById('modalContainer4');

    openModalBtn4.addEventListener('click', () => {
      modalContainer4.classList.add('show');
    });
    closeModalBtn4.addEventListener('click', () => {
      modalContainer4.classList.remove('show');
    });


    function acceptProposal(button) {
        const route = button.getAttribute('href');
        //const proposalId = button.getAttribute('proposal-id');
        document.forms['f0'].setAttribute('action', route);
        //document.forms['f0'].elements['project-proposal-id'].value = proposalId;
        modalContainer1.classList.add('show');
    }
    function proposals_view_button() {
          window.location.href = "{{route('proposals_view.index')}}"//"http://127.0.0.1:8000/proposals_view";

        }
       
        function Projects_students_view_button() {
          window.location.href = "{{route('Projects_students_view.index')}}"//"http://127.0.0.1:8000/proposals_view";

        }
        function Settings_button() {
      window.location.href = "http://127.0.0.1:8000/OfficerSettings"
        }
        function Home_button() {
      window.location.href = "http://127.0.0.1:8000/Officer_Home"
    }
</script>

</html>
