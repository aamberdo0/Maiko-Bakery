// This page creates event handler for the main page

let navbar = document.querySelector('.header .flex .navbar')
// when user clicks on the menu bar on mobile devices
document.querySelector('#menu-btn').onclick = () =>{
    // display log out option
    navbar.classList.toggle('active'); 
    
    //display current navigation bar as menu bar
    profile.classList.remove('active'); 

}
// repeate the same with profile icon
let profile = document.querySelector('.header .flex .profile'); 
document.querySelector('#user-btn').onclick = () =>{
    profile.classList.toggle('active'); 
    navbar.classList.remove('active'); 
}

// when user scroll the web page on devices, 
window.onscroll = () =>{
    // hide the displayed menu bar 
    navbar.classList.remove('active'); 
    
    // hide the display for profile icon.  
    profile.classList.remove('active'); 
}







