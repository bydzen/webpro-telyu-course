<?php
// Tidak usah pedulikan line di bawah ini
$action = $_GET['action'] ?? null;

//  Perhaitkan yang memilki tanda [HERE] saja.
// Bagian yang dibawah ini ini jangan diganti ya
$arr = ['Aku', 'Adalah', 'Anak', 'Gembala', 'Selalu', 'Riang', 'Serta', 'Gembira'];
switch ($action) {
	case 'show':
		$result = showResult($arr);
		break;
	case 'hide':
		$result = hideResult($arr);
		break;
	case 'odd':
		$result = oddResult($arr);
		break;
	case 'even':
		$result = evenResult($arr);
		break;
	case 'empty':
		$result = emptyResult($arr);
		break;
	default:
		$result = [];
		break;
}
?>

<!DOCTYPE html>
<html>

<head>
	<title>Soal 1: PHP..</title>
</head>

<body>
	<h1>Operasikan array di bawah ini</h1>
	<ol start="0">
		<li>Aku</li>
		<li>Adalah</li>
		<li>Anak</li>
		<li>Gembala</li>
		<li>Selalu</li>
		<li>Riang</li>
		<li>Serta</li>
		<li>Gembira</li>
	</ol>
	<a href="?action=empty">Kosong</a>
	<a href="?action=hide">Sembunyikan</a>
	<a href="?action=show">Tampilkan</a>
	<a href="?action=odd">Ganjil</a>
	<a href="?action=even">Genap</a>
	<h1>Hasil</h1>

	<ol start="0">
		<!-- [HERE] ganti yang di bawah ini -->
		<?php
		echo '<ol start="0">';
		foreach ($result as $key => $value) {
			echo "<li>" . $value . "</li>";
		}
		echo '</ol>';
		?>
	</ol>

</body>

</html>

<?php
// [HERE] Kerjakan bagian ini
function emptyResult($arr)
{
	// Function ini mengembalikan string kosong dalam $result sebanyak $arr
	$i = 0;
	foreach ($arr as $a) {
		$result[] = "";
		$i++;
	}
	return $result;
}

function hideResult($arr)
{
	// Function ini $result tanpa elemen
	$result = [];
	return $result;
}

function showResult($arr)
{
	// Function ini mengembalikan semua elemen $arr dalam $result
	$i = 0;
	foreach ($arr as $a) {
		$result[] = $a;
		$i++;
	}
	return $result;
}

function oddResult($arr)
{
	// Function ini mengembalikan semua elemen $arr dalam $result jika indexnya ganjil, string kosong jika genap
	$i = 0;
	foreach ($arr as $a) {
		if ($i % 2 == 1) {
			$result[] = $a;
		} else {
			$result[] = "";
		}
		$i++;
	}
	return $result;
}

function evenResult($arr)
{
	// Function ini mengembalikan semua elemen $arr dalam $result jika indexnya genap, string kosong jika ganjil
	$i = 0;
	foreach ($arr as $a) {
		if ($i % 2 == 0) {
			$result[] = $a;
		} else {
			$result[] = "";
		}
		$i++;
	}
	return $result;
}

?>