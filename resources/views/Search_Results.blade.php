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

                a {
                        text-decoration: none;
                        color: black;
                }

                button {
                        border-radius: 5px;
                        border: none;
                }

                /* Container styles */

                /* Modal container styles */
                .modal-container {
                        position: absolute;
                        inset: 0;
                        background-color: rgba(0, 0, 0, 0.5);
                        display: flex;
                        justify-content: center;
                        align-items: center;
                        opacity: 0;
                        visibility: hidden;
                        transition: opacity 0.3s, visibility 0.3s;
                        z-index: 1;

                }

                /* Modal styles */
                .modal {

                        background-color: rgba(255, 255, 255, 0.589);
                        padding: 20px;
                        border-radius: 10px;
                        box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
                        transform: scale(0.8);
                        transition: transform 0.3s;
                        height: 60%;
                        width: 50%;

                }

                /* Show modal styles */
                .modal-container.show {
                        opacity: 1;
                        visibility: visible;
                }

                .modal-container.show .modal {
                        transform: scale(1);
                }

                body {
                        font-family: Arial, sans-serif;
                        background-color: #f5f5f5;
                        text-align: right;
                        direction: rtl;
                        margin: 0;
                        padding: 0;
                }

                a {
                        color: #000;
                }

                .container {
                        display: flex;
                        justify-content: center;
                        align-items: center;
                        height: 100vh;
                }

                .popup {
                        background-color: #d3d0d0;
                        padding: 30px;
                        border-radius: 10px;
                        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                        width: 500px;
                        height: 200px;
                        position: relative;

                }

                .close-btn {
                        position: absolute;
                        top: 15px;
                        right: 15px;
                        background: none;
                        border: none;
                        font-size: 18px;
                        cursor: pointer;
                        color: red;
                }

                .header {
                        display: flex;
                        align-items: center;
                        justify-content: center;
                        margin-bottom: 1px;
                }

                .header .cloud-icon {
                        font-size: 40px;
                        width: 40px;
                        height: 40px;
                        margin-right: 15px;
                        margin-left: 15px;
                }

                .header h2 {
                        margin: 0;
                        font-size: 40px;
                }

                .form-group {
                        margin-bottom: 2px;
                        position: relative;
                }

                .form-group input {
                        width: calc(100% - 10px);
                        padding: 1px;
                        padding-left: 30px;
                        border: 1px solid #bdb6b6;
                        border-radius: 5px;
                        box-sizing: border-box;
                }

                button[type="submit"] {
                        width: 30%;
                        padding: 10px;
                        border: none;
                        background-color: #5c9ded;
                        color: #fff;
                        font-size: 16px;
                        border-radius: 5px;
                        cursor: pointer;
                        margin-top: 4%;
                        margin-right: 37%;
                }

                button[type="submit"]:hover {
                        background-color: #4a8cdb;
                }

                .flash-message {
                        border-radius: 5px;
                        font-size: 25px;
                        text-align: center;
                        width: 78%;
                        height: 7%;
                        left: 0%;
                        top: 13%;
                        position: absolute;
                }

                .flash-success {
                        background-color: #d4edda;
                        color: #155724;
                        border: 1px solid #c3e6cb;
                }
        </style>
</head>

<body>


        </div>
        <div class="Contener" style="background: #F1F0FB;
width: 98%;
height: 97%;
left: 1%;
top: 1%;
position: absolute;
border-radius: 20px;
border-style: solid;
border-color:grey;
overflow: auto;">
                <div>

                        <div style="position: absolute;
                     right: 46%;
                     top: 2%;">
                                <i style="font-size: 27px;"> مشاريع مؤرشفة   </i>
                        </div>
                        <br>
                        <table style="position: absolute;
        top: 20%;
        border=0.5">
                              
                              
                               
                              
                        </table>
                </div>
        </div>
      
  

    

</body>

</html>