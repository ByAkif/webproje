<?php
if(isset($_POST['kadı']) && isset($_POST['sifre'])) { // form gönderilmiş mi
   $kullanici = $_POST['kadı'];
   $sifre = $_POST['sifre'];
 
   if(empty($kadı) || empty($sifre)) { // gönderilenler boş mu
      echo 'Lütfen boş bırakmayın';
   } else {
      if($kullanici == 'b211210075@sakarya.edu.tr' && $sifre == 'b211210075') { // bilgiler doğru mu
         session_start();
         $_SESSION['kadı'] = 'b211210075@sakarya.edu.tr';
         $_SESSION['sifre'] = 'b211210075';
         echo 'Giriş yaptınız!';
      } else {
         echo 'Yanlış kullanıcı adı ya da şifre';
      }
   }
} else {
   echo 'Lütfen formu kullanın';
}
?>