<!-- Format php -->
<?php
// create class in oop
class laptop {

    // ini adalah nama property
    var $nama;
    var $ram;
    var $grapik;

    // ini adalah method atau function
    function procecor_laptop() {
        return "procecor dari laptop ini adalah amd radeon";
    }

    function ram_laptop() {
        return "ramnya 8/512gb";
    }
}
// ini adalah nama sebuah object
$lenovo = new laptop();

// ini adalah nama property dari object
$lenovo->nama = "Lenovo ideapad gaming";
$lenovo->ram = "8/512gb";
$lenovo->grapik = " amd radeon";

// Tampilkan hasil dari variabel
echo $lenovo->nama;
echo "<br/>";
echo $lenovo->ram;
echo "<br/>";
echo $lenovo->grapik;
echo "<br/>";

// memangil hasil isi method
echo $lenovo->procecor_laptop();
echo "<br/>";
echo $lenovo->ram_laptop();

class mobil {
    var $nama;
}

$mobilXpander = new mobil();
$mobilPajero = new mobil();
$mobilFortuner = new mobil();

// ngeset property dari object
$mobilXpander->mobil="Xpander";
$mobilPajero->mobil="Pajero";
$mobilFortuner->mobil="Fortuner";

echo "<br/>";
echo "<br/>";
echo $mobilXpander->mobil;
echo "<br/>";
echo $mobilPajero->mobil;
echo "<br/>";
echo $mobilFortuner->mobil;

class motor {
    var $nama;
    
}

$motorNinja = new motor();
$motorHonda = new motor();
$motorYamaha = new motor();

// ngeset property dari object
$motorNinja->motor="ZX25r";
$motorHonda->motor="Vario";
$motorYamaha->motor="Aerox";
$motorSuzuki->motor="Satria FU";

echo "<table border='1'>
    <tr>
     <th>Ninja</th>
     <th>Honda</th>
     <th>Yamaha</th> 
     <th>Suzuki</th>   
    </tr>
    <tr>
        <td>$motorNinja->motor</td>
        <td>$motorHonda->motor</td>
        <td>$motorYamaha->motor</td>
        <td>$motorSuzuki->motor</td>
    </tr>
</table>";

class baru {

// Method public bisa diakses di luar class maupun class turunannya
public function detail(){
    return "KAMU NANYA???";
}
}

// membuat object baru
$obaru = new baru();
$turunan =  $obaru->detail();
echo $turunan;

class kedua {
    protected $nama = "rey";

    protected function nama_kamu () {
        return "Reyhan";
    }

    public function tampilkan_nama() {
        return $this->nama_kamu();
    }   
}
$okedua = new kedua();
echo $okedua->tampilkan_nama();

// contoh pembuatan variable this
class contoh {
    public $nama = "Reyhan";
    
    public function testing() {
        return "Nama Saya $this->nama";
    }
}

// membuat sebuah object baru untuk munculkan hasil
$namaSaya = new contoh();
$namaSaya->nik = '1234';
echo $namaSaya->testing();

// variable scope
$a = 10;

function tes() {
    $a = 7;
    $b = 7;
}

    tes();
    echo $a;
   // echo $b;
    echo "<br/>";

// variable global
 $c = 10;

function tester() {
    global $c;
    global $d;

    $d = 7;
    echo $c;
    echo $d;
}
tester();
echo "<br/>";

// variable static adalah variable yang mempertahankan nilainya di setiap pemanggilan function
// function static1 () {
//     static $a = 0;
//     $a = $a + 1;
//     return "Nomor urut ke $a <br/>";
// }
// echo static1();
// echo static1();
// echo static1();

// latihan scope
$mobil1 = "Xpander";
$mobil2 = "avanza";
$mobil3 = "xenia";
$mobil4 = "pajero";
$mobil5 = "fortuner";

function mob() {
    $mobil2;
    $mobil5;
}

mob();
echo $mobil2;
echo $mobil5;
echo "<br/>";

// latihan static
function itung () {
    static $a = 100;
    $a = $a - 1;
    return "Nomor urut ke $a <br/>";
}
echo itung();
echo itung();
echo itung();
echo itung();
echo itung();
echo itung();
echo itung();
echo itung();
echo itung();
echo itung();

// membuat method atau function dengan parameter
class pesawat {
    // membuat function atau method 
    public function hidupkanPesawat($namaPesawat, $pemilik){
        return "hidupkan pesawat $namaPesawat punya $pemilik";
    }
}
 // membuat object
 $pesawatAing = new pesawat();
 echo $pesawatAing->hidupkanPesawat("Boeing 747", "Reyhan");

    
?>