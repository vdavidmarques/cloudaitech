function openMenu() {
    var element = document.querySelectorAll(".navbar");
    element.forEach(function(el){
        el.classList.add("active");
      });
}

function closeMenu(){
    var close = document.querySelectorAll(".navbar");
    close.forEach(function(item){
        item.classList.remove("active");
    });
}