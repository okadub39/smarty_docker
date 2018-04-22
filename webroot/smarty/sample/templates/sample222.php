<html>
<head>
<title>Smartyのテスト</title>
</head>
<body>
Hello, {$name}!<br />
私の名前は{$myname}です。<br />
どうぞよろしく。<br />

{* このテンプレートは {php} ブロックを含み、その中で変数 $varX を割り当てます *}
{php}
   global $foo, $bar;
   if($foo == $bar){
     echo 'This will be sent to browser';
   }
  // 変数を Smarty に割り当てます
  $this->assign('varX','Toffee');
{/php}
{* 変数を出力します *}
<strong>{$varX}</strong> is my fav ice cream :-)

<br />
おおおおおおおお
</body>
</html>