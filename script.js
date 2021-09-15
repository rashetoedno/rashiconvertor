function convertToBgn() {
    var euroValue = document.getElementById("euroInput").value;
    var bgnValue = euroValue * 2.00;
    var bgnInput = document.getElementById("bgnInput");
    bgnInput.value = bgnValue;
}

function convertToEuro(bgnValue) {
    var bgnValue = document.getElementById("bgnInput").value;
    var euroValue = bgnValue / 2.00;
    var euroInput = document.getElementById("euroInput");
    euroInput.value = euroValue;
}

var euroBtn = document.getElementById("euroBtn");
var bgnBtn = document.getElementById("bgnBtn");
euroBtn.onclick = convertToBgn;
bgnBtn.onclick = convertToEuro;