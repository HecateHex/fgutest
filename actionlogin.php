<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="index.php" method="POST" accept-charset="utf-8">
		<input type=text size=10 name=account>帳號

       <input type=passwd size=10 name=password>密碼

       <input type=text size=10 name=phone_e>電話號碼

 

       <input type=radio name=meal value=葷食 checked>葷食

       <input type=radio name=meal value=素食 checked>素食

       <textarea name="content" cols="70" rows="10" ></textarea>    大人共 <select name=adult_num>

              <option value=1>1</option>

              <option value=2>2</option>

              </select> 人(不含自己)

       <input type=submit name=send value=報名-我要去玩>
	</form>
</body>
</html>