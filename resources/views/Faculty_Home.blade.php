<!DOCTYPE html>
<html>

<head>
        <title></title>
        <meta name="csrf-token" content="{{csrf_token()}}">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="/css/a.css">
        <script src="/js/main.js"></script>
        <script src="https://kit.fontawesome.com/258bab96e7.js" crossorigin="anonymous"></script>
        <!--Get your own code at fontawesome.com-->
        <style>
                a {
                        color: #000;
                }

                body {
                        font-family: Arial, sans-serif;
                        background-color: #f5f5f5;
                        text-align: right;
                        direction: rtl;
                        margin: 0;
                        padding: 0;
                }
        </style>
</head>

<body style=" background:#F1F0FB;">

        <div class="heder" style="
      width: 70%;
      height: 10%;
      left: 2%;
      top: 2%;
      position: absolute;
      border-bottom: 5px solid black;">
                <a href="{{ route('logout') }}">
                        <i class="fa-solid fa-arrow-right-from-bracket" style="font-size:35px; 
      position: absolute;
      left:2%;
      top:25%;"></i></a>

                <i class="fa-solid fa-gear" style="font-size:25px; 
      position: absolute;
      left:8%;
      top:40%;" onclick=Setting()></i>


                <i id="bell_icon" class="fa-solid fa-bell" style="font-size:25px; 
      position: absolute;
      left:13%;
      top:40%;" badge-number="0" onclick="showNotificationPanel(this);"></i>

                <div class="Home-page" style="left:50%;
     top:16%;
     font-size:36px;
      position: absolute;">
                        <i class="fa-solid fa-house"></i>الرئيسية
                </div>
        </div>



        <div class="ContenFunction" style="
      width: 20%;
      height: 95%;
      right: 2%;
      top: 2%;
      position: absolute;
      background: #4B80AB;
      border-radius: 40px;
      
  ">
                <div class="UserName_Icon">
                        <i class="fa-solid fa-user-tie" style="font-size:40px; 
    position: absolute;
    left:80%;
    top:9%;
        
         "></i>
                        <div class="UserName" style="
    position:absolute;
    font-size:20px;
    right:27%;
    top:12%;">{{ Auth::user()->name}}</div>
                </div>
                <button class="Home" style="
  background-color: #4B80AB;
  height: 9%;
  left: 4%;
  right:4%;
  top: 20%;
  position: absolute;
  border-radius: 20px;
  border-style: none;
  
" onclick="Home_button()">
                        <i class="fa-solid fa-house" style="font-size:35px; 
        right:4%;
        top:20%;
        position: absolute;"></i>
                        <h2>الرئيسية</h2>
                </button>
                <button class="Graduation-project-students" style="background-color: #4B80AB;
        height: 9%;
        left: 4%;
        right:4%;
        top: 31%;
        position: absolute;
        border-radius: 20px;
        border-style: none;
" onclick=Faculty_project_students_button()>
                        <i class="fa-solid fa-people-group" style="font-size:35px; 
        right:-3%;
        top:29%;
        position: absolute;"></i>
                        <h2>طلبة المشاريع</h2>
                </button>


                <button class="Proposals" style="background-color: #4B80AB;
height: 9%;
left: 4%;
right:4%;
top: 43%;
position: absolute;
border-radius: 20px;
border-style: none;
" onclick=Faculty_proposal_students_button()>
                        <i class="fa-regular fa-newspaper" style="font-size:35px; 
        right:4%;
        top:32%;
        position: absolute;"></i>
                        <h2>المقترحات</h2>
                </button>
                <button class="Project-documents" style="background-color: #4B80AB;
height: 9%;
left: 4%;
right:4%;
top: 55%;
position: absolute;
border-radius: 20px;
border-style: none;
">
                        <i class="fa-regular fa-copy" style="font-size:35px; 
        right:4%;
        top:20%;
        position: absolute;"></i>
                        <h2>ملفات التوثيق</h2>
                </button>
        </div>











        <div class="advertisement" style="background: #4B80AB;
  width: 20%;
  height: 10%;
  left: 35%;
  top: 20%;
  position: absolute;
  border-radius: 20px;
  z-index: 2;">

                <i class="fa-regular fa-clipboard" style=" font-size:37px; 
                position: absolute;
                right: 15%;
                top: 20%;
                "></i>
                <div class="advertisementName" style="position:absolute;
  font-size:33px;
  right:35%;
  top:25%;">
                        الإعلانات



                </div>

        </div>
        <div class="advertisementContener" style="background: #F1F0FB;
width: 50%;
height: 67%;
left: 22%;
top: 27%;
position: absolute;
border-radius: 20px;
border-style: solid;
border-color:grey;
z-index: 1;">

        </div>
        <div class="advertisementContener" style="background: #F1F0FB;
width: 20%;
height: 80%;
left: 1%;
top: 15%;
position: absolute;
border-radius: 20px;
border-style: solid;
border-color:grey;
z-index: 1;">

        </div>
        @include('advertisement_panel');
        <script>
                function Setting() {
                        window.location.href = "http://127.0.0.1:8000/Faculty_Setting"
                }

                function Home_button() {
                        window.location.href = "http://127.0.0.1:8000/Faculty_Home"
                }

                function Faculty_project_students_button() {
                        window.location.href = "http://127.0.0.1:8000/Faculty_project_students"
                }

                function Faculty_proposal_students_button() {
                        window.location.href = "http://127.0.0.1:8000/Faculty_proposal_students"
                }

                var bellIcon = document.getElementById('bell_icon');
                let notificationPanel = document.getElementById('ads-popup');
                async function showNotificationPanel(self) {
                        notificationPanel.style.display = notificationPanel.style.display == "none" ? "block" : "none";
                        if (notificationPanel.style.display == "block") {
                                //await loadNotifications();
                        }
                }
                async function loadNotifications() {
                        let data = await fetch('{{route("advertisements.loads", Auth::user()->id)}}').then(e => e.json());
                        if (data != null)
                                Advertisements = data;
                        displayBadge();
                        displayAds();
                }

                function displayBadge() {
                        let unread = 0;
                        Advertisements.forEach(ad => unread += !ad.targetlist[0].seen ? +1 : 0);
                        bellIcon.setAttribute('badge-number', unread);
                }

                function clearPanel() {
                        notificationPanel.querySelectorAll('div[adblock]').forEach(e => e.remove());
                        notificationPanel.querySelectorAll('B[adblock-label]').forEach(e => e.remove());
                }

                function displayAds() {
                        let lastDate = "";
                        clearPanel();
                        Advertisements.forEach(ad => {
                                let date = new Date(ad.created_at);
                                let dateString = "يوم " + date.getUTCDate() + "/" + (date.getUTCMonth() + 1) + "/" + date.getUTCFullYear();
                                if (lastDate === dateString) {} else {
                                        modifyElement(notificationPanel, {
                                                child: createChild('B', {
                                                        text: dateString,
                                                        'adblock-label': ""
                                                })
                                        });
                                }
                                lastDate = dateString;
                                if (ad.content.length < 90) {
                                        ad.content += "<br><br><br><br>"
                                }
                                modifyElement(notificationPanel, {
                                        child: [
                                                createChild('DIV', {
                                                        title: ad.id,
                                                        'adblock': "",
                                                        child: [
                                                                createChild('B', {
                                                                        'adtitle': "",
                                                                        text: ad.owner.name + " - " + ad.title
                                                                }),
                                                                createChild('P', {
                                                                        'adcontent': "",
                                                                        html: ad.content
                                                                }),
                                                                createChild('DIV', {
                                                                        'adactions': "",
                                                                        child: [
                                                                                createChild('IMG', {
                                                                                        'delete': "",
                                                                                        src: "/icons/icons8_remove_96px.png",
                                                                                        title: "delete",
                                                                                        event: {
                                                                                                async onclick(self) {
                                                                                                        if (confirm("Sure you want to remove this Advertisement ?"))
                                                                                                                await advertisementRemove(ad);
                                                                                                }
                                                                                        }
                                                                                }),
                                                                                createChild('IMG', {
                                                                                        'read': "",
                                                                                        src: "/icons/icons8_received_96px.png",
                                                                                        title: "mark as read",
                                                                                        style: ad.targetlist[0].seen ? "display:none" : "",
                                                                                        event: {
                                                                                                async onclick(self) {
                                                                                                        //if(ad.)
                                                                                                        await advertisementSeen(ad);
                                                                                                }
                                                                                        }
                                                                                })
                                                                        ]
                                                                })
                                                        ]
                                                })
                                        ]
                                });
                        });
                }

                async function advertisementRemove(ad) {
                        fetch("advertisements/remove/" + ad.id + "/{{Auth::user()->id}}/", {
                                        method: "DELETE",
                                        headers: {
                                                'Content-Type': 'application/json',
                                                "X-CSRF-Token": "{{csrf_token()}}"
                                        },
                                        //body: JSON.stringify(ad.targetlist[0])
                                }).then(e => e.json())
                                .then(async e => {
                                        alert(e.Message);
                                        await loadNotifications();
                                });
                }
                async function advertisementSeen(ad) {
                        fetch("advertisements/seen/" + ad.id + "/{{Auth::user()->id}}/", {
                                        method: "POST",
                                        headers: {
                                                'Content-Type': 'application/json',
                                                "X-CSRF-Token": "{{csrf_token()}}"
                                        },
                                        //body: JSON.stringify(ad.targetlist[0])
                                }).then(e => e.json())
                                .then(async e => {
                                        alert(e.Message);
                                        await loadNotifications();
                                });
                }
                loadNotifications();

                setInterval(async () => {
                        await loadNotifications();
                }, 15000);
        </script>




</body>

</html>