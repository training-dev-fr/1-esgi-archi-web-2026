document.querySelector("#save").addEventListener('click',() => {
    let user = {
        name: document.querySelector("#name").value,
        mail: document.querySelector("#email").value,
        password: document.querySelector("#password").value
    }

    fetch("http://api.archi-web.test/users",{
        method:"POST",
        headers:{
            "Content-Type":"application/json",
        },
        body: JSON.stringify(user)
    });

    window.location.assign('index.html');
});