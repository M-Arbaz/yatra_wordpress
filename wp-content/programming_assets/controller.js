document.addEventListener('DOMContentLoaded', function() {
    var body = document.body;
    var html = document.querySelector('.js');

    function left() {
        if(window.innerWidth >= 1440){
        html.classList.remove('wprmenu-body-fixed');
        body.style.left = "0px";    
        }
        else{
            return;
        }
        
    }

    function reload() {
        left();
        requestAnimationFrame(reload); // Using requestAnimationFrame for better performance
    }

    setTimeout(reload, 500); // Start the loop after a 500ms delay
});
