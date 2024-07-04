
<!DOCTYPE html>
<html>

<head>
        <title></title>
        <meta name="csrf-token" content="{{csrf_token()}}">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://kit.fontawesome.com/258bab96e7.js" crossorigin="anonymous"></script>
        <!--Get your own code at fontawesome.com-->
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

<body style=" background:#F1F0FB;">
        <div class="heder" style="background-color:#F1F0FB;
      width: 70%;
      height: 10%;
      left: 2%;
      top: 2%;
      position: absolute;
      border-bottom:black">
                <a href="{{ route('logout') }}">
                        <i class="fa-solid fa-arrow-right-from-bracket" style="font-size:35px; 
      position: absolute;
      left:2%;
      top:25%;"></a></i>

                <i class="fa-solid fa-graduation-cap" style="font-size:35px; 
      position: absolute;
      left:10%;
      top:25%;"></i>
                <div class="Home-page" style="left:50%;
     top:30%;
     font-size:40px;
      position: absolute;">
                       <i class="fa-regular fa-newspaper"></i> المقترحات 
                </div>
        </div>



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
    top:4%;
        
         "></i>
                        <div class="UserName" style="
    position:absolute;
    font-size:20px;
    right:27%;
    top:7%;
    ">{{ Auth::user()->name }}</div>
                </div>
                <button class="Home" style="
  background-color: #97CADB;
  height: 9%;
  left: 4%;
  right:4%;
  top: 13%;
  position: absolute;
  border-radius: 20px;
  border-style: none;
  
"onclick=Home_button()>
                        <i class="fa-solid fa-house" style="font-size:35px; 
        right:4%;
        top:20%;
        position: absolute;"></i>
                        <h2>الرئيسية</h2>
                </button>
                <button class="Project-document" style="background-color: #97CADB;
        height: 9%;
        left: 4%;
        right:4%;
        top: 24%;
        position: absolute;
        border-radius: 20px;
        border-style: none;
"onclick=Settings_button()>
 <i class="fa-solid fa-gear" style="font-size:35px; 
        right:4%;
        top:20%;
        position: absolute;"></i>
                        <h2>الإعدادات </h2>
                </button>
                <button class="Monthly-reports" style="background-color: #97CADB;
        height: 9%;
        left: 4%;
        right:4%;
        top: 68%;
        position: absolute;
        border-radius: 20px;
        border-style: none;
">
                        <i class="fa-solid fa-clipboard-list" style="font-size:35px; 
        right:4%;
        top:20%;
        position: absolute;"></i>
                        <h2>إضافة إعلان</h2>
                </button>
                <button class="Enter-evaluation" style="background-color: #97CADB;
        height: 9%;
        left: 4%;
        right:4%;
        top: 57%;
        position: absolute;
        border-radius: 20px;
        border-style: none;
">
                        <i class="fa-solid fa-person-chalkboard" style="font-size:35px; 
        right:4%;
        top:20%;
        position: absolute;"
  ></i>
                        <h2> المشرفين </h2>
                </button>
                <button class="Proposals" style="background-color: #97CADB;
        height: 9%;
        left: 4%;
        right:4%;
        top: 35%;
        position: absolute;
        border-radius: 20px;
        border-style: none;
"onclick=proposals_view_button()>
                        <i class="fa-regular fa-newspaper" style="font-size:35px; 
        right:4%;
        top:20%;
        position: absolute;"      ></i>
                        <h2>المقترحات</h2>
                </button>
                <button class="Graduation-project-students" style="background-color: #97CADB;
        height: 9%;
        left: 4%;
        right:4%;
        top: 46%;
        position: absolute;
        border-radius: 20px;
        border-style: none;
"onclick=Projects_students_view_button()>
                        <i class="fa-regular fa-copy" style="font-size:35px; 
        right:4%;
        top:20%;
        position: absolute;"></i>
                        <h2>المشاريع </h2>
                </button>
                <button class="Graduation-project-students" style="background-color: #97CADB;
        height: 9%;
        left: 4%;
        right:4%;
        top: 68%;
        position: absolute;
        border-radius: 20px;
        border-style: none;
">
                        <i class="fa-solid fa-thumbtack" style="font-size:35px; 
        right:4%;
        top:20%;
        position: absolute;"></i>
                        <h2>إضافة إعلان </h2>
                </button>
                <button class="Graduation-project-students" style="background-color: #97CADB;
        height: 9%;
        left: 4%;
        right:4%;
        top: 78%;
        position: absolute;
        border-radius: 20px;
        border-style: none;
">
                        <i class="" style="font-size:35px; 
        right:4%;
        top:20%;
        position: absolute;"></i>
                        <h2></h2>
                </button>


        </div>
        <div class="Contener" style="background: #F1F0FB;
width: 75%;
height: 75%;
left: 1%;
top: 20%;
position: absolute;
border-radius: 20px;
border-style: solid;
border-color:grey;
overflow: auto;">
                <div>

                        <div style="position: absolute;
                     right: 46%;
                     top: 2%;">
                                <i style="font-size: 27px;"> طلبات المقترحات</i>
                        </div>
                        <br>
                        <table style="position: absolute;
        top: 10%;
        border=0.5">
                                <tr>
                                        <td> </td>
                                        <td> </td>
                                        <td>ملف  </td>
                                        <td>الطلبة المقدمين</td>
                                        <td>عنوان </td>
                                        <td>تاريخ تقديم  </td>
                                        

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
                                        <td><button style="background-color: rgb(218, 55, 55);">
                                                        <a href="{{ route('proposals_view.modify', ["state" => 'reject', "data" => trim(json_encode($routeData), '{}') ]) }}">رفض</a>
                                                </button></td>
                                        <td><button onclick="acceptProposal(this);" href="{{ route('proposals_view.modify', ["state" => 'accept', "data" => trim(json_encode($routeData), '{}') ]) }}" class="btn-primary"  style="background-color: rgb(93, 202, 93) ">
                                                        قبول
                                                </button></td>
                                        <td><a download href="/users/{{$proposals->Student1_ID}}/proposals/{{$proposals->Student1_Path}}">Download</a></td>
                                        
                                        @php
                                                $studentsList = [
                                                        "First" => ["ID" => $proposals->Student1_ID, "Name" => $proposals->Student1_Name], 
                                                        "Second" => ["ID" => $proposals->Student2_ID, "Name" => $proposals->Student2_Name], 
                                                        "Third" => ["ID" => $proposals->Student3_ID, "Name" => $proposals->Student3_Name]
                                                ];
                                                //$students = explode(",", $studentsList);
                                                echo "<td><ul style='text-align:right'>";
                                                foreach ($studentsList as $student) {
                                                        if($student["ID"] == null) {
                                                                continue;
                                                        }
                                                        else {
                                                                echo "<li>".$student["Name"]. 
                                                                " (".$student["ID"]. ")</li>";
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
                                        <td colspan="8">لا يوجد مقترحات   </td>
                                </tr>
                                @endif
                        </table>
                </div>
        </div>
        </div>
        <form id="f0" name="f0" method="post" enctype="multipart/form-data">
                @csrf</form>
              <div class="modal-container" id="modalContainer1">
                <div class="modal">
                  <button class="close-btn" id="closeModalBtn1">❌</button>
                  <div class="header">
                    <img src="Upload to the Cloud.png" class="cloud-icon"></img>
                    <h2>انشاء مشروع</h2>
                  </div>
                  <div class="form-group">
                    
                    <label for="project-supoervisor-id">رقم القيد المشرف الخاص المقترح</label>
                    <select id="project-supoervisor-id" name="project-supoervisor-id" required form="f0">
                        @foreach($teachers as $teacher)
                                <option value="{{$teacher->id}}">{{$teacher->name}}</option>
                        @endforeach
                    </select>
                    <label for="project-input-lastdate">موعد النهائي للمشروع </label>
                    <input type="date" id="project-input-lastdate" name="project-input-lastdate" maxlength="200" minlength="5" form="f0">
                  </div>
                  <button type="submit" form="f0">إرسال</button>
                </div>
              </div>
              
        
</body>
<script>
        //const openModalBtn1 = document.getElementById('openModalBtn1');
    const closeModalBtn1 = document.getElementById('closeModalBtn1');
    const modalContainer1 = document.getElementById('modalContainer1');


    closeModalBtn1.addEventListener('click', () => {
      modalContainer1.classList.remove('show');
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
