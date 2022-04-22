// JavaScript code

function recherche_nom() {
    let input = document.getElementById('rechercheId').value
    input = input.toLowerCase();
    let x = document.getElementsByClassName('nom');

    for (i = 0; i < x.length; i++) {
        if (!x[i].innerHTML.toLowerCase().includes(input)) {
            x[i].style.display = "none";
        } else {
            x[i].style.display = "list-item";
        }
    }
}


function Visible(champs) {
    var Obj = document.getElementById(champs);
    if (Obj.style.visibility == 'hidden') {
        Obj.style.visibility = 'visible';
    } else {
        Obj.style.visibility = 'hidden';
    }
}