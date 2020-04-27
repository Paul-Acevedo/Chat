window.addEventListener('load', () => {



    let chat = document.getElementById('nn');

    let mensaje = document.getElementById('mensaje');

    let btnenviar = document.getElementById('btn');
    console.log(btnenviar);

    function load() {
        fetch('getdata.php')
            .then(Response => Response.json())
            .then(data => {
                chat.innerHTML = data + '<br>';
            })
    }
    setInterval(() => {
        load();
    }, 1000)


    btnenviar.addEventListener('click', (e) => {
        e.preventDefault();
        //  
        let datos = new FormData();
        datos.append('mensaje', mensaje.value);
        fetch('post.php', {
                method: 'POST',
                body: datos
            }).then(Response => Response.json())
            .then(data => {
                console.log(data);
                if (true) {
                    chat.innerHTML += mensaje.value + '<br>';
                }

            })
    })

});