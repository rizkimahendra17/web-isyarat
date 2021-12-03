
<html>

<head>
  <title>Registrasi</title>
    <style>

HTML CSSResult
EDIT ON
a {
  text-decoration: none;
}
body {
  background: -webkit-linear-gradient(bottom, #2dbd6e, #a6f77b);
  background-repeat: no-repeat;
}
label {
  font-family: "Raleway", sans-serif;
  font-size: 11pt;
  float: left;
  text-align: left;
 
}

input { 
    padding: 6px;
    width: 100%;
    box-sizing:border-box;
}

#card {
  background: #fbfbfb;
  border-radius: 8px;
  box-shadow: 1px 2px 8px rgba(0, 0, 0, 0.65);
  height: 410px;
  margin: 6rem auto 8.1rem auto;
  width: 329px;
}

button{
    background-color: salmon;
    color: #fff;
    padding: 10px;
    font-size: 12px;
    border: 0;
    margin-top: 20px;
}


Resources1×0.5×0.25×Rerun
        </style>
</head>
<body>
<form method="POST" action="proses_register.php" enctype="multipart/form-data">
<div id="card">
<center><h1>Registrasi</h1></center>
<br>
<div>
    <label> Nama   :</label>
    <input type="text" name="nama" autofocus="" />
    </div>
    <br>
<div>
    <label> UserName </label>
    <input type="username" name="username"/>
    </div>
    <br>
<div>
    <label> Password  :</label>
    <input type="password" name="password" />
    </div>

<div>
<button type="submit">Simpan</button>
</div>
</form>
</body>
</html>