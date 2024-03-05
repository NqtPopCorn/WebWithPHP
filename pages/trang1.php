
<?php
/*
	- Biến siêu toàn cục.
	- Biến toàn cục.
	- Biến cục bộ.
	- Biến tĩnh.

*/
 /* 
 Biến siêu toàn cục
 là biến luôn luôn được truy cập, không giới hạn – và bạn có thể truy cập nó trong bất cứ hàm nào, lớp nào hoặc file mà không cần làm điều gì đặc biệt
  $GLOBALS, $_SERVER, $_REQUEST, $_POST, $_GET, $_FILES, $_COOKIE, $_SESSION
 Biến toàn cục
 	- Một biến được khai báo bên ngoài của một hàm thì  có phạm vị toàn cục và có thể chỉ truy cập được 	bên ngoài của một hàm:
	- Từ khoá global được sử dụng để truy xuất một biến toàn cục từ trong một hàm.
	- Để làm điều này sử dụng từ kháo global trước tên các biến (bên trong hàm):
	
	* Biến cục bộ 
	- Biến sử dụng bên trong hàm.
 */
$x=6;
$y=9;
$z=$x+$y;
echo "<br />Tong x+y=".$z;
$txt = "< /br>Hello world!";

$x = 5;
$y = 10.5;
$m=100;
echo "<br />Gia tri x=".$x." ; y=".$y;

function cong($x,$y)
{
	$x=$x+10;
	$y=$y+10; // Biến cục bộ
	echo "<br />Gia tri x trong hàm=".$x;
	echo "<br />Gia tri y trong hàm=".$y;
	// echo "<br />Gia tri m trong hàm=".$m;
}

cong($x,$y);
echo "<br />Gia tri x - y ra khỏi hàm cộng:" . $x. " - " . $y;

// thay đổi nội dung biến toàn cục thông qua hàm
function tru($x,$y)
{
	return $x-$y;
}
echo "<br />Hieu 2 so:".tru($x,$y);

function thaydoigiatri($x,$y)
{
	
	global $x,$y;
	$x=$x+10;
	$y=$y+4.5;
}

$z=$x+$y;
echo "</br>Gia tri x - y trước xử lý:" . $x. " - " . $y;
thaydoigiatri($x,$y);

echo "</br>Gia tri x - y ra khỏi hàm thay đổi giá trị:" . $x. " - " . $y;

// Cách 2 thay đổi giá trị toàn cục
$a=5;
$b=10;
function myTest() 
{
	$GLOBALS['a']=$GLOBALS['a']+10;
	$GLOBALS['b']=$GLOBALS['b']+5;
	$GLOBALS['c'] = $GLOBALS['a'] + $GLOBALS['b'];
}

myTest();
echo "<br />Gia tri toàn cục sử dụng GLOBAL $c=$a + $b"; 

/* Biến static
	- Thông thường khi một hàm hoàn thành hoặc kết thúc chạy, tất cả các biến bị xoá. Tuy nhiên đôi khi chúng ta muốn các biến cục bộ không bị xoá để phục vụ cho một công việc nào đó.
	
*/
print("<br/>");
function StaticVariable() {
static $x = 0;

$x++;
echo "<br /> giá trị static: $x";
}
StaticVariable();
StaticVariable();
StaticVariable();
StaticVariable();

function test()
{
	global $n;
	$n=20;
	$n++;
} 
test();
echo "Giá trị n=$n";

?>
<input type="text" value="<?php echo $z ?>" />