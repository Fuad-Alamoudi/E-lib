const moveRIGHT =document.querySelectorAll(".move-right");
const moveLEFT =document.querySelectorAll(".move-left");
const movePRO =document.querySelectorAll(".slider");

moveRIGHT[0].addEventListener('click',(e)=>
{
    e.preventDefault();
    movePRO[0].scrollLeft -=240;
 })
 
moveLEFT[0].addEventListener('click',(e)=>
{
    movePRO.scrollLeft +=240;
})

moveRIGHT[1].addEventListener('click',(e)=>
{
    e.preventDefault();
    movePRO[1].scrollLeft -=240;
 })
 
moveLEFT[1].addEventListener('click',(e)=>
{
    movePRO[1].scrollLeft +=240;
})

moveRIGHT[2].addEventListener('click',(e)=>
{
    e.preventDefault();
    movePRO[2].scrollLeft -=240;
 })
 
moveLEFT[2].addEventListener('click',(e)=>
{
    movePRO[2].scrollLeft +=240;
})

moveRIGHT[3].addEventListener('click',(e)=>
{
    e.preventDefault();
    movePRO[3].scrollLeft -=240;
 })
 
moveLEFT[3].addEventListener('click',(e)=>
{
    movePRO[3].scrollLeft +=240;
})