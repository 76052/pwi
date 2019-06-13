<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Tabele kalorii</title>

 <link rel="stylesheet" type="text/css" href="css/style.css" />
 
</head>

<body>

      

  <div id="wrapper">
    <div id="top">    
    <div id="logo">
    
        <h1>Tabele kalorii</h1>
       
    
    </div>
    <div id="menu">
        <ul>
        <li><a href="index1.php" class="menu_active">Strona główna</a></li>
        <li><a href="logout.php">Wyloguj</a></li>
        <li><a href="tab11.php">Tabele</a></li>
        <li><a href="literatura.php">Literatura </a></li>
        
        
        </ul>
    </div>
    
    </div>
    <div id="container">
    <div id="sidebar">
        <div id="title_sidebar">O stronie</div>
        <p>
        Użytkownik korzystający ze strony może zapisywać swoje makroskładniki jedzonych produtków, aby jego dieta stała się dokładniejsza. Przykładowe diety znajdziesz w linkach poniżej.
        </p>
        <div id="title_sidebar">Polecam diety</div>
            <ul>
            <li><a href="dieta11.html">Dieta 1000 kalorii</a></li>
            <li><a href="dieta21.html">Dieta chronometryczna</a></li>
            <li><a href="dieta31.html">Dieta Dukana</a></li>
            <li><a href="dieta41.html">Dieta Diamondów</a></li>
            
            </ul>
            <div id="title_sidebar">Oblicz swoje bmi </div>
            <ul>
            
            
            <li><a href="bmi.php">BMI</a></li>
            </ul>
    </div>

    
    <div id="content">
        <h2>Oblicz swoje bmi</h2>
        <p>
       <img src="bmi.png">

       <form action = "bmi1.php" method="POST">
        Masa ciała
        <input type = "text" name = "masa" value = 1 />
        Wzrost (np.1.75m)
        <input type = "text" name = "wzrost" value = 1 />
        <input type = "submit" value="Oblicz" />
</form>
        </p>
        
    </div>
    </div>
    <div id="footer">
       
    </div>
    </div>
</body>
</html>
