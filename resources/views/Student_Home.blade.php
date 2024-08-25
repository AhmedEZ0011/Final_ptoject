<!DOCTYPE html>
<html>
<head>
  <title>Student Home</title>
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="/css/a.css">
  <script src="/js/main.js"></script>
  <script src="https://kit.fontawesome.com/258bab96e7.js" crossorigin="anonymous"></script>

  <!-- Bootstrap CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
  
  <!-- jQuery -->
  <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
 
    </script>
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
    }

        h4 {
            text-align: center;
            margin: 8px;
        }

        h5 {
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
      margin: 0 15px;
    }

        .header h2 {
            margin: 0;
            font-size: 40px;
        }

    .form-group {
      margin-bottom: 20%;
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
    position: fixed; /* استخدام fixed بدلاً من absolute لتغطية الشاشة بالكامل حتى عند التمرير */
    inset: 0;
    background-color: rgba(0, 0, 0, 0.5);
    display: flex;
    justify-content: center;
    align-items: center;
    opacity: 0;
    visibility: hidden;
    transition: opacity 0.3s, visibility 0.3s;
    z-index: 1050; /* z-index أعلى لضمان ظهورها فوق جميع العناصر الأخرى */
    width: 100%; /* التأكد من تغطية العرض بالكامل */
    height: 100vh; /* التأكد من تغطية الارتفاع بالكامل */
    background-attachment: fixed;
}


    .modal {
      background-color: rgba(255, 255, 255, 0.589);
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
      transform: scale(0.8);
      transition: transform 0.3s;
      width: 100%;
    
    }

    .modal-container.show {
      opacity: 1;
      visibility: visible;
      width: 70%;
     
    }

    .modal-container.show .modal {
      transform: scale(1);
      width: 70%;
      
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
     <img src="Mortarboard.ico" alt="Description of the image" width="50" height="34" top=0% >
     <img src="Back.ico" alt="Description of the image" width="50" height="34" ></div>
     <img src="Home Screen.ico" alt="Student Icon" style="font-size: 100%; font-family:Arial, Helvetica, sans-serif;left:3%"></div>
  @if (session('status'))
  <div class="flash-message flash-success">
    {{ session('status') }}
  </div></div>
 
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
    <button id="openModalBtn1" class="btn btn-light d-flex align-items-center mb-2" style="background-color: #97CADB; border-radius: 20px; border-style: none;">
      <img src="Add List.ico">
      <h2>تقديم تقرير </h2>
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
                <a href="{{ route('logout') }}" class="btn" style=" text-decoration: none; font-size: 25px; /* حجم النص */
                margin: 5%; 
                line-height: 0;">
                 تسجيل خروج 
              </a> 
            </button>
  </div>
  <div class="content" style="background: #F1F0FB; width: 50%; height: 70%; left: -50%; top: 10%; position: absolute; border-radius: 20px; z-index: 1; display: flex; justify-content: center; align-items: flex-start; padding-top: px;">
    <div style="text-align: center;">
    <h4>اسم المشرف الخاص بك </h4>
    <img src="Name Tag.ico"style="transform: translateY(-30%);max-width: 100%;">
    </div>
    @if(count($project_list))
    @foreach($project_list as $project)
    <div>
      <h4 style="color: #44dd68;">معلومات عن المقترح المقبول</h4>
      <h4>اسم المقترح</h4>
      <h5>{{ $project->title }}</h5>
      <h4>اسم المشرف الخاص بك</h4>
      <h5>{{ $project->Supervier_Name }}</h5>
      <h4>حالة المشروع</h4>
      <h5>{{ $project->status }}</h5>
      <h4>تاريخ قبول المقترح</h4>
      <h5>{{ $project->Created_AT }}</h5>
    </div>
    @endforeach
    @endif
  </div>
  <div class="content " style="background: #F1F0FB; width: 50%; height: 70%; left: 10%; top: 10%; position: absolute; border-radius: 20px; z-index: 1; display: flex; justify-content: center; align-items: flex-start; padding-top: px;">
    <div style="text-align: center;">
      <h4>معلومات المقترح </h4>
    <img src=" Header.ico"style="transform: translateY(-30%); max-width: 100%;">
  </div>
    @if(count($project_list))
    @foreach($project_list as $project)
    <div>
      <h4 style="color: #44dd68;">معلومات عن المقترح المقبول</h4>
      <h4>اسم المقترح</h4>
      <h5>{{ $project->title }}</h5>
      <h4>اسم المشرف الخاص بك</h4>
      <h5>{{ $project->Supervier_Name }}</h5>
      <h4>حالة المشروع</h4>
      <h5>{{ $project->status }}</h5>
      <h4>تاريخ قبول المقترح</h4>
      <h5>{{ $project->Created_AT }}</h5>
    </div>
    @endforeach
    @endif
  </div>
  <div class="content " style="background: #F1F0FB; width: 50%; height: 70%; left: -110%; top: 10%; position: absolute; border-radius: 20px; z-index: 1; display: flex; justify-content: center; align-items: flex-start; padding-top: px;">
    <div style="text-align: center;">
      <h4>تاريخ قبول المقترح</h4>
    <img src="Calendar.ico" style="transform: translateY(-30%); max-width: 100%;">
    </div>
     @if(count($project_list))
    @foreach($project_list as $project)
    <div>
      <h4 style="color: #44dd68;">معلومات عن المقترح المقبول</h4>
      <h4>اسم المقترح</h4>
      <h5>{{ $project->title }}</h5>
      <h4>اسم المشرف الخاص بك</h4>
      <h5>{{ $project->Supervier_Name }}</h5>
      <h4>حالة المشروع</h4>
      <h5>{{ $project->status }}</h5>
      <h4>تاريخ قبول المقترح</h4>
      <h5>{{ $project->Created_AT }}</h5>
    </div>
    @endforeach
    @endif
  </div>
  <form action="{{ route('Student_Home.addproposal') }}" id="f0" name="f0" method="post" enctype="multipart/form-data">
    @csrf
  </form>
  <div class="modal-container" id="modalContainer1">
    <div class="modal">
      <button class="close-btn" id="closeModalBtn1">❌</button>
      <div class="header d-flex align-items-center justify-content-center mb-3">
        <img src="Add List.ico" class="cloud-icon" alt="Upload Icon">
        <h2>تقديم مقترح</h2>
      </div>
      <div class="form-group">
        <label for="proposal-input-title">عنوان المقترح</label>
        <input type="text" id="proposal-input-title" name="proposal-input-title" required maxlength="200" minlength="5" form="f0">
        <label for="proposal-input-subtitle">عنوان المقترح الفرعي</label>
        <input type="text" id="proposal-input-subtitle" name="proposal-input-subtitle" maxlength="200" minlength="5" form="f0">
        <label for="proposal-input-student2">أدخل رقم القيد الطالب الثاني</label>
        <input type="text" id="proposal-input-student2" name="proposal-input-student2" form="f0">
        <label for="proposal-input-student3">أدخل رقم قيد الطالب الثالث</label>
        <input type="text" id="proposal-input-student3" name="proposal-input-student3" form="f0">
        <label for="proposal-input1">أدخل مقترح المشروع</label>
        <input type="file" form="f0" name="proposal" id="proposal-input1">
      </div>
      <button type="submit" form="f0">إرسال</button>
    </div>
    <form action="{{ route('Student_Home.addproposal') }}" id="f0" name="f0" method="post" enctype="multipart/form-data">
      @csrf
    </form>
    <div class="modal-container" id="modalContainer1">
      <div class="modal">
        <button class="close-btn" id="closeModalBtn1">❌</button>
        <div class="header d-flex align-items-center justify-content-center mb-3">
          <img src="Add List.ico" class="cloud-icon" alt="Upload Icon">
          <h2>تقديم تقرير </h2>
        </div>
        <div class="form-group">
          <label for="proposal-input1">أدخل مقترح المشروع</label>
          <input type="file" form="f0" name="proposal" id="proposal-input1">
        </div>
        <button type="submit" form="f0">إرسال</button>
      </div>
  

  <form action="{{ route('Student_Home.addDocumentation') }}" id="f2" name="f2" method="post" enctype="multipart/form-data">
    @csrf
  </form>
  <div class="modal-container" id="modalContainer3">
    <div class="modal">
      <button class="close-btn" id="closeModalBtn3">❌</button>
      <div class="header d-flex align-items-center justify-content-center mb-3">
        <img src="Upload Document.ico" class="cloud-icon" alt="Upload Icon">
        <h2>رفع التوثيق</h2>
      </div>
      <div class="form-group">
        <label for="proposal-input3">رفع التوثيق</label>
        <input type="file" form="f2" name="documentation" id="proposal-input3">
      </div>
      <button type="submit" form="f2">إرسال</button>





    <form action="{{ route('Student_Home.addproposal') }}" id="f0" name="f0" method="post"
        enctype="multipart/form-data">
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
                <input type="text" id="proposal-input-title" name="proposal-input-title" required maxlength="200"
                    minlength="5" form="f0">
                <label for="proposal-input-subtitle">عنوان المقترح باللغة الإنجليزية </label>
                <input type="text" id="proposal-input-subtitle" name="proposal-input-subtitle" maxlength="200"
                    minlength="5" form="f0">
                <label for="proposal-input-subtitle">أدخل رقم القيد الطالب التاني في المقترح </label>
                <input type="text" id="proposal-input-student2" name="proposal-input-student2" form="f0">
                <label for="proposal-input-subtitle">أدخل رقم قيد الطالب الثالث في المقترح </label>
                <input type="text" id="proposal-input-student3" name="proposal-input-student3" form="f0">
                <label for="proposal-input1"></label>
                <input type="file" form="f0" name="proposal" id="proposal-input1"
                    placeholder="ادخل مقترح المشروع">
            </div>
            <button type="submit" form="f0">إرسال</button>
        </div>
    </div>


    <form action="{{ route('Student_Home.addDocumentation') }}" id="f2" name="f2" method="post"
        enctype="multipart/form-data">
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
                <input type="file" form="f2" name="documentation" id="proposal-input3"
                    placeholder="رفع التوثيق " accept="application/pdf">
            </div>
            <button type="submit" form="f2">إرسال</button>
        </div>
    </div>

    function Settings_button() {
      window.location.href = "http://127.0.0.1:8000/Student_Settings";
    }

    function Home_button() {
      window.location.href = "http://127.0.0.1:8000/Student_Home";
    }
    </div>

    @include('advertisement_panel');

    $(document).ready(function() {
      $('#openModalBtn1').click(function() {
        $('#modalContainer1').addClass('show');
      });

      $('#closeModalBtn1').click(function() {
        $('#modalContainer1').removeClass('show');
      });

      $('#openModalBtn3').click(function() {
        $('#modalContainer3').addClass('show');
      });

      $('#closeModalBtn3').click(function() {
        $('#modalContainer3').removeClass('show');
      });
    });

    closeModalBtn1.addEventListener('click', () => {
      modalContainer1.classList.remove('show');
    });

    const openModalBtn2 = document.getElementById('openModalBtn2');
    const closeModalBtn2 = document.getElementById('closeModalBtn2');
    const modalContainer2 = document.getElementById('modalContainer2');

    const openModalBtn3 = document.getElementById('openModalBtn3');
    const closeModalBtn3 = document.getElementById('closeModalBtn3');
    const modalContainer3 = document.getElementById('modalContainer3');

    openModalBtn3.addEventListener('click', () => {
      modalContainer3.classList.add('show');
    });

    closeModalBtn3.addEventListener('click', () => {
      modalContainer3.classList.remove('show');
    });

    const openModalBtn4 = document.getElementById('openModalBtn4');
    const closeModalBtn4 = document.getElementById('closeModalBtn4');
    const modalContainer4 = document.getElementById('modalContainer4');

    openModalBtn4.addEventListener('click', () => {
      modalContainer4.classList.add('show');
    });

    // closeModalBtn4.addEventListener('click', () => {
    //   modalContainer4.classList.remove('show');
    // });

    let notificationPanel = document.getElementById('ads-popup');
    async function showNotificationPanel(self) {
      notificationPanel.style.display = notificationPanel.style.display == "none" ? "block" : "none";
      if (notificationPanel.style.display == "block") {
        //await loadNotifications();
      }
    }

    async function loadNotifications() {
      let data = await fetch('{{route("advertisements.loads", Auth::user()->id)}}').then(e => e.json());
      if (data != null)
        Advertisements = data;
      displayBadge();
      displayAds();
    }

    function displayBadge() {
      let unread = 0;
      Advertisements.forEach(ad => unread += !ad.targetlist[0].seen ? + 1 : 0);
      if(unread == 0) {
        bellIcon.classList.add('hide-after');
      } else {
        bellIcon.classList.remove('hide-after');
        bellIcon.setAttribute('badge-number', unread);
      }

    }

    function clearPanel() {
      notificationPanel.querySelectorAll('div[adblock]').forEach(e => e.remove());
      notificationPanel.querySelectorAll('B[adblock-label]').forEach(e => e.remove());
    }

    function displayAds() {
      let lastDate = "";
      clearPanel();
      Advertisements.forEach(ad => {
        let date = new Date(ad.created_at);
        let dateString = "يوم " + date.getUTCDate() + "/" + (date.getUTCMonth() + 1) + "/" + date.getUTCFullYear();
        if (lastDate === dateString) {} else {
          modifyElement(notificationPanel, {
            child: createChild('B', {
              text: dateString,
              'adblock-label': ""
            })
          });
    <script>
        var Advertisements = [];
        var bellIcon = document.getElementById('bell_icon');

        function Settings_button() {
            window.location.href = "http://127.0.0.1:8000/Student_Settings"
        }

        function Home_button() {
            window.location.href = "http://127.0.0.1:8000/Student_Home"
        }
        function Archief_button() {
            window.location.href = "http://127.0.0.1:8000/Archief"
        }


        const openModalBtn1 = document.getElementById('openModalBtn1');
        const closeModalBtn1 = document.getElementById('closeModalBtn1');
        const modalContainer1 = document.getElementById('modalContainer1');

       
      //      @if ($decision !== 'PENDING' && $decision !== 'ACCEPTED')
                openModalBtn1.addEventListener('click', () => {
                    modalContainer1.classList.add('show');
                });
          // @endif
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

        const openModalBtn4 = document.getElementById('openModalBtn4');
        const closeModalBtn4 = document.getElementById('closeModalBtn4');
        const modalContainer4 = document.getElementById('modalContainer4');

        openModalBtn4.addEventListener('click', () => {
            modalContainer4.classList.add('show');
        });
    }
    loadNotifications();
    setInterval(async () => {
      await loadNotifications();
    }, 15000);
  </script>
  
  <!-- Bootstrap JS -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>

        // closeModalBtn4.addEventListener('click', () => {
        //   modalContainer4.classList.remove('show');
        // });

        let notificationPanel = document.getElementById('ads-popup');
        async function showNotificationPanel(self) {
            notificationPanel.style.display = notificationPanel.style.display == "none" ? "block" : "none";
            if (notificationPanel.style.display == "block") {
                //await loadNotifications();
            }
        }

        async function loadNotifications() {
            let data = await fetch('{{ route('advertisements.loads', Auth::user()->id) }}').then(e => e.json());
            if (data != null)
                Advertisements = data;
            displayBadge();
            displayAds();
        }

        function displayBadge() {
            let unread = 0;
            Advertisements.forEach(ad =>{
                if(ad.targetlist.length == 0) return;
                 unread += !ad.targetlist[0].seen ? +1 : 0
                });
            if (unread == 0) {
                bellIcon.classList.add('hide-after');
            } else {
                bellIcon.classList.remove('hide-after');
                bellIcon.setAttribute('badge-number', unread);
            }
        }


        function clearPanel() {
            notificationPanel.querySelectorAll('div[adblock]').forEach(e => e.remove());
            notificationPanel.querySelectorAll('B[adblock-label]').forEach(e => e.remove());
        }

        function displayAds() {
            let lastDate = "";
            clearPanel();
            Advertisements.forEach(ad => {
                if(ad.targetlist.length == 0) return;
                let date = new Date(ad.created_at);
                let dateString = "يوم " + date.getUTCDate() + "/" + (date.getUTCMonth() + 1) + "/" + date
                    .getUTCFullYear();
                if (lastDate === dateString) {} else {
                    modifyElement(notificationPanel, {
                        child: createChild('B', {
                            text: dateString,
                            'adblock-label': ""
                        })
                    });
                }
                lastDate = dateString;
                if (ad.content.length < 90) {
                    ad.content += "<br><br><br><br>"
                }
                modifyElement(notificationPanel, {
                    child: [
                        createChild('DIV', {
                            title: ad.id,
                            'adblock': "",
                            child: [
                                createChild('B', {
                                    'adtitle': "",
                                    text: ad.owner.name + " - " + ad.title
                                }),
                                createChild('P', {
                                    'adcontent': "",
                                    html: ad.content
                                }),
                                createChild('DIV', {
                                    'adactions': "",
                                    child: [
                                        createChild('IMG', {
                                            'delete': "",
                                            src: "/icons/icons8_remove_96px.png",
                                            title: "delete",
                                            event: {
                                                async onclick(self) {
                                                    if (confirm(
                                                            "Sure you want to remove this Advertisement ?"
                                                            ))
                                                        await advertisementRemove(
                                                            ad);
                                                }
                                            }
                                        }),
                                        createChild('IMG', {
                                            'read': "",
                                            src: "/icons/icons8_received_96px.png",
                                            title: "mark as read",
                                            style: ad.targetlist[0].seen ?
                                                "display:none" : "",
                                            event: {
                                                async onclick(self) {
                                                    //if(ad.)
                                                    await advertisementSeen(ad);
                                                }
                                            }
                                        })
                                    ]
                                })
                            ]
                        })
                    ]
                });
            });
        }

        async function advertisementRemove(ad) {
            fetch("advertisements/remove/" + ad.id + "/{{ Auth::user()->id }}/", {
                    method: "DELETE",
                    headers: {
                        'Content-Type': 'application/json',
                        "X-CSRF-Token": "{{ csrf_token() }}"
                    },
                    //body: JSON.stringify(ad.targetlist[0])
                }).then(e => e.json())
                .then(async e => {
                    alert(e.Message);
                    await loadNotifications();
                });
        }
        async function advertisementSeen(ad) {
            fetch("advertisements/seen/" + ad.id + "/{{ Auth::user()->id }}/", {
                    method: "POST",
                    headers: {
                        'Content-Type': 'application/json',
                        "X-CSRF-Token": "{{ csrf_token() }}"
                    },
                    //body: JSON.stringify(ad.targetlist[0])
                }).then(e => e.json())
                .then(async e => {
                    alert(e.Message);
                    await loadNotifications();
                });
        }
        loadNotifications();
        setInterval(async () => {
            await loadNotifications();
        }, 15000);
    </script>
</body>
</html>
