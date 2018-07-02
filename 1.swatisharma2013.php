
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>LIC Insurance</title>
<style type="text/css">
.header{
	width:100%;
	height:200px;

	background-color:#FFFF00;
	float:left;
	text-align:center;
	color:#09F;
		}
.footer{
	width:100%;
	height:200px;

	background-color:#FFFF00;
	float:left;
	text-align:center;
	color:#09F;
		}		
.menu{
	width:100%;
	height:50px;
	
	background-color:green;
	float:left;
	text-align:center;
	color: #FFF;
		}
 .centercontent{
	width:100%;
	height:250px;
	background-image:url(1.jpg);
	float:left;
	text-align:center;
	color: #FFF;
		}
.leftcontent{
	width:50%;
	height:250px;

	background-color: #999;
	float:left;
	text-align:center;
	color: #FFF;
		}

.rightcontent{
	width:50%;
	height:250px;

	background-color: #66C;
	float:left;
	text-align:center;
	color: #FFF;
		}	
.frontform{
	margin-top:10px;
}
</style>
<script language="javascript1.5">
function f1()
{
var pa=parseInt(document.getElementById('pa').value);
var duration=parseInt(document.getElementById('duration').value);
var total=(pa*duration);
document.getElementById('ta').value=total;
}
function f2()
	{	
var val=document.getElementById('uname').value;
var data=val.toUpperCase();	
document.getElementById('uname').value=data;	
	}
function f3()
	{	
if(isNaN(document.getElementById('contact').value))
		{
alert('Contact Number should be a numeric value only ');	

		}
//document.getElementById('uname').value=data;	
	}	
</script>
</head>
<body>
<div class="header">
Site's Header 
</div>
<div class="menu">
Site's Menu
</div>



<div class="centercontent">
</div>

<div class="leftcontent">
<form method="post" >

<div class="frontform">
<select name="course" id="pa" required="required">
<option value="">Select course</option>
<option value="100000">B.tech</option>
<option value="75000">BCA</option>
<option value="50000">Polytechnic</option>
</select></div>
<div class="frontform"><input type="number" name="duration" id="duration" placeholder="Duration" onblur="f1()"  /></div>
<div class="frontform"><input type="number" name="ta" id="ta" readonly="readonly" placeholder="Total Amount" /></div>


<div class="frontform"><input type="submit" name="duration"  /></div>
</form>
</div>


<div class="rightcontent">
<form method="POST">
<div class="frontform"><input type="text" name="uname" id="uname" placeholder="Your Name" required="required" onkeyup="f2()"  /></div>
<div class="frontform"><input type="email" name="uemail" placeholder="Your Email" required="required"  /></div>
<div class="frontform"><input type="text" name="contact" id="contact" placeholder="Your Contact" maxlength="10" onkeyup="f3()" required="required"  /></div>
<div class="frontform">Male: <input type="radio" name="gender" value="male" /> |
Fe-Male: <input type="radio" name="gender" value="female" /></div>
<div class="frontform"><textarea name="problem" required="required"> Query ? </textarea></div>
<div class="frontform">
<select name="city" required="required">
<option value="">Select City </option><option value="Delhi">Delhi</option><option value="Meerut">Meerut</option>
</select>
<input type="submit" name="submit"  />
</div>
</form>
</div>
<div class="footer">
</div>

</body>
</html>