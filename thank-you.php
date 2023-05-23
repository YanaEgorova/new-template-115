<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./css/style.css" />
  <title>Shop</title>
</head>

<body>


  <div class="wrapper">
   
    <div class="header__wrapper">
      <div class="container">
    
    
       <header class="header">
         <div class="header__top">
           <div class="header__btn-block">
             <button class="header__btn js_menu-btn">
               <span></span>
             </button>
           </div>

             <nav class="nav js_menu">
               <a href="./index.html" class="header__logo logo js_website-name"></a>
             
               <ul class="nav__list">
                 <li class="nav__item">
                   <a href="./contacts.html" class="nav__item">Contact Us</a>
                 </li>
                 <li class="nav__item">
                   <a href="./return.html" class="nav__item">Return Policy</a>
                 </li>
                 <li class="nav__item">
                   <a href="./purchase.html" class="nav__item">Terms of Purchase</a>
                 </li>
                 <li class="nav__item">
                   <a href="./privacy.html" class="nav__item">Privacy Notice</a>
                 </li>
                 <li class="nav__item">
                   <a href="./shipping.html" class="nav__item">Shipping Policy</a>
                 </li>
                 <li class="nav__item">
                   <a href="./use.html" class="nav__item">Terms of Use</a>
                 </li>
               </ul>
             </nav>

        
         
         </div>
       </header>
    
     </div>
   </div>

    <main class="main bg-main">
      <div class="thank-you__wrapper" >
        <section class="thank-you">
          <div class="container">
              <div class="block">
                <h1 class="title">Thank you</h1>
                <p class="text">Your order was completed successfully!</p>
                <?php if($_GET["order_id"]){ ?> 
      <p class="text" style="font-size: 3rem">Your Order ID is: <?php echo htmlspecialchars($_GET["order_id"]); ?></p>
    <?php } ?>
              </div>
          </div>
        </section>
    </div>
    </main>

    <div class="footer__wrapper">
      <div class="container">
            <footer class="footer">
        
              <div class="footer__top">
                <div class="footer__top-block">
                
            
                  <div class="footer__block">
                    <p class="footer__title">Policies</p>
                    <ul class="footer__list">
                      <li class="footer__item">
                        <a href="./return.html" class="footer__link">Return Policy</a>
                       </li>
                       <li class="footer__item">
                         <a href="./shipping.html" class="footer__link">Shipping Policy</a>
                        </li>
                    </ul>
                  </div>
                  <div class="footer__block">
                    <p class="footer__title">Info</p>
                    <ul class="footer__list">
                      <li class="footer__item">
                        <a href="./contacts.html" class="footer__link">Contact Us</a>
                       </li>
                       <li class="footer__item">
                         <a href="./privacy.html" class="footer__link">Privacy Notice</a>
                        </li>
                    
                    </ul>
                  </div>
                  <div class="footer__block">
                    <p class="footer__title">Terms</p>
                    <ul class="footer__list">
                      <li class="footer__item">
                        <a href="./purchase.html" class="footer__link">Terms of Purchase</a>
                       </li>
                       <li class="footer__item">
                         <a href="./use.html" class="footer__link">Terms of Use</a>
                        </li>
                    </ul>
                  </div>
               
                </div>
              
              </div>
        
            
            </footer>
          </div>
        </div>
        <div class="footer__wrapper footer__wrapper--sub">
          <div class="container">
                <footer class="footer">
            
                  <div class="footer__top">
                    <div class="footer__top-block">
                      <div class="footer__block">
                        <p class="footer__title">Our Contacts</p>
                        <ul class="footer__list">
                          <li class="footer__item">
                            <span class="text text--mb js_website-address"></span>
                           </li>
                           <li class="footer__item">
                            <a href="" class="footer__link js_website-email"></a>
                            </li>
                            <li class="footer__item">
                              <a href="" class="footer__link js_website-phone"></a>
                            </li>
                        </ul>
                      </div>
                
                   
                    </div>
                  
                  </div>
            
                </footer>
              </div>
            </div>
            <div class="footer__wrapper">
              <div class="container">
                <div class="footer__bottom">
                  <div class="footer__block--bottom">
               
                    <a href="./index.html" class="footer__logo logo js_website-name"></a>
                    <p class="text text--mb js_website-corp"></p>
               
                    <span class="footer__span">© All rights reserved</span>
                  </div>
                </div>
                  </div>
                </div>
     
  </div>

  <script type='text/javascript' src='https://thebestproductmanager.com/products/prices-nxg-object'></script>
  <script type="module" src="./js/on-load.js"></script>
  <script src="./js/website-data.js"></script>
  <script>
    const menuBtn = document.querySelector('.js_menu-btn');
    const menu = document.querySelector('.js_menu');
    menuBtn.addEventListener('click', () => {
      menuBtn.classList.toggle('active');
      menu.classList.toggle('open-menu');
      document.body.classList.toggle('open-menu');
    })
  </script>
    <script src="./js/tsparticles.min.js"></script>
    <script src="./js/tsparticles.preset.links.min.js"></script>
    <script>
      loadLinksPreset(tsParticles);
      tsParticles.load("tsparticles", {
        preset: "links",
        },
        
      );
      
    </script>
</body>

</html>