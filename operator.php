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
$tugas1 = 90;
$tugas2 = 80;
$gabungan = $tugas1 . $tugas2; // Menggabungkan string tugas1 dan tugas2
echo "Gabungan string tugas1 dan tugas2: " . $gabungan; // Output: 9080
?>