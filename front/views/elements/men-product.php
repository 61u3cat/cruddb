<?php
use Bitm\Product;

$_product = new Product();

$products = $_product->getActiveProducts();
var_dump($products);
?>
<section class="p-5" id="men">
    <div class="separator">
        <div class="container">
            <div class="col-xs-12 col-md-12" >
                <center>
                    <div class="wow bounceIn">
                        <svg viewbox="0 0 100 20">
                            <defs>
                                <linearGradient id="gradient" x1="0" x2="0" y1="0" y2="1">
                                    <stop offset="5%" stop-color="#326384"/>
                                    <stop offset="95%" stop-color="#123752"/>
                                </linearGradient>
                                <pattern id="wave" x="0" y="0" width="120" height="20" patternUnits="userSpaceOnUse">
                                    <path id="wavePath" d="M-40 9 Q-30 7 -20 9 T0 9 T20 9 T40 9 T60 9 T80 9 T100 9 T120 9 V20 H-40z" mask="url(#mask)" fill="url(#gradient)">
                                        <animateTransform
                                                attributeName="transform"
                                                begin="0s"
                                                dur="1.5s"
                                                type="translate"
                                                from="0,0"
                                                to="40,0"
                                                repeatCount="indefinite" />
                                    </path>
                                </pattern>
                            </defs>
                            <text text-anchor="middle" x="50" y="15" font-size="10" fill="url(#wave)"  fill-opacity="0.6">Men Products</text>
                            <text text-anchor="middle" x="50" y="15" font-size="10" fill="url(#gradient)" fill-opacity="0.1">Men Products</text>
                        </svg>
                    </div>

                </center>
            </div>
        </div>
        <div>
            <h4>OUR VISION IS TO BE EARTH'S MOST CUSTOMER CENTERIC COMPANY</h4>
            <img src="images/section-seprator.png" alt="Section Separator">
        </div>
    </div>
  <div class="container">
      <h2 class="font-weight-bold pb-3 border-bottom"></h2>
      <div class="card-deck pt-3 row">
          <?php
          foreach($products as $product):
          ?>
          <div class="card">
              <figure class="imghvr-hinge-left"><img src="<?$webroot?>uploads/<?=$product['picture'];?>" alt="example-image">
                  <figcaption>
                    <p><del>$50.00</del>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>$30.00</span></p>
                  </figcaption><a href="javascript:;"></a>
              </figure>
          </div>
      </div>
          </section>