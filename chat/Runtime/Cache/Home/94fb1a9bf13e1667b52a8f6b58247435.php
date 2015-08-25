<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>登陆</title>
	
</head>
<body>
	<div name="login" id="login">
		<form action="<?php echo (VIEW); ?>/Login/doLogin" method="post">
			<table border=0>
				<tr>
					<td align='right'>用户名：</td>
					<td><input type='text' name='username'></td>
				</tr>
				<tr>
					<td align='right'>密&nbsp;码：</td>
					<td><input type='password' name='password'></td>
				</tr>
				<tr>
					<td colspan=2 align='right' class="log"><input type='submit' value='登录'></td>
					<td colspan=2 align='right' class="log"><a id="regi" href="<?php echo (VIEW); ?>/Login/register">注册</a></td>
				</tr>
			</table>
		</form>
	</div>
</body>
</html>