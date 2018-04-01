<?php 

include 'connect.php';
session_start();
// if (isset($_POST["submit"])) {
// }
$payment = $_POST['payment'];
$username = $_POST['username']; 
$phone = $_POST['phone']; 
$address = $_POST['address']; 
$email = $_POST['email']; 
$note = $_POST['note']; 
// echo $date = date('Y-m-d H:i:s');
if (!$payment || !$username || !$phone || !$address || !$email)
         {
           echo '<script language="javascript">
           alert("Vui lòng nhập đầy đủ thông tin");';
           echo "location.href='custommer.php';
           </script>";
           exit;
         }
// var_dump($username);die;
// 
 $sql = "INSERT INTO `order_pr`(username,phone,address,email,note,payment,tgian,status) VALUES ('$username','$phone','$address','$email','$note','$payment',Now(),'Đang chờ')";
$result = mysqli_query($conn,$sql);
 // var_dump($result);die;

// $stmt = $conn->prepare($sql);
// $result=$stmt -> execute();
// lastInsertID() lay ra id ow ham vua insert
 // $last_id = $conn->lastInsertId();
  $last_id = $conn->insert_id;
 foreach ($_SESSION['cart'] as $row) {
   $id_detail = $row['id'];
   $name_detail = $row['name'];
   $image_detail = $row['image'];
   $sl_detail = $row['sl'];
     $price_detail = $row['price'];
   $sale_detail = $row['sale'];
     if($row["sale"]!=0)
       {
         $subtotal = ($row["sl"]) * ($row["sale"]);
       }
       else{
         $subtotal = ($row["sl"]) * ($row["price"]);
       }
   // $subtotal = ($row["sl"]) * ($row["price"]);
   // if($row["sale"]!=0)
   //     {
           echo $sql_detail = "INSERT INTO `orderdetail`(order_id,id_product,image,name_product,numbers,price,sale,subtotal)
                                        VALUES ('$last_id','$id_detail','$image_detail','$name_detail','$sl_detail','$price_detail','$sale_detail','$subtotal')";
            $detail_order = mysqli_query($conn, $sql_detail);
          // var_dump($detail_order);die;
       // }
       // else{
       //     echo $sql_detail = "INSERT INTO `orderdetail`(id_order,id_product,image,name,numbers,price,sale,subtotal)
       //                                  VALUES ('$last_id','$id_detail','$image_detail','$name_detail','$sl_detail','$price_detail','0','$subtotal')";
       //      $detail_order = mysqli_query($conn, $sql_detail);
       //  var_dump($detail_order);die;
       // }

//    echo  $sql_detail = "INSERT INTO `orderdetail`(id_order,id_product,image,name,numbers,price,sale,subtotal)
//                                          VALUES ('$last_id','$id_detail','$image_detail','$name_detail','$sl_detail','$price_detail','$sale_detail','$subtotal')";
//     $detail_order = mysqli_query($conn, $sql_detail);
//  var_dump($detail_order);die;
    // $stmt_detail = $conn->prepare($sql_detail);
    // $detail_order=$stmt_detail -> execute();
  // alert('Cảm ơn bạn đã đặt hàng tại Phong Thủy Việt');
 };

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'puclic/plugins/PHPMailer/src/SMTP.php';
require'puclic/plugins/PHPMailer/src/PHPMailer.php'; 
require'puclic/plugins/PHPMailer/src/Exception.php';
    $nFrom = "ThuyPham";    //mail duoc gui tu dau, thuong de ten cong ty ban
    $mFrom = 'pttthuy96@gmail.com';  //dia chi email cua ban 
    $mPass = 'phamthuthuy';       //mat khau email cua ban
    $nTo = 'ThuyPham'; //Ten nguoi nhan
    $mTo = 'thuyptt42@wru.vn';   //dia chi nhan mail
    $mail             = new PHPMailer();
   $body             = '';
    $body .= '<br>'.$username.'<br>' .$phone. '<br>' .$address. '<br>' .$email. '<br>'.$note.'<br>'.$date.'<br>' ;
    $body .='<table>';
    $body .='<tr>
               <th>STT</th>
               <th>Sản phẩm</th>
               <td>Số lượng</td>
               <td>Giá</td>
               <td>Giảm Giá</td>
               <td>Thành tiền</td>
            </tr>'; 
    $total = 0;
    $i=0;
    foreach ($_SESSION['cart'] as $row){
        $i++; 
        $body .= '<tr>
                  <td>'.$i.'</td>
                  <td>'.$name_detail.'</td>
                  <td>'.$sl_detail.'</td>
                  <td>'.$price_detail.'</td>
                  <td>'.$sale_detail.'</td>
                  <td>'.$subtotal.'</td>
                   </tr>';
    };
    $body .='</table>';
    $title = 'Hoá Đơn Đặt Hàng';   //Tieu de gui mail
    $mail->IsSMTP();             
    $mail->CharSet  = "utf-8";
    $mail->SMTPDebug  = 2;   // enables SMTP debug information (for testing)
    $mail->SMTPAuth   = true;    // enable SMTP authentication
    $mail->SMTPSecure = "ssl";   // sets the prefix to the servier
    $mail->Host       = "smtp.gmail.com";    // sever gui mail.
    $mail->Port       = 465;         // cong gui mail de nguyen
    // xong phan cau hinh bat dau phan gui mail
    $mail->Username   = $mFrom;  // khai bao dia chi email
    $mail->Password   = $mPass;              // khai bao mat khau
    $mail->SetFrom($mFrom, $nFrom);
    // $mail->AddReplyTo('info@freetuts.net', 'Freetuts.net'); //khi nguoi dung phan hoi se duoc gui den email nay
    $mail->Subject    = $title;// tieu de email 
    $mail->MsgHTML($body);// noi dung chinh cua mail se nam o day.
    $mail->AddAddress($mTo, $nTo);
    // thuc thi lenh gui mail 
    if(!$mail->Send()) {
      echo '<script language="javascript">
                         alert("lỗi");';
                         echo "location.href='index.php';
                         </script>";
        
         
    } else {
      if ($payment!=1) {
          echo '<script language="javascript">
                         alert("Cảm ơn quý khách đã đặt hàng trên trang web của chúng tôi! Quý khách đã chọn phương thức thanh toán: Chuyển khoản qua ATM. Chúng tôi sẽ sớm liên hệ lại với quý khách.");';
                          session_unset();
                         echo "location.href='index.php';
                         </script>";
        }
      else{
          echo '<script language="javascript">
                         alert("Cảm ơn quý khách đã đặt hàng trên trang web của chúng tôi! Quý khách đã chọn phương thức thanh toán: Thanh toán khi nhận hàng.Chúng tôi sẽ sớm liên hệ lại với quý khách.");';
                          session_unset();
                         echo "location.href='index.php';
                         </script>";
      }
    }


 ?>