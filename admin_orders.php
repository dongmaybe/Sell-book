<?php

   include 'config.php';

   session_start();

   $admin_id = $_SESSION['admin_id']; //tạo session admin

   if(!isset($admin_id)){// session không tồn tại => quay lại trang đăng nhập
      header('location:login.php');
   };

   if(isset($_POST['update_order'])){//cập nhật trạng thái đơn hàng từ submit='update_order'

      $order_update_id = $_POST['order_id'];
      $update_payment = $_POST['update_payment'];
      mysqli_query($conn, "UPDATE `orders` SET status = '$update_payment' WHERE id = '$order_update_id'") or die('query failed');
      $message[] = 'Trạng thái đơn hàng đã được cập nhật!';

   }


   if(isset($_GET['cancel'])){//hủy đơn hàng từ onclick <a></a> href='delete'
      $cancel_id = $_GET['cancel'];
      $status = $_GET['status'];
      $total_products= $_GET['products'];
      if($status=="Chờ xác nhận"){
         $products = explode(', ', $total_products);//tách riêng từng sách
         for($i=0; $i<count($products); $i++){
            $quantity = explode('-', $products[$i]);//tách sách với số lượng tương ứng cần hủy
            $nums = mysqli_query($conn, "SELECT * FROM `products` WHERE name = '$quantity[0]'");//lấy số lượng sách hiện có
            $res = mysqli_fetch_assoc($nums);
            $return_quantity = $quantity[1]+$res['quantity'];//tính số lượng sách sau hủy
            mysqli_query($conn, "UPDATE `products` SET quantity = '$return_quantity' WHERE name = '$quantity[0]' ") or die('query failed');//đặt lại số lượng sách
         }
         $status = "Đã hủy";//cập nhật trạng thái
         mysqli_query($conn, "UPDATE `orders` SET status = '$status' WHERE id = '$cancel_id'") or die('query failed');
         header('location:admin_orders.php');
      }else if($status=="Đã hủy"){
         $message[]="Đơn hàng đã được hủy trước đó!";
      }
      else{
         $message[]="Không thể hủy đơn hàng đã qua xác nhận!";
      }
   }

   if(isset($_GET['return'])){//khôi phục đơn hàng
      $return = $_GET['return'];
      $return_status = "Chờ xác nhận";

      $total_products= $_GET['products'];
      $products = explode(', ', $total_products);//tách riêng từng sách
      for($i=0; $i<count($products); $i++){
         $quantity = explode('-', $products[$i]);//tách sách với số lượng tương ứng cần khôi phục
         $nums = mysqli_query($conn, "SELECT * FROM `products` WHERE name = '$quantity[0]'");
         $res = mysqli_fetch_assoc($nums);
         $return_quantity = $res['quantity'] - $quantity[1];
         mysqli_query($conn, "UPDATE `products` SET quantity = '$return_quantity' WHERE name = '$quantity[0]' ");
      }
      mysqli_query($conn, "UPDATE `orders` SET status = '$return_status' WHERE id = '$return'") or die('query failed');
      header('location:admin_orders.php');
   }

   if(isset($_GET['delete'])){//xóa đơn hàng theo id đơn hàng
      $delete_id = $_GET['delete'];
      $status = $_GET['status'];
      if($status == "Đã hủy" || $status == "Hoàn thành"){
         mysqli_query($conn, "DELETE FROM `orders` WHERE id = '$delete_id'") or die('query failed');
         header('location:admin_orders.php');
      }else{
         $message[]="Không thể xóa đơn hàng đang trong quá trình xử lý!";
      }
   }

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Đơn hàng</title>

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
   <link rel="stylesheet" href="css/admin_style.css">

</head>
<body>
   
<?php include 'admin_header.php'; ?>

<section class="orders">

   <h1 class="title">Đơn đặt hàng</h1>

   <div class="box-container">
      <?php
         $select_orders = mysqli_query($conn, "SELECT * FROM `orders`") or die('query failed');
         if(mysqli_num_rows($select_orders) > 0){
            while($fetch_orders = mysqli_fetch_assoc($select_orders)){
      ?>
               <div class="box">
                  <p> Id người dùng : <span><?php echo $fetch_orders['user_id']; ?></span> </p>
                  <p> Ngày đặt : <span><?php echo $fetch_orders['placed_on']; ?></span> </p>
                  <p> Tên : <span><?php echo $fetch_orders['name']; ?></span> </p>
                  <p> Số điện thoại : <span><?php echo $fetch_orders['number']; ?></span> </p>
                  <p> Email : <span><?php echo $fetch_orders['email']; ?></span> </p>
                  <p> Địa chỉ : <span><?php echo $fetch_orders['address']; ?></span> </p>
                  <p> Ghi chú : <span><?php echo $fetch_orders['note']; ?></span> </p>
                  <p> Tổng sách : <span><?php echo $fetch_orders['total_products']; ?></span> </p>
                  <p> Tổng giá : <span><?php echo $fetch_orders['total_price']; ?> VND</span> </p>
                  <p> Phương thức thanh toán : <span><?php echo $fetch_orders['method']; ?></span> </p>
                  <form action="" method="post">
                     <input type="hidden" name="order_id" value="<?php echo $fetch_orders['id']; ?>">
      <?php
                   {
         ?>
                        <select name="update_payment" required>
                          
                           <!-- <option value="Chờ xác nhận">Chờ xác nhận</option> -->
                           <option value="Đã thanh toán">Đã xác nhận</option>
                           <option value="Đang xử lý">Đang xử lý</option>
                           <option value="Hoàn thành">Hoàn thành</option>
                        </select>
                        <input type="submit" value="Cập nhật" name="update_order" class="option-btn">
      <?php
                     }
      ?>
                  
                  </form>
               </div>
      <?php
            }
         }else{
            echo '<p class="empty">Không có đơn đặt hàng nào!</p>';
         }
      ?>
   </div>

</section>

<script src="js/admin_script.js"></script>

</body>
</html>