<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>محرك بحث مشاريع التخرج</title>
</head>
<script src="script.js"></script>
<script src="https://kit.fontawesome.com/258bab96e7.js" crossorigin="anonymous"></script>
<script>document.getElementById('dropdown-button').addEventListener('click', function(event) {
    event.stopPropagation();
    const dropdownList = document.getElementById('dropdown-list');
    dropdownList.classList.toggle('hidden');
});

document.addEventListener('click', function() {
    const dropdownList = document.getElementById('dropdown-list');
    if (!dropdownList.classList.contains('hidden')) {
        dropdownList.classList.add('hidden');
    }
});

document.getElementById('dropdown-list').addEventListener('click', function(event) {
    event.stopPropagation();
});

document.querySelectorAll('#dropdown-list li').forEach(function(item) {
    item.addEventListener('click', function() {
        document.getElementById('search-input').value = this.textContent;
        document.getElementById('dropdown-list').classList.add('hidden');
    });
});
function performSearch() {
            var selectedOption = document.getElementById("options").value;
            var searchTerm = document.getElementById("search").value;
            var searchResultsDiv = document.getElementById("searchResults");

            // Here you can perform your search based on the selected option and the search term
            // For simplicity, let's just display the selected option and search term
            searchResultsDiv.innerHTML = "Selected Option: " + selectedOption + "<br>";
            searchResultsDiv.innerHTML += "Search Term: " + searchTerm;
        }</script>
<style>
body, html {
    margin: 0;
    padding: 0;
    width:100%;
    height: 100%;
    font-family: Arial, sans-serif;
    box-sizing: border-box;
}

.container {
    text-align: center;
    background-image: url('2024-05-20 05_20_39-Greenshot.png'); /* يجب تغيير هذا إلى مسار الصورة الخاصة بك */
    background-size: cover;
    background-position: center;
    height: 100%;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    z-index: -1;


}

.header {
    position: absolute;
    top: 20px;
    right: 20px;
}

.login {
    display: flex;
    gap: 10px;
}

button {
    padding: 10px 20px;
    border: none;
    cursor: pointer;
    background-color: rgb(187, 162, 162);
    color: #fff;
    font-size: 16px;
    border-radius: 4px;
}

button:hover {
    background-color:  #7c8896;
}

.my-custom-class {
    background-color: #4CAF50; /* لون الخلفية */
    color: white; /* لون النص */
    padding: 10px 20px; /* الحشوة */
    text-align: center; /* محاذاة النص */
    text-decoration: none; /* إزالة الخط السفلي */
    display: inline-block; /* عرض البلوك */
    font-size: 16px; /* حجم الخط */
    margin: 4px 2px; /* الهامش */
    cursor: pointer; /* شكل المؤشر */
    border-radius: 12px; /* تقويس الحواف */
}.content {
    background-color: #97cadb6b;
    padding: 100px;
    border-radius: 75px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    width: 550px;
    height: 200px;
    text-align: center;
    position: absolute;

}

h1 {
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
}

.search-box {
    position: relative;
    display: flex;
    align-items: center;
    padding: 10px;
    gap: 10px;
}

#dropdown-button {
    background-color: #ffffff;
    color: rgb(176, 199, 218);
    font-size: 16px;
    padding: 10px;
    border-radius: 4px;
    border: none;
}

#search-input {
    width: 300px;
    padding: 10px;
    border: none;
    border-radius: 4px;
}

#search-button {
    background-color: #ffffff;
    color: white;
    font-size: 16px;
    padding: 10px;
    border-radius: 4px;
}

#dropdown-list {
    position: absolute;
    top: 40px;
    left: 0;
    width: 100%;
    border: none;
    background-color: #fff;
    list-style: none;
    padding: 0;
    margin: 0;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* إضافة ظل لتحسين المظهر */
    border-radius: 4px;
}

#dropdown-list li {
    padding: 10px;
    cursor: pointer;
}

#dropdown-list li:hover {
    background-color: #f0f0f0;
}

.hidden {
    display: none;
}
#options{
    border:none;
    background-color:rgb(255, 255, 255);
    border-radius: 5px;
    margin-right: 0px;
    flex: 3; /* تحكم في الحجم ليتناسب مع الحاوية */
    padding: 10px;
    width: 100px;
}
#search{
    border:none;
    background-color:rgb(255, 255, 255);
    border-radius: 5px;
    margin-right: 0px;
    flex: 3; /* تحكم في الحجم ليتناسب مع الحاوية */
    padding: 10px;
    width: 350px;;
}
.fa-sharp{
    border:none;
    background-color:rgb(187, 162, 162);
    border-radius: 5px;
    margin-right: 0px;
    flex: 3; /* تحكم في الحجم ليتناسب مع الحاوية */
    padding: 10px;
}
.centered-flex {
    position: absolute;
    top: 20px;
    left: 20px;
    font-size: px; /* تكبير حجم الأيقونة */
    color: #000000; /* لون الأيقونة */
}
</style>
<body>

    <div class="container">
        <div class="header">
            <button class="button2">
                <a href="{{ route('register') }}" class="nav-link" style="text-decoration: none">
                    <i class="tim-icons icon-laptop"></i> {{ __('إنشاء حساب') }}
                </a>
             </button>
            <button class="button1">
                    <a href="{{ route('login') }}" class="nav-link" style="text-decoration: none" >
                        <i class="tim-icons icon-single-02"></i> {{ __('تسجيل دخول') }}
                    </a>
                </button>
                </div>

        <div class="centered-flex">
            <img src="Mortarboard.png" alt="Description of the image" width="50" height="30">
        </div>
        <div class="content">
        <div class="welcome" style="text-align: center; margin-top: 50px;">
            <h1>مرحبًا بكم في نظام إدارة وأرشفة مشاريع التخرج
                بكلية تقنية المعلومات - جامعة طرابلس
            </h1>
            <p style="font-size: 20px; color: #000000; margin-top: 20px;">
            يوفر نظامنا بيئة متكاملة لإدارة وأرشفة مشاريع التخرج الخاصة بكم.
            يمكنكم من خلاله البحث بسهولة عن المشاريع السابقة .
            </p>
        </div>
            <div>
               <label for="options"></label>
                   <select id="options">
                    <option value="ALL">جميع الأقسام</option>
                    <option value="WT">تقنيات الإنترنت </option>
                     <option value="SE">هندسة برمجيات</option>
                    <option value="NT">الشبكات</option>
                   <option value="IS">نظم المعلومات</option>
                    <option value="MC ">الحوسبة المتنقلة</option>
                         </select>
                    <input type="text" id="search" placeholder="ابحث...">
                    <button onclick="performSearch()" class="fa-sharp fa-solid fa-magnifying-glass" ></button>
                    <div id="searchResults"></div>
            </div>
        </div>
    </div>
    </div>
</div>
</body>
</html>
