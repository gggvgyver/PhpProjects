<?php
// 인치, 피트, 야드, 마일, 밀리미터, 센티미터, 미터, 킬로미터
function convert_inches($from_value, $from_unit) {
  switch($from_unit) {
    case "inches": return $from_value * 1; break; // 인치를 인치로 
    case "feet": return $from_value * 12; break; 
    case "yards": return $from_value * 36; break;
    case "miles": return $from_value * 63360; break;
    case "milimeters": return $from_value * 0.03937; break;
    case "centimeters": return $from_value * 0.393701; break;
    case "meters": return $from_value * 39.370079; break;
    case "kilometers": return $from_value * 39370.0787; break;
  }
}

function convert_feet($from_value, $from_unit) {
  switch($from_unit) {
    case "inches": return $from_value * 0.083333; break; // 인치를 피트로 
    case "feet": return $from_value * 1; break; 
    case "yards": return $from_value * 36; break;
    case "miles": return $from_value * 63360; break;
    case "milimeters": return $from_value * 0.03937; break;
    case "centimeters": return $from_value * 0.393701; break;
    case "meters": return $from_value * 39.370079; break;
    case "kilometers": return $from_value * 39370.0787; break;
  }
}

function convert_yards($from_value, $from_unit) {
  switch($from_unit) {
    case "inches": return $from_value * 1; break; // 인치를 야드로 
    case "feet": return $from_value * 12; break; 
    case "yards": return $from_value * 36; break;
    case "miles": return $from_value * 63360; break;
    case "milimeters": return $from_value * 0.03937; break;
    case "centimeters": return $from_value * 0.393701; break;
    case "meters": return $from_value * 39.370079; break;
    case "kilometers": return $from_value * 39370.0787; break;
  }
}

function convert_miles($from_value, $from_unit) {
  switch($from_unit) {
    case "inches": return $from_value * 1; break; // 인치를 마일로 
    case "feet": return $from_value * 12; break; 
    case "yards": return $from_value * 36; break;
    case "miles": return $from_value * 63360; break;
    case "milimeters": return $from_value * 0.03937; break;
    case "centimeters": return $from_value * 0.393701; break;
    case "meters": return $from_value * 39.370079; break;
    case "kilometers": return $from_value * 39370.0787; break;
  }
}

function convert_milimeters($from_value, $from_unit) {
  switch($from_unit) {
    case "inches": return $from_value * 1; break; // 인치를 밀리미터로 
    case "feet": return $from_value * 12; break; 
    case "yards": return $from_value * 36; break;
    case "miles": return $from_value * 63360; break;
    case "milimeters": return $from_value * 0.03937; break;
    case "centimeters": return $from_value * 0.393701; break;
    case "meters": return $from_value * 39.370079; break;
    case "kilometers": return $from_value * 39370.0787; break;
  }
}

function convert_centimeters($from_value, $from_unit) {
  switch($from_unit) {
    case "inches": return $from_value * 1; break; // 인치를 센티미터로 
    case "feet": return $from_value * 12; break; 
    case "yards": return $from_value * 36; break;
    case "miles": return $from_value * 63360; break;
    case "milimeters": return $from_value * 0.03937; break;
    case "centimeters": return $from_value * 0.393701; break;
    case "meters": return $from_value * 39.370079; break;
    case "kilometers": return $from_value * 39370.0787; break;
  }
}

function convert_meters($from_value, $from_unit) {
  switch($from_unit) {
    case "inches": return $from_value * 1; break; // 인치를 미터로 
    case "feet": return $from_value * 12; break; 
    case "yards": return $from_value * 36; break;
    case "miles": return $from_value * 63360; break;
    case "milimeters": return $from_value * 0.03937; break;
    case "centimeters": return $from_value * 0.393701; break;
    case "meters": return $from_value * 39.370079; break;
    case "kilometers": return $from_value * 39370.0787; break;
  }
}

function convert_kilometers($from_value, $from_unit) {
  switch($from_unit) {
    case "inches": return $from_value * 1; break; // 인치를 킬로미터로 
    case "feet": return $from_value * 12; break; 
    case "yards": return $from_value * 36; break;
    case "miles": return $from_value * 63360; break;
    case "milimeters": return $from_value * 0.03937; break;
    case "centimeters": return $from_value * 0.393701; break;
    case "meters": return $from_value * 39.370079; break;
    case "kilometers": return $from_value * 39370.0787; break;
  }
}
  if($_POST['submit']) {
    $from_value = '';
    $from_unit = '';
    $to_unit = '';
    $to_value = '';

    $from_value = $_POST['from_value'];
    $from_unit = $_POST['from_unit'];
    $to_unit = $_POST['to_unit'];
    
    switch($to_unit) {
      case "inches": $to_value = convert_inches($from_value, $from_unit); break; 
      case "feet": $to_value = convert_feet($from_value, $from_unit); break; 
      case "yards": $to_value = convert_yards($from_value, $from_unit); break; 
      case "miles": $to_value = convert_miles($from_value, $from_unit); break; 
      case "milimeters": $to_value = convert_milimeters($from_value, $from_unit); break; 
      case "centimeters": $to_value = convert_centimeters($from_value, $from_unit); break; 
      case "meters": $to_value = convert_metimeters($from_value, $from_unit); break; 
      case "kilometers": $to_value = convert_kilometers($from_value, $from_unit); break; 
    }
    


  }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Convert Length</title>
    <link href="styles.css" rel="stylesheet" type="text/css">
  </head>
  <body>

    <div id="main-content">

      <h1>길이변환</h1>
  
      <form action="" method="post">
        
        <div class="entry">
          <label>From:</label>&nbsp;
          <input type="text" name="from_value" value="<?=$from_value; ?>" />&nbsp;
          <select name="from_unit">
            <option value="inches" <?php if($from_unit == 'inches') {echo "selected";} ?>>인치</option>
            <option value="feet" <?php if($from_unit == 'feet') {echo "selected";} ?>>피트</option>
            <option value="yards" <?php if($from_unit == 'yards') {echo "selected";} ?>>야드</option>
            <option value="miles" <?php if($from_unit == 'miles') {echo "selected";} ?>>마일</option>
            <option value="milimeters" <?php if($from_unit == 'milimeters') {echo "selected";} ?>>밀리미터</option>
            <option value="centimeters" <?php if($from_unit == 'centimeters') {echo "selected";} ?>>센티미터</option>
            <option value="meters" <?php if($from_unit == 'meters') {echo "selected";} ?>>미터</option>
            <option value="kilometers" <?php if($from_unit == 'kilometers') {echo "selected";} ?>>킬로미터</option>
          </select>
        </div>
        
        <div class="entry">
          <label>To:</label>&nbsp;
          <input type="text" name="to_value" value="<?php echo $to_value; ?>" />&nbsp;
          <select name="to_unit">
          <option value="inches" <?php if($to_unit == 'inches') {echo "selected";} ?>>인치</option>
            <option value="feet" <?php if($to_unit == 'feet') {echo "selected";} ?>>피트</option>
            <option value="yards" <?php if($to_unit == 'yards') {echo "selected";} ?>>야드</option>
            <option value="miles" <?php if($to_unit == 'miles') {echo "selected";} ?>>마일</option>
            <option value="milimeters" <?php if($to_unit == 'milimeters') {echo "selected";} ?>>밀리미터</option>
            <option value="centimeters" <?php if($to_unit == 'centimeters') {echo "selected";} ?>>센티미터</option>
            <option value="meters" <?php if($to_unit == 'meters') {echo "selected";} ?>>미터</option>
            <option value="kilometers" <?php if($to_unit == 'kilometers') {echo "selected";} ?>>킬로미터</option>
          </select>
          
        </div>
        
        <input type="submit" name="submit" value="변환하기" />
      </form>
  
      <br />
      <a href="index.php">Return to menu</a>      
    </div>
  </body>
</html>
