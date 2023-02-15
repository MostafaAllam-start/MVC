<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Font Awesome css file LInk  -->
    <link rel="stylesheet" href=<?=NIKE_ASSETS."css/External/all.min.css"?> />
    <!-- custom css file LInk -->
    <link rel="stylesheet" href=<?=NIKE_ASSETS."css/style.css"?> />
    <title>complete responsive ecommerce website design tutorial</title>
  </head>
  <body>

  <!-- header section starts -->
  <header>
    <div id="menu-bar" class="fas fa-bars"></div>
    <a href="#" class="logo">nike</a>
    <nav class="navbar">
      <a href="#home">home</a>
      <a href="#products">products</a>
      <a href="#featured">featured</a>
      <a href="#review">review</a>
    </nav>
    <div class="icons">
      <a href="#" class="fas fa-heart"></a>
      <a href="#" class="fas fa-shopping-cart"></a>
      <a href="#" class="fas fa-user"></a>
  </div>
  </header> 
  <!-- header section ends -->



  <!-- home section starts -->
  <section class="home" id="home">
    <div class="slide-container active">
      <div class="slide">
        <div class="content">
          <span>nike red shoes</span>
          <h3>nike metcon shoes</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat maiores et eos eaque veritatis aut laboriosam earum dolorem iste atque.</p>
          <a href="#" class="btn">add to cart</a>
        </div>
        <div class="image">
          <img src=<?=NIKE_ASSETS."img/home-shoe-1.png"?> class="shoe" alt="">
          <img src=<?=NIKE_ASSETS."img/home-text-1.png"?> class="text" alt="">
      </div>
      </div>
    </div>
    <div class="slide-container">
      <div class="slide">
          <div class="content">
              <span>nike blue shoes</span>
              <h3>nike metcon shoes</h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat maiores et eos eaque veritatis aut laboriosam earum dolorem iste atque.</p>
              <a href="#" class="btn">add to cart</a>
          </div>
          <div class="image">
              <img src=<?=NIKE_ASSETS."img/home-shoe-2.png"?> class="shoe" alt="">
              <img src=<?=NIKE_ASSETS."img/home-text-2.png"?> class="text" alt="">
          </div>
      </div>
    </div>
    <div class="slide-container">
      <div class="slide">
          <div class="content">
              <span>nike yellow shoes</span>
              <h3>nike metcon shoes</h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat maiores et eos eaque veritatis aut laboriosam earum dolorem iste atque.</p>
              <a href="#" class="btn">add to cart</a>
          </div>
          <div class="image">
              <img src=<?=NIKE_ASSETS."img/home-shoe-3.png"?> class="shoe" alt="">
              <img src=<?=NIKE_ASSETS."img/home-text-3.png"?> class="text" alt="">
          </div>
      </div>
    </div>
    <div id="prev" class="fas fa-chevron-left"></div>
    <div id="next" class="fas fa-chevron-right"></div>
  </section>
  <!-- home section ends -->
<!-- service section starts  -->
  <section class="service">
    <div class="box-container">
      <div class="box">
        <i class="fas fa-shipping-fast"></i>
        <h3>fast delivery</h3>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Illum, fugit.</p>
      </div>
      <div class="box">
        <i class="fas fa-undo"></i>
        <h3>10 days replacements</h3>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Illum, fugit.</p>
      </div>
      <div class="box">
          <i class="fas fa-headset"></i>
          <h3>24 x 7 support</h3>
          <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Illum, fugit.</p>
      </div> 
    </div>
  </section>
<!-- service section ends -->



<!-- products section starts  -->

  <section class="products" id="products">
    <h1 class="heading"> latest <span>products</span> </h1>
    <div class="box-container">
      <div class="box">
        <div class="icon">
          <a href="" class="fas fa-heart"></a>
          <a href="" class="fas fa-share"></a>
          <a href="" class="fas fa-eye"></a>
        </div>
        <img src=<?=NIKE_ASSETS."img/product-1.png"?> alt="">
        <div class="content">
          <h3>nike shoes</h3>
          <div class="price">$120.99 <span>$150.99</span></div>
          <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="far fa-star"></i>
          </div>
          <a href="#" class="btn">add to cart</a>
      </div>
      </div>
      <div class="box">
        <div class="icon">
          <a href="" class="fas fa-heart"></a>
          <a href="" class="fas fa-share"></a>
          <a href="" class="fas fa-eye"></a>
        </div>
        <img src=<?=NIKE_ASSETS."img/product-2.png"?> alt="">
        <div class="content">
          <h3>nike shoes</h3>
          <div class="price">$120.99 <span>$150.99</span></div>
          <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="far fa-star"></i>
          </div>
          <a href="#" class="btn">add to cart</a>
      </div>
      </div>
      <div class="box">
        <div class="icon">
          <a href="" class="fas fa-heart"></a>
          <a href="" class="fas fa-share"></a>
          <a href="" class="fas fa-eye"></a>
        </div>
        <img src=<?=NIKE_ASSETS."img/product-3.png"?> alt="">
        <div class="content">
          <h3>nike shoes</h3>
          <div class="price">$120.99 <span>$150.99</span></div>
          <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="far fa-star"></i>
          </div>
          <a href="#" class="btn">add to cart</a>
      </div>
      </div>
      <div class="box">
        <div class="icon">
          <a href="" class="fas fa-heart"></a>
          <a href="" class="fas fa-share"></a>
          <a href="" class="fas fa-eye"></a>
        </div>
        <img src=<?=NIKE_ASSETS."img/product-4.png"?> alt="">
        <div class="content">
          <h3>nike shoes</h3>
          <div class="price">$120.99 <span>$150.99</span></div>
          <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="far fa-star"></i>
          </div>
          <a href="#" class="btn">add to cart</a>
      </div>
      </div>
      <div class="box">
        <div class="icon">
          <a href="" class="fas fa-heart"></a>
          <a href="" class="fas fa-share"></a>
          <a href="" class="fas fa-eye"></a>
        </div>
        <img src=<?=NIKE_ASSETS."img/product-5.png"?> alt="">
        <div class="content">
          <h3>nike shoes</h3>
          <div class="price">$120.99 <span>$150.99</span></div>
          <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="far fa-star"></i>
          </div>
          <a href="#" class="btn">add to cart</a>
      </div>
      </div>
      <div class="box">
        <div class="icon">
          <a href="" class="fas fa-heart"></a>
          <a href="" class="fas fa-share"></a>
          <a href="" class="fas fa-eye"></a>
        </div>
        <img src=<?=NIKE_ASSETS."img/product-6.png"?> alt="">
        <div class="content">
          <h3>nike shoes</h3>
          <div class="price">$120.99 <span>$150.99</span></div>
          <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="far fa-star"></i>
          </div>
          <a href="#" class="btn">add to cart</a>
      </div>
      </div>
    </div>
  </section>

<!-- products section ends  -->

<!-- featured section starts  -->
  <section class="featured" id="featured">
    <h1 class="heading"> <span>featured</span> products </h1>
    <div class="row">
      <div class="image-container">
        <div class="small-image">
          <img src=<?=NIKE_ASSETS."img/f-img-1.1.png"?> class="featured-image-1" alt="">
          <img src=<?=NIKE_ASSETS."img/f-img-1.2.png"?> class="featured-image-1" alt="">
          <img src=<?=NIKE_ASSETS."img/f-img-1.3.png"?> class="featured-image-1" alt="">
          <img src=<?=NIKE_ASSETS."img/f-img-1.4.png"?> class="featured-image-1" alt="">
      </div>
      <div class="big-image">
          <img src=<?=NIKE_ASSETS."img/f-img-1.1.png"?> class="big-image-1" alt="">
      </div>
      </div>
      <div class="content">
        <h3>new nike airmax shoes</h3>
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="far fa-star"></i>
        </div>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta facilis praesentium odit voluptas illum iure libero quis fuga commodi. Autem.</p>
        <div class="price">$80.99 <span>$120.99</span></div>
        <a href="#" class="btn">add to cart</a>
      </div>
    </div>
    <div class="row">
      <div class="image-container">
        <div class="small-image">
          <img src=<?=NIKE_ASSETS."img/f-img-2.1.png"?> class="featured-image-2" alt="">
          <img src=<?=NIKE_ASSETS."img/f-img-2.2.png"?> class="featured-image-2" alt="">
          <img src=<?=NIKE_ASSETS."img/f-img-2.3.png"?> class="featured-image-2" alt="">
          <img src=<?=NIKE_ASSETS."img/f-img-2.4.png"?> class="featured-image-2" alt="">
      </div>
      <div class="big-image">
          <img src=<?=NIKE_ASSETS."img/f-img-2.1.png"?> class="big-image-2" alt="">
      </div>

      </div>
      <div class="content">
        <h3>new nike airmax shoes</h3>
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="far fa-star"></i>
        </div>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta facilis praesentium odit voluptas illum iure libero quis fuga commodi. Autem.</p>
        <div class="price">$80.99 <span>$120.99</span></div>
        <a href="#" class="btn">add to cart</a>
      </div>
    </div>
    <div class="row">
      <div class="image-container">
        <div class="small-image">
          <img src=<?=NIKE_ASSETS."img/f-img-3.1.png"?> class="featured-image-3" alt="">
          <img src=<?=NIKE_ASSETS."img/f-img-3.2.png"?> class="featured-image-3" alt="">
          <img src=<?=NIKE_ASSETS."img/f-img-3.3.png"?> class="featured-image-3" alt="">
          <img src=<?=NIKE_ASSETS."img/f-img-3.4.png"?> class="featured-image-3" alt="">
      </div>
      <div class="big-image">
          <img src=<?=NIKE_ASSETS."img/f-img-3.1.png"?> class="big-image-3" alt="">
      </div>
      </div>
      <div class="content">
        <h3>new nike airmax shoes</h3>
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="far fa-star"></i>
        </div>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta facilis praesentium odit voluptas illum iure libero quis fuga commodi. Autem.</p>
        <div class="price">$80.99 <span>$120.99</span></div>
        <a href="#" class="btn">add to cart</a>
      </div>
    </div>
  </section>
<!-- featured section endes  -->

  <!-- review section starts  -->
  <section class="review" id="review">
    <h1 class="heading"> customer's <span>review</span> </h1>
    <div class="box-container">
      <div class="box">
        <img src=<?=NIKE_ASSETS."img/pic1.png"?> alt="">
        <h3>john deo</h3>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugiat, quos eum. Laborum aut a consequatur ducimus, molestias possimus quisquam rerum temporibus ipsum voluptate accusamus, unde ab asperiores? Exercitationem, unde rem.</p>
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="far fa-star"></i>
        </div>
      </div>
      <div class="box">
        <img src=<?=NIKE_ASSETS."img/pic2.png"?> alt="">
        <h3>john deo</h3>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugiat, quos eum. Laborum aut a consequatur ducimus, molestias possimus quisquam rerum temporibus ipsum voluptate accusamus, unde ab asperiores? Exercitationem, unde rem.</p>
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="far fa-star"></i>
        </div>
      </div>
      <div class="box">
        <img src=<?=NIKE_ASSETS."img/pic3.png"?> alt="">
        <h3>john deo</h3>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugiat, quos eum. Laborum aut a consequatur ducimus, molestias possimus quisquam rerum temporibus ipsum voluptate accusamus, unde ab asperiores? Exercitationem, unde rem.</p>
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="far fa-star"></i>
        </div>
      </div>
    </div>
  </section>

  <!-- review section ends  -->

  <!-- newsletter section starts  -->
  <section class="newsletter">

    <div class="content">
        <h3>monthly newsletter</h3>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Earum ullam veniam at itaque culpa hic corporis saepe dicta doloremque nihil.</p>
        <form action="">
            <input type="email" placeholder="enter your email" class="box">
            <input type="submit" value="send" class="btn">
        </form>
    </div>

</section>
  <!-- newsletter section ends -->


  <!-- footer section  -->

<section class="footer">

  <div class="box-container">

      <div class="box">
          <h3>our stores</h3>
          <a href="#">india</a>
          <a href="#">USA</a>
          <a href="#">japan</a>
          <a href="#">paris</a>
      </div>

      <div class="box">
          <h3>quick links</h3>
          <a href="#">home</a>
          <a href="#">products</a>
          <a href="#">featured</a>
          <a href="#">review</a>
      </div>

      <div class="box">
          <h3>extra links</h3>
          <a href="#">my account</a>
          <a href="#">my favorite</a>
          <a href="#">my orders</a>
          <a href="#">newsletter</a>
      </div>

      <div class="box">
          <h3>follow us</h3>
          <a href="#">facebook</a>
          <a href="#">twitter</a>
          <a href="#">instagram</a>
          <a href="#">linkedin</a>
      </div>

      <div class="credit">created by <span> mr. web designer </span> | all rights reserved</div>

  </div>

</section>










  <!-- custom js file LInk -->
  <script src=<?=NIKE_ASSETS."js/min.js"?>></script>
  </body>
</html>
