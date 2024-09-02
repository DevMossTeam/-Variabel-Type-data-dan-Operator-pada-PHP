<?php
$i;
$nama;
$umur;
$_lokasi_memori;
$ANGKA_MAKSIMUM;
?>

<?php 
$andi="Andi"; 
echo $Andi; // Notice: Undefined variable: Andi 
?>

<?php 
$nama = "andi"; 
$umur = 17; 
$pesan = "Saya sedang belajar PHP di duniailkom.com"; 
?>

<?php 
$andi="Andi"; 
echo $andi; 
?>  

<?php 
$a = 17; // nilai variabel a berisi angka (integer) 
$a = "aku"; // nilai variabel a diubah menjadi kata (string) 
$a = 17.42; // nilai variabel a diubah menjadi desimal (float) 
?>  

<?php 
$umur=21; 
$harga=15000; 
$rugi=-500000; 
echo $umur; //21 
echo "<br />"; 
echo $harga; //15000 
echo "<br />"; 
echo $rugi; //-500000 
?>

<?php 
print PHP_INT_MAX; // 2147483647 
?>  

<?php 
$angka_float1= 0.78; 
$angka_float2= 14.99; 
$angka_scientific1=0.314E1; 
$angka_scientific2=0.3365E-3; 
echo $angka_float1; // 0.78 
echo "<br />"; 
echo $angka_float2; //14.99 
echo "<br />"; 
echo $angka_scientific1; //3.14 
echo "<br />"; 
echo $angka_scientific2; //0.0003365 
?> 

<?php 
$string1='Ini adalah string sederhana'; 
$string2='Ini adalah string 
yang bisa memiliki beberapa 
baris'; 
$string3='Dia berkata: "I\'ll be back"'; 
$string4='Anda telah berhasil menghapus C:\\xampp\\htdoc'; 
$string5='Kalimat ini tidak akan pindah ke: \n baris baru'; 
$string6='Variabel juga tidak otomatis ditampilkan $string1 dan $string3'; 
echo $string1; echo "<br>"; 
echo $string2; echo "<br>"; 
echo $string3; echo "<br>"; 
echo $string4; echo "<br>"; 
echo $string5; echo "<br>"; 
echo $string6; 
?> 

<?php 
$string1="Ini adalah string sederhana"; 
$string2="Ini adalah string yang bisa memiliki beberapa baris"; // Fix: Close the string properly
$string3="Dia berkata: \"I'll be back\""; 
$string4="Anda telah berhasil menghapus C:\\xampp\\htdoc"; 
$string5="Kalimat ini akan akan pindah ke: \n baris baru";  
$string6="Variabel akan otomatis ditampilkan: $string1 dan $string3"; 
echo $string1; echo "<br \>"; 
echo $string2; echo "<br \>"; 
echo $string3; echo "<br \>"; 
echo $string4; echo "<br \>"; 
echo $string5; echo "<br \>"; 
echo $string6; 
?>

<?php 
$IPK=3.9; 
$string1 = <<<END
Saya sedang belajar PHP 
di Politeknik Negeri Jember <br /> 
Kali ini tentang pembahasan
// ... existing code ...
END;
echo $string1;
?>

<?php 
$IPK=3.9; 
$string1 = <<< 'SELESAI'
Saya sedang belajar PHP 
di \n Politeknik Negeri Jember <br />
// ... existing code ...
SELESAI;
echo $string1; 
?>

<?php 
$hasil1= -3; 
$hasil2=3+5; 
$hasil3=8-4.5; 
$hasil4=2*5; 
$hasil5=3+8/5-3; 
$hasil6=10 % 4; 
echo "\$hasil1:"; var_dump($hasil1); // $hasil1:int(-3)  
echo "<br \>";                    
echo "\$hasil2:"; var_dump($hasil2); // $hasil2:int(8)  
echo "<br \>"; 
echo "\$hasil3:"; var_dump($hasil3); // $hasil3:float(3.5)  
echo "<br \>"; 
echo "\$hasil4:"; var_dump($hasil4); // $hasil4:int(10)  
echo "<br \>"; 
echo "\$hasil5:"; var_dump($hasil5); // $hasil5:float(1.6)  
echo "<br \>"; 
echo "\$hasil6:"; var_dump($hasil6); // $hasil6:int(2)  
?> 

<?php 
$a = 10; 
$a = $a + 5; 
$a = $a - 10; 
echo "\$a = $a"; 
echo "<br />"; 
// sama hasilnya dengan kode berikut: 
$b = 10; 
$b += 5; // sama dengan $b = $b + 5; 
$b -= 10;// sama dengan $b = $b - 10; 
echo "\$b = $b"; 
?> 

<?php 
echo "1. 12 < 14 = "; var_dump(12<14); // bool(true)  
echo "<br />"; 
echo "2. 14 < 14 = "; var_dump(14<14); // bool(false) 
echo "<br />"; 
echo "3. 14 <= 14 = "; var_dump(14<=14); // bool(true)
echo "<br />"; 
echo "4. 10 <> '10' = "; var_dump(10<>'10'); // bool(false)  
echo "<br />"; 
echo "5. 10 == '10' = "; var_dump(10=='10'); // bool(true)  
echo "<br />"; 
echo "6. 10 === '10' = "; var_dump(10==='10'); // bool(false)  
echo "<br />"; 
echo "7. '150' == '1.5e2' = "; var_dump('150'=='1.5e2'); // bool(true)  
echo "<br />"; 
echo "8. 'duniailkom' == 0 = "; var_dump('duniailkom'==0); // bool(true)  
echo "<br />"; 
?>

<?php 
echo "<h3>Postincrement</h3>"; 
$a = 5; 
echo "\$a = $a <br />"; 
echo "\$a akan bernilai 5: " . $a++ . " (\$a++)<br />"; 
echo "\$a akan bernilai 6: " . $a . "<br />"; 
echo "<h3>Preincrement</h3>"; 
$a = 5; 
echo "\$a = $a <br />"; 
echo "\$a akan bernilai 6: " . ++$a . " (++\$a)<br />"; 
echo "\$a akan bernilai 6: " . $a . "<br />"; 
echo "<h3>Postdecrement</h3>"; 
$a = 5; 
echo "\$a = $a <br />"; 
echo "\$a akan bernilai 5: " . $a-- . " (\$a--)<br />"; 
echo "\$a akan bernilai 4: " . $a . "<br />"; 
echo "<h3>Predecrement</h3>"; 
$a = 5; 
echo "\$a = $a <br />"; 
echo "\$a akan bernilai 4: " . --$a . " (--\$a)<br />"; 
echo "\$a akan bernilai 4: " . $a . "<br />"; 
?>

<?php 
$hasil1 = true and false; 
echo '$hasil1 = '; 
echo var_dump($hasil1)."<br/>"; // $hasil1 = bool(true)  
$hasil2 = (true and false); 
echo '$hasil2 = '; 
echo var_dump($hasil2)."<br/>"; // $hasil2 = bool(false)  
$hasil3 = (true xor false); 
echo '$hasil3 = '; 
echo var_dump($hasil3)."<br/>"; // $hasil3 = bool(true)  
$hasil4 = (false or true && false); 
echo '$hasil4 = '; 
echo var_dump($hasil4)."<br/>"; // $hasil4 = bool(false)  
$a=true; 
$b=false; 
$hasil5 = ($a and $b || $a or $b); 
echo '$hasil5 = '; 
echo var_dump($hasil5); // $hasil5 = bool(true) 
?>

<?php 
$a = "Hello "; 
$b = "World!";
$a .= $b; 
echo $a; // Hello World! 
echo "<br />"; 
$a = "belajar "; 
$b = "PHP ";    
$c = "di Politeknik Negeri Jember";    
$hasil= "Saya sedang ".$a.$b.$c; 
echo $hasil; // Saya sedang belajar PHP di Politeknik Negeri Jember 
?>

<?php 
$a = "Hello "; 
$hasil = "{$a} World!"; 
echo $hasil; // Hello World! 
echo "<br />"; 
$a = "belajar "; 
$b = "PHP ";    
$c = "di Politeknik Negeri Jember";    
$hasil= "Saya sedang {$a}{$b}{$c}"; 
echo $hasil; // Saya sedang belajar PHP di Politeknik Negeri Jember 
?>

<?php 
$nim="E12345678"; 
$nama="Budi"; 
$prodi="Teknik Informatika"; 
echo "Selamat Praktikum"; 
echo $nim; 
echo $nama; 
echo $prodi; 
?>

<?php  
$x = 5985; 
var_dump($x); 
echo "<br>";  
$x = -345; // negative number  
var_dump($x); 
echo "<br>";  
$x = 0x8C; // hexadecimal number 
var_dump($x); 
echo "<br>"; 
$x = 047; // octal number 
var_dump($x); 
$x = 10.365; 
var_dump($x); 
echo "<br>";  
$x = 2.4e3; 
var_dump($x); 
echo "<br>";  
$x = 8E-5; 
var_dump($x); 
echo strlen("Hello world!"); 
echo strpos("Hello world!","world"); 
?>

<?php 
$tugas1=90; 
$tugas2=80; 
$jumlah=$tugas1 + $tugas2; 
$rerata=$jumlah/2 ; 
echo "Nilai Tugas I :".$tugas1."<br>"; 
echo "Nilai Tugas II:".$tugas2."<br>"; 
echo "Jumlah Tugas :".$jumlah."<br>"; 
echo "Rerata Tugas :".$rerata; 
?> 
Nama File : operator2.php 
<?php  
$x=10;  
$y=6; 
echo ($x + $y);  
echo ($x - $y);  
echo ($x * $y);  
echo ($x / $y);  
echo ($x % $y);  
$a = "Hello"; 
$b = $a . " world!"; 
echo $b;  
echo $a . " -- " . $b . " ini string operator"; 
?> 