<?php

#توباك
#@amrakl
#@BBI4BB
ob_start();
$token = "[*[TOKEN]*]";
$admin = file_get_contents("admin.txt");
$sudo = $admin;
define("API_KEY",$token);
echo file_get_contents("https://api.telegram.org/bot" . API_KEY . "/setwebhook?url=" . $_SERVER['SERVER_NAME'] . "" . $_SERVER['SCRIPT_NAME']);
function bot($method,$datas=[]){
$amrakl = http_build_query($datas);
$url = "https://api.telegram.org/bot".API_KEY."/".$method."?$amrakl";
$amrakl = file_get_contents($url);
return json_decode($amrakl);
}
$update = json_decode(file_get_contents("php://input"));
file_put_contents("update.txt",json_encode($update));
$message = $update->message;
$text = $message->text;
$chat_id = $message->chat->id;
$from_id = $message->from->id;$type = $message->chat->type;
$message_id = $message->message_id;
$name = $message->from->first_name.' '.$message->from->last_name;
$user = strtolower($message->from->username);
$t =$message->chat->title; 
if(isset($update->callback_query)){
$up = $update->callback_query;
$chat_id = $up->message->chat->id;
$from_id = $up->from->id;
$user = strtolower($up->from->username); 
$name = $up->from->first_name.' '.$up->from->last_name;
$message_id = $up->message->message_id;
$mes_id = $update->callback_query->inline_message_id; 
$data = $up->data;
}
if(isset($update->inline_query)){
$chat_id = $update->inline_query->chat->id;
$from_id = $update->inline_query->from->id;
$name = $update->inline_query->from->first_name.' '.$update->inline_query->from->last_name;
$text_inline = $update->inline_query->query;
$mes_id = $update->inline_query->inline_message_id; 
$user = strtolower($update->inline_query->from->username); 
}
$caption = $update->message->caption;
function getChatstats($chat_id,$token) {
  $url = 'https://api.telegram.org/bot'.$token.'/getChatAdministrators?chat_id='.$chat_id;
  $result = file_get_contents($url);
  $result = json_decode ($result);
  $result = $result->ok;
  return $result;
}
 function getmember($token,$idchannel,$from_id) {
  $join = file_get_contents("https://api.telegram.org/bot".$token."/getChatMember?chat_id=$idchannel&user_id=".$from_id);
if((strpos($join,'"status":"left"') or strpos($join,'"Bad Request: USER_ID_INVALID"') or strpos($join,'"Bad Request: user not found"') or strpos($join,'"ok": false') or strpos($join,'"status":"kicked"')) !== false){
$wataw="no";}else{$wataw="yes";}
return $wataw;
}
@mkdir("sudo");
@mkdir("data");
@mkdir("amr");
@mkdir("akl");
@mkdir("edid");
@mkdir("edid/amr");
$filename = "baageel.txt";
if(!file_exists($filename)) {
    $file = fopen($filename, 'w');
    fwrite($file, "✅");
    fclose($file);
}
$filename = "admin.txt";
if(!file_exists($filename)) {
    $file = fopen($filename, 'w');
    fwrite($file, "$sudo");
    fclose($file);
}
$filename = "edid/opan.txt";
if(!file_exists($filename)) {
    $file = fopen($filename, 'w');
    fwrite($file, "✅");
    fclose($file);
}
$filename = "edid/zerasase.txt";
if(!file_exists($filename)) {
    $file = fopen($filename, 'w');
    fwrite($file, "✅");
    fclose($file);
}
$filename = "edid/zerasaseon.txt";
if(!file_exists($filename)) {
    $file = fopen($filename, 'w');
    fwrite($file, "✅");
    fclose($file);
}
$filename = "edid/tmwel.txt";
if(!file_exists($filename)) {
    $file = fopen($filename, 'w');
    fwrite($file, "✅");
    fclose($file);
}
$filename = "edid/coadd.txt";
if(!file_exists($filename)) {
    $file = fopen($filename, 'w');
    fwrite($file, "✅");
    fclose($file);
}
$filename = "edid/add_day.txt";
if(!file_exists($filename)) {
    $file = fopen($filename, 'w');
    fwrite($file, "✅");
    fclose($file);
}
$filename = "edid/mr_insta.txt";
if(!file_exists($filename)) {
    $file = fopen($filename, 'w');
    fwrite($file, "❌");
    fclose($file);
}
$filename = "edid/mr_tektok.txt";
if(!file_exists($filename)) {
    $file = fopen($filename, 'w');
    fwrite($file, "❌");
    fclose($file);
}
$filename = "edid/mr_telegram.txt";
if(!file_exists($filename)) {
    $file = fopen($filename, 'w');
    fwrite($file, "❌");
    fclose($file);
}
$filename = "edid/mr_yoteop.txt";
if(!file_exists($filename)) {
    $file = fopen($filename, 'w');
    fwrite($file, "❌");
    fclose($file);
}
$filename = "edid/mr_faesbook.txt";
if(!file_exists($filename)) {
    $file = fopen($filename, 'w');
    fwrite($file, "❌");
    fclose($file);
}
$filename = "edid/mr_twetr.txt";
if(!file_exists($filename)) {
    $file = fopen($filename, 'w');
    fwrite($file, "❌");
    fclose($file);
}
$filename = "edid/mr_free.txt";
if(!file_exists($filename)) {
    $file = fopen($filename, 'w');
    fwrite($file, "❌");
    fclose($file);
}
$filename = "akl/orders.txt";
if(!file_exists($filename)) {
    $file = fopen($filename, 'w');
    fwrite($file, "");
    fclose($file);
}
$admin = file_get_contents("admin.txt");
$anb =$admin;
$blp = $admin;
$tokensan3 = '[*[TOKENSAN3]*]';
$usernamebot= bot("getme")->result->username;
$no3mak=$infobot['6'];
$member = explode("\n",file_get_contents("sudo/member.txt"));
$cunte = count($member)-1;
$ban = explode("\n",file_get_contents("sudo/ban.txt"));
$countban = count($ban)-1;
@$watawjson = json_decode(file_get_contents("../wataw.json"),true);
$st_ch_bots=$watawjson["info"]["st_ch_bots"];
$id_ch_sudo1=$watawjson["info"]["id_channel"];
$link_ch_sudo1=$watawjson["info"]["link_channel"];
$id_ch_sudo2=$watawjson["info"]["id_channel2"];
$link_ch_sudo2=$watawjson["info"]["link_channel2"];
$user_bot_sudo=$watawjson["info"]["user_bot"];
@$projson = json_decode(file_get_contents("pro.json"),true);
$pro=$projson["info"]["pro"];
$dateon=$projson["info"]["dateon"];
$dateoff=$projson["info"]["dateoff"];
$time=time()+(3600 * 1);
if($message  and $st_ch_bots=="✅" and $pro!="yes"){
$stuts = getmember($tokensan3,$id_ch_sudo1,$from_id);
if($stuts=="no"){
bot('sendMessage',[
'chat_id'=>$chat_id,
'reply_to_message_id'=>$message_id,
'text'=>"
⁦⁉️⁩ عذرا عزيزي
🌟يجب الاشتراك في قناة البوت اولا 
⁦🎗️⁩ثم اضغط /start ⁦🛎️⁩",
'disable_web_page_preview'=>true,
'parse_mode'=>"markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>" اضغط للاشتراك في القناة ", 'url'=>"https://t.me/amrakl"]],
]
])
]);return false;}
$stuts = getmember($tokensan3,$id_ch_sudo2,$from_id);
if($stuts=="no"){
bot('sendMessage',[
'chat_id'=>$chat_id,
'reply_to_message_id'=>$message_id,
'text'=>"
⁦⁉️⁩ عذرا عزيزي
🌟يجب الاشتراك في قناة البوت اولا 
⁦🎗️⁩ثم اضغط /start ⁦🛎️⁩",
'disable_web_page_preview'=>true,
'parse_mode'=>"markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>" اضغط للاشتراك في القناة ", 'url'=>"https://t.me/$link_ch_sudo2"]],
]
])
]);
return false;}}
if($message  and in_array($from_id,$ban)){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"❌ لا تستطيع استخدام البوت انت محظور ❌
",
]);return false;}
@$infosudo = json_decode(file_get_contents("sudo.json"),true);
if(!file_exists("sudo.json")) {
#	$put = [];
$infosudo["info"]["admins"][]="$admin";
$infosudo["info"]["st_grop"]="ممنوع";
$infosudo["info"]["st_channel"]="مسموح";
$infosudo["info"]["fwrmember"]="❎";
$infosudo["info"]["tnbih"]="✅";
$infosudo["info"]["silk"]="✅";
$infosudo["info"]["allch"]="✅";
$update = json_decode(file_get_contents("php://input"));
file_put_contents("update.txt",json_encode($update));
$message = $update->message;
$chat_id = $message->chat->id;
@$cuser = json_decode(file_get_contents("data/$from_id.json"),true);
$infosudo["info"]["klish_sil"]="⁦⁉️⁩ عذرا عزيزي
🌟يجب الاشتراك في قناة البوت اولا 
⁦🎗️⁩ثم اضغط /start ⁦🛎️⁩ ";
file_put_contents("sudo.json", json_encode($infosudo));
}
$fwrmember=$infosudo["info"]["fwrmember"];
$tnbih=$infosudo["info"]["tnbih"];
$silk=$infosudo["info"]["silk"];
$allch=$infosudo["info"]["allch"];
$start=$infosudo["info"]["start"];
$klish_sil=$infosudo["info"]["klish_sil"];
$sudo=$infosudo["info"]["admins"];
if($message){
$false="";
if($allch!="✅"){
$infosudo = json_decode(file_get_contents("sudo.json"),true);
$orothe= $infosudo["info"]["channel"];
$keyboard["inline_keyboard"]=[];
foreach($orothe as $co=>$s ){
$namechannel= $s["name"];
$st= $s["st"];
$userchannel=str_replace('@','', $s["user"]);
if($namechannel!=null){
$stuts = getmember($token,$co,$from_id);
if($stuts=="no"){
if($st=="عامة"){
$url="t.me/$userchannel";
$tt=$s["user"];
}else{
$url =$s["user"];
$tt=$s["user"];
}
if($silk=="✅"){
	$keyboard["inline_keyboard"][] = [['text'=>$namechannel,'url'=>$url]];
}else{
$txt=$txt."\n".$tt;
}
$false="yes";
}}}
$reply_markup=json_encode($keyboard);
if($false=="yes"){
	bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"$klish_sil
$txt",
'disable_web_page_preview'=>true,
"message_id"=>$message_id,
'reply_markup'=>$reply_markup,
]);
return $false;}
}else{
$infosudo = json_decode(file_get_contents("sudo.json"),true);
$orothe= $infosudo["info"]["channel"];
foreach($orothe as $co=>$s ){
$keyboard["inline_keyboard"]=[];
$namechannel= $s["name"];
$st= $s["st"];
$userchannel=str_replace('@','', $s["user"]);
if($namechannel!=null){
$stuts = getmember($token,$co,$from_id);
if($stuts=="no"){
if($st=="عامة"){
$url="t.me/$userchannel";
$tt=$s["user"];
}else{
$url =$s["user"];
$tt=$s["user"];
}
if($silk=="✅"){
	$keyboard["inline_keyboard"][] = [['text'=>$namechannel,'url'=>$url]];
}
#$reply_markup=json_encode($keyboard);
$j = file_get_contents('edid/IDadd.txt');
$arr = explode("\n", $j);
if(in_array($chat_id, $arr)){
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"$klish_sil
$tt",
'disable_web_page_preview'=>true,
"message_id"=>$message_id,
'reply_markup'=>json_encode($keyboard),
]);return $false;
}else{
$start2 = str_replace("/start ","",$text);
file_put_contents("edid/amr/$chat_id.txt","$start2");
file_put_contents("edid/IDadd.txt","$chat_id\n",FILE_APPEND);
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"$klish_sil
$tt",
'disable_web_page_preview'=>true,
"message_id"=>$message_id,
'reply_markup'=>json_encode($keyboard),
]);return $false;}}}}}}

 include("mak50.php");