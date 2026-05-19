async function getUser() {
    let result = await fetch("http://api.archi-web.test/users");
    let data = await result.json();
    showUsers(data);
}

function showUsers(userList) {
    let userContent = "";
    for (let user of userList) {
        userContent += `<div class="user">
                    <button class="update">
                        <i class="fa-solid fa-pen"></i>
                    </button>
                    <button class="delete">
                        <i class="fa-solid fa-trash"></i>
                    </button>
                    <div class="email">${user.mail}</div>
                    <div class="name">${user.name}</div>
                </div>`;
    }
    document.querySelector(".userList").innerHTML = userContent;
}
getUser();