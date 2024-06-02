<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, max-scale=1.0">
    <title>Document</title>
    <style>
/* Container styles */
.container {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
  position: relative;
}

/* Button styles */
.btn-primary {
  background-color: rgba(0, 180, 0, 0.747);
  color: white;
  padding: 15px 32px;
  border: none;
  cursor: pointer;
  font-size: 16px;
}

.btn-secondary {
  background-color: rgba(201, 199, 199, 0.747);
  color: white;
}

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
    margin-bottom: 40px;
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
    margin-bottom: 20px;
    position: relative;
}

.form-group input {
    width: calc(100% - 10px);
    padding: 10px;
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
    margin-top: 20px;
    margin-right: 180px;
}

button[type="submit"]:hover {
    background-color: #4a8cdb;   
}


  </style>
            </head>
       
           
           

<body>

  <div class="container">
  <button id="openModalBtn">Open Modal</button>
  <div class="modal-container">
    <div class="modal">
    <button id="closeModalBtn">❌</button>
    
                
                <div class="header">
                    <img src="Upload to the Cloud.png" class="cloud-icon"></img> 
                    <h2>تقديم مقترح</h2>
                </div>
                <div class="form-group">
                    <label for="proposal-input"></label>
                    <input type="file" id="proposal-input" placeholder="ادخل مقترح المشروع">
                </div>
                <button type="submit">إرسال</button>
            
      
    </div>
  </div>
</div>






       <script>
const openModalBtn = document.getElementById('openModalBtn');
const closeModalBtn = document.getElementById('closeModalBtn');
const modalContainer = document.querySelector('.modal-container');

openModalBtn.addEventListener('click', () => {
  modalContainer.classList.add('show');
  openModalBtn.classList.remove('btn-primary');
  openModalBtn.classList.add('btn-secondary');
});

closeModalBtn.addEventListener('click', () => {
  modalContainer.classList.remove('show');
  openModalBtn.classList.remove('btn-secondary');
  openModalBtn.classList.add('btn-primary');
});

</script>
</body>
</html>