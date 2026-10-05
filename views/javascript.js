function loginUser(){
    var nombre = document.login.usuario.value;
    var clave = document.login.clave.value;


    if(nombre ==='alvaro' && clave === '1234'){
        window.location.href = "controller/index2.php";
    }
}