a = r;
const script = document.createElement("script");
script.type = "text/javascript";
script.innerText = 'window["slider' +
    a + '"] =document.getElementById("costum-slider' +
    r + '").addEventListener("input",function(event) {window["value' +
    a + '"] = event.target.value;document.getElementById("current-value' +
    a + '").innerText = window["value' +
    a + '"];});';
document.body.appendChild(script);
r++;
