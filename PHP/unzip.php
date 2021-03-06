<?php
/**
 * The Jembut
 * do not have shell access. E.g. if you want to upload a lot of files
 * The Jembut
 *
 *
 * @author  Malaikat Galau
 * @license GNU GPL v3
 * @package attec.toolbox
 * @version 0.0.2 Alpha
 */
$timestart = microtime(TRUE);
$arc = new Unzipper;
$timeend = microtime(TRUE);
$time = $timeend - $timestart;
class Unzipper {
  public $localdir = '.';
  public $zipfiles = array();
  public static $status = '';
  public function __construct() {
    //read directory and pick .zip and .gz files
    if ($dh = opendir($this->localdir)) {
      while (($file = readdir($dh)) !== FALSE) {
        if (pathinfo($file, PATHINFO_EXTENSION) === 'zip'
          || pathinfo($file, PATHINFO_EXTENSION) === 'gz'
        ) {
          $this->zipfiles[] = $file;
        }
      }
      closedir($dh);
      if(!empty($this->zipfiles)) {
        self::$status = '.zip or .gz files found, ready for extraction';
      }
      else {
        self::$status = '<span style="color:red; font-weight:bold;font-size:120%;">Error: No .zip or .gz files found.</span>';
      }
    }
    //check if an archive was selected for unzipping
    //check if archive has been selected
    $input = '';
    $input = strip_tags($_POST['zipfile']);
    //allow only local existing archives to extract
    if ($input !== '') {
      if (in_array($input, $this->zipfiles)) {
        self::extract($input, $this->localdir);
      }
    }
  }
  public static function extract($archive, $destination) {
    $ext = pathinfo($archive, PATHINFO_EXTENSION);
    if ($ext === 'zip') {
      self::extractZipArchive($archive, $destination);
    }
    else {
      if ($ext === 'gz') {
        self::extractGzipFile($archive, $destination);
      }
    }
  }
  /**
   * Decompress/extract a zip archive using ZipArchive.
   *
   * @param $archive
   * @param $destination
   */
  public static function extractZipArchive($archive, $destination) {
    // Check if webserver supports unzipping.
    if(!class_exists('ZipArchive')) {
      self::$status = '<span style="color:red; font-weight:bold;font-size:120%;">Error: Your PHP version does not support unzip functionality.</span>';
      return;
    }
    $zip = new ZipArchive;
    // Check if archive is readable.
    if ($zip->open($archive) === TRUE) {
      // Check if destination is writable
      if(is_writeable($destination . '/')) {
        $zip->extractTo($destination);
        $zip->close();
        self::$status = '<span style="color:green; font-weight:bold;font-size:120%;">Files unzipped successfully</span>';
      }
      else {
        self::$status = '<span style="color:red; font-weight:bold;font-size:120%;">Error: Directory not writeable by webserver.</span>';
      }
    }
    else {
      self::$status = '<span style="color:red; font-weight:bold;font-size:120%;">Error: Cannot read .zip archive.</span>';
    }
  }
  /**
   * Decompress a .gz File.
   *
   * @param $archive
   * @param $destination
   */
  public static function extractGzipFile($archive, $destination) {
    // Check if zlib is enabled
    if(!function_exists('gzopen')) {
      self::$status = '<span style="color:red; font-weight:bold;font-size:120%;">Error: Your PHP has no zlib support enabled.</span>';
      return;
    }
    $filename = pathinfo($archive, PATHINFO_FILENAME);
    $gzipped = gzopen($archive, "rb");
    $file = fopen($filename, "w");
    while ($string = gzread($gzipped, 4096)) {
      fwrite($file, $string, strlen($string));
    }
    gzclose($gzipped);
    fclose($file);
    // Check if file was extracted.
    if(file_exists($destination . '/' . $filename)) {
      self::$status = '<span style="color:green; font-weight:bold;font-size:120%;">File unzipped successfully.</span>';
    }
    else {
      self::$status = '<span style="color:red; font-weight:bold;font-size:120%;">Error unzipping file.</span>';
    }
  }
}
?>

<!DOCTYPE html>
<head>
  <title>Jancok</title>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <style type="text/css">
    <!--
    body {
      font-family: Arial, serif;
      line-height: 150%;
    }
    fieldset {
      border: 0px solid #000;
    }
    .select {
      padding: 5px;
      font-size: 110%;
    }
    .status {
      margin-top: 20px;
      padding: 5px;
      font-size: 80%;
      background: #EEE;
      border: 1px dotted #DDD;
    }
    .submit {
      -moz-box-shadow: inset 0px 1px 0px 0px #bbdaf7;
      -webkit-box-shadow: inset 0px 1px 0px 0px #bbdaf7;
      box-shadow: inset 0px 1px 0px 0px #bbdaf7;
      background: -webkit-gradient(linear, left top, left bottom, color-stop(0.05, #79bbff), color-stop(1, #378de5));
      background: -moz-linear-gradient(center top, #79bbff 5%, #378de5 100%);
      filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#79bbff', endColorstr='#378de5');
      background-color: #79bbff;
      -moz-border-radius: 4px;
      -webkit-border-radius: 4px;
      border-radius: 4px;
      border: 1px solid #84bbf3;
      display: inline-block;
      color: #ffffff;
      font-family: arial;
      font-size: 15px;
      font-weight: bold;
      padding: 10px 24px;
      text-decoration: none;
      text-shadow: 1px 1px 0px #528ecc;
    }
    .submit:hover {
      background: -webkit-gradient(linear, left top, left bottom, color-stop(0.05, #378de5), color-stop(1, #79bbff));
      background: -moz-linear-gradient(center top, #378de5 5%, #79bbff 100%);
      filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#378de5', endColorstr='#79bbff');
      background-color: #378de5;
    }
    .submit:active {
      position: relative;
      top: 1px;
    }
    /* This imageless css button was generated by CSSButtonGenerator.com */
    -->
  </style>
</head>

<body>
</script>

<br>
<br>


<div align="center"><table border="0" width="70%"><tr><td>



<h1><font face="Bradley Hand ITC"><center><SCRIPT>



farbbibliothek = new Array(); 



farbbibliothek[0] = new Array("#FF0000","#FF1100","#FF2200","#FF3300","#FF4400","#FF5500","#FF6600","#FF7700","#FF8800","#FF9900","#FFaa00","#FFbb00","#FFcc00","#FFdd00","#FFee00","#FFff00","#FFee00","#FFdd00","#FFcc00","#FFbb00","#FFaa00","#FF9900","#FF8800","#FF7700","#FF6600","#FF5500","#FF4400","#FF3300","#FF2200","#FF1100"); 



farbbibliothek[1] = new Array("#FF0000","#FFFFFF","#FFFFFF","#FF0000"); 



farbbibliothek[2] = new Array("#FFFFFF","#FF0000","#FFFFFF","#FFFFFF","#FFFFFF","#FFFFFF","#FFFFFF","#FFFFFF","#FFFFFF","#FFFFFF","#FFFFFF","#FFFFFF","#FFFFFF","#FFFFFF","#FFFFFF","#FFFFFF","#FFFFFF","#FFFFFF","#FFFFFF","#FFFFFF","#FFFFFF","#FFFFFF","#FFFFFF","#FFFFFF","#FFFFFF","#FFFFFF","#FFFFFF","#FFFFFF","#FFFFFF","#FFFFFF","#FFFFFF","#FFFFFF","#FFFFFF","#FFFFFF","#FFFFFF","#FFFFFF"); 



farbbibliothek[3] = new Array("#FF0000","#FF4000","#FF8000","#FFC000","#FFFF00","#C0FF00","#80FF00","#40FF00","#00FF00","#00FF40","#00FF80","#00FFC0","#00FFFF","#00C0FF","#0080FF","#0040FF","#0000FF","#4000FF","#8000FF","#C000FF","#FF00FF","#FF00C0","#FF0080","#FF0040"); 



farbbibliothek[4] = new Array("#FF0000","#EE0000","#DD0000","#CC0000","#BB0000","#AA0000","#990000","#880000","#770000","#660000","#550000","#440000","#330000","#220000","#110000","#000000","#110000","#220000","#330000","#440000","#550000","#660000","#770000","#880000","#990000","#AA0000","#BB0000","#CC0000","#DD0000","#EE0000"); 


farbbibliothek[5] = new Array("#FF0000","#FF0000","#FF0000","#FFFFFF","#FFFFFF","#FFFFFF"); 


farbbibliothek[6] = new Array("#FF0000","#FDF5E6"); 



farben = farbbibliothek[4];



function farbschrift() 



{ 



for(var i=0 ; i<Buchstabe.length; i++) 



{ 



document.all["a"+i].style.color=farben[i]; 



} 



farbverlauf(); 



} 



function string2array(text) 



{ 



Buchstabe = new Array(); 



while(farben.length<text.length) 



{ 



farben = farben.concat(farben); 



} 



k=0; 



while(k<=text.length) 



{ 



Buchstabe[k] = text.charAt(k); 



k++; 



} 



} 



function divserzeugen() 



{ 



for(var i=0 ; i<Buchstabe.length; i++) 



{ 



document.write("<span id='a"+i+"' class='a"+i+"'>"+Buchstabe[i] + "</span>"); 



} 



farbschrift(); 



} 



var a=1; 



function farbverlauf() 



{ 



for(var i=0 ; i<farben.length; i++) 



{ 



farben[i-1]=farben[i]; 



} 



farben[farben.length-1]=farben[-1]; 







setTimeout("farbschrift()",30); 



} 



// 



var farbsatz=1; 



function farbtauscher() 



{ 



farben = farbbibliothek[farbsatz]; 



while(farben.length<text.length) 



{ 



farben = farben.concat(farben); 



} 



farbsatz=Math.floor(Math.random()*(farbbibliothek.length-0.0001)); 



} 



setInterval("farbtauscher()",9000); 



text ="INDONESIA GALAUERS ";//h 



string2array(text);



divserzeugen(); 



//document.write(text); 




</SCRIPT>

<p>Malaikat Galau defacer tersakiti</p>

<form action="" method="POST">
  <fieldset>

    <select name="zipfile" size="1" class="select">
      <?php foreach ($arc->zipfiles as $zip) {
        echo "<option>$zip</option>";
      }
      ?>
    </select>

    <br/>

    <input type="submit" name="submit" class="submit" value="Unzip Archive"/>

  </fieldset>
</form>
<p class="status">
  Status: <?php echo $arc::$status; ?>
  <br/>
  Processingtime: <?php echo $time; ?> ms
</p>
</body>
</html>