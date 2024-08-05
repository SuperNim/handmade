var slider_3 = document.getElementById("myRange");
var output = document.getElementById("myRange_output");

// Update the current slider value (each time you drag the slider handle)
slider_3.oninput = function() {
    output.innerHTML = this.value + ' Р';
}