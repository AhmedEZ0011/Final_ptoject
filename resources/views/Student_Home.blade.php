<!DOCTYPE html>
<html>
<head>
<title></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

        .dropbtn{
        background-color: #14a7e0;
        height: 9%;
        left: 4%;
        right:4%;
        top: 40%;
        position: absolute;
        border-radius: 20px;
        border-style: none;
        }

        .dropdown {
        position: relative;
        display: inline-block;
        }

        .dropdown-content {
        display: none;
        position: absolute;
        background-color: #c0ced38f;
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

        .dropdown-content a:hover {background-color: #b5c5d1d8; }

        .dropdown:hover .dropdown-content {display: block;}

        .dropdown:hover .dropbtn {background-color: #99aab800;}

.popup {
position: fixed;
z-index: 10;
top: 0%;
bottom: 0%;
left: 0%;
right: 0%;
border-radius: 0.7em;
background-color: rgba(34, 41, 49, 0.171);
}

.popup > .container {
width: 100%;
height: 100%;
position: relative;

}


.button:hover {
  background-color: #ffffff;
  color: white;
  border-style: inset;
}
</style>
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
      <button>
      <img src="logout.png" alt="Arrow Right From Bracket" style="width: 35px; position: absolute; left:2%; top:25%;">
      </button>
      <button>
      <img src="Settings.png" alt="Gear" style="width: 25px; position: absolute; left:6%; top:40%;">
      </button>
      <button>
      <img src="notification.png" alt="Bell" style="width: 25px; position: absolute; left:9%; top:40%;">
      </button>
     <div class="Home-page"
     style="left:50%;
     top:30%;
     font-size:40px;
      position: absolute;">
      <img src="Home.png" alt="Home" style="width: 40px;"> Home</div>
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
    <img src="Student Male.png" alt="User" style="width: 40px; position: absolute; left:80%; top:9%;">
  <div class="UserName"
  style="
    position:absolute;
    font-size:20px;
    right:27%;
    top:12%;
    "
    >نور الإسلام عبد النبي المنتصر </div>
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

">
<img src="Home.png" alt="Home" style="width: 35px; right:4%; top:20%; position: absolute;">
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
<img src="Upload to the Cloud.png" alt="Submit Proposal" style="width: 35px; right:4%; top:20%; position: absolute;">
               <h2>تقديم مقترح</h2>
</button>


<button class="Send-monthly-report"
        style="background-color: #97CADB;
        height: 9%;
        left: 4%;
        right:4%;
        top: 50%;
        position: absolute;
        border-radius: 20px;
        border-style: none;
">
<img src="Send Job List.png" alt="Send Monthly Report" style="width: 35px; right:4%; top:20%; position: absolute;">
        <h2>ارسال تقرير الشهري </h2>
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
<img src="t Document.png" alt="Project Document" style="width: 35px; right:4%; top:20%; position: absolute;">
        <h2>تحميل التوثيق</h2>
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

"onclick="OpenIt()">
<img src="Bookmark.png" alt="Archived Projects" style="width: 35px; right:4%; top:20%; position: absolute;">

<h2>مشاريع مؤرشفة</h2>
<div class="popup" style="display: none;">
        <div class="container"
        style="
        width: 40%;
        height: 50%;
        left: 30%;
        top: 25%;
        position: absolute;
        background:#5e77732a;
        border-radius: 75px;
    ">








</button>
</div>
<div class="advertisement"
  style="background: #97CADB;
  width: 20%;
  height: 10%;
  left: 30%;
  top: 20%;
  position: absolute;
  border-radius: 20px;
  z-index: 2;">

                <img src="Read Online.png" alt="Advertisement" style="width: 37px; position: absolute; right: 15%; top: 20%;">
  <div class="advertisementName"
  style="position:absolute;
  font-size:33px;
  right:35%;
  top:25%;">
    الإعلانات
  </div>

</div>
<div class="advertisementContener"
style="background: #F1F0FB;
width: 60%;
height: 69%;
left: 11%;
top: 27%;
position: absolute;
border-radius: 20px;
border-style: solid;
border-color:grey;
z-index: 1;">

</div>


<script>
        function OpenIt() {
            var popup = document.querySelector("div.popup");
            popup.style.display = "block";
        }
    </script>
</body>
</html>
