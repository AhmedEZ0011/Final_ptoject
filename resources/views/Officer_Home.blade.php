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
     font-size:25px;
      position: absolute;">
                        <i class="fa-solid fa-house"></i> الرئيسية
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
    
  " onclick=Home_button()>
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
  " onclick=Settings_button()>
                          <i class="fa-solid fa-gear" style="font-size:35px; 
          right:4%;
          top:20%;
          position: absolute;"></i>
                          <h2>الإعدادات </h2>
                  </button>
  
       
                  <button class="Proposals" style="background-color: #97CADB;
          height: 9%;
          left: 4%;
          right:4%;
          top: 35%;
          position: absolute;
          border-radius: 20px;
          border-style: none;
  " onclick=proposals_view_button()>
                          <i class="fa-regular fa-newspaper" style="font-size:35px; 
          right:4%;
          top:20%;
          position: absolute;"></i>
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
  ">
                          <i class="fa-regular fa-copy" style="font-size:35px; 
          right:4%;
          top:20%;
          position: absolute;"></i>
                          <h2> المشاريع</h2>
                  </button>
                  <button id="openModalBtn4" class="btn-primary"style="background-color: #97CADB;
          height: 9%;
          left: 4%;
          right:4%;
          top: 59%;
          position: absolute;
          border-radius: 20px;
          border-style: none;
  " >
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
width: 70%;
height: 75%;
left: 3%;
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
                                <i style="font-size: 27px;"> طلبات التسجيل</i>
                        </div>
                        <br>
                        <table style="position: absolute;
        top: 10%;
        border=0.5">
                                <tr>
                                        <td> </td>
                                        <td> </td>
                                        <td>الأسم</td>
                                        <td>تاريخ طلب التسجيل</td>

                                </tr>
                                @if($inactive_users->count())
                                @foreach($inactive_users as $user)
                                <tr>
                                        <td><button style="background-color: rgb(218, 55, 55);">
                                                        <a target="self" href="{{route('drop_request_account', $user->id)}}">رفض</a>
                                                </button></td>
                                        <td><button style="background-color: rgb(93, 202, 93)">
                                                        <a href="{{route('add_request_account', $user->id)}}">قبول</a>
                                                </button></td>

                                        <td>{{$user->name}}</td>
                                        <td>{{$user->created_at}}</td>

                                </tr>
                                @endforeach
                                @else
                                <tr>
                                        <td colspan="4">لا يوجد طلبات تسجيل </td>
                                </tr>
                                @endif
                        </table>
                </div>
        </div>
        </div>

        <form action="{{ route('Officer_Home.add_advertisement') }}" id="f4" name="f4" method="post" enctype="multipart/form-data">
                @csrf</form>
              <div class="modal-container" id="modalContainer4">
                <div class="modal">
                  <button class="close-btn" id="closeModalBtn4">❌</button>
                  <div class="header">
                    <img src="Upload to the Cloud.png" class="cloud-icon"></img>
                    <h2> إضافةإعلان </h2>
                  </div>
                  <div class="form-group">
                    <select name="ad_target" form="f4" required>
                      <option value="ALL">All</option>
                      <option value="STUDENTS">Students</option>
                      <option value="FACULTIES">Faculties</option>
                      <option value="OFFICERS">Officers</option>
                      <option value="SPECIFIC">Specific</option>
                    </select>
                    <input type="text" name="ad_specific_target" form="f4" placeholder="Specific target">
                    <input type="text" name="ad_title" form="f4" placeholder="Title">
                    <input type="text" id="ad_content" name="ad_content" required maxlength="300" minlength="20" form="f4"
                    style="width: 100%; height: 150px;">
                    <label for="ad_enabled">Enabled</label>
                    <input type="checkbox" name="ad_enabled" id="ad_enabled" checkbox form="f4" value>
                    
                 </div>
                  <button type="submit" form="f4">إرسال </button>
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
        
        function proposals_view_button() {
          window.location.href = "{{route('proposals_view.index')}}"//"http://127.0.0.1:8000/proposals_view";

        }
        function Projects_students_view_button() {
          window.location.href = "http://127.0.0.1:8000/Projects_students_view"//"http://127.0.0.1:8000/proposals_view";

        }
        function Settings_button() {
      window.location.href = "http://127.0.0.1:8000/OfficerSettings"
        }
        function Home_button() {
      window.location.href = "http://127.0.0.1:8000/Officer_Home"
    }
    
   
        </script>

      @if($errors->has('ad_error'))
        <H1>
        {{ $errors->first('ad_error')}}
        </H1>
      @endif
</html>