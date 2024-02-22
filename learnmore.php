<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="width=device-width, initial-scale=1.0">
    <title>Pesona Lautan</title>
    <link rel="stylesheet" type="text/css" href="learnmore.css"
</head>
    

<body>
<nav>
        <ul>
            <li><a class="active" href="Project.php">Home</a></li>
            <li><a href="ProjectProfil.php">Profil</a></li>
            <li class="dropdown">
                <a href="#medsos">Medsos</a>
                <div class="dropdown-content">
                    <a href="https">Instagram</a>
                    <a href="#">Facebook</a>
                </div>
            </li>
           
            <li style="float: right;"><a href="about.php">About</a></li>
        </ul>
    </nav>
    

   <div class="containerr">
    <input id="slide1" type="radio" name="group" checked>
    <input id="slide2" type="radio" name="group">
    <input id="slide3" type="radio" name="group">
    <div class="dots">
        <label for="slide1"></label>
        <label for="slide2"></label>
        <label for="slide3"></label>
    </div>
    <div class="slider">
        <div class="slide" for="slide1" style="--img:url('ASSET/wp3258768.jpg')">
          <div class="content">
<h2>Pesona Ikan</h2>
<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eum omnis quidem, nesciunt saepe nam nemo sint cupiditate alias esse nihil illo beatae dolor nisi delectus aperiam laudantium corporis officia tempora.</p>
          </div>
        </div>
        <div class="slide" for="slide2" style="--img:url('ASSET/f9f06d34b883685b4b0a19a64b493cba.jpg')">
        <div class="content">
<h2>Pesona Terumbu Karang</h2>
<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eum omnis quidem, nesciunt saepe nam nemo sint cupiditate alias esse nihil illo beatae dolor nisi delectus aperiam laudantium corporis officia tempora.</p>
          </div></div>
        <div class="slide" for="slide3" style="--img:url('ASSET/78ac1ebbf683f9fc75adf5b6d7083c43.jpg')">
        <div class="content">
<h2>Pesona Pantai</h2>
<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eum omnis quidem, nesciunt saepe nam nemo sint cupiditate alias esse nihil illo beatae dolor nisi delectus aperiam laudantium corporis officia tempora.</p>
          </div></div>
    </div>
   </div>
   
</body>
</html>
