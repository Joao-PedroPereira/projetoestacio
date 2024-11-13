function entrar() {
  let usuario = document.querySelector('#usuario')
  let userLabel = document.querySelector('#userLabel')

  let senha = document.querySelector('#senha')
  let senhaLabel = document.querySelector('#senhaLabel')

  let msgError = document.querySelector('#msgError')
  let listaUser = []

  let userValid = {
    nome: null,
    user: null,
    senha: null
  }

  listaUser = JSON.parse(localStorage.getItem('listaUser'))

  listaUser?.forEach((item) => {
    if (usuario.value == item.userCad && senha.value == item.senhaCad) {

      userValid = {
        user: item.userCad,
        senha: item.senhaCad
      }

    }
  })

  if (usuario.value == userValid.user && senha.value == userValid.senha) {
    alert("Logado com sucesso");

    let mathRandom = Math.random().toString(16).substring(2)
    let token = mathRandom + mathRandom

    localStorage.setItem('token', token)
    localStorage.setItem('userLogado', JSON.stringify(userValid))
  } else {
    alert("Este usuário não existe");
    userLabel.setAttribute('style', 'color: red')
    usuario.setAttribute('style', 'border-color: red')
    senhaLabel.setAttribute('style', 'color: red')
    senha.setAttribute('style', 'border-color: red')
    msgError.setAttribute('style', 'display: block')
    msgError.innerHTML = 'Usuário ou senha incorretos'
  }

}
