<!DOCTYPE html>
<html>

<head>




  <title></title>
  <meta name="csrf-token" content="{{csrf_token()}}">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="/css/a.css">
  <script src="/js/main.js"></script>
  <script src="https://kit.fontawesome.com/258bab96e7.js" crossorigin="anonymous"></script>

  <style>
    /* Container styles */
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
                h4{
                        text-align: center;
                        margin: 8px;
                  }
                  h5{
                        text-align: center;
                        margin: 8px;
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

    a {
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
    z-index: 10;
}


  </style>

</head>

<body style=" background:#F1F0FB;">

  <div class="heder" style="
      width: 100%;
      height: 10%;
      position: absolute;
      border-bottom: 5px solid black;
      align-items: center;
      background-color: #fff;
   ">

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

    <i id="bell_icon" class="fa-solid fa-bell" style="font-size:25px;
      position: absolute;
      left:13%;
      top:40%;"></i>

    <div class="Home-page" style="left:60%;
     top:30%;
     font-size:40px;
      position: absolute;">
      <i class="fa-solid fa-house"></i>   الرئيسية
    </div>
  </div>



  @if (session('status'))
  <div class="flash-message flash-success">
    {{ session('status') }}
  </div>
@endif




  <div class="ContenFunction" style="
      width: 20%;
      height: 89%;
      right:1px;
      top: 11%;
      position: absolute;
      background: #97CADB;
      border-radius: 5px;

  ">
    <div class="UserName_Icon">
      <i class="fa-solid fa-user-tie" style="font-size:20px;
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
  top: 25%;
  position: absolute;
  border-radius: 20px;
  border-style: none;

  " onclick="Home_button()">

      <img src="Group.ico" style="font-size:35px;
        right:4%;
        top:20%;
        position: absolute;
        ">
      <h2 style=" right:30px; ">الرئيسية</h2>
    </button>


    <button id="openModalBtn1" class="btn-primary" style="background-color: #97CADB;
  height: 9%;
  left: 4%;
  right:4%;
  top: 40%;
  position: absolute;
  border-radius: 20px;
  border-style: none;
">
      <i class="fa-solid fa-cloud-arrow-down" style="font-size:25px;
  right:2%;
  top:20%;
  position: absolute;"></i>
      <h2 style=" right:10px; ">تقديم مقترح</h2>
    </button>






    <button id="openModalBtn4" class="btn-primary" style="background-color: #97CADB;
        height: 9%;
        left: 4%;
        right:4%;
        top: 55%;
        position: absolute;
        border-radius: 20px;
        border-style: none;

"onclick=Search_button()>
      <i class="fa-solid fa-book-bookmark" style="font-size:35px;
        right:-1%;
        top:20%;
        position: absolute;"></i>

      <h2>مشاريع مؤرشفة </h2>
 <button id="openModalBtn3" class="btn-primary" style="background-color: #97CADB;
        height: 9%;
        left: 4%;
        right:4%;
        top: 70%;
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
  </div>






  <div class="advertisementContener"
  style="background: #F1F0FB;
  width: 70%;
  height: 80%;
  left: 5%;
  top: 15%;
  position: absolute;
  border-radius: 20px;
  border-style: solid;
  border-color:grey;
  z-index: 1;">
        @if(count($project_list))
        @foreach($project_list as $project)
        <tr>
          <h4 style="color: #44dd68">معلومات عن المقترح المقبول </h4>
         <h4> أسم المقترح</h4>
         <td><h5>{{$project->title}}</h5></td>
        </tr>
        <tr>
          <h4>أسم المشرف  الخاص بك </h4>
          <td><h5>{{$project->Supervier_Name}}</h5></td>
        </tr>
        <tr>
          <h4>حالة المشروع</h4>
          <td><h5>{{$project->status}}</h5></td>
        </tr>
        <tr>
          <h4>تاريخ قبول المقترح </h4>
          <td><h5>{{$project->Created_AT}}</h5></td>
        </tr>


       @endforeach
       @endif

  </div>



  <form action="{{ route('Student_Home.addproposal') }}" id="f0" name="f0" method="post" enctype="multipart/form-data">
    @csrf</form>
  <div class="modal-container" id="modalContainer1">
    <div class="modal">
      <button class="close-btn" id="closeModalBtn1">❌</button>
      <div class="header">
        <img src="Upload to the Cloud.png" class="cloud-icon"></img>
        <h2>تقديم مقترح</h2>
      </div>
      <div class="form-group">
        <label for="proposal-input-title">عنوان المقترح</label>
        <input type="text" id="proposal-input-title" name="proposal-input-title" required maxlength="200" minlength="5" form="f0">
        <label for="proposal-input-subtitle">عنوان المقترح الفرعي</label>
        <input type="text" id="proposal-input-subtitle" name="proposal-input-subtitle" maxlength="200" minlength="5" form="f0">
        <label for="proposal-input-subtitle">أدخل رقم القيد الطالب الثاني</label>
        <input type="text" id="proposal-input-student2" name="proposal-input-student2" form="f0">
        <label for="proposal-input-subtitle">أدخل رقم قيد الطالب الثالث </label>
        <input type="text" id="proposal-input-student3" name="proposal-input-student3" form="f0">
        <label for="proposal-input1"></label>
        <input type="file" form="f0" name="proposal" id="proposal-input1" placeholder="ادخل مقترح المشروع">
      </div>
      <button type="submit" form="f0">إرسال</button>
    </div>
  </div>


  <form action="{{ route('Student_Home.addDocumentation') }}" id="f2" name="f2" method="post" enctype="multipart/form-data">
    @csrf</form>
  <div class="modal-container" id="modalContainer3">
    <div class="modal">
      <button class="close-btn" id="closeModalBtn3">❌</button>
      <div class="header">
        <img src="Upload to the Cloud.png" class="cloud-icon"></img>
        <h2>رفع التوثيق</h2>
      </div>
      <div class="form-group">
        <label for="proposal-input3"></label>
        <input type="file" form="f2" name="documentation" id="proposal-input3" placeholder="رفع التوثيق ">
      </div>
      <button type="submit" form="f2">إرسال</button>
    </div>
  </div>

  </div>
  @include('advertisement_panel');


  <script>
    var Advertisements = [];
    var bellIcon = document.getElementById('bell_icon');

    function Settings_button() {
      window.location.href = "http://127.0.0.1:8000/Student_Settings"
    }

    function Home_button() {
      window.location.href = "http://127.0.0.1:8000/Student_Home"
    }
    function Search_button() {
      window.location.href = "http://127.0.0.1:8000/Search"
    }


    const openModalBtn1 = document.getElementById('openModalBtn1');
    const closeModalBtn1 = document.getElementById('closeModalBtn1');
    const modalContainer1 = document.getElementById('modalContainer1');

    openModalBtn1.addEventListener('click', () => {
      modalContainer1.classList.add('show');
    });

    closeModalBtn1.addEventListener('click', () => {
      modalContainer1.classList.remove('show');
    });



    const openModalBtn3 = document.getElementById('openModalBtn3');
    const closeModalBtn3 = document.getElementById('closeModalBtn3');
    const modalContainer3 = document.getElementById('modalContainer3');

    openModalBtn3.addEventListener('click', () => {
      modalContainer3.classList.add('show');
    });

    closeModalBtn3.addEventListener('click', () => {
      modalContainer3.classList.remove('show');
    });

    var btn = document.getElementById("openModalBtn1");
                    if (status === "Done") {
                        btn.disabled = true;
                    } else {
                        btn.disabled = false;
                    }

  </script>

</body>

</html>
