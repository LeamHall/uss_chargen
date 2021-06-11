<!DOCTYPE HTML>
<link rel="stylesheet" href="usschargen.css">
<html>
<body>
<img src="images/background3.jpg">

<?php
  require 'prefs.php';
  require 'mins.php';
  require 'names.php';
  require 'character.php';
 
  if ( isset($_POST['class']) ){ 
    
    $mode       = 'short';  // $mode can currently be 'full' or 'short'
    $class      = $_POST['class'];
    $gender     = $_POST['gender'];
    $race       = $_POST['race'];
    $name_list  = $names[$race][$gender];
    $name       = $name_list[array_rand($name_list)];
    $character  = new Character($class, $prefs, $mins, $race, $gender, $name);
    $character->print_character($mode);

    echo "<hr>";
  };
?>

  <form action="index.php" method="POST">
 
  <h3>Class</h3> 
  <input type="radio" id="cleric" name="class" value="cleric">
  <label for="cleric">Cleric</label><br>
  <input type="radio" id="fighter" name="class" value="fighter" checked="checked">
  <label for="fighter">Fighter</label><br>
  <input type="radio" id="ranger" name="class" value="ranger">
  <label for="ranger">Ranger</label><br>
  <input type="radio" id="paladin" name="class" value="paladin">
  <label for="paladin">Paladin</label><br>
  <input type="radio" id="magicuser" name="class" value="magicuser">
  <label for="magicuser">Magic User</label><br>
  <input type="radio" id="thief" name="class" value="thief">
  <label for="thief">Thief</label><br>

  <h3>Race</h3>
  <input type="radio" id="human" name="race" value="human" checked="checked">
  <label for="human">Human</label><br>
  <input type="radio" id="dwarf" name="race" value="dwarf">
  <label for="dwarf">Dwarf</label><br>
    
  <h3>Gender</h3> 
  <input type="radio" id="male" name="gender" value="male" checked="checked">
  <label for="male">Male</label><br>
  <input type="radio" id="female" name="gender" value="female">
  <label for="female">Female</label><br>

  <h3>Alignment</h3>
  <input type="radio" id="lg" name="alignment" value="lg">
  <label for="lg">Lawful Good</label><br>
  <input type="radio" id="tn" name="alignment" value="tn" checked="checked">
  <label for="tn">True Neutral</label><br>
  <input type="radio" id="ce" name="alignment" value="ce">
  <label for="ce">Chaotic Evil</label><br>


  <br>
  <input type="submit" value="Create!">
  
  </form>

</body>
</html>

