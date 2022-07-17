/* ---------------------------MENU-SLIDEBAR-CARTEGORY-----------------------*/
const itemssliderbar= document.querySelectorAll(".cartegory-left-li")
itemssliderbar.forEach(function(menu,index){
  menu.addEventListener("click",function(){
    menu.classList.toggle("block")
  })
})
/* ---------------------------PRESERVE-----------------------*/
const introduce = document.querySelector(".introduce")
const preserve=document.querySelector(".preserve")
const detail = document.querySelector(".detail")
if(introduce){
  introduce.addEventListener("click",function(){
   document.querySelector(".product-content-right-bottom-content-introduce").style.display="block"
    document.querySelector(".product-content-right-bottom-content-detail").style.display= "none"
    document.querySelector(".product-content-right-bottom-content-preserve").style.display= "none"
  })
}
if(preserve){
  preserve.addEventListener("click",function(){
    document.querySelector(".product-content-right-bottom-content-introduce").style.display="block"
    document.querySelector(".product-content-right-bottom-content-detail").style.display= "none"
    document.querySelector(".product-content-right-bottom-content-preserve").style.display= "block"
  })
}
if(detail){
  detail.addEventListener("click",function(){
    document.querySelector(".product-content-right-bottom-content-introduce").style.display="block"
    document.querySelector(".product-content-right-bottom-content-detail").style.display= "block"
    document.querySelector(".product-content-right-bottom-content-preserve").style.display= "none"
  })
}