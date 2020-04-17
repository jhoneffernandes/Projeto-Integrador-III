let fmr = document.querySelector('#contato')
fmr.addEventListener('submit' , function(validar){
    validar.preventDefault()
    let email = document.querySelector('#email')
    let nome = document.querySelector('#nome')
    let descricao = document.querySelector('#descricao')
    let tell = document.querySelector('#tell')

    if(!email.value) {
        error.textContent = 'Campo email é obrigatório'
        error.className = 'erro'
        email.focus()
        return
    }
    if(!nome.value){
        error.textContent = 'Informe o seu nome'
        error.className = 'erro'
        nome.focus()
        return
    }
    if(!descricao.value){
        error.textContent= 'Descreva o pedido'
        error.className = 'erro'
        descricao.focus()
        return
    }
    if(!tell.value){
        error.textContent = 'Número é obrigatório'
        error.className = 'erro'
        tell.focus()
        return
    }
    error.textContent = 'Enviado com sucesso.'
    error.className = 'acerto'
})
let maskOptions = {
    mask: '(00)0000-0000'
};
let mask = IMask(tell, maskOptions);

let btnreset = document.querySelector('#reset')
fmr.addEventListener('reset', function limpar(){
    
    if(submit = true){
        texto.textContent = ''
}       
})
    
    