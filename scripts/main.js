var cust = {}

// https://api.asaas.com/v3/cities/{city_id}


document.querySelector('#btn-novoCli').addEventListener('click',()=>{
    openHTML('novoCliente')
})

document.querySelector('#btn-viewCli').addEventListener('click',()=>{
    openHTML('buscaCli')
})

document.querySelector('#btn-extrato').addEventListener('click',()=>{
    openHTML('extrato')
})

document.querySelector('#btn-viewCob').addEventListener('click',()=>{
    openHTML('buscaCobranca')
})

document.querySelector('#btn-novaCob').addEventListener('click',()=>{
    openHTML('novaCobranca')
})

document.querySelector('#btn-webhook').addEventListener('click',()=>{
    
    const data = new URLSearchParams()
        data.append("body", '{"teste1" : "valor_1","number":2}')
        data.append("cust", 5)

    const myRequest = new Request("asaas/webhook.php",{
        method : "POST",
        body : data
    })    
    
    return fetch(myRequest)


})