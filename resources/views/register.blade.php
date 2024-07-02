<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/258bab96e7.js" crossorigin="anonymous"></script>
    <title>إنشاء حساب جديد</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url('main.jpg');
            background-size: cover;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .form-container {
            background-color:  #97cadba8;
            width: 100%;
            max-height: 700px;
            max-width: 500px; /* يمكنك تعديل هذا العرض حسب الحاجة */
            padding: 10px;
            border-radius: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .form-container h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        .form-container input, .form-container select {
            width: 95%;
            padding: 10px;
            margin: 5px 0;
            text-align:right;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .form-container .gender {
            display: flex;
            justify-content: space-around;
            margin: 15px 0;
        }
        .form-container .gender input {
            width: auto;
            margin: 0 5px;
        }
        .form-container button {
            width: 100%;
            padding: 10px;
            background-color: #8b8b8b;
            border: none;
            color: white;
            border-radius: 5px;
            cursor: pointer;
        }
        .form-container button:hover {
            background-color: #5c6b7a;
        }
        #options{
            border:none;
            background-color:rgb(255, 255, 255);
            border-radius: 5px;
            margin-right: 0px;
            flex: 3; /* تحكم في الحجم ليتناسب مع الحاوية */
            padding: 10px;
            text-align:right;
            width: 450px;
        }
        .graduation-icon {
            position: absolute;
            top: 20px;
            left: 60px;
            font-size: 30px; /* تكبير حجم الأيقونة */
            color: #000000; /* لون الأيقونة */
        }
        #back {
            position: absolute;
            top: 20px;
            left: 20px;
            font-size: 30px; /* تكبير حجم الأيقونة */
            color: #000000; /* لون الأيقونة */
        }
        .input-group input[type="file"] {
            width: 95%;
            padding: 10px;
            margin: 5px 0;
            text-align:right;
            border: 1px solid #ccc;
        }
        .file-label {
            text-align:right; /* محاذاة النص إلى اليمين */
        }
        .centered-flex {
    position: absolute;
    top: 20px;
    left: 20px;
    font-size: px; /* تكبير حجم الأيقونة */
    color: #000000; /* لون الأيقونة */
}
    </style>
</head>
<body>
    <div class="centered-flex">
        <img src="Mortarboard.png" alt="Description of the image" width="50" height="30">
    </div>
    <div class="form-container">
        <h2>إنشاء حساب جديد</h2>
        <form action="{{ route('register') }}" method="POST">
            @csrf
            <div>
                <select name="type" placeholder="اختر">
                    <optgroup>
                        <option value="4">طالب</option>
                        <option value="0">ادمن</option>
                        <option value="2">مشرف</option>
                        <option value="1">منسق مشاريع</option>
                        <option value="3">أستاذ</option>
                    </optgroup>
                </select>
            </div>
            <input type="text" name="collage" placeholder="الكلية" readonly value="كلية تقنية المعلومات ">
            <input type="text" name="name" placeholder="الاسم الثلاثي" required>


<input type="text" name="id" placeholder="رقم القيد" required>
            <div>
                <label for="options" placeholder=" القسم "></label>
                <select name="department_id" placeholder="القسم">
                    <optgroup>
                        <option value="WT">تقنيات الإنترنت</option>
                        <option value="2">هندسة البرمجيات</option>
                        <option value="1">حوسبة متنقلة</option>
                        <option value="3">نظم معلومات</option>
                        <option value="4">شبكات</option>
                    </optgroup>
                </select>
            </div>
            <input type="email" name="email" placeholder="البريد الإلكتروني" required>
            <input type="password" name="password" placeholder="كلمة المرور" required>
            <input type="password" name="password_confirmation" placeholder="تأكيد كلمة المرور" required>
            <div class="input-group gender">
                <div>
                    <input type="radio" name="gender" id="male" name="gender" value="male"required>
                    <label for="male">ذكر</label>
               <input type="radio" id="female" name="gender" value="female">
                    <label for="female">أنثى</label>
                </div>
                <label>الجنس</label>
            </div>

                <input type="number" name="cridits" id="units" placeholder="عدد الوحدات المنجزة " min="1" max="135">
                <input type="number" name="gpa" id="gpa" placeholder="المعدل التراكمي" min="0" max="100">

            <button type="submit">إنشاء حساب</button>
        </form>
    </div>
    </div>
</body>
</html>
