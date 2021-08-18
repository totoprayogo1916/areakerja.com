var y = r;
console.log(r);
const script = document.createElement("script");
script.type = "text/javascript";
script.innerText = 'window["slider' +
    y + '"] =document.getElementById("costum-slider' +
    r + '").addEventListener("input",function(event) {window["value' +
    y + '"] = event.target.value;document.getElementById("current-value' +
    y + '").innerText = window["value' +
    y + '"];});';
document.body.appendChild(script);
