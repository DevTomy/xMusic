<?php
error_reporting(0);
//header('Content-Type: application/json');
//=============
$token = '662507811:AAEyelBtSXuaU8O79wqQaWH9ocAw4WuTL0o';
$check = json_decode(file_get_contents("https://api.telegram.org/bot".$token."/getChatMember?chat_id=@DinoTM&user_id=".$_GET['chatid']))->result->status;
//=============
$servername = "localhost";
$username = "vestor_api";
$password = "424057099mm";
$dbname = "vestor_api"; 
$connect = mysqli_connect($servername, $username, $password, $dbname);
//=============
//$connect->query("INSERT INTO user (requests,chatid,username,isjoined,other) VALUES ('0','$Chat','0','number','$StarterChat')");
//=============
if($_GET["action"]=="search"){

$Get = json_decode(file_get_contents("https://apin1mservice.com/pc/1.0/search.php?text=".urlencode($_GET['text'])),true);
$mr = $Get;
for($i=1;$i<count($mr);$i++){
if($Get[$i]['posttype'] =="music"){
    $array[$i]['id'] = $Get[$i]['postid'];
    $array[$i]['artist'] = urldecode($Get[$i]['artistfa']);
    $array[$i]['trackname'] = urldecode($Get[$i]['trackfa']);
    $array[$i]['cover'] = $Get[$i]['postimage'];
    $array[$i]['likes'] = $Get[$i]['likecount'];

}
}
if($array == null){
echo json_encode(['status'=>false,'result'=>null], 384);
}else{
echo json_encode(['status'=>true,'result'=>$array], 384);
}
}else{
}
//}
//====================
if($_GET["action"]=="new"){
$Get = json_decode(file_get_contents("https://apin1mservice.com/pc/1.0/npage.php?load_type=special&page_number=1"),true);
$mr = $Get;
//print_r($Get);
for($i=1;$i<count($mr);$i++){
    $array[$i]['id'] = $Get[$i]['postid'];
    $array[$i]['artist'] = urldecode($Get[$i]['artistfa']);
    $array[$i]['trackname'] = urldecode($Get[$i]['trackfa']);
    $array[$i]['cover'] = $Get[$i]['postimage'];
    $array[$i]['likes'] = $Get[$i]['likecount'];
}
if($array == null){
echo json_encode(['status'=>false,'result'=>null], 384);
}else{
echo json_encode(['status'=>true,'result'=>$array], 384);
}
}
//====================
if($_GET["action"]=="down"){
$Get = json_decode(file_get_contents("https://apin1mservice.com/pc/1.0/singlemusic.php?id=".urlencode($_GET['id'])."&counter_status=checked"),true);
$mr = $Get;
$downlink320 = $Get[0]['singleinfo'][0]['music320'];
$downlink128 = $Get[0]['singleinfo'][0]['music128'];
$photolink = $Get[0]['singleinfo'][0]['postimage'];
$nameartist = $Get[0]['singleinfo'][0]['artisten'];
$nametrack = $Get[0]['singleinfo'][0]['tracken'];
$postlikes = $Get[0]['singleinfo'][0]['likecount'];

$Set->artist=$nameartist;
$Set->trackname=$nametrack;
$Set->d320=$downlink320;
$Set->d128=$downlink128;
$Set->photo=$photolink;
$Set->likes=$postlikes;
echo json_encode($Set);
//echo $result;
}

//===================
if($_GET["action"]=="lyric"){
$Get = json_decode(file_get_contents("https://apin1mservice.com/pc/1.0/singlemusic.php?id=".urlencode($_GET['id'])."&counter_status=checked"),true);
$mr = $Get;
$lyric = $Get[0]['singleinfo'][0]['lyrics'];
$Set->status=true;
$Set->text=$lyric;
echo json_encode($Set);
}










if($_GET["action"]=="TopMonth"){
$urral = "https://apin1mservice.com/pc/1.0/index.php";
$ch = curl_init(); 
curl_setopt ($ch, CURLOPT_URL, $urral); 
curl_setopt ($ch, CURLOPT_SSL_VERIFYPEER, FALSE); 
curl_setopt ($ch, CURLOPT_USERAGENT, "Dalvik/2.1.0 (Linux; U; Android 6.0; HUAWEI CRR-UL00 Build/HUAWEICRR-UL00)"); 
curl_setopt ($ch, CURLOPT_TIMEOUT, 60);
curl_setopt ($ch, CURLOPT_FOLLOWLOCATION, 0); 
curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1); 
curl_setopt ($ch, CURLOPT_COOKIEJAR, $cookie); 
curl_setopt ($ch, CURLOPT_REFERER, $urral); 
$result = curl_exec ($ch); 
curl_close($ch);
//echo $result;
$Get = json_decode($result,true);
$mr = $Get;
//print_r($Get[10]);
for($i=1;$i<count($mr);$i++){
    $array[$i]['id'] = $Get[10]['topmonth'][$i]['postid'];
    $array[$i]['artist'] = urldecode($Get[10]['topmonth'][$i]['artistfa']);
    $array[$i]['trackname'] = urldecode($Get[10]['topmonth'][$i]['trackfa']);
    $array[$i]['cover'] = $Get[10]['topmonth'][$i]['postimage'];
    $array[$i]['likes'] = $Get[10]['topmonth'][$i]['likecount'];
}

if($array == null){
echo json_encode(['status'=>false,'result'=>null], 384);
}else{
echo json_encode(['status'=>true,'result'=>$array], 384);
}
}

//===================
if($_GET["action"]=="TopWeek"){
$urrsl = "https://apin1mservice.com/pc/1.0/index.php";
$ch = curl_init(); 
curl_setopt ($ch, CURLOPT_URL, $urrsl); 
curl_setopt ($ch, CURLOPT_SSL_VERIFYPEER, FALSE); 
curl_setopt ($ch, CURLOPT_USERAGENT, "Dalvik/2.1.0 (Linux; U; Android 6.0; HUAWEI CRR-UL00 Build/HUAWEICRR-UL00)"); 
curl_setopt ($ch, CURLOPT_TIMEOUT, 60);
curl_setopt ($ch, CURLOPT_FOLLOWLOCATION, 0); 
curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1); 
curl_setopt ($ch, CURLOPT_COOKIEJAR, $cookie); 
curl_setopt ($ch, CURLOPT_REFERER, $urrsl); 
$result = curl_exec ($ch); 
curl_close($ch);
//echo $result;
$Get = json_decode($result,true);
//print_r($Get[8]);
for($i=1;$i<count($Get[9]['topweek']);$i++){
 $array[$i]['id'] = $Get[9]['topweek'][$i]['postid'];
    $array[$i]['artist'] = urldecode($Get[9]['topweek'][$i]['artistfa']);
    $array[$i]['trackname'] = urldecode($Get[9]['topweek'][$i]['trackfa']);
    $array[$i]['cover'] = $Get[9]['topweek'][$i]['postimage'];
    $array[$i]['likes'] = $Get[9]['topweek'][$i]['likecount'];
}
if($array == null){
echo json_encode(['status'=>false,'result'=>null], 384);
}else{
echo json_encode(['status'=>true,'result'=>$array], 384);
}
}