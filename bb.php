<?php 
    $ch = curl_init("https://shop.rexdigital.group/api/v1/products/?api_key=hUVyZwTAYY4k0QTyZ5JEY2sMvVdTGDINzFmSTiR82blLqfPp");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

    $result = curl_exec($ch);

    curl_close($ch);

    $response = json_decode($result);

    $products = $response->products->data ?? [];
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title> Magestic Hotel</title>
    
    <link rel="stylesheet" type="text/css" href="css/pickmeup.css">
    <link rel="stylesheet" type="text/css" href="css/handle-counter.min.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">   
    
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="dist/pickmeup.min.js"></script>
    <script type="text/javascript" src="dist/handleCounter.js"></script>
    <script type="text/javascript" src="dist/jquery.scrollUp.js"></script>
    <script type="text/javascript" src="dist/demo.js"></script>
</head>
    
<body>
    <header class="tm-header">
        <img class="tm-logo" src="images/Majestic_Hotel_hd.png" alt="Majestic Hotel">
        <nav class="tm-nav">
       <div>
            <ul>
                <li class="tm-list"><a href="index.html">Home</a></li>
                <li class="tm-list"><a href="explore.html">Explore</a></li>
                <li class="tm-list"><a href="rooms.html">Rooms</a></li>
                <li class="tm-list"><a href="bb.php">Booking</a></li>
                <li><a href="contact.html">Contact</a></li>
            </ul>    
            </div>
        </nav>
    </header>
    
    
    <section class="tm-main">
           <p>Booking</p>
    </section>
    
    
    <section class="tm-booking">
    
    <form action="https://shop.rexdigital.group/checkout" method="POST">
        <input type="hidden" name="client_id" value="DrI0B0QTwDxguAbI2aBdHEyuUSypVVWS">
        
        <div id="product-list">
            <input type="hidden" name="products[0][plan_id]" value="<?php echo $products[0]->prices[0]->plan_id; ?>">
            <input type="hidden" name="products[0][amount]" value="1">   
        </div>

        <div class="tm-form1">
        <input type="text" name="name" placeholder="Name">  
        <input type="email" name="email" placeholder="E-mail"> 
        <label  for="rooms" id="inlinelable">Rooms</label>
        <select name="Rooms" id="rooms">
            <?php for($i = 0; $i < count($products); $i++ ): ?>
            <option value="<?= $products[$i]->sku ?>" <?php echo $i === 0 ? 'selected' : '' ?>><?= $products[$i]->name . " (€" . number_format($products[$i]->prices[0]->price, 2, ',', '.') . "/day)" ?> </option>
            <?php endfor; ?>
            
            <!-- <option value="deluxs">Delux Suite</option>
            <option value="premiers">Premier Suite</option>
            <option value="Luxuryr">Luxury Room</option>
            <option value="deluxs">Delux Room</option>
            <option value="premierr">Premier Room</option> -->
        </select> 
            
       
    
            
            
    <div class="tm-num1" id="handleCounter1">    
        <label for="number1" >Number of Rooms</label><br/>
        <button type="button" class="counter-minus btn btn-primary">- </button>
        <input type="number" name="number1" id="number1" value="1">
        <button type="button" class="counter-plus btn btn-primary">+  </button>
    </div>
    <div class="tm-num2" id="handleCounter2">      
        <label for="number2">Number of Guests</label><br/>
        <button type="button" class="counter-minus btn btn-primary">-</button>
        <input type="text" name="number2" id="number2" value="1">
        <button type="button" class="counter-plus btn btn-primary">+</button>
    </div>
    </div>
        
        <div class="vertical-line"> </div>
        
    <div class="tm-form2">
   <div class="tm-cl">
        <label for="date1" class="arrival">Visiting Dates from Arrival to Departure</label>

     <input type="text" name="date1" class="range" readonly="readonly"> 
        

     <input type="submit" id="sub" value="Proceed">
    </div>
    </div>
        </form>
  </section>
    
    
    <footer class="tm-footer">
        <div class="tm-us">
        <p class="bold">About Us</p>
        <p>We are a part of chain of luxury hotels 
            which extends all over the world. We 
            provide a luxorious stay with various value
            added and free services which will make
            you visit us over and over again.</p>    
        </div>
       
        <div class="tm-address">
        <p class="bold">Address</p>
        <p>415, Park Avenu, Hawai
            Phone : (211) 9275693451
            Email : majestic@info.com</p>    
        </div>
        <br/>
    <div class="tm-media">
        <a href="#"> <img src="images/fb.png"></a>
        <a href="#"> <img src="images/G.png"> </a>
        <a href="#"> <img src="images/twittr.png"> </a>
        <a href="#">  <img src="images/insta.png"> </a>
        
        </div>
<!--        <a href="#">  <img class="tm-up" src="images/up.png"> </a>-->
    </footer>
    


    </body>
    
</html>
    