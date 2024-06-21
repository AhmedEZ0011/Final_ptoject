
<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تسجيل الدخول</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<script>
    // ادير refresh للصفحة تلقائي
    function reloadPage() {
        setTimeout(function() {
            location.reload();
        }, 4000); // 4 seconds
    }
</script>
<style>
body {
    margin: 0;
    padding: 0;
    font-family: Arial, sans-serif;
    background: url('main.jpg') no-repeat center center fixed;
    background-size: cover;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

.login-container {
    background: #97cadbe1;
    padding: 30px;
    border-radius: 8px;
    width: 300px;
    text-align: center;
}


.login-box h2 {
    margin-bottom: 20px;
}

.input-group {
    position: relative;
    margin-bottom: 30px;
}

.input-group i {
    position: absolute;
    left: 15px;
    top: 50%;
    transform: translateY(-50%);
    color: #9b9999;
}

.input-group input {
    width: 80%;
    padding: 10px 10px 10px 30px;
    border: 1px solid #ffffff;
    border-radius: 4px;
    font-size: 16px;
    text-align: right;
}

button {
    width: 60%;
    padding: 10px;
    border: none;
    border-radius: 4px;
    background-color: #6591c0;
    color: white;
    font-size: 16px;
    cursor: pointer;
}

button:hover {
    background-color: #93aece;
}
.navbar {
    width: 99%;
    padding: 10px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    position: fixed;
    top: 0;
    left: 0;
    z-index: 1000; /* ضمان ظهور الشريط فوق جميع المحتويات الأخرى */
    background-color: #97cadb4f;
}

.navbar-left, .navbar-right {
    display: flex;
    align-items: center;
}
.navbar-left i, .navbar-right i {
    color: rgb(12, 12, 12);
    font-size: 28px;
    margin: 0 10px;
    right: 10%;
}

.btn-back {
    background: none;
    border: none;
    color: rgb(3, 3, 3);
    font-size: 30px;
    cursor: pointer;
}
.custom-link {
    color: #483fc7; /* تغيير لون النص إلى الأحمر، يمكن تغيير اللون حسب الحاجة */
    text-decoration: none; /* إزالة الخط تحت الرابط */
}

.custom-link:hover {
    color: #7a7675; /* لون النص عند التمرير عليه */
    text-decoration: underline; /* يمكن إضافة خط تحت الرابط عند التمرير إذا رغبت في ذلك */
}
.UserIcon{
    width: 13%;
height: 100%;
left: 93%;
top: 30%;
position: absolute;
color: #353232;
background-color: #4b80ab00;
font-size: 20px;
border:none;
text-decoration: none;
}
.error {
    color: red;
    font-size: 14px;
}

.alert {
    color: red;
    margin-bottom: 15px;
}
.centered-flex {
    position: absolute;
    top: 20px;
  right: ;: 40px;
    font-size: px; /* تكبير حجم الأيقونة */
    color: #000000; /* لون الأيقونة */
}
.user
{

    top: 20px;
    right: 70px;
    font-size: px; /* تكبير حجم الأيقونة */
    color: #000000; /* لون الأيقونة */
}
.UserIconName{
    top: 20px;
    text-align: right;
    font-size: 20px; /* تكبير حجم الأيقونة */
    color: #000000; /* لون الأيقونة */

}
</style>
<body>


<nav class="navbar">
        <div class="navbar-left">
            <div class="centered-flex-user">
                <img src="Graduation Cap.png" alt="Description of the image" width="50" height="30">
            </div>
        </div>
        <div class="navbar-right">
            <div class="user">
                <img src="user.png" alt="Description of the image" width="50" height="50">
            </div>
        </div>
    </nav>
    <div class="login-container">
        <h2>تسجيل الدخول</h2>
        <form method="post" action="{{ route('login') }}">
            @csrf
            <div class="input-group">
                <i class="fas fa-envelope"></i>
                <input type="email" name="email" id="email" required autofocus placeholder="البريد الإلكتروني">
            </div>
            <div class="input-group">
                <i class="fas fa-lock"></i>
                <input type="password" name="password" id="password" required placeholder=" كلمة المرور">
            </div>
            <div>
                <a href="{{ route('password.request') }}" class="custom-link">هل نسيت كلمة المرور؟</a>
            </div>
            <br>
            <button type="submit">تسجيل</button>
        </form>
    </div>
</body>
</html>