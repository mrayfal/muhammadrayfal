<html>
    <head>
        <style>
            .body{background-color: white;}
            .a{text-align: center;}
            .b{text-align: center;}
            .judul{text-align: center;
                border-bottom:1px solid rgb(219, 57, 57);
            font-family: 'times new roman';}
            .rum{text-align: center;}
            .c{border-radius: 20px;
                text-align: center;
                margin-top: 150px;
                margin-left: 500px;
                width:400px; height: 200px;
            background-color: cornsilk;}
            .jawaban{width: 3cm;}

        </style>
        <title>Kalkulator</title>
    </head>
 <body class="body">
 <div class="c">
        <h1 class="judul">Kalkulator</h1>
        <table>
        <form method ="POST">
        <div class="a">
                    <input type="number" name="a">
                    </div<br>
        <div class="b">
                    <input type="number" name="b" >
                    </div><br>
                    <div class="rum">
          <input type="submit" name="rum" value="+">
          <input type="submit" name="rum" value="-">
          <input type="submit" name="rum" value="*">
          <input type="submit" name="rum" value="/">
          <input type="submit" name="rum" value="%">
        </div><br>
        </div>
</form>
</body>
</html>
<?php
if(isset($_POST['rum'])){
	$a=$_POST['a'];
	$b=$_POST['b'];
	$rum=$_POST['rum'];
	if($rum=="+")
		$ans=$a+$b;
	else if($rum=="-")
		$ans=$a-$b;
	else if($rum=="*")
		$ans=$a*$b;
	else if($rum=="/")
		$ans=$a/$b;
     else if($rum=="%")
		$ans=$a/100*$b;
}?>
<html>
<br>Jawaban: <input class ="jawaban"type='text' value="<?php echo$ans; ?>"><br>
</html>