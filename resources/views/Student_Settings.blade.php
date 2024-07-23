
<!DOCTYPE html>
<html>
<head>
<title></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://kit.fontawesome.com/258bab96e7.js" crossorigin="anonymous"></script>
<!--Get your own code at fontawesome.com-->
</head>
<body 
    style=" background:#F1F0FB;   
    
"
>
<div class="heder"
style="
      width: 70%;
      height: 10%;
      left: 2%;
      top: 2%;
      position: absolute;
      border-bottom: 5px solid black;">
      
      <i class="fa-solid fa-arrow-right-from-bracket"
      style="font-size:35px; 
      position: absolute;
      left:2%;
      top:25%;"></i>
      
      <i class="fa-solid fa-gear"
      style="font-size:25px; 
      position: absolute;
      left:6%;
      top:40%;"></i>
      <i class="fa-solid fa-bell"
      style="font-size:25px; 
      position: absolute;
      left:9%;
      top:40%;"></i>
     
     <div class="Home-page"
     style="left:50%;
     top:30%;
     font-size:40px;
      position: absolute;">
      <i class="fa-solid fa-gear"></i>الإعدادات </div>
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
    <i class="fa-solid fa-user-graduate"
    style="font-size:40px; 
    position: absolute;
    left:80%;
    top:9%;
        
         "></i>
  <div class="UserName"
  style="
    position:absolute;
    font-size:20px;
    right:27%;
    top:12%;
    "
    > {{ Auth::user()->name }} </div>
  </div>
  <button class="Home"
  style="
  background-color: #97CADB;
  height: 9%;
  left: 4%;
  right:4%;
  top: 20%;
  position: absolute;
  border-radius: 20px;
  border-style: none; 
"
onclick="Home_button()">  
<i class="fa-solid fa-house"
style="font-size:35px; 
        right:4%;
        top:20%;
        position: absolute;"></i>
        <h2>الرئيسية</h2>    
</button>
<button class="Submit=proposal"
        style="background-color: #97CADB;
        height: 9%;
        left: 4%;
        right:4%;
        top: 30%;
        position: absolute;
        border-radius: 20px;
        border-style: none;
">  
<i class="fa-solid fa-cloud-arrow-down"
style="font-size:35px; 
        right:4%;
        top:20%;
        position: absolute;"></i>
               <h2>تقديم مقترح</h2>
</button>
<button class="Archived-projects"
        style="background-color: #97CADB;
        height: 9%;
        left: 4%;
        right:4%;
        top: 40%;
        position: absolute;
        border-radius: 20px;
        border-style: none;
">  
<i class="fa-solid fa-book-bookmark"
style="font-size:35px; 
        right:4%;
        top:20%;
        position: absolute;"></i>
<h2>مشاريع مؤرشفة</h2> 
</button>

<button class="Project-document"
        style="background-color: #97CADB;
        height: 9%;
        left: 4%;
        right:4%;
        top: 60%;
        position: absolute;
        border-radius: 20px;
        border-style: none;
">  
<i class="fa-solid fa-file-arrow-down"
style="font-size:35px; 
        right:4%;
        top:20%;
        position: absolute;"></i>
        <h2>تحميل التوثيق</h2> 
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

<form action="{{ route('Student_Settings.update') }}" id="f2" name="f2" method="post" enctype="multipart/form-data">
        @csrf
<input class="name" name="name"
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
type="text" 
name="f2"
placeholder="تغيير الأسم";
>

<div class="Changing-Email"
style=" font-size:30px;
left: 70%;
top: 7%;
position: absolute;"> :تغيير الاسم <i class="fa-solid fa-user-graduate"></i></div>
<input type="email" class="email" name="email"
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
name="f2"
placeholder="تغيير البريد الإلكتروني ";
>

<div class="Changing-Name"
style=" font-size:30px;
left: 70%;
top: 25%;
position: absolute;">:تغيير البريد الالكتروني <i class="fa-solid fa-envelope"></i></div>





<div class="Changing-Name"
style=" font-size:30px;
left: 70%;
top: 54%;
position: absolute;"> :تغيير كلمة المرور
<i class="fa-solid fa-lock"></i></div>


<input type="password" class="password" name="password"
style="
background: #F1F0FB;
width: 40%;
height: 10%;
left: 11%;
top: 60%;
position: absolute;
border-radius: 10px;
text-align: center;
font-size:30px;
"
name="password"
placeholder="تغيير كلمة المرور ";>


<button class="Saving changes" 
type="submit"
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
</form>
<script>
function Home_button(){
        window.location.href ="http://127.0.0.1:8000/Student_Home"
                }

</script>                
</body>
</html>




