const req = new XMLHttpRequest();

req.onreadystatechange = function(e) {
    if(req.readyState === 4){
        if(req.status === 200){
            console.log("Succès de la requête : ");
            console.log(req.status);
            console.log(JSON.parse(req.responseText));
        }else{
            console.error("Erreur de la requête : ");
            console.error(req.status);
            console.error(req.responseText);
        }
    }
};

req.open("GET","https://dummyjson.com/products",true);
req.send();