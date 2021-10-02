<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="Font-Awesome-4.7/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/templatemo-style.css">
    
    <title>Catalyst HTML CSS Template</title>
<!--
Catalyst Template
http://www.templatemo.com/tm-499-catalyst
-->
</head>

<body>

@yield ('content')

<div class="text-center footer">
	<div class="container">
		Copyright &copy; <span class="tm-current-year">2017</span> Company 
        
        | Design: <a href="http://www.templatemo.com" target="_parent">templatemo</a>
    </div>
</div>

<script>

// Write current year in copyright text.
  document.getElementsByClassName("tm-current-year").value = new Date().getFullYear();

</script>
</body>
</html>