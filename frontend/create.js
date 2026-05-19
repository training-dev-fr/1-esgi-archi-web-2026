let param = new URLSearchParams(window.location.search);

document.querySelector("#save").addEventListener('click',() => {
    let user = {
        name: document.querySelector("#name").value,
        mail: document.querySelector("#email").value,
        password: document.querySelector("#password").value
    }
    let mode = param.get("mode");
    let method = mode === "update"?"PUT":"POST";
    if(mode === "update"){
        user.id = param.get("id");
    }
    fetch("http://api.archi-web.test/users",{
        method: method,
        headers:{
            "Content-Type":"application/json",
        },
        body: JSON.stringify(user)
    });

    window.location.assign('index.html');
});


if(param.get('mode') === "update"){
    getUser(param.get("id"));

}

async function getUser(id){
    let res = await fetch("http://api.archi-web.test/users/" + id);
    let data = await res.json();
    document.querySelector("#name").value = data.name;
    document.querySelector("#email").value = data.mail;
    document.querySelector("#password").value = data.password;
}
