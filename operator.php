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