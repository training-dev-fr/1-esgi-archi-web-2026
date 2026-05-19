let test = document.querySelector('.test');
let user = {
    firstname: "Aurélien",
    lastname:"Vaast"
}
let content = `<div class="user">
                    <div class="firstname">${user.firstname}</div>
                </div>`

test.innerHTML = content;