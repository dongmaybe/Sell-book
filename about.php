<?php
   include 'config.php';

   session_start();

   $user_id = $_SESSION['user_id']; //tạo session người dùng thường

   if(!isset($user_id)){// session không tồn tại => quay lại trang đăng nhập
      header('location:login.php');
   }
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Thông tin</title>

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<div class="heading">
   <h3>Minh Anh Store</h3>
   <p> <a href="home.php">Trang chủ</a> / Thông tin </p>
</div>

<section class="about">

   <div class="flex">

      <div class="image">
         <img src="images/about-img.jpg" alt="">
      </div>

      <div class="content">
         <h3>Minh Anh  Store</h3>
         <p>Từ những bạn trẻ đam mê đọc những quyển truyện trinh thám và tiểu thuyết, chúng mình đã xây dựng nên website này để giúp mọi người có thể dễ dàng tìm kiếm và mua được những quyển truyện yêu thích của mình.</p>
         <p>Qua một thời gian phát triển, Bookly mong muốn mang đến những quyển truyện hay, sâu sắc và hấp dẫn đến tay các bạn đọc.</p>
         <a href="contact.php" class="btn">Liên hệ</a>
      </div>

   </div>

</section>

<section class="reviews">

   <h1 class="title">Phản hồi</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/pic-1.png" alt="">
         <p>Cảm ơn Minh Anh Store đã giúp mình tìm mua được quyển truyện yêu thích của mình.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Hoàng Văn Hải</h3>
      </div>

      <div class="box">
         <img src="images/pic-1.png" alt="">
         <p>Cảm ơn Minh Anh Store đã giúp mình tìm mua được quyển truyện yêu thích của mình.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Nguyễn Thị Bích</h3>
      </div>

      <div class="box">
         <img src="images/pic-1.png" alt="">
         <p>Cảm ơn Minh Anh Store đã giúp mình tìm mua được quyển truyện yêu thích của mình.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Đào Văn Mạnh</h3>
      </div>

      <div class="box">
         <img src="images/pic-1.png" alt="">
         <p>Cảm ơn Minh Anh Store đã giúp mình tìm mua được quyển truyện yêu thích của mình.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Vũ Thùy Dương</h3>
      </div>

      <div class="box">
         <img src="images/pic-1.png" alt="">
         <p>Cảm ơn Minh Anh Store đã giúp mình tìm mua được quyển truyện yêu thích của mình.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Lê Anh Thiện</h3>
      </div>

      <div class="box">
         <img src="images/pic-1.png" alt="">
         <p>Cảm ơn Minh Anh Store đã giúp mình tìm mua được quyển truyện yêu thích của mình.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Bùi Anh Thư</h3>
      </div>

   </div>

</section>

<section class="authors">

   <h1 class="title">Thành viên của Minh Anh Store</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/author-1.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>CEO. Anh Minh</h3>
      </div>

      <div class="box">
         <img src="images/author-2.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>CEO.Minh Anh </h3>
      </div>

      <div class="box">
         <img src="images/author-3.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>CEO. Anh Quang</h3>
      </div>

      <div class="box">
         <img src="images/author-5.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>CEO. Anh Dũng</h3>
      </div>

   </div>

</section>

<?php include 'footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>