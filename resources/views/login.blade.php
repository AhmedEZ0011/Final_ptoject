
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
                    <i class="fa-solid fa-graduation-cap"
                    style="font-size: 36px ;
                           "></i>
                <div class="heder"
                style="
                    width: 100%;
                    height: 7%;
                    left: 0%;
                    top: 0%;
                    position: absolute;
                    background: #97cadb71;
                    
                "
                >
                <button class="create"
                style="
                width: 13%;
                height: 100%;
                left: 70%;
                top: 0%;
                position: absolute;
                text-align: center;
                background-color: #4B80AB;
                color: #353232;
                font-size: 20px;
                font-family: Inter;
                font-weight: 700;
                text-decoration: none;
                word-wrap: break-word;
                border-radius: 5px;
                border:none;

                "
                 onclick="Go_To_SingUp()"
                 
                    
                >
                إنشاء حساب
                </button>
                <button class="create"
                style="
                width: 13%;
                height: 100%;
                left: 88%;
                top: 0%;
                position: absolute;
                text-align: center;
                color: black;
                font-size: 20px;
                font-family: Inter;
                font-weight: 700;
                text-decoration: underline;
                word-wrap: break-word;
                border-radius: 5px;
                border:none;
                text-decoration: none;
                background:#054980;


                "
                >
                <i class="fa-solid fa-caret-down"></i>
                تسجيل الدخول ک
                </button>
                <div class="dropdown"
                style="
                width: 13%;
                height: 100%;
                left: 88%;
                top: 0%;
                position: absolute;
                text-align: center;
                color: #353232;
                background-color: #4b80ab00;
                font-size: 20px;
                font-family: Inter;
                font-weight: 700;
                text-decoration: underline;
                word-wrap: break-word;
                border-radius: 5px;
                border:none;
                text-decoration: none;
                background:#97cadb6b;


                ">
                    <button class="dropbtn"></button>
                    <div class="dropdown-content">
                    <a href="http://127.0.0.1:8000/Faculty_Sign_In">أستاد   <i class="fa-solid fa-user-tie"></i></a>
                    <a href="http://127.0.0.1:8000/Student_Sign_In">طالب    <i class="fa-solid fa-user"></i></a>
                    </div>
                </div>
                </div>

                <div>
                <div
                class="ProjectResearchContener"
                style="
                    width: 40%;
                    height: 50%;
                    left: 30%;
                    top: 25%;
                    position: absolute;
                    background:#97cadb6b;
                    border-radius: 75px;
                "
                >
                <div class="text"
                    style="
                    width: 100%;
                    height: 2%;
                    left: 1%;
                    top: 30%;
                    position: absolute;
                    text-align: center;
                    color: #353232;
                    font-size: 20px;
                    font-family: Inter;
                    font-weight: 200px;
                    word-wrap: break-word;
                    
                    "
                    >
                محرك بحث مشاريع التخرج لكلية تقنية المعلومات / جامعة طرابلس

                </div>

                <input class=""
                        style="
                        width: 70%;
                        height: 10%;
                        left: 14%;
                        top: 45%;
                        position: absolute;
                        text-align: center;
                        color: #090e09;
                        border-radius: 5px;
                        border:none;
                        "
                        placeholder="اختر القسم وابحث عن مشروع";
                >
                    <i class="fa-solid fa-magnifying-glass"
                    style="
                    width: 70%;
                    height: 10%;
                    left: 70%;
                    top: 47%;
                    position: absolute;"></i>

                    <div class="dropdown">
                    <button class="dropbtn"
                    style="color: black ;
                        left: 35%;
                        top: 46%;
                        position: fixed; 
                    "><i class="fa-solid fa-caret-down"></i></button>
                                
                                                   
                                                    <div class="dropdown-content">
                                                        <a href="#"><i class="fa-solid fa-book-bookmark" ></i>    تقنيات الإنترنت </a>
                                                        <a href="#"><i class="fa-solid fa-book-bookmark"></i>  حوسبة متنقلة     </a>
                                                        <a href="#"><i class="fa-solid fa-book-bookmark"></i>  الشبكات</a>
                                                        <a href="#"><i class="fa-solid fa-book-bookmark"></i>  نظم المعلومات</a>
                                                        <a href="#"><i class="fa-solid fa-book-bookmark"></i> هندسة برمجيات</a>
                                                        <a href="#"><i class="fa-solid fa-book-bookmark"></i>الجميع</a>
                                                    </div>
                                                    </div>


                </div>
                 <script> 
                    function Go_To_SingUp(){
                        window.location.href ="http://127.0.0.1:8000/Sing_up"
                    }


                 </script>                 


                </body>
                </html>




