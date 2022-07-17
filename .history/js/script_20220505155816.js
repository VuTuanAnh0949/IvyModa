/* ---------------------------Menu-SLIDEBAR-CARTEGORY-----------------------*/
const itemssliderbar= document.querySelectorAll(".cartegory-left-li")
itemssliderbar.forEach(function(menu,index){
  menu.classList.toggle("block")
  menu.addEventListener("click",function(){
    menu.classList.toggle("block")
  })
})