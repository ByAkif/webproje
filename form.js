function deneme(kullanici,sifre){
    var kullanici = document.getElementById("klncadi");
    var sifre = document.getElementById("sifre");
    var yazi = document.getElementById("yazi").value;
    if (kullanici=="b211210075@sakarya.edu.tr") {
        if (sifre=="b211210075"){
            alert("Hoş Geldiniz");
            return true;
        }
        
    }
    else if (kullanici=!"b211210075@sakarya.edu.tr"){
        if (sifre=="b211210075"){
            alert("Kullanıcı Adı bulunamadı");
            return false;
        }
    }
    else if (kullanici=="b211210075@sakarya.edu.tr"){
        if (sifre=!"b211210075"){
            alert("Şifreni mi unuttun?");
            return false;
        }
    }
    else {
        alert ("Şifre ve Kullanıcı adı yanlış");
        return false;
    }
}