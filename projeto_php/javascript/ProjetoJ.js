if (localStorage.getItem("token") == null) {
  alert("Você precisa estar logado para acessar essa página");
  window.location.href = "ProjetoL.php";
}
const userLogado = JSON.parse(localStorage.getItem("userLogado"));
const logado = document.querySelector("#logado");
logado.innerHTML = `${userLogado.user}`;
function sair() {
  localStorage.removeItem("token");
  localStorage.removeItem("userLogado");
  window.location.href = "ProjetoL.php";
}