نور, [2024-06-03 02:07 AM]
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
  gap: 10px; /* Add gap for spacing between buttons */
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
  <button id="openModalBtn1" class="btn-primary">Open Modal 1</button>
  <button id="openModalBtn2" class="btn-primary">Open Modal 2</button>
  <button id="openModalBtn3" class="btn-primary">Open Modal 3</button>
  <button id="openModalBtn4" class="btn-primary">Open Modal 4</button>
</div>

<div class="modal-container" id="modalContainer1">
  <div class="modal">
    <button class="close-btn" id="closeModalBtn1">❌</button>
    <div class="header">
      <img src="Upload to the Cloud.png" class="cloud-icon"></img>
      <h2>تقديم مقترح</h2>
    </div>
    <div class="form-group">
      <label for="proposal-input1"></label>
      <input type="file" id="proposal-input1" placeholder="ادخل مقترح المشروع">
    </div>
    <button type="submit">إرسال</button>
  </div>
</div>

<div class="modal-container" id="modalContainer2">
  <div class="modal">
    <button class="close-btn" id="closeModalBtn2">❌</button>
    <div class="header">
      <img src="Upload to the Cloud.png" class="cloud-icon"></img>
      <h2>تقارير</h2>
    </div>
    <div class="form-group">
      <label for="proposal-input2"></label>
      <input type="file" id="proposal-input2" placeholder="ادخل مقترح المشروع">
    </div>
    <button type="submit">إرسال</button>
  </div>
</div>

نور, [2024-06-03 02:07 AM]
<div class="modal-container" id="modalContainer3">
  <div class="modal">
    <button class="close-btn" id="closeModalBtn3">❌</button>
    <div class="header">
      <img src="Upload to the Cloud.png" class="cloud-icon"></img>
      <h2>مشروع جديد</h2>
    </div>
    <div class="form-group">
      <label for="proposal-input3"></label>
      <input type="file" id="proposal-input3" placeholder="ادخل المشروع الجديد">
    </div>
    <button type="submit">إرسال</button>
  </div>
</div>

<div class="modal-container" id="modalContainer4">
  <div class="modal">
    <button class="close-btn" id="closeModalBtn4">❌</button>
    <div class="header">
      <img src="Upload to the Cloud.png" class="cloud-icon"></img>
      <h2>تقرير جديد</h2>
    </div>
    <div class="form-group">
      <label for="proposal-input4"></label>
      <input type="file" id="proposal-input4" placeholder="ادخل التقرير الجديد">
    </div>
    <button type="submit">إرسال</button>
  </div>
</div>

<script>
  const openModalBtn1 = document.getElementById('openModalBtn1');
  const closeModalBtn1 = document.getElementById('closeModalBtn1');
  const modalContainer1 = document.getElementById('modalContainer1');

  openModalBtn1.addEventListener('click', () => {
    modalContainer1.classList.add('show');
  });

  closeModalBtn1.addEventListener('click', () => {
    modalContainer1.classList.remove('show');
  });

  const openModalBtn2 = document.getElementById('openModalBtn2');
  const closeModalBtn2 = document.getElementById('closeModalBtn2');
  const modalContainer2 = document.getElementById('modalContainer2');

  openModalBtn2.addEventListener('click', () => {
    modalContainer2.classList.add('show');
  });

  closeModalBtn2.addEventListener('click', () => {
    modalContainer2.classList.remove('show');
  });

  const openModalBtn3 = document.getElementById('openModalBtn3');
  const closeModalBtn3 = document.getElementById('closeModalBtn3');
  const modalContainer3 = document.getElementById('modalContainer3');

  openModalBtn3.addEventListener('click', () => {
    modalContainer3.classList.add('show');
  });

  closeModalBtn3.addEventListener('click', () => {
    modalContainer3.classList.remove('show');
  });

  const openModalBtn4 = document.getElementById('openModalBtn4');
  const closeModalBtn4 = document.getElementById('closeModalBtn4');
  const modalContainer4 = document.getElementById('modalContainer4');

  openModalBtn4.addEventListener('click', () => {
    modalContainer4.classList.add('show');
  });

  closeModalBtn4.addEventListener('click', () => {
    modalContainer4.classList.remove('show');
  });
</script>

</body>
</html>