<?php 
$servername="localhost"; 
$username="root"; 
$password=""; 
$dbname="bookdb"; 
$tbname="book"; 
$conn=mysqli_connect($servername,$username,$password,$dbname); 
 if(!$conn) 
{ 
 die("Connection failed".mysqli_connect_error()); 
} 
else 
{ 
echo "<br><h2 align=center>CONNECTION SUCCESSFULL!!</h2><br/>"; 
} 
$ano=$_POST['ano']; 
$title=$_POST['title']; 
$author=$_POST['author']; 
$ed=$_POST['edition']; 
$pub=$_POST['publisher']; 
$query="INSERT INTO book(ano,title,author,edition,publisher)VALUES('".$ano."','".
$title."','".$author."','".$ed."','".$pub."')"; 
$res=mysqli_query($conn,$query); 
if($res) 
{ 
 echo "SUBMITTED SUCCESSFULLY!!"; 
}  
else 
{ 
 echo "ERROR"; 
} 
mysqli_close($conn); 
?> 
<?php 
$servername="localhost"; 
$username="root"; 
$password=""; 
$dbname="bookdb"; 
$tbname="book";  
$conn=mysqli_connect($servername,$username,$password,$dbname); 
 if(!$conn) 
{ 
 die("Connection failed".mysqli_connect_error()); 
} 
else 
{ 
 echo "<br><h2 align=center>BOOK DETAILS</h2><br/>"; 
} 
$sql="SELECT * FROM book WHERE title='".$title."' "; 
$res=mysqli_query($conn,$sql); 
if(mysqli_num_rows($res)>0) 
{ 
 echo "<table border=2 align=center>"; 
 echo "<tr><th>Accession Number:</th>"; 
 echo "<th>Title:</th>"; 
 echo "<th>Author:</th>"; 
 echo "<th>Edition:</th>"; 
 echo "<th>Publisher:</th></tr>"; 
 while($row=mysqli_fetch_assoc($res)) 
 { 
 echo "<tr><td>$row[ano]</td>"; 
 echo "<td>$row[title]</td>"; 
 echo "<td>$row[author]</td>"; 
 echo "<td>$row[edition]</td>"; 
 echo "<td>$row[publisher]</td></tr>"; 
} 
 echo "</table>"; 
} 
else 
{ 
 echo "0 results"; 
}  
mysqli_close($conn); 
?> 