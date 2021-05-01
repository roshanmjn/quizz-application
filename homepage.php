<!DOCTYPE html>
<html>
<head>
	<title>GAME STORE</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/js/bootstrap.min.js">
	<link rel="stylesheet" type="text/css" href="css/homepage.css">
  <style>
    ul{
      list-style-type: none;
      color: #000;
    }
    ul li{
      float: left;
      padding: 0 20px;
      position: relative;
    }

    ul li a{
      display: block;
      text-decoration: none;
      color: #000;
      /*padding: 8px 14px;*/
    }

    ul li:hover ul{
        display: block;
     }

    ul li ul{
      display: none;
      padding:5px 0;
      border: 1px solid red;
      background: #f3f3f3;
      position: absolute;

    }
     
    ul li ul li{
      width: 100px;
      margin: 0;
    }
     ul li ul li a{
      margin: 0px;
      padding: 12px 24px;
     }
  </style>
</head>
<body>

  <ul>
    <li><a href="#">Home</a></li>
    <li><a href="#">Game</a></li>
    <li><a href="#">Moded Game</a></li>
    <li>Dropdown
      <ul>
        <li><a class="dropdown-item" href="#">sign in </a></li>
        <li><a class="dropdown-item" href="#">sign up</a></li>
      </ul>
      
    </li>
  </ul>
   
</nav>
</nav>	
</body>
</html>