<?php
  $var = '張';
    if( preg_match("/^([\x{4e00}-\x{9fa5}a-zA-Z0-9-]+)$/u",$var) ){echo 1;}else{echo 2;};
  // if( preg_match("/^([0-9A-Za-z]+)$/",$var) ){echo 1;}else{echo 2;};
    // $address='和平東路一段183巷3弄4號4樓之4';
    $address='183巷3弄4號4樓之4';
    $address = str_replace("之", "-", $address);

    preg_match_all("/([0123456789-]+[巷弄號樓層及至、])/u", $address, $Match, PREG_SET_ORDER); //[段巷弄號樓層及至、]

    //print_r($Match): Array ( [0] => Array ( [0] => 183巷 [1] => 183 ) [1] => Array ( [0] => 3弄 [1] => 3 ) [2] => Array ( [0] => 4號 [1] => 4 ) [3] => Array ( [0] => 4樓 [1] => 4 ) )

    if(is_array($Match) && !empty($Match))
    {
      $address_ = explode($Match[0][0], $address);

      $Data = array();
      $Data['road'] = $address_[0]; //和平東路一段

      $Data['lane'] = '';
      $Data['none'] = '';
      $Data['numb'] = '';
      $Data['floor'] = '';
      $Data['subn'] = '';
      foreach($Match as $ro)
      {
        if(strpos($ro[0], "巷") !== false)
        {
          $Data['lane'] = str_replace("巷", "", $ro[1]);
        }
        if(strpos($ro[0], "弄") !== false)
        {
          $Data['none'] = str_replace("弄", "", $ro[1]);
        }
        if(strpos($ro[0], "號") !== false)
        {
          $Data['numb'] = str_replace("號", "", $ro[1]);
        }
        if(strpos($ro[0], "樓") !== false)
        {
          $Data['floor'] = str_replace("樓", "", $ro[1]);
        }
      }
    }
    // $arr = array('Hello','World!','I','love','Shanghai!');
    $arr = explode(',','5,7');

   
    echo implode(" ",$arr);
?>

