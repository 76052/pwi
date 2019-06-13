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
        
        <p>

        <?php
        $ilosc = $_POST['ilosc'];
        $ilosc1 = $_POST['ilosc1'];
        $k = $_POST['k'];
        $w = $_POST['w'];
        $b = $_POST['b'];
        $t = $_POST['t'];
        $k1 = $_POST['k1'];
        $w1 = $_POST['w1'];
        $b1 = $_POST['b1'];
        $t1 = $_POST['t1'];
      
        $sj = $ilosc * 0.6 * 155;
        $sjw = $ilosc * 0.6 * 1.1;
        $sjb = $ilosc * 0.6 * 13;
        $sjt = $ilosc * 0.6 * 11;

        $sm = $ilosc1 * 240;
        $smw = $ilosc1 * 0;
        $smb = $ilosc1 * 24;
        $smt = $ilosc1 * 15;

        $s1 = $k1 + $k + $sj + $sm;
        $s2 = $w1 + $w + $sjw + $smw;
        $s3 = $b1 + $b + $sjb + $smb;
        $s4 =$t1 + $t + $sjt + $smt;
echo<<<END
        <h2> Twoje makro </h2>

        <table border = "1" cellpadding="10" cellspacing="0">
        
        <tr> 
         <td>Makro </td><td>kcal </td> <td>węgle </td> <td>białko</td><td> tłuszcz</td>
        </tr>

        <tr> 
        <td>1 posiłek </td> <td>$k kcal</td> <td>$w g</td> <td>$b g </td> <td> $t g</td>
        </tr>

        
        <tr> 
        <td>2 posiłek </td> <td>$k1 kcal</td> <td>$w1 g</td> <td>$b1 g</td> <td> $t1 g</td>
        </tr>

        <tr> 
        <td>Jajko</td> <td>$sj kcal</td> <td>$sjw g</td> <td>$sjb g</td> <td> $sjt g</td>
        </tr>

        <tr> 
        <td>Mielone</td> <td>$sm kcal</td> <td>$smw g</td> <td>$smb g</td> <td> $smt g</td>
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
