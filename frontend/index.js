async function getUser(){
    let result = await fetch("http://localhost/esgi-1-architecture-web/backend/route.php?data=user");
    let data = await result.json();
    console.log(data);
}

getUser();