<?php
function pageController() {
   session_start();
   $min = 0;
   $max = 100;
   $data ['message'] = "Guess a number between 0 and 100.";
   $reset = isset($_GET['reset']) ? $_GET['reset'] : 0;
   if ($reset == 1) {
       session_destroy();
       session_unset($_SESSION['randomNumber']);
       session_regenerate_id(true);
       header('Location: high-low.php');
       $_POST['guess'] = '';
   }
   $guess = isset($_POST['guess']) ? htmlspecialchars(strip_tags($_POST['guess'])) : '';
   if (!is_numeric($guess)) {
       $data ['message'] = "Guess a NUMBER between 0 and 100.";
   }
   $randomNumber = isset($_SESSION['randomNumber']) ? $_SESSION['randomNumber'] : mt_rand($min, $max);
   $_SESSION['randomNumber'] = $randomNumber;
   if ($guess !== '') {    
       if ($guess < $randomNumber) {
           $data ['message'] = "Higher!"; 
       } elseif ($guess > $randomNumber){
           $data ['message'] = "Lower!";
       } else {
           $data ['message'] = "Good guess!";
       }
   }
   //var_dump($_GET);
   //var_dump($randomNumber);
   return $data;
}
extract(pageController());
?>
<!DOCTYPE html>
<html>
   <head>
       <meta charset="UTF-8" />
       <meta http-equiv="X-UA-Compatible" content="IE=edge">
       <meta name="viewport" content="width=device-width, initial-scale=1">
       <link
           rel="stylesheet"
           href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"
           integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7"
           crossorigin="anonymous"
       >
       <style type="text/css">
           #resetBtn {margin-top: 10px}
       </style>
       <title>High-Low game</title>
       <!--[if lt IE 9]>
             <script src="http://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js">
             </script>
             <script src="http://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js">
             </script>
       <![endif]-->
   </head>
   <body>
       <div class="container">
           <header class="page-header">
               <h1>High-Low Game</h1>
           </header>
           <!-- Switch the class from info to success when the user win -->
           <div class="alert alert-info hidden" role="alert"> <!-- Remove hidden class after first attempt -->
               <!-- Place the user's feedback here (HIGHER, LOWER or GOOD GUESS!)  -->
           </div>
           <h5><?=$message?></h5>
           <form method="post">
               <div class="form-group">
                   <label for="guess"></label>
                   <input
                       type="number"
                       class="form-control"
                       name="guess"
                       id="guess"
                       placeholder="Guess"
                       >
               </div>
               <button type="submit" class="btn btn-primary">
                   Guess!!
               </button>
           </form>
           <div id="resetBtn">
               <a href="high-low.php?reset=1" class="btn btn-primary">
                   Play Again!
               </a>
           </div>
       </div>
       <script
           src="https://code.jquery.com/jquery-2.2.4.min.js"
           integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
           crossorigin="anonymous"
       ></script>
       <script
           src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"
           integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS"
           crossorigin="anonymous"
       ></script>
   </body>
</html>