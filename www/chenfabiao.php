<meta charset="utf-8">
<?php
echo"php九九乘法表<br />";
	for($x=1;$x<=9;$x++)
	{
		for($y=1;$y<=$x;$y++)
		{
			echo $y."*".$x."=".$x*$y."\t";
		}
		echo "<br />";
	}

?>
<script>
document.write("js九九乘法表<br />");
	for(var x=1;x<=9; x++)
	{
		for(var y=1;y<=x;y++)
		{
			document.write(y+"*"+x+"="+x*y+"\t");
		}
		document.write("<br />");
	}

</script>