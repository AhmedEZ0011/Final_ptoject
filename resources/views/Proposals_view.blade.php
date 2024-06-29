
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
  
">
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
">
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
">
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
">
                        <i class="fa-solid fa-people-group" style="font-size:35px; 
        right:4%;
        top:20%;
        position: absolute;"></i>
                        <h2>طلبة المشاريع</h2>
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
                        <i class="fa-regular fa-copy" style="font-size:35px; 
        right:4%;
        top:20%;
        position: absolute;"></i>
                        <h2>المشاريع</h2>
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
                                        <td>أسم الطالب </td>
                                        <td>عنوان </td>
                                        <td>تاريخ تقديم  </td>

                                </tr>
                                @if($proposal_list->count())
                                @foreach($proposal_list as $proposals)
                                <tr>
                                        <td><button style="background-color: rgb(218, 55, 55);">
                                                        <a target="self" href="{{route('drop_request_account', $user->id)}}">رفض</a>
                                                </button></td>
                                        <td><button style="background-color: rgb(93, 202, 93)">
                                                        <a href="{{route('add_request_account', $user->id)}}">قبول</a>
                                                </button></td>
                                        <td>{{$proposals->path}}</td>
                                        <td>{{$proposals->user_id}}</td>
                                        <td>{{$proposals->title}}</td>
                                        <td>{{$proposals->created_at}}</td>
                                        

                                </tr>
                                @endforeach
                                @else
                                <tr>
                                        <td colspan="6">لا يوجد مقترحات   </td>
                                </tr>
                                @endif
                        </table>
                </div>
        </div>
        </div>

        
</body>

</html>
