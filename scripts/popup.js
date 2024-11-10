
function openHTML(template){

    fetch('templates/'+template+'.html').then((response)=>{
        response.text().then((txt)=>{
            const popup = document.querySelector('.pop-up')
            const html = document.createElement('div')
            html.innerHTML = txt

            try{
                const tx = document.createElement('div')
                tx.className = 'template'
                tx.innerHTML = html.querySelector('template').innerHTML

                const close = document.createElement('p')
                close.className = 'close'
                close.innerHTML = 'X'
                close.addEventListener('click',()=>{
                    closePopup()
                })
                tx.appendChild(close)

                popup.innerHTML = ''
                popup.appendChild(tx)
                eval(html.querySelector('script').innerHTML)
                
            }catch{
                popup.innerHTML = '404 - página não encontrada!'
            }
            popup.style.display = 'flex'
        })

    })

}

function closePopup(){
    document.querySelector('.pop-up').style.display = 'none'
}