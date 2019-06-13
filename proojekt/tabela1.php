<!DOCTYPE html>
<html></html>
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
        
        <p>

        <?php

        $k = $_POST['k'];
        $w = $_POST['w'];
        $b = $_POST['b'];
        $t = $_POST['t'];
        $k1 = $_POST['k1'];
        $w1 = $_POST['w1'];
        $b1 = $_POST['b1'];
        $t1 = $_POST['t1'];
        $s1 = $k1 + $k;
        $s2 = $w1 + $w;
        $s3 = $b1 + $b;
        $s4 =$t1 + $t;
echo<<<END
        <h2> Twoje makro </h2>

        <table border = "1" cellpadding="10" cellspacing="0">
        
        <tr> 
         <td>Makro </td><td>kcal </td> <td>węgle </td> <td>białko</td><td> tłuszcz</td>
        </tr>
        <tr> 
        <td>1 posiłek </td> <td>$k kcal</td> <td>$w g</td> <td>$b g</td> <td> $t g</td>
        </tr>

        
        <tr> 
        <td>2 posiłek </td> <td>$k1 kcal</td> <td>$w1 g</td> <td>$b1 g</td> <td> $t1 g</td>
        </tr>
        <tr> 
        <td>Suma </td> <td>$s1 kcal</td> <td>$s2 g</td> <td> $s3 g</td> <td>$s4 g</td>
        </tr>

END;

        ?>
        
                
        </p>
        
    </div>
    </div>
    <div id="footer">
       
    </div>
    </div>
</body>
</html>
