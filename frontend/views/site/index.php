<?php

/* @var $this yii\web\View */
use \yii\web\View;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use frontend\assets\HomePageAsset;

HomePageAsset::register($this);

$this->title = 'TALENTS';
?>

  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>

    <div class="intro-section" id="home-section">
      <div class="slide-1" style="background-image: url('img/home/hero_1.jpg');" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-12">
              <div class="row align-items-center">
                <div class="col-lg-6 mb-4 l-talent">
                  <h1  data-aos="fade-up" data-aos-delay="100">LOGO</h1>
                  <div class="mb-5"  data-aos="fade-up" data-aos-delay="200">
                    <p>Bring out your Talents</p><p>Discover a new Universe</p>
                  </div>
                  <div class="short-hr mb-5" data-aos="fade-up" data-aos-delay="200"></div>
                  <p data-aos="fade-up" data-aos-delay="300" class="intro-section-low-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro eius suscipit delectus enim iusto tempora, adipisci at provident.</p>
                  <p data-aos="fade-up" data-aos-delay="300">
                    <a href="#" class="btn btn-primary py-3 px-5 btn-pill more-btn">More</a>
                  </p>
                </div>
                <div class="col-lg-5 ml-auto" data-aos="fade-up" data-aos-delay="500">
                  <h3 class="h4 text-black mb-4 register-now">Register <span>now</span></h3>  
                  <form action="" method="post" id="registerForm" class="form-box">
                    
                    <div class="form-group mb-4">
                      <input type="text" class="form-control" placeholder="Name">
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Email">
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control" placeholder="Password">
                    </div>
                    
                  </form>
                  <div class="form-group registerForm">
                    <input type="submit" form="registerForm" class="btn btn-primary btn-pill" value="get started">
                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="news-section" data-aos="fade-up" data-aos-delay="100"> 
      <div class="container">
        <div class="row">
          <div class="col-lg-5 col-md-6 pt-4 pb-4 news-section-left">
            <h3 clsas="news-section-title">News</h3>
            <p clsas="news-section-info">
              All the updates bla bla bla bla bla bla...
            </p>
          </div>

          <div class="col-lg-7 col-md-6 pt-4 pb-4 news-section-right">
            <img src="/" alt="LOGO" class="">
            <p>Lorem ipsum dolor sit amet ipsa nulla adipisicing elit</p>
          </div>
        </div>
      </div>
    </div>
    <div class="site-section services-title" id="services-section">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-12 text-center" data-aos="fade-up" data-aos-delay="100">
            <h2 class="section-title">Services</h2>
          </div>
        </div>

        <div class="row mt-5">
            <div class="col-md-6 col-lg-6 mb-5 pt-4 course align-self-stretch">
              <figure class="m-0">
                <a href="#"><img src="img/home/img_1.jpg" alt="Image" class="img-fluid"></a>
              </figure>
              <div class="course-inner-text py-4 px-4">
                <span class="course-price">$20</span>
                <div class="meta"><span class="icon-clock-o"></span>4 Lessons / 12 week</div>
                <h3><a href="#">Study Law of Physics</a></h3>
                <p>Lorem ipsum dolor sit amet ipsa nulla adipisicing elit. </p>
              </div>
              <div class="d-flex border-top stats">
                <div class="py-3 px-4"><span class="icon-users"></span>Service 1</div>
              </div>
            </div>

            <div class="col-md-6 col-lg-6 mb-5 pt-4 course align-self-stretch">
              <figure class="m-0">
                <a href="#"><img src="img/home/img_2.jpg" alt="Image" class="img-fluid"></a>
              </figure>
              <div class="course-inner-text py-4 px-4">
                <span class="course-price">$99</span>
                <div class="meta"><span class="icon-clock-o"></span>4 Lessons / 12 week</div>
                <h3><a href="#">Logo Design Course</a></h3>
                <p>Lorem ipsum dolor sit amet ipsa nulla adipisicing elit. </p>
              </div>
              <div class="d-flex border-top stats">
                <div class="py-3 px-4"><span class="icon-users"></span>Service 2</div>
              </div>
            </div>

            <div class="col-md-6 col-lg-6 mb-5 pt-4 course align-self-stretch">
              <figure class="m-0">
                <a href="#"><img src="img/home/img_3.jpg" alt="Image" class="img-fluid"></a>
              </figure>
              <div class="course-inner-text py-4 px-4">
                <span class="course-price">$99</span>
                <div class="meta"><span class="icon-clock-o"></span>4 Lessons / 12 week</div>
                <h3><a href="#">JS Programming Language</a></h3>
                <p>Lorem ipsum dolor sit amet ipsa nulla adipisicing elit. </p>
              </div>
              <div class="d-flex border-top stats">
                <div class="py-3 px-4"><span class="icon-users"></span>Service 3</div>
              </div>
            </div>

            <div class="col-md-6 col-lg-6 mb-5 pt-4 course align-self-stretch">
              <figure class="m-0">
                <a href="#"><img src="img/home/img_4.jpg" alt="Image" class="img-fluid"></a>
              </figure>
              <div class="course-inner-text py-4 px-4">
                <span class="course-price">$20</span>
                <div class="meta"><span class="icon-clock-o"></span>4 Lessons / 12 week</div>
                <h3><a href="#">Study Law of Physics</a></h3>
                <p>Lorem ipsum dolor sit amet ipsa nulla adipisicing elit. </p>
              </div>
              <div class="d-flex border-top stats">
                <div class="py-3 px-4"><span class="icon-users"></span>Service 4</div>
              </div>
            </div>

            <div class="col-md-6 col-lg-6 mb-5 pt-4 course align-self-stretch">
              <figure class="m-0">
                <a href="#"><img src="img/home/img_5.jpg" alt="Image" class="img-fluid"></a>
              </figure>
              <div class="course-inner-text py-4 px-4">
                <span class="course-price">$99</span>
                <div class="meta"><span class="icon-clock-o"></span>4 Lessons / 12 week</div>
                <h3><a href="#">Logo Design Course</a></h3>
                <p>Lorem ipsum dolor sit amet ipsa nulla adipisicing elit. </p>
              </div>
              <div class="d-flex border-top stats">
                <div class="py-3 px-4"><span class="icon-users"></span>Service 5</div>
              </div>
            </div>

            <div class="col-md-6 col-lg-6 mb-5 pt-4 course align-self-stretch">
              <figure class="m-0">
                <a href="#"><img src="img/home/img_6.jpg" alt="Image" class="img-fluid"></a>
              </figure>
              <div class="course-inner-text py-4 px-4">
                <span class="course-price">$99</span>
                <div class="meta"><span class="icon-clock-o"></span>4 Lessons / 12 week</div>
                <h3><a href="#">JS Programming Language</a></h3>
                <p>Lorem ipsum dolor sit amet ipsa nulla adipisicing elit. </p>
              </div>
              <div class="d-flex border-top stats">
                <div class="py-3 px-4"><span class="icon-users"></span>Service 6</div>
              </div>
            </div>

        </div>

      </div>
    </div>

    <div class="site-section" id="companies-section">
      <div class="container-fluid">
        <div class="container">
          <div class="row mb-5 align-items-center">
            <div class="col-lg-5 mb-5" data-aos="fade-up" data-aos-delay="100">
              <img src="img/home/undraw_youtube_tutorial.svg" alt="Image" class="img-fluid">
            </div>
            <div class="col-lg-6 ml-auto companies-section-desc" data-aos="fade-up" data-aos-delay="200">
              <h2 class="text-black mb-5">Companies</h2>
              <div class="companies-short-hr mb-5"></div>
              <p class="mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elitor sit amet imus fugiat quo molestiae illo Lorem ipsum dolor sit amet consectetur adipisicing elitor sit amet imus fugiat quo molestiae illo Lorem ipsum dolor sit amet consectetur adipisicing elitor sit amet imus fugiat quo molestiae illo</p>

              <div class="d-flex align-items-center custom-icon-wrap mb-4">
                <span class="custom-icon-inner mr-5"><span class="icon icon-graduation-cap"></span></span>
                <div>
                  <h3 class="mb-1">Title</h3>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit or sit amet imus fugiat quo molestiae illo imus fugiat quo molestiae illo</p>
                </div>
              </div>

              <div class="d-flex align-items-center custom-icon-wrap">
                <span class="custom-icon-inner mr-5"><span class="icon icon-university"></span></span>
                <div>
                  <h3 class="mb-1">Title</h3>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elitor sit amet imus fugiat quo molestiae illo Lorem ipsum dolor sit amet consectetur adipisicing elitor sit amet imus fugiat quo molestiae illo Lorem ipsum dolor sit amet consectetur adipisicing elitor sit amet imus fugiat quo molestiae illo</p>
                </div>
              </div>

            </div>
          </div>
        </div>

        <div id="talents-section" class="pt-5 pt-4">
          <div class="container">
            <div class="row mb-5 align-items-center">
              <div class="owl-carousel col-12 nonloop-block-15">

                <div class="talents-item">
                  <div class="col-lg-6 mr-auto order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
                    <h2 class="text-black mb-4">Talents 1</h2>
                    <div class="talents-short-hr mb-3"></div>
                    <p class="mb-4">Forem ipsum dolor sit amet consectetur adipisicing elit. Rem maxime nam porro possimus fugiat quo molestiae illo. Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem maxime nam porro possimus fugiat quo molestiae illo. Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem maxime nam porro possimus fugiat quo molestiae illo.</p>
                    <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem maxime nam porro possimus fugiat quo molestiae illo. Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem maxime nam porro possimus fuo.</p>
                    <p data-aos="fade-up" data-aos-delay="300" class="talents-section-btn">
                      <a href="#" class="btn btn-primary py-3 px-5 btn-pill more-btn">See rofile</a>
                    </p>
                  </div>
                  <div class="col-lg-6 mb-5 order-1 order-lg-2 pt-5" data-aos="fade-up" data-aos-delay="100">
                    <img src="img/home/person_1.jpg" alt="Image" class="img-fluid w-50 rounded-circle mx-auto mb-4">
                  </div>
                </div>

                <div class="talents-item">
                  <div class="col-lg-6 mr-auto order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
                    <h2 class="text-black mb-4">Talents 2</h2>
                    <div class="talents-short-hr mb-3"></div>
                    <p class="mb-4">Norem ipsum dolor sit amet consectetur adipisicing elit. Rem maxime nam porro possimus fugiat quo molestiae illo. Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem maxime nam porro possimus fugiat quo molestiae illo. Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem maxime nam porro possimus fugiat quo molestiae illo.</p>
                    <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem maxime nam porro possimus fugiat quo molestiae illo. Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem maxime nam porro possimus fuo.</p>
                    <p data-aos="fade-up" data-aos-delay="300" class="talents-section-btn">
                      <a href="#" class="btn btn-primary py-3 px-5 btn-pill more-btn">See rofile</a>
                    </p>
                  </div>
                  <div class="col-lg-6 mb-5 order-1 order-lg-2 pt-5" data-aos="fade-up" data-aos-delay="100">
                    <img src="img/home/person_2.jpg" alt="Image" class="img-fluid w-50 rounded-circle mx-auto mb-4">
                  </div>
                </div>

                <div class="talents-item">
                  <div class="col-lg-6 mr-auto order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
                    <h2 class="text-black mb-4">Talents</h2>
                    <div class="talents-short-hr mb-3"></div>
                    <p class="mb-4">Korem ipsum dolor sit amet consectetur adipisicing elit. Rem maxime nam porro possimus fugiat quo molestiae illo. Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem maxime nam porro possimus fugiat quo molestiae illo. Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem maxime nam porro possimus fugiat quo molestiae illo.</p>
                    <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem maxime nam porro possimus fugiat quo molestiae illo. Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem maxime nam porro possimus fuo.</p>
                    <p data-aos="fade-up" data-aos-delay="300" class="talents-section-btn">
                      <a href="#" class="btn btn-primary py-3 px-5 btn-pill more-btn">See rofile</a>
                    </p>
                  </div>
                  <div class="col-lg-6 mb-5 order-1 order-lg-2 pt-5" data-aos="fade-up" data-aos-delay="100">
                    <img src="img/home/person_3.jpg" alt="Image" class="img-fluid w-50 rounded-circle mx-auto mb-4">
                  </div>
                </div>

                <div class="talents-item">
                  <div class="col-lg-6 mr-auto order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
                    <h2 class="text-black mb-4">Talents 4</h2>
                    <div class="talents-short-hr mb-3"></div>
                    <p class="mb-4">Borem ipsum dolor sit amet consectetur adipisicing elit. Rem maxime nam porro possimus fugiat quo molestiae illo. Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem maxime nam porro possimus fugiat quo molestiae illo. Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem maxime nam porro possimus fugiat quo molestiae illo.</p>
                    <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem maxime nam porro possimus fugiat quo molestiae illo. Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem maxime nam porro possimus fuo.</p>
                    <p data-aos="fade-up" data-aos-delay="300" class="talents-section-btn">
                      <a href="#" class="btn btn-primary py-3 px-5 btn-pill more-btn">See rofile</a>
                    </p>
                  </div>
                  <div class="col-lg-6 mb-5 order-1 order-lg-2 pt-5" data-aos="fade-up" data-aos-delay="100">
                    <img src="img/home/person_4.jpg" alt="Image" class="img-fluid w-50 rounded-circle mx-auto mb-4">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="site-section" id="why-us-section">
          <div class="container">
            <div class="row mb-5 justify-content-center">
              <div class="col-lg-12 mb-5 text-center"  data-aos="fade-up" data-aos-delay="">
                <h2 class="section-title mb-3">Why work with us</h2>
                <div class="whyus-short-hr  mb-3"><div></div></div>
                <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>
              </div>
            </div>
            <div class="row why-us-section-ideas">
              <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="why-us-section-item text-center">
                  <img src="img/home/person_1.jpg" alt="Image" class="img-fluid w-50 rounded-circle mx-auto mb-4">
                  <div class="py-2">
                    <h3 class="text-black">Idea 1</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro eius suscipit delectus enim iusto tempora, adipisci at provident.</p>
                  </div>
                </div>
              </div>

              <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="why-us-section-item text-center">
                  <img src="img/home/person_2.jpg" alt="Image" class="img-fluid w-50 rounded-circle mx-auto mb-4">
                  <div class="py-2">
                    <h3 class="text-black">Idea 2</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro eius suscipit delectus enim iusto tempora, adipisci at provident.</p>
                  </div>
                </div>
              </div>

              <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="300">
                <div class="why-us-section-item text-center">
                  <img src="img/home/person_3.jpg" alt="Image" class="img-fluid w-50 rounded-circle mx-auto mb-4">
                  <div class="py-2">
                    <h3 class="text-black">Idea 3</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro eius suscipit delectus enim iusto tempora, adipisci at provident.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="row mb-5 pt-5 pb-4 align-items-center" id="statistics-section">
          <div class="col-lg-12 m-auto mb-5 justify-content-center">
              <div class="mb-5 text-center"  data-aos="fade-up" data-aos-delay="">
                <h2 class="section-title mb-3">Statistics</h2>
                <div class="whyus-short-hr mb-3"><div></div></div>
                <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing adipisicing elit. </p>
              </div>
            </div>
          <div class="col-lg-4 ml-auto" data-aos="fade-up" data-aos-delay="200">
            <h2 class="text-black mb-4">Latest Information</h2>
            <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem maxime nam porro possimus fugiat quo molestiae illo possimus fugiat quo molestiae illo.</p>
            <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem maxime nam porro possimus fugiat quo molestiae illo possimus fugiat quo molestiae illo possimus fugiat quo molestiae illo.</p>
            <div class="d-flex align-items-center custom-icon-wrap mb-3">
              <a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit.</a>
            </div>
            <div class="d-flex align-items-center custom-icon-wrap mb-3">
              <a href="#">Hoxem ipsum dolor sit amet consectetur adipisicing elit.</a>
            </div>
          </div>

          <div class="col-lg-7 mb-5" data-aos="fade-up" data-aos-delay="100">
            <img src="img/home/undraw_teacher.svg" alt="Image" class="img-fluid">
          </div>
        </div>

        <div class="site-section" id="customers-review">
          <div class="container">
            <div class="row mb-3 justify-content-center">
              <div class="col-lg-12 mb-5 text-center"  data-aos="fade-up" data-aos-delay="">
                <h2 class="section-title mb-3">what our customers are saying</h2>
                <div class="whyus-short-hr mb-3"><div></div></div>
                <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>
              </div>
            </div>
            <div class="row why-us-section-ideas">
              <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="customers-review-item text-center py-4 px-3">
                  <div class="py-2">
                    <p>Lorem ipsum dolor sit amet,Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro eius suscipit delectus enim iusto tempora, adipisci at provident.</p>
                  </div>
                </div>

                <div class="mt-5 customers-review-writers">
                  <img src="img/home/person_2.jpg" alt="Image" class="img-fluid w-25 mb-4 rounded-circle">
                  <div class="ml-3">
                    <h3 class="mb-1">David</h3>
                    <p>Manager</p>
                  </div>
                </div>

              </div>

              <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="customers-review-item text-center py-4 px-3">
                  <div class="py-2">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro eius suscipit delectus enim iusto tempora, adipisciLorem ipsum dolor sit amet, at provident.</p>
                  </div>
                </div>
                <div class="mt-5 customers-review-writers">
                  <img src="img/home/person_3.jpg" alt="Image" class="img-fluid w-25 mb-4 rounded-circle">
                  <div class="ml-3">
                    <h3 class="mb-1">Arsen</h3>
                    <p>Freelancer</p>
                  </div>
                </div>
              </div>

              <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="300">
                <div class="customers-review-item text-center py-4 px-3">
                  <div class="py-2">
                    <p>Lorem ipsum dolor sit amet,Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro eius suscipit delectus enim iusto tempora, adipisci at provident.</p>
                  </div>
                </div>
                <div class="mt-5 customers-review-writers">
                  <img src="img/home/person_4.jpg" alt="Image" class="img-fluid w-25 mb-4 rounded-circle">
                  <div class="ml-3">
                    <h3 class="mb-1">Anna</h3>
                    <p>Lawyer</p>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>

      </div>
    </div>

    

    <div class="site-section bg-image overlay" style="background-image: url('img/home/hero_1.jpg');">
      <div class="container">
        <div class="row justify-content-center align-items-center">
          <div class="col-md-8 text-center testimony">
            <h3 class="mb-4">Title if we still need sections</h3>
            <div class="paralax-more-section-hr"></div>
            <blockquote>
              <p>&ldquo; Text And more text. Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum rem soluta sit eius necessitatibus voluptate excepturi beatae ad eveniet sapiente impedit quae modi quo provident odit molestias! Rem reprehenderit assumenda &rdquo;</p>
            </blockquote>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section" id="contact-section">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-12">
            
            <div class="mb-5 text-center">
                <h2 class="section-title mb-3">Contact us</h2>
                <div class="whyus-short-hr  mb-3"><div></div></div>
                <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>
              </div>
          
            <form method="post" data-aos="fade">
              <div class="col-lg-6">
                <div class="form-group row">
                  <div class="col-md-12 mb-3 mb-lg-0">
                    <input type="text" class="form-control" placeholder="Name">
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-md-12">
                    <input type="email" class="form-control" placeholder="Email">
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-md-12">
                    <input type="text" class="form-control" placeholder="Subject">
                  </div>
                </div>
              </div>

              <div class="col-lg-6">
                <div class="form-group row">
                  <div class="col-md-12">
                    <textarea class="form-control" id="" cols="30" rows="10" placeholder="Message"></textarea>
                  </div>
                </div>
              </div>

              <div class="col-lg-12">
                <div class="form-group row">
                  <div class="mx-auto mt-5">
                    <input type="submit" class="btn py-3 px-5 btn-block btn-pill" value="Send Message">
                  </div>
                </div>
              </div>

            </form>
          </div>
        </div>
      </div>
    </div>
    
     
    <footer class="bg-black">
      <div class="container">
        
        <div class="row pt-3 text-center">
          <div class="col-md-12">
            <div>
            <p>
               &copy;<script>document.write(new Date().getFullYear());</script> 
            </p>
            </div>
          </div>
          
        </div>
      </div>
    </footer>

  
    
  </div> <!-- .site-wrap -->

