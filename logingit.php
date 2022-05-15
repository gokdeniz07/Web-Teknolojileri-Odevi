<?php 
                          $myemail="g201210026@sakarya.edu.tr";
                          $mysifre='g201210026';
                          $email = $_POST['email'];
                          $sifre = $_POST['sifre'];
                          $namen=explode("@",$email);
                          $signal=true;
                          if(strcmp($email, $myemail) == 0 && strcmp($sifre, $mysifre) == 0)
                          {
                            $signal=true;
                            
                          
                          
                          }else {
                            $signal=false;
                            header("refresh:5;url=login.html");  
                            
                            
                           
                          }
  ?>
<html lang="en">
<head>
  
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="style.css">
    

</head>
<body>
<nav>
        <h1 class="logo">Gökdeniz DEMİR</h1>
        <input type="checkbox" id="menuBtn"> 
        <label for="menuBtn" class="menuBtn">
            <i class="fas fa-bars"></i>
        </label>
      
       <ul>
           <li> <a class="active" href="index.html" target="_self"></i>Hakkımda</a> </li>
           <li> <a href="Ozgecmisim.html" target="_self">Özgeçmişim</a> </li>
           <li> <a href="İlgiAlanlarim.html" target="_self">İlgi Alanlarım </a> </li>
           <li> <a href="Sehrim.html" target="_self">Şehrim</a> </li>
           <li> <a href="Takimimiz.html" target="_self">Takımımız</a> </li>
           <li> <a href="İletisim.html" target="_self">İletişim</a> </li>
           <li> <a href="Giris.html" target="_self">Giriş</a> </li>
          
       </ul>
    </nav>

      <header id="headerSection">
        <div class="overlay">
            <div class="container">
                <div class="row text-center">
                    <div class="col my-auto">
                        <h1 class="display-3 text-white" ></h1>
                    </div>
                </div>
            </div>
        </div>
      </header>

      <section id="abilities3" class="text-white mx-5 mb-5">
        <div class="bg-dark container border border-secondary rounded shadow-lg">
          <div class="row my-3 ">
            <div class="col-lg-12 my-4">
              <h1 class="display-4 text-white align-center"  >
                  <?php
                    if($signal)
                    {
                      echo $namen[0]."  Hoşgeldin" ;
                    }
                    else
                    {
                      echo "test";
                      echo "lorem";
                    }
                  ?>
              </h1>
            </div>
          </div>
        </div>
      </section>

    </table>
    <script src="bootstrap/js/jquery.js" ></script>
    <script src="bootstrap/js/popper.min.js" ></script>
    <script src="bootstrap/js/bootstrap.js" ></script>
    </body>
<html>