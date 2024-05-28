
<!DOCTYPE html>
<html>
<head>
<title></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://kit.fontawesome.com/258bab96e7.js" crossorigin="anonymous"></script>
<!--Get your own code at fontawesome.com-->
<style>
    .dropbtn {
    background-color: #4b80ab00;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
    }

    .dropdown {
    position: relative;
    display: inline-block;
    }

    .dropdown-content {
    display: none;
    position: absolute;
    background-color: #97cadb71;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
    border-radius: 10px;
    }

    .dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    }

    .dropdown-content a:hover {background-color: #70abdbd8; }

    .dropdown:hover .dropdown-content {display: block;}

    .dropdown:hover .dropbtn {background-color: #4b80ab00;}
    </style>
</head>
<body
    style=" background-image: url({{ URL('main.jpg')}});
    background-repeat: no-repeat;

    background-size: 100%;

"
>

<div class="heder"

><button class="BackIcon"
style="background: #97cadb4f;
border:none;"><i class="fa-solid fa-circle-arrow-left"
style="font-size: 40px;
"></i></button>
    <i class="fa-solid fa-graduation-cap "
    style=" font-size: 30px;
    "></i>


</div>


  <div
  class="ProjectResearchContener"
  style="
      width: 34%;
      height: 75%;
      left: 32%;
      top: 10%;
      position: absolute;
      background: #97cadba8;
      border-radius: 40px;
  "
>
<div class="text"
    style="
    width: 100%;
    height: 2%;
    left: 1%;
    top: 3%;
    position: absolute;
    text-align: center;
    color: #353232;
    font-size: 20px;
    font-family: Inter;
    font-weight: 200px;
    word-wrap: break-word;
    "
    >
    إنشاء حساب جديد
</div>

<input class="User-type"
        style="
        width: 70%;
        height: 5%;
        left: 14%;
        top: 10%;
        position: absolute;
        padding-right: 3%;
        text-align: right;
        color: #090e09;
        border-radius: 5px;
        border:none;
        "

        placeholder="نوع المستخدم";
>

    <input class="full-Name" type="text"
    style="
    width: 70%;
    height: 5%;
    left: 14%;
    top: 20%;
    padding-right: 3%;
    text-align: right;
    position: absolute;
    color: #090e09;
    border-radius: 5px;
    border:none;
    "
    placeholder="أسم ثلاثي  ";

>
<input class="email"type="email"
style="
width: 70%;
height: 5%;
left: 14%;
top: 30%;
padding-right: 3%;
text-align: right;
position: absolute;
color: #090e09;
border-radius: 5px;
border:none;
"
placeholder="البريد الإلكتروني";

>
<input class="password" type="password"
style="
width: 70%;
height: 5%;
left: 14%;
top: 40%;
padding-right: 3%;
text-align: right;
position: absolute;
color: #090e09;
border-radius: 5px;
border:none;
"
placeholder="كلمة المرور";

>
<input class="confirm-password" type="password"
style="
width: 70%;
height: 5%;
left: 14%;
top: 50%;
padding-right: 3%;
text-align: right;
position: absolute;
color: #090e09;
border-radius: 5px;
border:none;
"
placeholder="تأكيد كلمة المرور";

>
<input class="Section"
style="
width: 70%;
height: 5%;
left: 14%;
top: 60%;
padding-right: 3%;
text-align: right;
position: absolute;
color: #090e09;
border-radius: 5px;
border:none;
"
placeholder="القسم";

>

<input class="transcript" type=""
style="
width: 70%;
height: 5%;
left: 14%;
top: 70%;
padding-right: 3%;
text-align: right;
position: absolute;
color: #090e09;
border-radius: 5px;
border:none;
"
placeholder="ادخل كشف الدرجات";
>
<i class ="fa-solid fa-download"
style="
width: 70%;
height: 5%;
left: 20%;
top: 70%;
position: absolute;"></i>
<p style="
width: 70%;
height: 5%;
left: 55%;
top: 75%;
position: absolute;
coler :black ">: الجنس</p>


<div class="radio"style="
width: 70%;
height: 5%;
left: 25%;
top: 79%;
position: absolute;">
    <form>
        <input type="radio" id="male" name="a" value="male">
        <label for="male">ذكر</label>
        <input type="radio" id="female" name="a" value="female">
        <label for="female">أنثى</label>
      </form>
</div>


<button class=""
style="
width: 27%;
height: 7%;
left: 37%;
bottom: 5%;
position: absolute;
background: #4B80AB;
border:none;
border-radius: 5px;"
>إنشاء </button>
<div class="dropdown"
style="
        width: 85%;
        height: 10%;
        left: 14%;
        top: 5%;">
    <button class="dropbtn"
    style="color: black ;
        left: 37%;
        top: 16%;
        position: fixed;
    "><i class="fa-solid fa-caret-down"></i></button>


<div class="dropdown-content">
    <a href="#"><i class="fa-solid fa-user-tie"></i>  أستاد</a>
    <a href="#"><i class="fa-solid fa-user"></i>طالب </a>
</div>
</div>


<div class="dropdown"
style="
        width: 90%;
        height: 10%;
        left: 14%;
        top: 43%;">
    <button class="dropbtn"
    style="color: black ;
        left: 37%;
        top: 16%;
        position: fixed;
    "><i class="fa-solid fa-caret-down"></i></button>


                                    <div class="dropdown-content">

                    <a href="#">    تقنيات الإنترنت </a>
                    <a href="#">  حوسبة متنقلة     </a>
                    <a href="#">  الشبكات</a>
                    <a href="#">  نظم المعلومات</a>
                    <a href="#"> هندسة برمجيات</a>

                                    </div>
                                    </div>


</div>
</div>
</body>
</html>




