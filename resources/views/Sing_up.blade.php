<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/258bab96e7.js" crossorigin="anonymous"></script>
    <title>إنشاء حساب جديد</title>
    
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url('MainImg.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat; display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .hidden {
            display: none;
        }
        .form-container {
            background: linear-gradient(130deg, #a2b3c5, #dadada);  /* Slightly transparent white */
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 450px;
        }
        .form-container h2 {
            text-align: center;
            margin-bottom: 1rem;
        }
        .form-container input, .form-container select {
            width: 95%;
            padding: 5px;
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
#logo{
    position: absolute;
    top: 34px;
    left: 50px;
    weight: 50;
    height: 30; /* لون الأيقونة */
}
.button-wrapper {
            display: flex;
            justify-content: center;
            margin-top: 1rem;
        }
        .button-wrapper button {
            width: 40%; /* Set the button width */
            padding: 0.75rem; /* Adjust padding if needed */
        }
    </style>
</head>
<body>

<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/258bab96e7.js" crossorigin="anonymous"></script>
    <title>إنشاء حساب جديد</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url('MainImg.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat; display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .hidden {
            display: none;
        }
        .form-container {
            background-color:  #97cadba8;
            padding: 20px;
            border-radius: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 450px;
        }
        .form-container h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        .form-container input, .form-container select {
            width: 95%;
            padding: 5px;
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
#logo{
    position: absolute;
    top: 34px;
    left: 50px;
    weight: 50;
    height: 30; /* لون الأيقونة */
}
    </style>
</head>
<body>
    <div id="logo">
        <img src="Mortarboard.ico" alt="Description of the image" width="50" height="30">
    </div>
    <div class="form-container">
        <h2>إنشاء حساب جديد</h2>
        <form  action="{{route('Sing_up.store')}}" method="post">
            @csrf
            <input type="hidden" name="_token" value="{{ csrf_token() }}"  />
            <div>     
                <label for="options" placeholder="اختر نوع الحساب" ></label>
                    <select name="type" placeholder="اختر">

            <input type="hidden" name="_token" value="{{ csrf_token() }}" />
            <div>
                <label for="accountType" ></label>
                    <select id="accountType" name = "type">


                            <option value="4">طالب</option>
                            <option value="3">أستاذ</option>

                        </select>

             </div>
             <input type="text" name="collage" placeholder="الكلية" readonly value="IT">
           <input type="text" name="name" placeholder="الاسم الثلاثي" required>
             <input type="text" name="id" placeholder="رقم القيد" required>
              <div>
                <label for="options" placeholder=" القسم "></label>

                    <select name="department_id" placeholder="القسم">
                        @foreach($departments as $department)
                            <option value="{{$department->id}}">{{$department->name}}</option>
                        @endforeach
                    </select>
             </div>
              <input type="email" name= "email" placeholder="البريد الإلكتروني" required>
              <input type="password" name="password" placeholder="كلمة المرور" required>
            <input type="password" name="password" placeholder="تأكيد كلمة المرور" required>

            <div  id="userInputs" >
                <input type="number" name="cridits" id="units" placeholder="عدد الوحدات المجتازة"min="1" max="135">
                <input type="number" name="gpa" id="gpa" placeholder="المعدل التراكمي" min="0" max="100">
            </div> 
            <div class="button-wrapper">
                <button type="submit" value="submit" class="btn btn-primary">إنشاء حساب</button>
            </div>
         </form>
<script>

const accountType = document.getElementById('accountType');
        const userInputs = document.getElementById('userInputs');
        const submitButton = document.getElementById('submitButton');

        accountType.addEventListener('change', function() {
            if (accountType.value === "3") {
                userInputs.classList.add('hidden');
                submitButton.disabled = false;
            } else {
                userInputs.classList.remove('hidden');
                submitButton.disabled = false;
            }
        });
        
</script>





</body>
</html>