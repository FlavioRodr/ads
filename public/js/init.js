var partials = document.querySelectorAll("[data-partial]");

var xml = [];

for (let i = 0; i < partials.length; i++) {
    xml[i] = new XMLHttpRequest();
    xml[i].open("GET", "/pages/" + partials[i].attributes["data-partial"].value, true);
    xml[i].send();
    xml[i].onreadystatechange  = function () {
        if (xml[i].readyState === XMLHttpRequest.DONE) {
            partials[i].innerHTML = xml[i].response;
        }        
    };
}
