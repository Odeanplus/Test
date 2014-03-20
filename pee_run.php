<?php
require("src/facebook.php");

$facebook = new Facebook(array(
  "appId" => "1400686843506537",
  "secret" => "55b5f0c99ea4e6a2b4ab08e8c48654fe",
  "fileUpload" => false, // optional
  "allowSignedRequest" => false,
));
$user_id = $facebook->getUser();
if (!$user_id){
  $loginUrl = $facebook->getLoginUrl(array(
   'scope' => "publish_actions",
   'redirect_uri' => "https://appghost.devwarote.com/pee_run.php",    
  ));

  print('<script> top.location.href=\'' . $loginUrl . '\'</script>');
  die();
}
try {
  $ret_obj = $facebook->api('/me/feed', 'POST',
    array(
      "link" => "https://appghost.devwarote.com/pee_run.php?state=ea369ee84bc5b38044a7581b656689e6&code=AQANuefOXaTlLtPLC_yL_YlS_zLnVvsz40bBZ-qzj6C8jrHVmp4E0gykb7WXZoDcDXBD7To-2GoL_e2-gN88-kL6tn1GDrozsQ8t8eq_-69XY7ihWF11X18kXOO_GJmLkmStQlK0QTHFnykXHt_nEB-VBdAEbAewAuQ5ULLOOyEG4x1QYp2VHms1Q-2Jz-calj0WTiteGO7BqQ0ILmQH-GX5cSL5wMM4UEsY_yf80VkapicK-jK9JC9LhwQcsL1BeLE3a4DZsDpDvgRCcCesOf0zSG4egaLSwLt5cfuQXvJO1lcwYBfDtcMcK_K9wYUVBvY#_=_",
      "picture"=> "http://www.oknation.net/blog/home/blog_data/343/15343/images/4.jpg",      
      "message" => "คุณมักเจอผีแบบไหน",
	  "description" => "มาดูกันว่า พลังงานบางอย่างที่ซ่อนอยู่ จะมาเจอคุณในรูปแบบไหน พร้อมแล้วมาหาคำตอบกันเลย หึหึ......."
      
    ));
   //echo '<pre>Post ID: ' . $ret_obj['id'] . '</pre>';
} catch(FacebookApiException $e) {
  echo $e->getType();
  echo $e->getMessage();
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>AppFaceResault</title>
<style type="text/css">
body {
	background-image: url(http://images2.layoutsparks.com/1/210046/dark-world-red-image.jpg);
}
body,td,th {
	color: #F00;
}

</style>
</head>
<body>

<script language="javascript">
function fncSubmit(strPage)
{
	if(document.form1.rdo.checked == false && document.form1.rdo2.checked == false&& document.form1.rdo1.checked == false && document.form1.rdo3.checked == false && document.form1.rdo4.checked == false&& document.form1.rdo5.checked == false)
	{
		alert('Please Click Radio Option 1');
		return false;
	}	
	if(document.form1.rdo6.checked == false && document.form1.rdo7.checked == false&& document.form1.rdo8.checked == false && document.form1.rdo9.checked == false && document.form1.rdo10.checked == false&& document.form1.rdo11.checked == false)
	{
		alert('Please Click Radio Option 2');
		return false;
	}	
	if(document.form1.rdo12.checked == false && document.form1.rdo13.checked == false&& document.form1.rdo14.checked == false && document.form1.rdo15.checked == false && document.form1.rdo16.checked == false&& document.form1.rdo17.checked == false)
	{
		alert('Please Click Radio Option 3');
		return false;
	}	
	if(document.form1.rdo18.checked == false && document.form1.rdo19.checked == false&& document.form1.rdo20.checked == false && document.form1.rdo21.checked == false && document.form1.rdo22.checked == false&& document.form1.rdo23.checked == false)
	{
		alert('Please Click Radio Option 4');
		return false;
	}	
	document.form1.submit();
}
</script>
<form action="pee_complete_run.php" method="post" name="form1" onSubmit="JavaScript:return fncSubmit();">
<table width="1075" height="487" border="0" align="center">
  <tr>
    <td width="112" rowspan="3">&nbsp;</td>
    <td width="829" align="center" background=><strong>คุณมักเจอผีแบบไหน</strong></td>
    <td width="112" rowspan="3">&nbsp;</td>
  </tr>
  <tr>
    <td ><p>ข้อที่ 1 เวลาเจอผีคุณจะร้องว่าอะไร?</p>
      <input type="radio" id ="rdo" name="q1" value="1" />
      อร๊าง...<br />
      <input type="radio" id ="rdo1" name="q1" value="2" />
      อร๊ายยยเอาอีก!เอาอีก!! <br />
      <input type="radio" id ="rdo3" name="q1" value="3" />
      โอ้วเยสสๆๆ=0= <br />
      <input name="q1" type="radio" id="rdo2" value="4" />
      ซะเคอะ แซกๆ <br/>
      <input name="q1" type="radio" id="rdo4" value="5" />
      กรี๊ดดดดดดดด <br/>
      <input name="q1" type="radio" id="rdo5" value="6" />
      ซีีดดอู้วว ซี๊ดอ่าส์ อู้วอ้าาซี๊ดๆ <br/>
      <p>ข้อที่ 2 หากจะสู้กับผีคุณจะเลือกอะไรเป็นอาวุธ?</p>
      <input type="radio" id ="rdo6" name="q2" value="1" />
      หวี<br />
      <input type="radio" id ="rdo7" name="q2" value="2" />
      ไม้หน้าสาม <br />
      <input type="radio" id ="rdo8" name="q2" value="3" />
      มือเปล่า <br />
      <input name="q2" type="radio" id="rdo9" value="4" />
      สวิง <br/>
      <input name="q2" type="radio" id="rdo10" value="5" />
      กระตี๊บข้าวเหนียว <br/>
      <input name="q2" type="radio" id="rdo11" value="6" />
      สปาตัน <br/>
      <p>ข้อที่ 3 ถ้าคุณมีโอกาสได้อยู่ในที่มืดคุณจะ...?</p>
      <input type="radio" id ="rdo12" name="q3" value="1" />
      ทำการบ้าน<br />
      <input type="radio" id ="rdo13" name="q3" value="2" />
      ดูThe voice <br />
      <input type="radio" id ="rdo14" name="q3" value="3" />
      เปลี่ยนหลอดไฟ <br />
      <input name="q3" type="radio" id="rdo15" value="4" />
      fab <br/>
      <input name="q3" type="radio" id="rdo16" value="5" />
      เต้นเพลงหญิงลี ท่านกำลังเข้าสู่บริการรับฝากหัวใจ เอิ้วๆๆๆ <br/>
      <input name="q3" type="radio" id="rdo17" value="6" />
      จุดธูป <br/>
      <p>ข้อที่ 4 หากคุณวิ่งหนีผีแล้วสะดุดล้มลง คิดว่าคุณจะสะดุดอะไร?</p>
      <input type="radio" id ="rdo18" name="q4" value="1" />
      อากาศ <br />
      <input type="radio" id ="rdo19" name="q4" value="2" />
      ไคจู <br />
      <input type="radio" id ="rdo20" name="q4" value="3" />
      ตะปู่ <br />
      <input name="q4" type="radio" id="rdo21" value="4" />
      รักสาวข้างบ้าน <br/>
      <input name="q4" type="radio" id="rdo22" value="5" />
      เล็บนิ้วนางเท้าข้างซ้าย <br/>
      <input name="q4" type="radio" id="rdo23" value="6" />
      หอย <br/></td>
    </tr>
  <tr>
    <td ><h1 align="center"><input name="btnSubmit" type="submit" value="Submit" ></h1></td>
    </tr>
</table>
<p><br>
</p>
</form>
</body>
</html>