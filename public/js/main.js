const openPopWind =document.getElementById("open-pop-wind");
const closeWind =document.getElementById("close-wind");
const jsHiddin =document.getElementById("js-hiddin");
const conRefrech = document.getElementById("con-refrech");
const login =document.getElementById("login");
const showRight = document.getElementById("show-right");
const showLeft =document.getElementById("show-left");
const winleft = document.getElementById("wind-left");
const winright = document.getElementById("wind-right");
const shopingCart = document.getElementById("shoping-cart");
const mainHeight = document.querySelector("main");
const moveRight = document.getElementById("move-right");
const moveLeft = document.getElementById("move-left");
const  jsHidden = document.querySelector(".container-content");
const disNONEleft =document.getElementById("dis-none-left");
const disNONEright = document.getElementById("dis-none-right");
const updateCART =document.getElementById("update-cart");

// open window pop for login
openPopWind.addEventListener('click',(e)=>
{
    e.preventDefault();
    jsHiddin.style.display = "none";
    login.style.display = "block";
    jsHidden.classList.add('hidden-element');
     showright();
}) 

// closse window pop for login
closeWind.addEventListener('click',()=>
{
    login.style.display ="none";
    jsHiddin.style.display="block";
    jsHidden.classList.remove('hidden-element');
    mainHeight.style.height = "auto";
}) 

 // show window login 
function showright(){
    winleft.style.visibility = "hidden";
    winright.style.visibility = "visible";
    winright.style.borderLeft ="2px solid #eff2f7"
    showLeft.style.color ="#9e9e9e";
    showRight.style.color = "#0055a6";
    showLeft.style.borderBottom ="0";
    showRight.style.borderBottom ="2px solid #42526e";
    mainHeight.style.height = "430px";
    if(screen.availWidth < 630)
{
    disNONEright.style.display = "block";
    disNONEleft.style.display ="none";
    winright.style.borderLeft ="0px solid #eff2f7"
}
};

// show window login new user 
function showleft(){
    winright.style.visibility = "hidden";
    winright.style.display ="block";
    winleft.style.visibility = "visible";
    winleft.style.borderRight ="2px solid #eff2f7"
    showLeft.style.color ="#0055a6";
    showRight.style.color = "#9e9e9e";
    showLeft.style.borderBottom ="2px solid #42526e";
    showRight.style.borderBottom ="0";
    mainHeight.style.height = "800px";
    if(screen.availWidth < 630)
    {
          disNONEleft.style.display ="block";
          disNONEright.style.display = "none";
          winleft.style.borderRight ="0px solid #eff2f7"
    }
  
}
 
//timer for acount
const timer = ()=>{
    const upperDate = new Date('Jan 29, 2023 00:00:00').getTime();
    const currentDate = new Date().getTime();
    const diffDate = upperDate-currentDate;

    const seconds = 1000;
    const minutes = seconds * 60;
    const hours = minutes * 60;
    const days = hours * 24;

    const remain_days = Math.floor(diffDate/days);
    const remain_hours = Math.floor((diffDate%days)/hours);
    const remain_minutes = Math.floor((diffDate%hours)/minutes);
    const remain_seconds = Math.floor((diffDate%minutes)/seconds);

    var d = document.getElementById('days');
    var h = document.getElementById('hours');
    var m = document.getElementById('minutes');
    var s = document.getElementById('seconds');

    d.innerHTML = remain_days;
    h.innerHTML = remain_hours;
    m.innerHTML = remain_minutes;
    s.innerHTML = remain_seconds;
}

setInterval(timer, 1000);

//open pop window for update cart
let p=document.querySelector(".progress");
let span=document.querySelectorAll(".circle span"); 
let circle=document.querySelectorAll(".circle"); 

let pre=document.querySelector(".prev");
let next=document.querySelector(".next");
 

const closeCART = document.getElementById("close");
const winPOP = document.querySelector(".win-pop-cart");
updateCART.addEventListener('click',(e)=>
{
    e.preventDefault();
    winPOP.style.display ="block";
 })
closeCART.addEventListener('click',(e)=>{
    e.preventDefault();
    winPOP.style.display ="none";
})
 
let i=0;
let page =document.getElementsByClassName("page");
next.addEventListener("click",(e)=>{
    e.preventDefault();   
    if(i==2)
    {
        circle[i].classList.add("active");
        page[2].classList.add("hidden-element");
        next.style.display ="none";
     }
    else
    {
            span[i].classList.add("active");
            circle[i].classList.add("active");
            page[i].classList.add("hidden-element");
            i+=1;      
    }
    console.log(i);
});

pre.addEventListener("click",(e)=>{
    e.preventDefault();   
    if(i==2)
    {
        span[i-1].classList.remove("active");
        circle[i].classList.remove("active"); 
        page[i-1].classList.remove("hidden-element");
        next.style.display ="block";
        pre.style.display =" block";
        i-=1;    
    }
    else
    {
        circle[i].classList.remove("active");  
        if(i!=0){
            i-=1;    
        }
        span[i].classList.remove("active");
        page[i].classList.remove("hidden-element");      
    }
    console.log(i);
    })

 
// change language
// const chlang =document.querySelector("#lang");
// chlang.addEventListener("click",(e)=>{
//     e.preventDefault();
//     let lang = document.getElementsByTagName("link")[4];
//     if(lang.getAttribute('href')=='css/style.css')
//     {
//         lang.setAttribute("href","css/langen.css");
//         console.log("murad");
//     }
//     else if(lang.getAttribute("href")=="css/langen.css")
//     {
//         lang.setAttribute("href","css/style.css")
//     }
// })
