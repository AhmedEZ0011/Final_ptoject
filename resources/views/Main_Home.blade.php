<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>محرك بحث مشاريع التخرج</title>
</head>
{{-- <script src="script.js"></script> --}}
<link rel="stylesheet" href="/css/a.css">
<script src="/js/main.js"></script>
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
=======
<script>



>>>>>>> d8948469fb2d8e8ca2da45c2e1e0e869b75a1ac7


function performSearch() {
            var selectedOption = document.getElementById("options").value;
            var searchTerm = document.getElementById("search").value;
            var searchResultsDiv = document.getElementById("searchResults");

            // Here you can perform your search based on the selected option and the search term
            // For simplicity, let's just display the selected option and search term
            searchResultsDiv.innerHTML = "Selected Option: " + selectedOption + "<br>";
            searchResultsDiv.innerHTML += "Search Term: " + searchTerm;
        }
            function Sing_up_button() {
                window.location.href = "http://127.0.0.1:8000/Sing_up" 
              }
              function Student_Sign_In() {
                window.location.href = "http://127.0.0.1:8000/Student_Sign_In" 
              }
             
</script>
<style>
body, html {
    margin: 0;
    padding: 0;
    width:100%;
    height: 100%;
    font-family: Arial, sans-serif;
    box-sizing: border-box;
    background-image: url('MainImg.jpg');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
}

.container {
     
    text-align: center;
    height: 50%;
    display: flex;
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
    background-color: #7c8896;
    color: #fff;
    font-size: 16px;
    border-radius: 4px;
}

button:hover {
    background-color: #3972afde;
}


.content {
    background: linear-gradient(130deg, #a2b3c5, #dadada); 
    padding: 70px;
    border-radius: 75px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    width: 550px;
    height: 300px;
    left: 28%;
    top: 25%;
    text-align: center;
    position: absolute;

}

h1 {
    width: 100%;
                    height: 2%;
                    left: 1%;
                    top: 20%;
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
    flex: 3;
    width: 120px;
    height: 40px;
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
.flash-success {
    background-color: #d4edda;
    color: #155724;
    border: 1px solid #c3e6cb;
    position: absolute;
    top: 14%;
    width: 98%;
    left: 1%;
}#logo{
    position: absolute;
    top: 1.5%;
    left: 1%;
    weight: 50;
    height: 30; /* لون الأيقونة */
}
</style>
<body>
    <div class="container">
        <div class="header">
            <div class="login">
                <button id="signup-button" onclick=Sing_up_button()> إنشاء حساب</button>
                <div class="dropdown-content">
                <button id="login-button" onclick=Student_Sign_In()>تسجيل الدخول ک
                    </button>

                    </div>

                </div>

                </div>
                <div>
                @if (session('active'))
                <div class="flash-message flash-success">
                    {{ session('active') }}
                </div>
                </div>
              @endif
        <div class="centered-flex">
            <form  action="{{route('Search_Results.index')}}" method="post"> 
                @csrf
        </div>
        <div class="content">
        <div class="welcome" style="text-align: center; margin-top: 50px;  font-size: 50%;">
            <h1>مرحبًا بكم في نظام إدارة وأرشفة مشاريع التخرج
                 بكلية تقنية المعلومات - جامعة طرابلس
            </h1>
            <p style="font-size: 20px; color: #000000; margin-top: 0; top:20%;">
   يوفر نظامنا بيئة متكاملة لإدارة وأرشفة مشاريع التخرج الخاصة بكم. 
   يمكنكم من خلاله البحث بسهولة عن المشاريع السابقة .
            </p>
        </div>

            <div >
               <label for="options"></label>
                   <select id="options" name="options" onchange="clearList();" style=" height:90%">
                        <option value="ALL">جميع الأقسام</option>
                        <option value="WT">تقنيات الإنترنت </option>
                        <option value="SE">هندسة برمجيات</option>
                        <option value="NT">الشبكات</option>
                        <option value="IS">نظم المعلومات</option>
                        <option value="MC ">الحوسبة المتنقلة</option>
                    </select>
                    <input list="browsers-list" name="search" type="text" id="search" placeholder="ابحث..."
                        oninput="sendData(); ">
                    <datalist id="browsers-list">
                        <option value="md"></option>
                        <option value="ahmed"></option>
                    </datalist>
                    <button onclick="sendData()" class="fa-sharp fa-solid fa-magnifying-glass"></button>
            </div>
            <div class="search-results-window">
            </div>
        </div>
    </div>
</div>
</body>
<script>
    let deptValue = document.querySelector("select#options");
    let textValue = document.querySelector("input[name='search']");
    let list = document.querySelector(".search-results-window");

    async function sendData() {

        const payload = {
            search: textValue.value,
            departement: deptValue.value
        };
        if(payload.search == "") {
            list.style.display = "none";
            return;
        }else {
            list.style.display = "block";
        }
        await fetch("Search/"+payload.search+"/"+payload.departement+"/", {
          method: "GET",
          headers: {
            'Content-Type': 'application/json',
            "X-CSRF-Token": "{{csrf_token()}}"
          }
        }).then(e => e.json())
        .then(async e => {

            let elements = [];
            e.forEach(project => {
                elements.push(createChild('option', {
                    'class': "result-item",
                    text: project.title + " - " + project.subtitle,
                    pid: project.id,
                    event: {
                        onclick(self) {
                            checkSelected(self);
                        }
                    }
                }))
            });
            console.log(elements);
            //list.replaceChildren();
            list.innerHTML = "";
            modifyElement(list, {
                child: elements
            });
        });


    }
    function checkSelected(self) {
        location.href = "/searchview/"+self.getAttribute("pid")+"/";
    }
    function clearList() {
        list.replaceChildren();
    }
function Sing_up_button() {
    window.location.href = "http://127.0.0.1:8000/Sing_up"
  }
  function Student_Sign_In() {
    window.location.href = "http://127.0.0.1:8000/Student_Sign_In"
  }

      </script>
</html>
