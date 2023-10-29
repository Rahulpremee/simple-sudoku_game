<html>
<head>
<style>
.c1{
background-color:#9521;
}
.c2{
background-color:green;
color:red;
}
.c3{
background-color:red;
}
</style> <title>sudoku</title>
</head>
<body>
<form action="sudokucheck.php" method="get">
<table align="center" border="7" cellpadding="10" cellspacing="1" bordercolor="blue">
<tr>
<td class="c1"><input style="height:30px;width:30px;" type="text" name="text1"></td><td class="c1" align="center">2</td><td align="center" class="c1">4</td><td class="c1"><input style="height:30px;width:30px;" type="text" name="text2"></td>
</tr>
<tr>
<td  align="center" class="c1">1</td><td class="c1"><input style="height:30px;width:30px;" type="text"name="text3"></td><td class="c1" align="center"><input style="height:30px;width:30px;" type="text" name="text4"></td><td class="c1" align="center">3</td>
</tr>
<tr>
<td align="center" class="c1">4</td><td class="c1"><input style="height:30px;width:30px;" type="text"name="text5"></td><td class="c1"><input style="height:30px;width:30px;" type="text" name="text6"></td><td align="center" class="c1">2</td>
</tr>
<tr>
<td class="c1"><input style="height:30px;width:30px;" type="text"name="text7"></td><td align="center" class="c1">1</td><td align="center" class="c1">3</td><td class="c1"><input style="height:30px;width:30px;" type="text" name="text8"></td>
</tr>
<tr>
<td colspan="2" align="center" class="c2"><input type="submit" value="submit"></td><td colspan="2" align="center" class="c3"><input type="Reset" value="reset"></td>
</tr>
</table>
</form>
</body>
</html>