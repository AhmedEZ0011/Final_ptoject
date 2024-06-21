
<!DOCTYPE html>
<html>
<head>
<title></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://kit.fontawesome.com/258bab96e7.js" crossorigin="anonymous"></script>
<!--Get your own code at fontawesome.com-->
</head>
<body 
    style=" background-image: url({{ URL('main.jpg')}});
    background-repeat: no-repeat;
    
    background-size: 100%;
    
"
>

<div class="heder"
style="
    width: 100%;
    height: 10%;
    left: 0%;
    top: 0%;
    position: absolute;
    background: #97cadb4f;
    
"
><button class="BackIcon"
style="background: #97cadb4f;
border:none;"><i class="fa-solid fa-circle-arrow-left"
style="font-size: 40px;
"></i></button>
    <i class="fa-solid fa-graduation-cap "
    style=" font-size: 30px;
    "></i>
<button class="UserIcon"
style="
width: 13%;
height: 100%;
left: 80%;
top: 0%;
position: absolute;
color: #353232;
background-color: #4b80ab00;
font-size: 20px;
border:none;
text-decoration: none;


"
>
<p class ="UserIconName"
style="width: 13%;
height: 100%;
left: 20%;
top: 0%;
position: absolute;
color: #353232;">أستاد</p>
<i class="fa-solid fa-user" 
style=" font-size: 30px;"></i>

</div>


  <div
  class="ProjectResearchContener"
  style="
      width: 35%;
      height: 60%;
      left: 35%;
      top: 25%;
      position: absolute;
      background: #7CAACF;
      border-radius: 40px;
  "
>
<div class="text"
    style="
    width: 100%;
    height: 2%;
    left: 1%;
    top: 15%;
    position: absolute;
    text-align: center;
    color: #353232;
    font-size: 20px;
    font-family: Inter;
    font-weight: 200px;
    word-wrap: break-word;
    "
    >
    تسجيل الدخول
</div>
<form action="{{route('Faculty_Sign_In.loginPost')}}" method="post"> 
    @csrf
    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
<input type="email" class="email" 
        style="
        width: 70%;
        height: 10%;
        left: 14%;
        top: 30%;
        position: absolute;
        text-align: center;
        color: #090e09;
        border-radius: 15px;
        border:none;
        "
       
        placeholder="البريد الإلكتروني";
>
<i class="fa-solid fa-envelope"
style="
        width: 70%;
        height: 10%;
        left: 17%;
        top: 33%;
        position: absolute;"></i>
    <input type="password" class="password" 
    style="
    width: 70%;
    height: 10%;
    left: 14%;
    top: 50%;
    position: absolute;
    text-align: center;
    color: #090e09;
    border-radius: 15px;
    border:none;
    "
    placeholder="كلمة المرور ";

>
<i class="fa-solid fa-lock"
style="
width: 70%;
height: 10%;
left: 18%;
top: 53%;
position: absolute;"></i>


<button 
style="
width: 60%;
height: 15%;
left: 20%;
top: 75%;
position: absolute;
background: #4B80AB;
border:none;
border-radius: 5px;"
type="submit">تسجيل </button>

</div>

</form>
</body>
</html>




