<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, max-scale=1.0">
    <title>Document</title>
    <style>
body {
  background: #F1F0FB;
}

.header {
  background-color: #F1F0FB;
  width: 70%;
  height: 10%;
  left: 2%;
  top: 2%;
  position: absolute;
  border-bottom: black;
}

.header button {
  font-size: 35px;
  position: absolute;
  top: 25%;
}

.header .fa-arrow-right-from-bracket {
  left: 2%;
}

.header .fa-gear {
  left: 6%;
}

.header .fa-bell {
  left: 9%;
}

.header .home-page {
  left: 50%;
  top: 30%;
  font-size: 40px;
  position: absolute;
}

.content-function {
  width: 20%;
  height: 95%;
  right: 2%;
  top: 2%;
  position: absolute;
  background: #4B80AB;
  border-radius: 40px;
}

.user-name-icon {
  position: absolute;
  left: 80%;
  top: 9%;
}

.user-name {
  position: absolute;
  font-size: 20px;
  right: 27%;
  top: 12%;
}

.content-function button {
  background-color: #4B80AB;
  height: 9%;
  left: 4%;
  right: 4%;
  position: absolute;
  border-radius: 20px;
  border-style: none;
}

.content-function .fa-house {
  font-size: 35px;
  right: 4%;
  top: 20%;
}

.advertisement {
  position: absolute;
  left: 25%;
  top: 15%;
}

.advertisement .fa-clipboard {
  font-size: 40px;}
  </style>
            </head>
       
           
           

<body>
<div class="header">
  <button>
    <i class="fa-solid fa-arrow-right-from-bracket"></i>
  </button>
  <button>
    <i class="fa-solid fa-gear"></i>
  </button>
  <button>
    <i class="fa-solid fa-bell"></i>
  </button>
  <div class="home-page">
    <i class="fa-solid fa-house"></i>Home
  </div>
</div>

<div class="content-function">
  <div class="user-name-icon">
    <i class="fa-solid fa-user-tie"></i>
    <div class="user-name">نور الإسلام عبد النبي المنتصر</div>
  </div>
  <button class="home">
    <i class="fa-solid fa-house"></i>
    <h2>الرئيسية</h2>
  </button>
  <button class="graduation-project-students">
    <i class="fa-solid fa-people-group"></i>
    <h2>طلبة المشاريع</h2>
  </button>
  <button class="monthly-reports">
    <i class="fa-solid fa-clipboard-list"></i>
    <h2>التقارير الشهرية</h2>
  </button>
  <button class="enter-evaluation">
    <i class="fa-solid fa-table-list"></i>
    <h2>إدخال التقييم</h2>
  </button>
  <button class="proposals">
    <i class="fa-regular fa-newspaper"></i>
    <h2>المقترحات</h2>
  </button>
  <button class="project-document">
    <i class="fa-regular fa-copy"></i>
    <h2>ملفات المشروع</h2>
  </button>
</div>

<div class="advertisement">
  <i class="fa-regular fa-clipboard"></i>
  <div class="advertisement-name">الإعلانات</div>
</div>
<div class="advertisement-container"></div>

<div class="advertisement">
  <i class="fa-regular fa-clipboard"></i>
  <div class="advertisement-name">الإعلانات</div>
</div>
<div class="advertisement-container"></div>

</body>
</html>