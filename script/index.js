// Login PopUp JS

var loginn = document.getElementById("loginn");
var newAccount = document.getElementById("newAccount");
var log = document.getElementById("log");
var create = document.getElementById("create");
var closeWin = document.getElementById("close");
var closeCre = document.getElementById("close1");

// Mostrar la sección de login y ocultar la de nueva cuenta
log.addEventListener("click", function() {
  showSection(loginn);
  hideSection(newAccount);
});

// Ocultar la sección de login al hacer clic en cerrar
closeWin.addEventListener("click", function() {
  hideSection(loginn);
});

// Mostrar la sección de nueva cuenta y ocultar la de login
create.addEventListener("click", function() {
  showSection(newAccount);
  hideSection(loginn);
});

// Ocultar la sección de nueva cuenta al hacer clic en cerrar
closeCre.addEventListener("click", function() {
  hideSection(newAccount);
});

// Función para mostrar una sección
function showSection(section) {
  section.style.display = "block";
}

// Función para ocultar una sección
function hideSection(section) {
  section.style.display = "none";
}


// Login Data JS

const botonCrearCuenta = document.getElementById('sub');

botonCrearCuenta.addEventListener("click", ()=>{
  const nombreUsuario = document.querySelector("nombre").value;
  const apellidoUsuario = document.querySelector("apellido").value;
  const emailUsuario = document.querySelector("email").value;
  const passwordUsuario = document.querySelector("pass").value;
  if (nombreUsuario === "" ||apellidoUsuario === "" || emailUsuario === "" || passwordUsuario === "") {
    alert('Todos los campos son obligatorios');
  } else {
    // Creamos el usuario con su información
    let userData = {
        name: nombreUsuario,
        apellido:apellidoUsuario,
        email: emailUsuario,
        password: passwordUsuario

        };
        console.log(userData);
        // Guardamos el usuario en localStorage
        localStorage.setItem('user', JSON.stringify(userData));
        
        // Redireccionamos a la página principal
        window.location.href="index.html"
        }
        
})


