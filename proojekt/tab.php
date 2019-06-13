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
        <li><a href="index.php" class="menu_active">Strona główna</a></li>
        <li><a href="login.php">Login</a></li>
        <li><a href="register.php">Rejestracja</a></li>
        <li><a href="tab.php">Tabele</a></li>
        
        
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
            <li><a href="dieta1.html">Dieta 1000 kalorii</a></li>
            <li><a href="dieta2.html">Dieta chronometryczna</a></li>
            <li><a href="dieta3.html">Dieta Dukana</a></li>
            <li><a href="dieta4.html">Dieta Diamondów</a></li>
            </ul>
    </div>
    <div id="content">
        <h2>Tabele</h2>
        <p>


         
         
         <form action = "tabela1.php" method="POST">
               <h3>Pierwszy posiłek</h3>
            Kcal 
            <input type = "text" name = "k" value = 0 />
            
            węgle 
            <input type = "text" name = "w" value = 0 />
            
            białko 
            <input type = "text" name = "b" value = 0 />
            
            tłuszcz 
            <input type = "text" name = "t" value = 0 />
            <h3>Drugi posiłek</h3>
            Kcal 
            <input type = "text" name = "k1" value = 0 />
            
            węgle 
            <input type = "text" name = "w1" value = 0 />
            
            białko 
            <input type = "text" name = "b1" value = 0 />
            
            tłuszcz 
            <input type = "text" name = "t1" value = 0 />
            
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
