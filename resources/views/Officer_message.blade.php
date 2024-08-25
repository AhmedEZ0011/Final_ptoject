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
     font-size:40px;
      position: absolute;">
                        <i class="fa-solid fa-house"></i>Home
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
"onclick=Projects_students_view_button()>
                        <i class="fa-regular fa-copy" style="font-size:35px;
        right:4%;
        top:20%;
        position: absolute;"></i>
                        <h2> المشاريع</h2>
                </button>
                <button class="Graduation-project-students" style="background-color: #97CADB;
        height: 9%;
        left: 4%;
        right:4%;
        top: 57%;
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
height: 80%;
left: 2%;
top: 15%;
position: absolute;
border-radius: 20px;
border-style: solid;
border-color:grey;
overflow: auto;">
                <form action="{{ route('Student_Home.addDocumentation') }}" id="f0" name="f0" method="post" enctype="multipart/form-data">
                        @csrf</form>
                      <div class="header">
                            <h2 style="text-align:center;">إضافة إعلان </h2>
                          </div>
                          <div class="form-group">
                            <label for="proposal-input3" ></label>
                            <input type="text" form="f2" name="documentation" id="proposal-input3" placeholder="إضافة اعلان">
                          </div>
                          <button type="submit" form="f0">إرسال</button>
                        </div>
                      </div>
                </div>

        </div>

</body>
<script>


        function proposals_view_button() {
          window.location.href = "{{route('proposals_view.index')}}"//"http://127.0.0.1:8000/proposals_view";

        }
        function Projects_students_view_button() {
          window.location.href = "http://127.0.0.1:8000/Projects_students_view"//"http://127.0.0.1:8000/proposals_view";

        }
        function Settings_button() {
      window.location.href = " function Projects_students_view_button() {
          window.location.href = "{{route('Projects_students_view.index')}}"//"http://127.0.0.1:8000/proposals_view";

        }OfficerSettings"
        }
        function Home_button() {
      window.location.href = "http://127.0.0.1:8000/Officer_Home"
    }
    function message_button() {
      window.location.href = "http://127.0.0.1:8000/Officer_message"
    }
        </script>
</html>
