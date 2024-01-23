const sidebarToggle = document.querySelector("#sidebar-toggle")
sidebarToggle.addEventListener("click",function(){
    document.querySelector("#sidebar").classList.toggle("collapsed")
});
 


var coll = document.querySelector(".coll");

coll.addEventListener("click",function(){
    document.querySelector(".plus").innerHTML = '-';
});