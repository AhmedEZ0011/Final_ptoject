
<!DOCTYPE html>
<html>
<head>
<title></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://kit.fontawesome.com/258bab96e7.js" crossorigin="anonymous"></script>
<!--Get your own code at fontawesome.com-->
<style>
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
<body 
    style=" background:#F1F0FB;
    
    
    
"
>
<div class="heder"
style="background-color:#F1F0FB;
      width: 70%;
      height: 10%;
      left: 2%;
      top: 2%;
      position: absolute;
      border-bottom:rgb(15, 9, 9)">
      <a href="{{ route('logout') }}">
      <i class="fa-solid fa-arrow-right-from-bracket"
      style="font-size:35px; 
      position: absolute;
      left:2%;
      top:25%;"></a></i>
      <button>
      <i class="fa-solid fa-gear"
      style="font-size:25px; 
      position: absolute;
      left:6%;
      top:40%;"></i></button>
      <button>
      <i class="fa-solid fa-bell"
      style="font-size:25px; 
      position: absolute;
      left:9%;
      top:40%;"></i>
      </button>
     <div class="Home-page"
     style="left:50%;
     top:30%;
     font-size:40px;
      position: absolute;">
     <i class="fa-solid fa-gear"></i>إعدادات</div>
    </div>


    <div
    class="ContenFunction"
    style="
        width: 20%;
        height: 95%;
        right: 2%;
        top: 2%;
        position: absolute;
        background: #97CADB;
        border-radius: 40px;
    "
  >
    <div class="UserName_Icon">
      <i class="fa-solid fa-user-tie"
      style="font-size:40px; 
      position: absolute;
      left:80%;
      top:4%;
          
           "></i>
    <div class="UserName"
    style="
      position:absolute;
      font-size:20px;
      right:27%;
      top:7%;
      "
      >{{ Auth::user()->name }} </div>
    </div>
    <button class="Home"
    style="
    background-color: #97CADB;
    height: 9%;
    left: 4%;
    right:4%;
    top: 13%;
    position: absolute;
    border-radius: 20px;
    border-style: none;
  "onclick=Home_button()>  
  <i class="fa-solid fa-house"
  style="font-size:35px; 
          right:4%;
          top:20%;
          position: absolute;"></i>
          <h2>الرئيسية</h2>    
  </button>
  <button class="Project-document"
          style="background-color: #97CADB;
          height: 9%;
          left: 4%;
          right:4%;
          top: 24%;
          position: absolute;
          border-radius: 20px;
          border-style: none;
  "onclick=Settings_button()>  
  <i class="fa-solid fa-gear"
  style="font-size:35px; 
          right:4%;
          top:20%;
          position: absolute;"></i>
          <h2>الإعدادات </h2> 
  </button>
 
  
  <button class="Proposals"
          style="background-color: #97CADB;
          height: 9%;
          left: 4%;
          right:4%;
          top: 35%;
          position: absolute;
          border-radius: 20px;
          border-style: none;
  "onclick=proposals_view_button()>  
  <i class="fa-regular fa-newspaper"
  style="font-size:35px; 
          right:4%;
          top:20%;
          position: absolute;"></i>
          <h2>المقترحات</h2> 
  </button>
  <button class="Graduation-project-students"
          style="background-color: #97CADB;
          height: 9%;
          left: 4%;
          right:4%;
          top: 46%;
          position: absolute;
          border-radius: 20px;
          border-style: none;
  "onclick=Projects_students_view_button(>  
  <i class="fa-regular fa-copy"
  style="font-size:35px; 
          right:4%;
          top:20%;
          position: absolute;"></i>
                 <h2> المشاريع</h2>
  </button>
  <button id="openModalBtn4" class="btn-primary"
          style="background-color: #97CADB;
          height: 9%;
        left: 4%;
        right:4%;
        top: 57%;
        position: absolute;
        border-radius: 20px;
        border-style: none;
  ">  
  <i class="fa-solid fa-thumbtack"
  style="font-size:35px; 
          right:4%;
          top:20%;
          position: absolute;"></i>
                 <h2>إضافة إعلان </h2>
  </button>

  
  
  </div>

  <div class="Settings-Contener"
  style="background: #F1F0FB;
  width: 60%;
  height: 80%;
  left: 11%;
  top: 17%;
  position: absolute;
  border-radius: 20px;
  border-style: solid;
  border-color:grey;
  z-index: 1;">
  
  
  <input class="Changing-Name"
  style="
  background: #F1F0FB;
  width: 40%;
  height: 10%;
  left: 11%;
  top: 5%;
  position: absolute;
  border-radius: 10px;
  text-align: center;
  font-size:30px;
  "
  placeholder="تغيير الأسم";
  >
  
  <div class="Changing-Email"
  style=" font-size:30px;
  left: 70%;
  top: 7%;
  position: absolute;"> :تغيير الاسم <i class="fa-solid fa-user-tie"></i></div>
  <input class="Changing-Email"
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
  placeholder="تغيير البريد الإلكتروني ";
  >
  
  <div class="Changing-Name"
  style=" font-size:30px;
  left: 70%;
  top: 25%;
  position: absolute;">:تغيير البريد الالكتروني <i class="fa-solid fa-envelope"></i></div>
  
  
  
  <input class="Old-Password"
  style="
  background: #F1F0FB;
  width: 40%;
  height: 10%;
  left: 11%;
  top: 45%;
  position: absolute;
  border-radius: 10px;
  font-size:30px;
  text-align: center;
  "
  placeholder="كلمة المرور القديمة";>
  
  <div class="Changing-Name"
  style=" font-size:30px;
  left: 70%;
  top: 54%;
  position: absolute;"> :تغيير كلمة المرور
  <i class="fa-solid fa-lock"></i></div>
  
  <input class="New-Password"
  style="
  background: #F1F0FB;
  width: 40%;
  height: 10%;
  left: 11%;
  top: 57%;
  position: absolute;
  border-radius: 10px;
  font-size:30px;
  text-align: center;"
  placeholder="كلمة المرور الجديدة ";>
  
  <input class="confirm-password"
  style="
  background: #F1F0FB;
  width: 40%;
  height: 10%;
  left: 11%;
  top: 69%;
  position: absolute;
  border-radius: 10px;
  text-align: center;
  font-size:30px;
  "
  placeholder="تأكيد كلمة المرور ";>
  
  
  <button class="Saving changes"
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

  </div>


    <form action="{{ route('Student_Home.addreport') }}" id="f4" name="f4" method="post" enctype="multipart/form-data">
    @csrf</form>
  <div class="modal-container" id="modalContainer4">
    <div class="modal">
      <button class="close-btn" id="closeModalBtn4">❌</button>
      <div class="header">
        <img src="Upload to the Cloud.png" class="cloud-icon"></img>
        <h2> إضافةإعلان </h2>
      </div>
      <div class="form-group">
        
        <input type="text" id="report-input-content" name="report-input-content" required maxlength="300" minlength="20" form="f1"
        style="width: 100%; height: 150px;">
     </div>
      <button type="submit" form="f4">إرسال </button>
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
</html>




