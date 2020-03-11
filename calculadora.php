<!DOCTYPE HTML>
<html lang = "pt-br">
<head>
   <title>Calculadora</title>
   <meta charset = "UTF-8">
</head>
<body>
    <form action="" method="post" >
        Numero 1: <input name="num1" type="text"><br><br>
        Numero 2: <input name="num2" type="text"><br><br>
        <input type="submit" name="operacao" value="+">     
        <input type="submit" name="operacao" value="-">     
        <input type="submit" name="operacao" value="*">     
        <input type="submit" name="operacao" value="÷">     
    </form> 
<?php

   $a = $_POST['num1'];
   $b = $_POST['num2'];
   $ope= $_POST['operacao'];

   if(!empty($ope) ) 
   {
      if($ope == '+')
         $c = $a + $b;

      else if($ope == '-')
         $c = $a - $b;

      else if($ope == '*')
         $c = $a*$b;

      else if($ope == '÷')
         $c = $a/$b;
      echo "Resultado: $c";
   }

?>       
</body>
</html>