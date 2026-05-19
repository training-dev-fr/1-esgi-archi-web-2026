async function getUser() {
    let result = await fetch("http://api.archi-web.test/users");
    let data = await result.json();
    showUsers(data);
}

function showUsers(userList) {
    let userContent = "";
    for (let user of userList) {
        userContent += `<div class="user">
                    <a href="create.html?mode=update&id=${user.id}">
                        <i class="fa-solid fa-pen"></i>
                    </a>
                    <a>
                        <i class="fa-solid fa-trash"></i>
                    </a>
                    <div class="email">${user.mail}</div>
                    <div class="name">${user.name}</div>
                </div>`;
    }
    document.querySelector(".userList").innerHTML = userContent;
}
getUser();