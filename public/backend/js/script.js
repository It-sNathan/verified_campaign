// SideBar active class function/query using Jquery
$('.menu-sidebar__content .navbar-sidebar ul li a').filter(function(){
    return this.href == location.href.replace(/#.*/,"");
}).parents('li').addClass('active');
// SideBar active class function/query using Jquery






































// const current = location.href;
// const sidebarItem = document.querySelectorAll('a');
// const sidebarLength = sidebarItem.length
// for(i=0; i<sidebarLength; i++){
//     if(sidebarItem[i].href === current){
//         sidebarItem.className = "active"
//     }
// }



// sidebar = document.querySelector('.navbar-sidebar').querySelectorAll('li');
// console.log(sidebar);

// sidebar.forEach(element => {
//     element.addEventListener('click', function(){
//         sidebar.forEach(nav=>nav.classList.remove("active"))
//         this.classList.add("active");        
//     })
// });