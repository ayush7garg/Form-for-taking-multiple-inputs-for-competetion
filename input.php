<html>
<title>The Negotiation Table</title>
<link href="https://fonts.googleapis.com/css?family=Merriweather|Noto+Serif|Slabo+27px" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Hammersmith+One" rel="stylesheet">
<style>
input{
  width: 5%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  border: none;
  border-bottom: 2px #000033;
  -webkit-transition: width 0.4s ease-in-out;
  transition: width 0.4s ease-in-out;
  opacity: 0.5;
}
input:focus {
  width: 10%;
}
input[type=submit] {
  width: 15%;
  background-color: #000033;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  opacity: 1;
}
input[type=reset] {
  width: 15%;
  background-color: #000033;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  opacity: 1;
}
div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
body {
	background: url("../saic form/13.jpg");
	background-repeat: no-repeat;
	background-size: 100%;
	text-align: center;
}
form {
	 font-weight: bold;
	 font-size: 16px;
	 font-stretch: expanded;
	 font-family: 'Roboto', sans-serif;
	 color: #000033;
}
fieldset{
	text-align: justify;
	width: 97.6%;
}
legend{

	font-size: 20px;
	font-family: 'Hammersmith One', sans-serif;
}
input[type='number'] {
    -moz-appearance:textfield;
}
input[type=number]::-webkit-inner-spin-button,
input[type=number]::-webkit-outer-spin-button {
    -webkit-appearance: none;
    margin: 0;
}
</style>
<body>
	<img src="saic logo.png" align="top" height="125" width="250">
	<form action="excelentry.php" method="post">
		MNC ID: <input type="text" name="mncid" required="true">      Bank ID: <input type="text" name="bankid" required="true">      Country ID: <input type="text" name="countryid" required="true"><br>
		<fieldset>
			<legend>Shares given to Bank:</legend>
			Share 1: <input type="number" name="s1" value="0"> Share 2: <input type="number" name="s2" value="0"> Share 3: <input type="number" name="s3" value="0"> Share 4: <input type="number" name="s4" value="0"> Share 5: <input type="number" name="s5" value="0"> Share 6: <input type="number" name="s6" value="0"><br>
		</fieldset>
		<fieldset>
			<legend>Money granted by Bank:</legend>
			Currency 1: <input type="number" name="c1" value="0"> Currency 2: <input type="number" name="c2" value="0"> Currency 3: <input type="number" name="c3" value="0"> Currency 4: <input type="number" name="c4" value="0"> Currency 5: <input type="number" name="c5" value="0"> Currency 6: <input type="number" name="c6" value="0"><br>
		</fieldset>
		<fieldset>
			<legend>Money given to country:</legend>
			Currency 1: <input type="number" name="cg1" value="0"> Currency 2: <input type="number" name="cg2" value="0"> Currency 3: <input type="number" name="cg3" value="0"> Currency 4: <input type="number" name="cg4" value="0"> Currency 5: <input type="number" name="cg5" value="0"> Currency 6: <input type="number" name="cg6" value="0"><br>
		</fieldset>
		<fieldset>
			<legend>Market granted by country:</legend>
			Market 1: <input type="number" name="m1" value="0"> Market 2: <input type="number" name="m2" value="0"> Market 3: <input type="number" name="m3" value="0"> Market 4: <input type="number" name="m4" value="0"> Market 5: <input type="number" name="m5" value="0"> Market 6: <input type="number" name="m6" value="0"><br>
		</fieldset>
		<input type="submit" value="Submit">
		<input type="reset" value="Reset">
	</form>
</body>
</html>