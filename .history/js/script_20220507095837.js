/* ---------------------------MENU-SLIDEBAR-CARTEGORY-----------------------*/
const itemssliderbar= document.querySelectorAll(".cartegory-left-li")
itemssliderbar.forEach(function(menu,index){
  menu.addEventListener("click",function(){
    menu.classList.toggle("block")
  })
})
/* ---------------------------PRESERVE-----------------------*/
const preserve=document.querySelector(".preserve")
const detail = document.querySelector(".detail")
if(preserve){
  preserve.addEventListener("click",function(){
    document.querySelector(".product-content-right-bottom-content-detail")
  })
}