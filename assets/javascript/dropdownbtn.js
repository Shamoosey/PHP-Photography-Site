
function showContent(){
    document.getElementById("dropdown").classList.add("show");
    document.getElementById("dropdown").classList.toggle("show");
}
window.onclick = function hideContent(){
    var dropdowns = document.getElementsByClassName("dropdown-content");
    for(var i = 0; i < dropdowns.length; i++){
        var open = dropdowns[i];
        if(open.classList.contains('show')){
            open.classList.remove('show');
        }
    }
}

function load(){
    document.getElementById("dropdown").addEventListener("click", showContent)
}
document.addEventListener("DOMContentLoaded", load);
