<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NAUFAL 2904</title>
    <style>
    h1 {
  font-size: 32px;
  font-weight: bold; 
  color: yellow; 
  text-align: center;
  margin-top: 20px; 
  margin-bottom: 20px; 
}

body {
    background-color: black;
    outline: auto;
    border: 2px outset black;
    padding: 10%;
 }
form {
  width: 400px;
  margin: 0 auto; /* Center the form horizontally */
  padding: 20px;
  border: 1px solid black;
  border-radius: 8px;
  background-color: blue;
}

.label{
  width: 200px;
  padding: 10px;
  border: 1px solid blue;
  border-radius: 5px;
  outline-style: solid;
  outline-color: black;
}

.label{
  padding: 10px 20px;
  background-color: blue;
  color: white;
  border: none;
  border-radius: 5px;
  cursor: pointer;
}

input[type="submit"]:hover {
  background-color: blue;
}
label {
  font-size: 16px;
  color: #333;
}

label.required::after {
  content: "*";
  color: blue;
  margin-left: 4px;
}
.result {
  background-color: white;
  border: 1px solid #ccc;
  padding: 10px;
  margin-top: 20px;
  font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
}
input[type="text"] {
  width: 200px;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 5px;
}

input[type="submit"] {
  width: 100%;
            padding: 25px 40px;
            font-size: large;
            background-color: white;
            color: black;
            font-weight: bold;
            border: none;
            border-radius: 10px;
            box-shadow: 5px 5px 5px rgba(red, green, blue, alpha);
            outline-color: black;
            border: 1px solid black;
}

input[type="submit"]:hover {
  background-color: blue;
}
.result {
  font-size: 18px;
  padding: 10px;
  margin-top: 20px;
  border-radius: 5px;
  background-color: white;
}
 </style>
</head>
<body>
    <font color="red" ><h1><center>KALKULATOR LEGEND</center></h1></font>
    
</form>
<center>
<br>
<form action="{{ route('proses.store') }}" method="post">
        @csrf
<table border=1 width=400>
<tr>
    <td colspan=2><input type="number" name="a" id=""></td>
   
    <td colspan=2 rowspan=2><input type="submit" value="Reset" name="op"></td>
   
</tr>    
<tr>
    <td colspan=2><input type="number" name="b" id=""></td>
  
   
</tr>    
<tr>
    
    <td colspan=4><font color="white"> HASIL: </font> {{ $hasil }}</td>
    
  
   
</tr>    
<tr>
    <td> <input type="submit" value="+" name="op"></td>
    <td>  <input type="submit" value="-" name="op"></td>
    <td><input type="submit" value="x" name="op"></td>
    <td> <input type="submit" value=":" name="op"></td>
</tr>    
<tr>
    <td colspan=4><center><font color="white">
        Nama : Naufal Maulana Andrian <br>
        Kelas : XII PPLG 2
        </font> </center>
    </td>
   
</tr>    

</table>
</br>

</center>
</body>
<body>
    <center>
<font color="blue" ><h1>NMA project</h1></font>
</center>
</body>
</html>