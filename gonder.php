<?php
 
   $kadi = $_POST['kadi'];
   $sifre = $_POST['sifre'];
 
	if ($kadi=="" or $sifre=="")
	{
		echo "Lütfen Tüm Alanları Doldurun!";	
	}
	else
	{
		if ($kadi=="b211210075@sakarya.edu.tr" && $sifre=="b211210075")
		{
			echo "Başarılı Şekilde Giriş Yaptınız";	
		}
		else
		{
			echo "Hatalı Kullanıcı Adı veya Şifre Girdiniz.";	
		}
	}
?>