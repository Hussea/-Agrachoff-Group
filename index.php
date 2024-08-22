<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="styles.css" rel="stylesheet" />

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
#ass {
  position: absolute;
    top: -9999px;
    position: relative;
    animation-name: example1;
    animation-duration: 2s;
    animation-delay: 0.5s;
    animation-fill-mode: forwards; 
}

@keyframes example1 {
    0%   { left:0px; top:0px; }
    100% { left:200px; top:0px; } 
    
}
#tel {
  background-color: white;
  width:380px; 
  height:350px;
  right: 50%; 
  border: 2px  ;
  border-radius: 10px;
  font-size: 15px;
  padding-left: 10px;
  position: absolute;
    top: -9999px;
    animation-name: example;
    animation-duration: 1s;
    animation-delay: 0.5s;
    animation-fill-mode: forwards; 
}

@keyframes example {
    0%   { right:0px; top:50px; }
    100% { right:450px; top:50px; }  
    
}
input[type=button], input[type=submit], input[type=reset] {
  background-color: #9b59b6;
  border: 2px solid ;
  border-radius: 15px;
  color: white;
  padding: 16px 32px;
  text-decoration: none;
  
}
#myRange{
  width:300px;

}
</style>
</head>
<body>

<div class="topnav">
  <a class="active" href="#home">Home</a>
  <a href="gmail.php">gmail</a>
  <a href="yandex.php">Яндекс Карты</a>
  <a href="test.php">forum-auto</a>
</div>

<div class="row">
  <div id ="ass" class="col-3 col-s-3 menu">
  <h2>Ремонт под ключ от 2900 руб/м2.</h2>
  <p>При заказе ремонта делаем дизайн-проект в подарок</p>
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-car-front" viewBox="0 0 16 16">
  <path d="M4 9a1 1 0 1 1-2 0 1 1 0 0 1 2 0m10 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0M6 8a1 1 0 0 0 0 2h4a1 1 0 1 0 0-2zM4.862 4.276 3.906 6.19a.51.51 0 0 0 .497.731c.91-.073 2.35-.17 3.597-.17s2.688.097 3.597.17a.51.51 0 0 0 .497-.731l-.956-1.913A.5.5 0 0 0 10.691 4H5.309a.5.5 0 0 0-.447.276"/>
  <path d="M2.52 3.515A2.5 2.5 0 0 1 4.82 2h6.362c1 0 1.904.596 2.298 1.515l.792 1.848c.075.175.21.319.38.404.5.25.855.715.965 1.262l.335 1.679q.05.242.049.49v.413c0 .814-.39 1.543-1 1.997V13.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1.338c-1.292.048-2.745.088-4 .088s-2.708-.04-4-.088V13.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1.892c-.61-.454-1-1.183-1-1.997v-.413a2.5 2.5 0 0 1 .049-.49l.335-1.68c.11-.546.465-1.012.964-1.261a.8.8 0 0 0 .381-.404l.792-1.848ZM4.82 3a1.5 1.5 0 0 0-1.379.91l-.792 1.847a1.8 1.8 0 0 1-.853.904.8.8 0 0 0-.43.564L1.03 8.904a1.5 1.5 0 0 0-.03.294v.413c0 .796.62 1.448 1.408 1.484 1.555.07 3.786.155 5.592.155s4.037-.084 5.592-.155A1.48 1.48 0 0 0 15 9.611v-.413q0-.148-.03-.294l-.335-1.68a.8.8 0 0 0-.43-.563 1.8 1.8 0 0 1-.853-.904l-.792-1.848A1.5 1.5 0 0 0 11.18 3z"/>
</svg> Бесплатный выезд в день обращения<br>
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-hourglass-split" viewBox="0 0 16 16">
  <path d="M2.5 15a.5.5 0 1 1 0-1h1v-1a4.5 4.5 0 0 1 2.557-4.06c.29-.139.443-.377.443-.59v-.7c0-.213-.154-.451-.443-.59A4.5 4.5 0 0 1 3.5 3V2h-1a.5.5 0 0 1 0-1h11a.5.5 0 0 1 0 1h-1v1a4.5 4.5 0 0 1-2.557 4.06c-.29.139-.443.377-.443.59v.7c0 .213.154.451.443.59A4.5 4.5 0 0 1 12.5 13v1h1a.5.5 0 0 1 0 1zm2-13v1c0 .537.12 1.045.337 1.5h6.326c.216-.455.337-.963.337-1.5V2zm3 6.35c0 .701-.478 1.236-1.011 1.492A3.5 3.5 0 0 0 4.5 13s.866-1.299 3-1.48zm1 0v3.17c2.134.181 3 1.48 3 1.48a3.5 3.5 0 0 0-1.989-3.158C8.978 9.586 8.5 9.052 8.5 8.351z"/>
</svg>Жесткое соблюдение сроков<br>
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-award" viewBox="0 0 16 16">
  <path d="M9.669.864 8 0 6.331.864l-1.858.282-.842 1.68-1.337 1.32L2.6 6l-.306 1.854 1.337 1.32.842 1.68 1.858.282L8 12l1.669-.864 1.858-.282.842-1.68 1.337-1.32L13.4 6l.306-1.854-1.337-1.32-.842-1.68zm1.196 1.193.684 1.365 1.086 1.072L12.387 6l.248 1.506-1.086 1.072-.684 1.365-1.51.229L8 10.874l-1.355-.702-1.51-.229-.684-1.365-1.086-1.072L3.614 6l-.25-1.506 1.087-1.072.684-1.365 1.51-.229L8 1.126l1.356.702z"/>
  <path d="M4 11.794V16l4-1 4 1v-4.206l-2.018.306L8 13.126 6.018 12.1z"/>
</svg>Гарантия на работу до 5 лет
  </div>

  <div  id="tel">
  <h3>Рассчитайте стоимость<br> ремонта</h3>
  Площадь квартиры:<br>
  <input type="range" min="1" max="100" value="50" class="slider" id="myRange">
   <span id="demo"></span>&#x33A1;<br>
   <h4>Тип жилья:</h4>
  <input type="radio" id="a" name="a2" value="30">
  <label for="a">Вторичное жилье</label>
  <input type="radio" id="b" name="b2" value="60">
  <label for="b">Новостройка</label>  
  <input type="radio" id="c" name="c2" value="100">
  <label for="c">Офис</label><br>
  <h4>Кол-во комнат:</h4>
  <input type="radio" id="a" name="a2" value="30">
  <label for="a">1</label>
  <input type="radio" id="b" name="b2" value="60">
  <label for="b">2</label>  
  <input type="radio" id="b" name="b2" value="60">
  <label for="b">3+</label> 
  <input type="radio" id="c" name="c2" value="100">
  <label for="c">Студия</label><br><br>
  <center>
  <input type="submit" value="Отправить">
</center>

     </div>
     <script>
var slider = document.getElementById("myRange");
var output = document.getElementById("demo");
output.innerHTML = slider.value;

slider.oninput = function() {
  output.innerHTML = this.value;
}
</script>
  <div class="w">
  <img src="https://www.home-designing.com/wp-content/uploads/2017/07/beige-sofa.jpg" style=" 
  width: 420px;
  height: 350px;
  position: absolute; 
  top: 50px; 
  left: 69%; 
  border-radius: 90px 0px 0px;
  " >

  </div>




</body>
</html>