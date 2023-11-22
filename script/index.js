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





