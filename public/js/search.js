// search on book
const search =document.getElementById("input-search");
let bookNAME = document.querySelectorAll(".name-book");
let prodc = document.querySelectorAll(".prodc");
search.addEventListener("keyup",(e)=>{
    e.preventDefault();
    for (let i = 0; i < bookNAME.length; i++) {
        if(bookNAME[i].textContent.includes(search.value))
                {
                    bookNAME[i].style.color ="green";
                     prodc[i].style.display = "flex";
                     console.log( prodc[item])
         }
        else
        {
            bookNAME[i].style.color ="blue";
            prodc[i].style.display = "none";
        }

    }
})

//add book for shoping cart
const btnCART = document.querySelectorAll(".btn-cart");
const counterCART = document.getElementById("counter");
var conuter =0;
btnCART.forEach(cart=>{
    cart.addEventListener('click',(e)=>
    {
        e.preventDefault();
        conuter+=1;
        counterCART.innerText = conuter;
    })
})


// change language form  Arbic to English and revers
const chlang =document.querySelector("#lang");
chlang.addEventListener("click",(e)=>{
    e.preventDefault();
    let lang = document.getElementsByTagName("link")[5];
    if(lang.getAttribute('href')=="css/arblan.css")
    {
        lang.setAttribute("href","css/langen.css");
        console.log("murad");
    }
    else if(lang.getAttribute("href")=="css/langen.css")
    {
        lang.setAttribute("href","css/arblan.css")
    }
})
 