function hitung(){
var x=eval(document.form1.x.value);
var y=eval(document.form1.y.value);
var pil= document.form1.opt.value;

if (pil === "tambah") {
    z = x + y;                      // Tambah
} else if (pil === "kurang") {
    z = x - y;                      // Kurang
} else if (pil === "kali") {
    z = x * y;                      // Kali
} else if (pil === "bagi") {
    z = x / y;                      // Bagi
}

document.form1.hasil.value = z;
}
function resetForm(){
document.form1.reset();
}