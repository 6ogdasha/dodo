<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>DODO</title>
  </head>
  <body>
    <div class="col-10 mx-auto">     
        <div class="row">   <!-- header -->
            <div class="col-2">
                <img src="img/logo.jpg" class="w-100">
            </div>
            
            <div class="col-3 text-right">
                <button class="btn bg-btn-dodo mt-5 basket">Корзина</button>
            </div>

            <div class="bsk-box bg-white border rounded col-3 pt-3"> <!-- Корзина -->
             
                <form action="delete_all.php" method="GET">
                    <button>Очистить все</button>
                </form>
             <div class="row">
                    <?php 
                        $connect = mysqli_connect("127.0.0.1","root","","dodo");
                        $zz = "SELECT * FROM basket";
                        $k = mysqli_query($connect,$zz);
                        for ($i = 0; $i < $k->num_rows; $i++) {
                            $str = $k->fetch_assoc();
                        
                     ?>
                    <div class="col-3">
                        <img src="<?php echo $str['img']; ?>" class="w-100">
                    </div>
                    <div class="col-4 mt-2">
                        <h5><?php echo $str['title']; ?></h5>                        
                    </div>
                    <div class="col-2 mt-2 px-0 text-center">
                        <h5><?php echo $str['price']; ?>  <span>₽</span></h5>                        
                    </div>
                    <div class="col-2 mt-2">

                   <form action="delete.php" method="GET">
                       <input type="" name="id" value="<?php echo $str["id"];?>" style="display:none;"> 
                        <button style='border: none; background: none'> <img src="img/trash.png" class="w-100"></button>
                   </form>
                          
                   
                        
                    </div>
                <?php } ?>
                </div>

                <?php 
                    $r = "SELECT * FROM basket";
                    $m = mysqli_query($connect,$r);
                    $sum = 0;
                    for ($i = 0; $i < $m->num_rows; $i++) {
                        $s = $m->fetch_assoc();
                        $sum = $sum + $s['price'];
                    }
                 ?>
     
                <p>Итого: <?php echo $sum; ?></p>

                <button class="btn bg-btn-dodo cls my-3">Закрыть</button>
            </div>
        </div>     
        <?php 
           
         ?>

        <div class="col-12 rounded banner "> <!-- banner -->            
        </div>
        <div class="col-7 mx-auto">
                <div class="row mt-3">
                    <h5 class="mx-auto">
                        <a href="" class="a_pizza text-center mx-auto text-dark">
                        Пицца
                    </a>
                    </h5>
                    <h5 class="mx-auto">
                        <a href="" class="a_combo text-center mx-auto text-dark">
                        Комбо
                    </a>
                    </h5>
                     <h5 class="mx-auto">
                         <a href="" class="a_zakus text-center mx-auto text-dark">
                        Закуски
                    </a>
                     </h5>
                     <h5 class="mx-auto">
                         <a href="" class="a_desert text-center mx-auto text-dark">
                        Десерты
                    </a>
                     </h5>
                     
                </div>
            </div>

        <h1 class="my-5">Пицца</h1>

        <div class="row pb-5 pizza">
            <?php 
             $connect = mysqli_connect("127.0.0.1","root","","dodo");
             $zapros = "SELECT * FROM pizza WHERE category='пицца'";
                $z = mysqli_query($connect,$zapros);
                for($i = 0; $i<$z->num_rows;$i++){

                $stroka = $z->fetch_assoc();
             ?>
            <div class="col-2">   
                <img src="<?php echo $stroka['img']; ?>" class="w-100">
                <div class="pizz"> 
                    <h3><?php echo $stroka['title']; ?></h3>   
                    <p class="text-secondary"><?php echo $stroka['descrip']; ?></p>
                </div>  
                <div class="row">
                    <div class="col-6">
                        <h3><?php echo $stroka["price"]; ?> <span>₽</span></h3>                        
                    </div>
                    <div class="col-6">
                 
                         <form action="basket.php" method="GET">
                            <input type="" name="id" value="<?php echo $stroka["id"];?>" style="display:none;">
                            <button class="btn bg-btn-dodo">Выбрать</button>
                         </form>
  
                
                                              
                    </div>
                </div>       
            </div>
        <?php } ?>

        </div>
        <h1 class="my-5">Комбо</h1>    
            <div class="row  pb-5 combo">
            <?php 
             
             $zapros11 = "SELECT * FROM pizza WHERE category='комбо'";
                $z1 = mysqli_query($connect,$zapros11);
                for($i = 0; $i<$z1->num_rows;$i++){

                $stroka1 = $z1->fetch_assoc();
             ?>
            <div class="col-2">   
                <img src="<?php echo $stroka1['img']; ?>" class="w-100">
                <div class="pizz"> 
                    <h3><?php echo $stroka1['title']; ?></h3>   
                    <p class="text-secondary"><?php echo $stroka1['descrip']; ?></p>
                </div>  
                <div class="row">
                    <div class="col-6">
                        <h3><?php echo $stroka1["price"]; ?> <span>₽</span></h3>                        
                    </div>
                    <div class="col-6">
                 
                         <form action="basket.php" method="GET">
                            <input type="" name="id" value="<?php echo $stroka1["id"];?>" style="display:none;">
                            <button class="btn bg-btn-dodo">Выбрать</button>
                         </form>
  
                
                                              
                    </div>
                </div>       
            </div>
        <?php } ?>
        </div>

<h1 class="my-5">Закуски</h1>
<div class="row  pb-5 zakus">
            <?php 
             
             $zapros22 = "SELECT * FROM pizza WHERE category='закуски'";
                $z2 = mysqli_query($connect,$zapros22);
                for($i = 0; $i<$z2->num_rows;$i++){

                $stroka2 = $z2->fetch_assoc();
             ?>
            <div class="col-2">   
                <img src="<?php echo $stroka2['img']; ?>" class="w-100">
                <div class="pizz"> 
                    <h3><?php echo $stroka2['title']; ?></h3>   
                    <p class="text-secondary"><?php echo $stroka2['descrip']; ?></p>
                </div>  
                <div class="row">
                    <div class="col-6">
                        <h3><?php echo $stroka2["price"]; ?> <span>₽</span></h3>                        
                    </div>
                    <div class="col-6">
                 
                         <form action="basket.php" method="GET">
                            <input type="" name="id" value="<?php echo $stroka2["id"];?>" style="display:none;">
                            <button class="btn bg-btn-dodo">Выбрать</button>
                         </form>
  
                
                                              
                    </div>
                </div>       
            </div>
        <?php } ?>                    

        </div>
       
<h1 class="my-5">Десерты</h1>
        <div class="row  pb-5 desert">
            <?php 
             
             $zapros33 = "SELECT * FROM pizza WHERE category='десерты'";
                $z3 = mysqli_query($connect,$zapros33);
                for($i = 0; $i<$z3->num_rows;$i++){

                $stroka3 = $z3->fetch_assoc();
             ?>
            <div class="col-2">   
                <img src="<?php echo $stroka3['img']; ?>" class="w-100">
                <div class="pizz"> 
                    <h3><?php echo $stroka3['title']; ?></h3>   
                    <p class="text-secondary"><?php echo $stroka3['descrip']; ?></p>
                </div>  
                <div class="row">
                    <div class="col-6">
                        <h3><?php echo $stroka3["price"]; ?> <span>₽</span></h3>                        
                    </div>
                    <div class="col-6">
                 
                         <form action="basket.php" method="GET">
                            <input type="" name="id" value="<?php echo $stroka3["id"];?>" style="display:none;">
                            <button class="btn bg-btn-dodo">Выбрать</button>
                         </form>
  
                
                                              
                    </div>
                </div>       
            </div>
        <?php } ?>
        </div>

      </div>

    <script type="text/javascript">
        let bsk = document.querySelector('.basket');
        let bsk_box = document.querySelector('.bsk-box');
        let close = document.querySelector('.cls');

        bsk.onclick = function() {
            bsk_box.style.display = "block";
        }

        close.onclick = function() {
            bsk_box.style.display = "none";
        }

        let pizza = document.querySelector(".pizza");
        let combo = document.querySelector(".combo");
        let zakus = document.querySelector(".zakus");
        let desert = document.querySelector(".desert");

        let a_pizza = document.querySelector(".a_pizza");
        let a_combo = document.querySelector(".a_combo");
        let a_zakus = document.querySelector(".a_zakus");
        let a_desert = document.querySelector(".a_desert");

        a_pizza.onclick = function(){
            pizza.scrollIntoView({block: "start", behavior: "smooth"});
        }
        a_combo.onclick = function(){
            combo.scrollIntoView({block: "center", behavior: "smooth"});
        }
        a_zakus.onclick = function(){
           zakus.scrollIntoView({block: "center", behavior: "smooth"});
        }
        a_desert.onclick = function(){
           desert.scrollIntoView({block: "start", behavior: "smooth"});
        }


    </script>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>