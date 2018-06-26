<html>
<head>
<script language="javascript">
</script>
<style>
    
        *{margin: 0; padding: 0;}
        body{background-image:url(http://localhost/Hotel/terrace.jpg);background-size: 100% 100%;font-family: sans-serif;}
        .form-style-5{
    max-width: 500px;
    padding: 10px 20px;
    opacity :0.85;
    margin: 10px auto;
    padding: 20px;
   
    border-radius: 8px;
    font-family: Georgia, "Times New Roman", Times, serif;
}
.form-style-5 legend {
    font-size: 1.4em;
    margin-bottom: 10px;
}
.form-style-5 input[type="text"],
.form-style-5 input[type="date"],
.form-style-5 input[type="number"],
.form-style-5 select {
    font-family: Georgia, "Times New Roman", Times, serif;
    background: rgba(255,255,255,.1);
    border: none;
    border-radius: 4px;
    font-size: 16px;
    margin: 0;
    outline: 0;
    padding: 7px;
    width: 100%;
    box-sizing: border-box; 
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box; 
    background-color: #e8eeef;
    color:#8a97a0;
    -webkit-box-shadow: 0 1px 0 rgba(0,0,0,0.03) inset;
    box-shadow: 0 1px 0 rgba(0,0,0,0.03) inset;
    margin-bottom: 30px;
    
}
.form-style-5 .number {
    background: #1abc9c;
    color: #fff;
    height: 30px;
    width: 30px;
    display: inline-block;
    font-size: 0.8em;
    margin-right: 4px;
    line-height: 30px;
    text-align: center;
    text-shadow: 0 1px 0 rgba(255,255,255,0.2);
    border-radius: 15px 15px 15px 0px;
}

.form-style-5 input[type="text"]:focus,
.form-style-5 input[type="date"]:focus,
.form-style-5 select:focus{
    background: #d2d9dd;
}
.form-style-5 select{
    -webkit-appearance: menulist-button;
    height:35px;
}
.form-style-5 input[type="submit"],
.form-style-5 input[type="reset"],
.form-style-5 input[type="button"]
{
    position: relative;
    display: block;
    padding: 19px 39px 18px 39px;
    color: #FFF;
    margin: 0 auto;
    background: #1abc9c;
    font-size: 18px;
    text-align: center;
    font-style: normal;
    width: 100%;
    border: 1px solid #16a085;
    border-width: 1px 1px 3px;
    margin-bottom: 10px;
}
.form-style-5 input[type="submit"]:hover,
.form-style-5 input[type="reset"]:hover,
.form-style-5 input[type="button"]:hover
{
    background: #109177;
}
      
    
    </style>
</head>
<body background="C:\Users\Dell\Desktop\web\images\terrace.jpg">
<br>
<br>
<br>
<br>
<br>
<center>
<h1>ELITE HOTEL BOOKING</h1>
<div class = "form-style-5">
<form name="form1" method="post">

<BR><BR><BR>
<table>
<tr><td><legend>Check In</legend></td><td><input type="date" name="date1"> <br /></td>
<tr>
<tr>
<tr><td><legend>Check Out</legend></td><td><input type="date" name="date2"> <br /></td>
<tr>
<tr>
<tr><td><legend>Location</legend></td><td><input type="text" name="loc"> <br /></td>
<!--<tr>
<tr>
<tr><td><legend>Expected Price</legend></td><td><input type="number" name="price"> <br /></td>
<tr>
<tr>
<tr><td><legend>Email</legend></td><td><input type="text" name="email" placeholder="Enter email" id="t5"/><td><span id="loc5"></span></tr>
--><tr>
<tr>
<tr><td><legend>Rooms  </legend><td><select name="menu" id="id1" placeholder="select a type">
<option>Single</option>
<option>Double</option>
<option>Suite</option>
<tr>
<tr>
</select>
</tr>
</table>
<input type="submit" name="submit" value="Search Room"/>
<input type="reset" value="Reset"/>
</form>

<?php

if(isset($_POST['submit'])){
$connect = mysqli_connect('localhost', 'root', '','mydb'); 
mysqli_select_db ($connect,'mydb'); 
$loc=$_POST['loc'];
$type=$_POST['menu'];
$sql = "SELECT Name,Ratings,Contact,Address,StartingPrice,EndingPrice,Book FROM book WHERE Location='$_POST[loc]' AND Type='$_POST[menu]'";
if($res = mysqli_query($connect,$sql))
{  
while($row = mysqli_fetch_array($res))
{
    echo "<br><p><b>Name:  </b></b></b>", $row['Name'], "</p>";
    echo "<p><b>Ratings:  </b></b>", $row['Ratings'], "</p>";
    echo "<p><b>Contact:  </b></b></b></b>", $row['Contact'], "</p>";
    echo "<p><b>Address:  </b></b></b></b></b>", $row['Address'], "</p>";
    echo "<p><b>Starting Price:  </b></b></b></b></b>", $row['StartingPrice'], "</p>";
    echo "<p><b>Ending Price:  </b></b></b></b></b>", $row['EndingPrice'], "</p>";
    echo "<p><b>Book:   </b></b></b></b></b>", $row['Book'], "</p>";
}
}
mysqli_close ($connect);
}
?>
</div>
</center>
</body>
</html>
