window.addEventListener("DOMContentLoaded", function(){
  var count = null,
  lest = null,
  max = 5000,
  input_area = document.getElementById("textArea2"),
  output_count = document.getElementById("textCount2"),
  output_lest = document.getElementById("textLest2"),
  attention = document.getElementById("textAttention2");

  input_area.onkeyup = function(){
    var length = input_area.value.length;
    count = length;
    lest =  max - length;
    output_lest.innerText = lest;
    output_count.innerText = count;
    attention.style.display = ( length > max ) ? "block" : "none";
  }
}, false);