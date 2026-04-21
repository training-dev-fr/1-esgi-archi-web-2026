// fetch("https://dummyjson.com/products")
// .then(function(result){
//     return result.json();
// })
// .then(function(data){
//     console.log(data);
// })
// .catch(function(){

// })

async function getProduct(){
    let result = await fetch("https://dummyjson.com/products",{
        method: "POST",
        body: "toto"
    });
    let data = await result.json();
    console.log(data);
}

getProduct();



