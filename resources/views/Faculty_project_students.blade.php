
<!DOCTYPE html>
<html>
<head>
<title></title>
<meta name="csrf-token" content="{{csrf_token()}}">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://kit.fontawesome.com/258bab96e7.js" crossorigin="anonymous"></script>
<!--Get your own code at fontawesome.com-->
<style>
                        table {
                        width: 100%;
                        border-collapse: collapse;
                }

                th,
                td {
                        text-align: left;
                        padding: 8px;
                        border-bottom: 1px solid #ddd;
                        text-align: center;
                }
 a{
      color: #000;
    }
</style>
</head>
<body 
    style=" background:#F1F0FB;">

<div class="heder"
style="
      width: 70%;
      height: 10%;
      left: 2%;
      top: 2%;
      position: absolute;
      border-bottom: 5px solid black;" >
      <a href="{{ route('logout') }}">
      <i class="fa-solid fa-arrow-right-from-bracket"
      style="font-size:35px; 
      position: absolute;
      left:2%;
      top:25%;"></i></a>
     
      <i class="fa-solid fa-gear"
      style="font-size:25px; 
      position: absolute;
      left:8%;
      top:40%;" onclick="Setting()"
      ></i>
      
      <i class="fa-solid fa-bell"
      style="font-size:25px; 
      position: absolute;
      left:13%;
      top:40%;"></i>
      
     <div class="Home-page"
     style="left:50%;
     top:18;
     font-size:40px;
      position: absolute;">
      <i class="fa-solid fa-people-group">طلبة مشاريع</i>
                     </div>
    </div>



  <div
  class="ContenFunction"
  style="
      width: 20%;
      height: 95%;
      right: 2%;
      top: 2%;
      position: absolute;
      background: #4B80AB;
      border-radius: 40px;
      
  "
>
  <div class="UserName_Icon">
    <i class="fa-solid fa-user-tie"
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
    top:12%;">{{ Auth::user()->name}}</div>
  </div>
  <button class="Home"
  style="
  background-color: #4B80AB;
  height: 9%;
  left: 4%;
  right:4%;
  top: 20%;
  position: absolute;
  border-radius: 20px;
  border-style: none;
  
"onclick="Home_button()">  
<i class="fa-solid fa-house"
style="font-size:35px; 
        right:4%;
        top:20%;
        position: absolute;"></i>
        <h2>الرئيسية</h2>    
</button>
<button class="Graduation-project-students"
        style="background-color: #4B80AB;
        height: 9%;
        left: 4%;
        right:4%;
        top: 31%;
        position: absolute;
        border-radius: 20px;
        border-style: none;
"onclick=Faculty_project_students_button()>  
<i class="fa-solid fa-people-group"
style="font-size:35px; 
        right:-3%;
        top:29%;
        position: absolute;"></i>
               <h2>طلبة المشاريع</h2>
</button>


<button class="Proposals"
style="background-color: #4B80AB;
height: 9%;
left: 4%;
right:4%;
top: 43%;
position: absolute;
border-radius: 20px;
border-style: none;
"onclick=Faculty_proposal_students_button()>  
<i class="fa-regular fa-newspaper"
style="font-size:35px; 
        right:4%;
        top:32%;
        position: absolute;"></i>
        <h2>المقترحات</h2> 
</button>
<button class="Project-document"
style="background-color: #4B80AB;
height: 9%;
left: 4%;
right:4%;
top: 55%;
position: absolute;
border-radius: 20px;
border-style: none;
"onclick=Faculty_documentation_button()>  
<i class="fa-regular fa-copy"
style="font-size:35px; 
        right:4%;
        top:20%;
        position: absolute;"></i>
        <h2>ملفات التوثيق</h2> 
</button>
</div>



</div>
<div class="advertisementContener"
style="background: #F1F0FB;
width: 74%;
height: 79%;
left: 1%;
top: 17%;
position: absolute;
border-radius: 20px;
border-style: solid;
border-color:grey;
z-index: 1;
overflow: auto;">
    <table style="position: absolute;
    top: 10%;
    border=0.5">
                                <tr>

                                   
                                    <td>طلبة المشروع </td>
                                    <td>عنوان </td>
                                    <td>تاريخ تقديم المقترح</td>


                            </tr>
                            @if(count($projects_list))
                            @foreach($projects_list as $projects)
                            
                                        

                                    @php
                                    $studentsList = [
                                    "First" => ["ID" => $projects->Student1_ID, "Name" => $projects->Student1_Name],
                                    "Second" => ["ID" => $projects->Student2_ID, "Name" => $projects->Student2_Name],
                                    "Third" => ["ID" => $projects->Student3_ID, "Name" => $projects->Student3_Name]
                                    ];
                                    //$students = explode(",", $studentsList);
                                    echo "<td>
                                            <ul style='text-align:right'>";
                                                    foreach ($studentsList as $student) {
                                                    if($student["ID"] == null) {
                                                    continue;
                                                    }
                                                    else {
                                                    echo "<li>".$student["Name"].
                                                            " (".$student["ID"]. ")</li>";
                                                    }
                                                    }
                                                    echo "</ul>
                                    </td>";
                                    @endphp

                                    <td>{{$projects->title}}</td>
                                    <td>{{$projects->Created_AT}}</td>


                            </tr>
                            @endforeach
                            @else
                            <tr>
                                    <td colspan="3">لا يوجد مقترحات </td>
                            </tr>
                            @endif
                    </table>
            </div>
    </div>
    
</body>
<script>


                                   function Setting(){
                                     window.location.href ="http://127.0.0.1:8000/OfficerSettings"
                                 }
                                function Home_button(){
                        window.location.href ="http://127.0.0.1:8000/Faculty_Home"
                                }
                                function Faculty_project_students_button(){
                        window.location.href ="http://127.0.0.1:8000/Faculty_project_students"
                                }
                                function Faculty_proposal_students_button(){
                        window.location.href ="http://127.0.0.1:8000/Faculty_proposal_students"
                                }
                                function Faculty_documentation_button(){
                        window.location.href ="http://127.0.0.1:8000/Faculty_documentation"
                                }

     </script> 




</body>
</html>




