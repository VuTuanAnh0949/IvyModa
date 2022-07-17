/* ---------------------------MENU-SLIDEBAR-CARTEGORY-----------------------*/
const itemssliderbar= document.querySelectorAll(".cartegory-left-li")
itemssliderbar.forEach(function(menu,index){
  menu.addEventListener("click",function(){
    menu.classList.toggle("block")
  })
})
/* ---------------------------PRODUCT-----------------------*/
const bigImg =document.querySelector(".product-content-left-big-img img")
const smallImg=document.querySelectorAll(".product-content-left-small-img img")
smallImg.forEach(function(imgItem,x){
imgItem.addEventListener("click",function(){
  bigImg.src = smallImg.src  
})
})

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
if(detail){
  detail.addEventListener("click",function(){
    document.querySelector(".product-content-right-bottom-content-introduce").style.display="none"
    document.querySelector(".product-content-right-bottom-content-detail").style.display= "block"
    document.querySelector(".product-content-right-bottom-content-preserve").style.display= "none"
  })
}
if(preserve){
  preserve.addEventListener("click",function(){
    document.querySelector(".product-content-right-bottom-content-introduce").style.display="none"
    document.querySelector(".product-content-right-bottom-content-detail").style.display= "none"
    document.querySelector(".product-content-right-bottom-content-preserve").style.display= "block"
  })
}
const button =document.querySelector(".product-content-right-bottom-top")
if(button){
  button.addEventListener("click",function(){
    document.querySelector(".product-content-right-bottom-content-big").classList.toggle("activeB")
  })
}