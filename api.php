<?php
function getNumber($file_path) {
  if(file_exists($file_path)) {
  $array = nl2br(htmlspecialchars(file_get_contents($file_path)));
  $insertDBData = $array + 1;
  $file_handle = fopen($file_path, 'w');
  fwrite($file_handle, $insertDBData);
  fclose($file_handle);
  return $insertDBData;
} else {
  return("File does not exist. Please, check spelling/capitalization. If this problem persists, visit the forums or contact a developer.");
}
};


function takePic(){
  $file_path = 'picCheck.txt';
  $imageName = 'RaspPi';
  if ($imageName === '') {
    $imageName = '';
  } else {
    $imageName = $imageName;
  }

  $imageNum = getNumber('numCheck.txt');
  $imageTime = date("Y/m/H:i:s");
  $imageFullName = $imageName . $imageTime . 'num' . $imageNum . '.jpg';

  if(file_exists($file_path)) {
    $picArray = nl2br(htmlspecialchars(file_get_contents($file_path)));
    $newPic = $imageFullName . '';
    $imageFile = file_put_contents($file_path, $newPic.PHP_EOL , FILE_APPEND | LOCK_EX);
    return $newPic;
  } else {
    return("File does not exist. Please, check spelling/capitalization. If this problem persists, visit the forums or contact a developer.");
  }


};


?>
