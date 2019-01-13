if ('serviceWorker' in navigator) {
  navigator.serviceWorker.register('./sw.js')
    .then(reg => console.log('Registro de SW exitoso', reg))
    .catch(err => console.warn('Error al tratar de registrar el sw', err))
}

function go(){
if (document.form.password.value=='CONTRASEÑA' && document.form.login.value=='USUARIO'){
        document.form.submit();
    }
    else{
         alert("Porfavor ingrese, nombre de usuario y contraseña correctos.");
    }
} 
