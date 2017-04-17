<?
function addressToLatLng($address)
{
  if($address != '')
  {
      // 查詢地址經緯度
      $url  ='http://maps.googleapis.com/maps/api/geocode/json?address='.$address;
      $url .='&sensor=true';
      $url .='&language=zh-TW';

      $header[] = "Accept: application/json";
      $header[] = "Accept-Encoding: gzip";
      $ch = curl_init();
      curl_setopt($ch, CURLOPT_HTTPHEADER, $header );
      curl_setopt($ch,CURLOPT_ENCODING , "gzip");
      curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
      curl_setopt($ch, CURLOPT_URL, $url );
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true );
      $geocode = json_decode(curl_exec($ch));

      if($geocode->status=='OK')
      {

        //echo 'geocode';
        foreach ($geocode->results as $item)
        {
          $lat = preg_replace('/\s/', '', $item->geometry->location->lat);
          $lng = preg_replace('/\s/', '', $item->geometry->location->lng);
        }
        $Data = array();
        $Data['latitude'] = $lat;
        $Data['longitude'] = $lng;
        $Data['updated_at'] = date("Y-m-d H:i:s");

        return $Data;
      }
      else
      {
        return false;
      }
  }
  else
  {
    return false;
  }
}

$address = '新北市中和區中山路二段99號';
$result = addressToLatLng($address);
echo '<meta http-equiv="Content-type" content="text/html; charset=utf-8" /><pre>';
var_dump ($result);
exit ();
?>