<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <title>iLIFE Email</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body style="margin: 0; padding: 0;">
 <table align="center" border="0" cellpadding="0" cellspacing="0" width="600">
  <tr>
   <td align="center" bgcolor="#dbdbf4" style="padding: 40px 0 30px 0;">
 <img src="" alt="logo" width="233" height="50" style="display: block;" />
</td>
 </tr>
 <tr>
  <td bgcolor="#ffffff" style="padding: 40px 30px 40px 30px;">
   <p>Hi {{$fname}},</p>
     Thanks for joining us. Kindly Click on the link below to activate your account.<br>
      {!! HTML::linkroute('activate/{code}', 'Click here to activate Your Account',array($code), array('class'=> 'btn')) !!}
     
     <br>         <br>
      Thanks
</td>
 </tr>
 <tr>
 <td bgcolor="#333" style="padding: 30px 30px 30px 30px;">
<table border="0" cellpadding="0" cellspacing="0" width="100%">
 <tr>
   <td width="75%"  color="#808080">
 &reg; iLIFE sln,  2015<br/>
</td>
  <td>
  <td align="right">
 <table border="0" cellpadding="0" cellspacing="0">
  <tr>
   <td>
    <a href="https://www.twitter.com/votre">
     <img src="" width="40" height="40" alt="">
    </a>
   </td>
   <td style="font-size: 0; line-height: 0;" width="20">&nbsp;</td>
   <td>
    <a href="">
        <img src="" width="40" height="40" alt=""></a>
    </a>
   </td>
  </tr>
 </table>
</td>
  </td>
 </tr>
</table>
</td>
 </tr>
 </table>
</body>
</html>