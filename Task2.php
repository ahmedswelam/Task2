<!-- 
    TASK
    Write a PHP function to print the next character of a specific character.
    input : 'a'
    Output : 'b'
    input : 'z'
    Output : 'a'
-->


<body>
    <h1>the next character of a specific character - Ahmed Ali</h1>
    <form action="" method="post" id="char-form">
        <input type="text" name="char" id="char" placeholder="Please enter character" />
        <input type="submit" name="char-submit" id="char-submit" value="Submit" />
    </form>
</body>


<?php


$result = '';
$result_str = '';
if (isset($_POST['char-submit'])) {
    $char = $_POST['char'];
    if (!empty($char)) {
      // $result = spec_char($char);
       $result_str = spec_char($char) ;
    }
}

function spec_char($char){
  $next_char = ++$char;

  if (strlen($next_char) > 1) 
  {
   $next_char = $next_char[0];
    }
  echo $next_char."\n";
   
}



?>

