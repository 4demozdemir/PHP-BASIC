
<?php
/* Ödev 
   1. Kullanıcıdan sayı değeri alabileceğiniz bir form hazırlayın.
   2. Gelen sayı değerlerinin 3 ile bölümünden kalanın 0 olup olmadığını kontrol eden bir fonksiyon yazın.
   3. Kullanıcıya girilen değerin 3 bölünebilirliğini, bölünemiyorsa bölünebilen ilk değeri kullanıcıya bildirin.
   4. Boş değer gönderilirse değerin boş olmayacağını bildirin.


 Örnek:
    - Girilen Sayı : 4
    - Girdiğiniz sayı 3'e bölünemez. Bölünebilecek ilk sayı 6'dır.  */



/*  HTML
  <form method="post" action="formExersice.php">

    <div class="input-group flex-nowrap">
        <input name="userName" type="text" placeholder="Enter number value" aria-label="Username"  >
    </div>
  </form>*/


/*  PHP */
  $number =  $_POST['userName'];

   if ($number<=>" " && $number<=>"" ) {
    if ($number % 3 == 0) {
        echo "Succesfull";
     }else{
        $value=  $number % 3;
        if ($value==1) {
                   $number +=2;
        }elseif($value==2){
            $number +=1;
        }
         echo " Error $number";
     }
   }else{
    echo "You entered an invalid value !!!";
   }











?>