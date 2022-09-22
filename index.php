
<?php include_once('header.php'); ?>
<?php include_once('functions.php'); ?>
<?php $responseArray = convertIntoArray(); ?>

<div class="container-lg" class="main">
  <h2 class="my-title text-center mt-3">Crypto world</h2>
  <div class ="row mt-4">

    <?php foreach($responseArray as $currency) {?>

    <div class ="col-lg-3 col-md-12 col-sm-12 text-center mb-3">

      <div class ="card single-card">

        <img src="<?php echo $currency['logo_url'] ;?>" class="single-card-img" />
        <div>

          <div class="card-title currency-symbole"><?php echo $currency['currency'] ;?></div>
          <div class ="card-text single-card-text">Name :<?php echo $currency['name'] ;?></div>
          <div class ="card-text single-card-text">Price : EUR <?php echo $currency['price'] ;?> </div>
          <div class ="card-text single-card-text">Circulating Supply :<?php echo $currency['circulating_supply'] ;?></div>
          <div class ="card-text single-card-text">Market Cap :<?php echo $currency['market_cap'] ;?></div>
          
        </div>
        <?php if($currency['1d']['price_change'] > 0 ) { ?>
          <div class ="card-text single-card-text price-up"><span class="arrow-up">&#8593;</span>Price change 1 day: <?php echo $currency['1d']['price_change'] ;?> </div>
        <?php }else{ ?>
          <div class ="card-text single-card-text price-down"><span class="arrow-down">&#8595;</span>Price change 1 day : <?php echo $currency['1d']['price_change'] ;?> </div>
          <?php } ?>
          <details>
            <summary>Other Info</summary>
              <p>
              Price change 7 days :<?php echo $currency['7d']['price_change'] ;?><br/>
              Rank : <?php echo $currency['rank'];?><br/>
              Status : <?php echo $currency['status'];?>
              </p>
          </details>
      </div>

    </div>
    <?php } ?>
  </div>

</div>
<?php include_once('footer.php'); ?> 