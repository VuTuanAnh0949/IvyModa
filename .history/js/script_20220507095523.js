/* ---------------------------MENU-SLIDEBAR-CARTEGORY-----------------------*/
const itemssliderbar= document.querySelectorAll(".cartegory-left-li")
itemssliderbar.forEach(function(menu,index){
  menu.addEventListener("click",function(){
    menu.classList.toggle("block")
  })
})
/* ---------------------------PRESERVE-----------------------*/
