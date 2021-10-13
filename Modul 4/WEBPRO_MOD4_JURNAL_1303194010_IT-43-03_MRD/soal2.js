
function namafungsi(){
	if (confirm('Tekan OK Jika Kamu Adalah Mahasiswa Telkom?')) {
		nama = prompt("Siapa Nama Kamu?");
		nim = prompt("Tuliskan nim kamu?")
		document.getElementById("demo").innerHTML =
		"Selamat Datang<br>" + nama + ", " + nim;
	  } else {
		document.getElementById("demo").innerHTML = "Silahkan Angkat Kaki dari LAB ini !!!";
	  }
}