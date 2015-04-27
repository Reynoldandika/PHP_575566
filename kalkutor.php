<?php 
class hitung{
	private $bil1;                            //deklarasi properti
	private $bil2;                            //deklarasi properti
	public function tambah($bil1, $bil2){     //membuat function tambah dengan parameter bil1 dan bil2
		$this->bil1=$bil1;
		$this->bil2=$bil2;
		$hasil=$this->bil1+$this->bil2;    //mendeklarasikan penjumlahan
		return $hasil;                     //menampilkan nilai hasil
	}
	public function kurang($bil1, $bil2){
		$this->bil1=$bil1;
		$this->bil2=$bil2;
		$hasil=$this->bil1-$this->bil2;
		return $hasil;
	}
	public function kali($bil1, $bil2){
		$this->bil1=$bil1;
		$this->bil2=$bil2;
		$hasil=$this->bil1*$this->bil2;
		return $hasil;
	}
	public function bagi($bil1, $bil2){
		$this->bil1=$bil1;
		$this->bil2=$bil2;
		$hasil=$this->bil1/$this->bil2;
		return $hasil;
	}	
}
echo "                                                        //membuat tampilan form 
		<html>
		<head>
			<title></title>
		</head>
		<body>
			<form method='post'>
				<table>
					<tr>
						<td><input type='text' name='bil1'> </td>
					</tr>
					<tr>
						<td><select name='operasi'>
							<option value='tambah'>+</option>
							<option value='kurang'>-</option>
							<option value='kali'>x</option>
							<option value='bagi'>:</option>
						</select>
					</td>
				</tr>
				<tr>
					<td><input type='text' name='bil2'> </td>
				</tr>
				<tr>
					<td>
						<input type='submit' value='Hitung'> 
					</td>
				</tr>
			</table>
		</form>
	</body>
	</html>
	";
	
$hitungan=new hitung;                                        //instansiai class hitung
if($_POST){                                                  // mengecek ketersediaan method post yang di kirim oleh form
	$bil1=$_POST['bil1'];                                //menangkap nilai bil1
	$bil2=$_POST['bil2'];                                //menangkap nilai bil2
	$operasi=$_POST['operasi'];                          //menangkap nilai select
	if($operasi=="tambah"){                              //mengecek nilai select
		echo $hitungan->tambah($bil1, $bil2);        //memanggil method tambah dan menampilkan hasil
	}else if($operasi=="kurang"){
		echo $hitungan->kurang($bil1, $bil2);
	}else if($operasi=="kali"){
		echo $hitungan->kali($bil1, $bil2);
	}else if($operasi=="bagi"){
		echo $hitungan->bagi($bil1, $bil2);
	}
}
?>