<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>


<div class="hero">
<nav>
     <h2 class="logo">KoT<span>khe</span></h2>
     <ul>
     <li><a href="#">Home</a></li>
     <li><a href="#">Products</a></li>
     <li><a href="#">Contact</a></li>
     <li><a href="logout.php">Logout</a></li>
     </ul>
</nav>
</div>


     <div class="navigation">
          <div class="btn active"></div>
          <div class="btn"></div>
          <div class="btn"></div>
          <div class="btn"></div>
          <div class="btn"></div>
     </div>

</div>
</div>

    

<script type="text/javascript">
     var slides = document.querySelectorAll('.slide');
     var btns = document.querySelectorAll('.btn');
     let currentSlide = 1;

     var manualNav = function(manual){
          slides.forEach((slide) => {
               slide.classList.remove('active');

               btns.forEach((btn) => {
                    btn.classList.remove('active');
               });
          });
          slides[manual].classList.add('active');
          btns[manual].classList.add('active');
     }

     btns.forEach((btn, i) => {
          btn.addEventListener("click", () => {
               manualNav(i);
               currentSlide = i;
          });
     });
</script>

     <!-- <h1><?php echo $_SESSION['name']; ?></h1> -->
</body>
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>
