@extends('user.master')
@section('content')
          <!-- Slider -->
          <div id="layerslider">
            <!-- Slide 1 -->
            <div class="ls-slide" data-ls="transition2d:104;timeshift:-2000;">
               <img
                  src="https://scontent.fdad4-1.fna.fbcdn.net/v/t1.0-9/79952646_581356389097578_5878758120150269952_o.jpg?_nc_cat=100&_nc_sid=e007fa&_nc_ohc=5G-A7Xrk4v4AX8eZKs6&_nc_ht=scontent.fdad4-1.fna&oh=af44c0d0088de55c457f0635cf2879b2&oe=5F18FC10"
                  class="ls-bg" alt="Slide background" />
            </div>
            <div class="ls-slide" data-ls="transition2d:104;timeshift:-2000;">
               <img
                  src="https://scontent.fdad4-1.fna.fbcdn.net/v/t1.0-9/81250743_581358992430651_5901898605077200896_o.jpg?_nc_cat=106&_nc_sid=e007fa&_nc_ohc=3C1mbdn6poQAX8zXwlG&_nc_ht=scontent.fdad4-1.fna&oh=53d22e59dadc65ef2ccea05d7008292c&oe=5F197C59"
                  class="ls-bg" alt="Slide background" />
            </div>
            <div class="ls-slide" data-ls="transition2d:104;timeshift:-2000;">
               <img
                  src="https://scontent.fdad4-1.fna.fbcdn.net/v/t1.0-9/67347293_481285615771323_2787363642583023616_o.jpg?_nc_cat=109&_nc_sid=e007fa&_nc_ohc=RmLOppAgHdsAX-QfNWq&_nc_ht=scontent.fdad4-1.fna&oh=3c1ec34917dd56b2a2501a8cfab48261&oe=5F19F4BD"
                  class="ls-bg" alt="Slide background" />
            </div>

         </div>
         <div class="hidden-xs container-fluid cloud-divider">
            <svg id="deco-clouds1" class="head" xmlns="http://www.w3.org/2000/svg" version="1.1" width="100%" height="100"
               viewBox="0 0 100 100" preserveAspectRatio="none">
               <path d="M-5 100 Q 0 20 5 100 Z
                  M0 100 Q 5 0 10 100
                  M5 100 Q 10 30 15 100
                  M10 100 Q 15 10 20 100
                  M15 100 Q 20 30 25 100
                  M20 100 Q 25 -10 30 100
                  M25 100 Q 30 10 35 100
                  M30 100 Q 35 30 40 100
                  M35 100 Q 40 10 45 100
                  M40 100 Q 45 50 50 100
                  M45 100 Q 50 20 55 100
                  M50 100 Q 55 40 60 100
                  M55 100 Q 60 60 65 100
                  M60 100 Q 65 50 70 100
                  M65 100 Q 70 20 75 100
                  M70 100 Q 75 45 80 100
                  M75 100 Q 80 30 85 100
                  M80 100 Q 85 20 90 100
                  M85 100 Q 90 50 95 100
                  M90 100 Q 95 25 100 100
                  M95 100 Q 100 15 105 100 Z">
               </path>
            </svg>
         </div>
         <section id="latestblog">
            <div class="container">
               <!-- Section Heading -->
               <div class="section-heading">
                  <h2 class="heading-title">Tin tức</h2>
               </div>
               <!-- Carousel -->
               <div class="row py-2">
                  <!--Breaking box-->
                  <div class="col-1 col-md-3 col-lg-2 py-1 pr-md-0 mb-md-1">
                     <div class="d-inline-block d-md-block breaking-news text-center breaking-caret py-1 px-2">
                        <span class="d-none d-md-inline-block ">THÔNG BÁO </span>
                     </div>
                  </div>
                  <!--Breaking content-->
                  <div class="col-11 col-md-9 col-lg-10 pl-1 pl-md-2">
                     <div class="breaking-box pt-2 pb-1">
                        <!--marque-->
                        <marquee behavior="scroll" direction="left" onmouseover="this.stop();"
                           onmouseleave="this.start();">
                           <a class="h6 font-weight-light breaking-news-title"
                              href="#">
                              Lễ Hội " NỤ HỒNG NGÀY 8 -3</a>
                           <a class="h6 font-weight-light breaking-news-title"
                              href="#">
                              Khai trương trường mầm non CÔ TIÊN XANH
                              </a>
                        </marquee>
                     </div>
                  </div>
               </div>
               <div class="row color_block">
                  <div id="owl-blog" class="owl-carousel">
                     <div class="blog-preview col-md-12">
                        <!-- Blog image -->
                        <img
                           src="https://scontent-hkt1-1.xx.fbcdn.net/v/t1.0-9/75311704_552763591956858_8465411223662362624_o.jpg?_nc_cat=111&_nc_sid=e007fa&_nc_ohc=--lz0hVXcikAX_inDG7&_nc_ht=scontent-hkt1-1.xx&oh=1927ddf40db23e4512dd43c33de626bc&oe=5F1AB18C"
                           alt="" />
                        <div class="latest-caption text-center">
                           <a href="/bai-viet/1">
                              <h4 class="blog-heading-title">BÉ ĐI SIÊU THỊ</h4>
                           </a>
                           <!-- Post Info -->
                           <div class="post-info">
                              <p><i class="fa fa-clock-o"></i>Ngày 20 tháng 11 năm 2020</p>
                              <p><i class="fa fa-user"></i>Đăng bởi <a href="#">Cô tiên xanh</a></p>
                           </div>
                           <p>Có bao giờ ba mẹ tin tưởng giao cho bé nhiệm vụ đi siêu thị mua sắm chưa? Chắc hẳn ba mẹ
                              không thể nào tin được rằng bé có thể hoàn thành công việc đúng không nào ?</p>
                           <!-- Button-->
                           <a class="btn" href="/bai-viet/1">Xem chi tiết</a>
                        </div>
                     </div>
                     <div class="blog-preview col-md-12">
                        <!-- Blog image -->
                        <img
                           src="https://scontent-hkt1-1.xx.fbcdn.net/v/t1.0-9/75311704_552763591956858_8465411223662362624_o.jpg?_nc_cat=111&_nc_sid=e007fa&_nc_ohc=--lz0hVXcikAX_inDG7&_nc_ht=scontent-hkt1-1.xx&oh=1927ddf40db23e4512dd43c33de626bc&oe=5F1AB18C"
                           alt="" />
                        <div class="latest-caption text-center">
                           <a href="/bai-viet/1">
                              <h4 class="blog-heading-title">BÉ ĐI SIÊU THỊ</h4>
                           </a>
                           <!-- Post Info -->
                           <div class="post-info">
                              <p><i class="fa fa-clock-o"></i>Ngày 20 tháng 11 năm 2020</p>
                              <p><i class="fa fa-user"></i>Đăng bởi <a href="#">Cô tiên xanh</a></p>
                           </div>
                           <p>Có bao giờ ba mẹ tin tưởng giao cho bé nhiệm vụ đi siêu thị mua sắm chưa? Chắc hẳn ba mẹ
                              không thể nào tin được rằng bé có thể hoàn thành công việc đúng không nào ?</p>
                           <!-- Button-->
                           <a class="btn" href="/bai-viet/1">Xem chi tiết</a>
                        </div>
                     </div>
                     <div class="blog-preview col-md-12">
                        <!-- Blog image -->
                        <img
                           src="https://scontent-hkt1-1.xx.fbcdn.net/v/t1.0-9/75311704_552763591956858_8465411223662362624_o.jpg?_nc_cat=111&_nc_sid=e007fa&_nc_ohc=--lz0hVXcikAX_inDG7&_nc_ht=scontent-hkt1-1.xx&oh=1927ddf40db23e4512dd43c33de626bc&oe=5F1AB18C"
                           alt="" />
                        <div class="latest-caption text-center">
                           <a href="/bai-viet/1">
                              <h4 class="blog-heading-title">BÉ ĐI SIÊU THỊ</h4>
                           </a>
                           <!-- Post Info -->
                           <div class="post-info">
                              <p><i class="fa fa-clock-o"></i>Ngày 20 tháng 11 năm 2020</p>
                              <p><i class="fa fa-user"></i>Đăng bởi <a href="#">Cô tiên xanh</a></p>
                           </div>
                           <p>Có bao giờ ba mẹ tin tưởng giao cho bé nhiệm vụ đi siêu thị mua sắm chưa? Chắc hẳn ba mẹ
                              không thể nào tin được rằng bé có thể hoàn thành công việc đúng không nào ?</p>
                           <!-- Button-->
                           <a class="btn" href="/bai-viet/1">Xem chi tiết</a>
                        </div>
                     </div>
                  </div>
                  <!-- /owl-blog -->
               </div>
               <!-- /row -->
            </div>
            <!-- /container -->
         </section>
         <!-- /Section ends -->

         <!-- Section Callout -->
         <section id="callout" class="small-section">
            <!-- Clouds background -->
            <div class="clouds hidden-xs">
               <div class="cloud normal cloud-2">
                  <div></div>
                  <div></div>
                  <div></div>
                  <div></div>
               </div>
               <div class="cloud small cloud-3">
                  <div></div>
                  <div></div>
                  <div></div>
                  <div></div>
               </div>
               <div class="cloud tiny cloud-4">
                  <div></div>
                  <div></div>
                  <div></div>
                  <div></div>
               </div>
               <div class="cloud normal cloud-6">
                  <div></div>
                  <div></div>
                  <div></div>
                  <div></div>
               </div>

               <div class="cloud tiny cloud-8">
                  <div></div>
                  <div></div>
                  <div></div>
                  <div></div>
               </div>
               <div class="cloud small cloud-9">
                  <div></div>
                  <div></div>
                  <div></div>
                  <div></div>
               </div>
               <div class="cloud normal cloud-10">
                  <div></div>
                  <div></div>
                  <div></div>
                  <div></div>
               </div>
               <div class="cloud tiny cloud-11">
                  <div></div>
                  <div></div>
                  <div></div>
                  <div></div>
               </div>
               <div class="cloud small cloud-12">
                  <div></div>
                  <div></div>
                  <div></div>
                  <div></div>
               </div>
            </div>
            <!-- /Clouds ends -->
            <div class="container">
               <!-- Animated Sun -->
               <div class="sun hidden-sm hidden-xs">
                  <div class="sun-face">
                     <div class="sun-hlight"></div>
                     <div class="sun-leye"></div>
                     <div class="sun-reye"></div>
                     <div class="sun-lred"></div>
                     <div class="sun-rred"></div>
                     <div class="sun-smile"></div>
                  </div>
                  <!-- Sun rays -->
                  <div class="sun-anime">
                     <div class="sun-ball"></div>
                     <div class="sun-light"><b></b><s></s>
                     </div>
                     <div class="sun-light"><b></b><s></s>
                     </div>
                     <div class="sun-light"><b></b><s></s>
                     </div>
                     <div class="sun-light"><b></b><s></s>
                     </div>
                     <div class="sun-light"><b></b><s></s>
                     </div>
                     <div class="sun-light"><b></b><s></s>
                     </div>
                     <div class="sun-light"><b></b><s></s>
                     </div>
                     <div class="sun-light"><b></b><s></s>
                     </div>
                     <div class="sun-light"><b></b><s></s>
                     </div>
                     <div class="sun-light"><b></b><s></s>
                     </div>
                     <div class="sun-light"><b></b><s></s>
                     </div>
                     <div class="sun-light"><b></b><s></s>
                     </div>
                  </div>
               </div>
               <!-- /Animated Sun -->
               <div class="col-md-6 col-sm-6 text-center">
                  <div class="well">
                     <h4>MẦM NON CÔ TIÊN XANH</h4>
                     <p>DẠY CHƯA VUI CHƯA PHẢI LÀ DẠY</p>
                     <P>HỌC CHƯA VUI CHƯA PHẢI LÀ HỌC</P>
                  </div>
                  <!-- /well -->
               </div>
               <!-- /col-md-6 -->
            </div>
            <!-- /container-->
         </section>
         <!-- Section Ends-->

         <!-- Section About -->
         <section id="about">
            <div class="container">
               <div class="row about-content">
                  <!-- CHUYÊN MỤC NỔI BẬT -->
                  <div class="col-xs-12 col-md-4">
                     <div class="box-item">
                        <p class="box-title bg-color-1">
                           <span class="border-color-1"><a
                                 href="/loai-bai-viet/1">Hoạt động nhà
                                 trường</a></span>
                        </p>
                        <div class="box-content">

                           <div class="cpost">
                              <a
                                 href="/bai-viet/1">
                                 <img class="cpost-img"
                                    src="https://scontent.fdad4-1.fna.fbcdn.net/v/t1.0-9/105392052_700127750553774_4750035347282105410_n.jpg?_nc_cat=110&_nc_sid=110474&_nc_ohc=4EsWSFDyMV4AX8pRHcU&_nc_ht=scontent.fdad4-1.fna&oh=40f31a391b3eb563b6b6e9a512363d04&oe=5F1C8F83">
                              </a>
                              <a class="cpost-title"
                                 href="/bai-viet/1">
                                 <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                              </a>

                           </div>
                           <div class="line-block"></div>
                           <ul class="cpost-more">
                              <li><i class="ico-cpost-more"></i><a
                                    href="/bai-viet/1">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit.</a>
                              </li>
                              <li><i class="ico-cpost-more"></i><a
                                    href="/bai-viet/1">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit.</a></li>
                              <li><i class="ico-cpost-more"></i><a
                                    href="/bai-viet/1">Lorem ipsum dolor sit amet consectetur adipisicing elit.</a></li>
                           </ul>
                           <p class="view-more pull-right"><a
                                 href=/loai-bai-viet/1">Xem thêm <i
                                    class="fa fa-arrow-right"></i> </p>
                        </div>
                     </div>

                  </div>
                  <div class="col-xs-12 col-md-4">
                     <div class="box-item">
                        <p class="box-title bg-color-1">
                           <span class="border-color-1"><a
                                 href="/bai-viet/1">Góc phụ
                                 huynh</a></span>
                        </p>
                        <div class="box-content">

                            <div class="cpost">
                               <a
                                  href="/bai-viet/1">
                                  <img class="cpost-img"
                                     src="https://scontent.fdad4-1.fna.fbcdn.net/v/t1.0-9/105392052_700127750553774_4750035347282105410_n.jpg?_nc_cat=110&_nc_sid=110474&_nc_ohc=4EsWSFDyMV4AX8pRHcU&_nc_ht=scontent.fdad4-1.fna&oh=40f31a391b3eb563b6b6e9a512363d04&oe=5F1C8F83">
                               </a>
                               <a class="cpost-title"
                                  href="/bai-viet/1">
                                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                               </a>

                            </div>
                            <div class="line-block"></div>
                            <ul class="cpost-more">
                               <li><i class="ico-cpost-more"></i><a
                                     href="/bai-viet/1">
                                     Lorem ipsum dolor sit amet consectetur adipisicing elit.</a>
                               </li>
                               <li><i class="ico-cpost-more"></i><a
                                     href="/bai-viet/1">
                                     Lorem ipsum dolor sit amet consectetur adipisicing elit.</a></li>
                               <li><i class="ico-cpost-more"></i><a
                                     href="/bai-viet/1">Lorem ipsum dolor sit amet consectetur adipisicing elit.</a></li>
                            </ul>
                            <p class="view-more pull-right"><a
                                  href=/loai-bai-viet/1">Xem thêm <i
                                     class="fa fa-arrow-right"></i> </p>
                         </div>
                     </div>

                  </div>
                  <div class="col-xs-12 col-md-4">
                     <div class="box-item">
                        <p class="box-title bg-color-1">
                           <span class="border-color-1"><a href="http://mndaidong.pgddailoc.edu.vn/chuyen-muc/hoat-dong-nha-truong">Bữa ăn cho bé</a></span>
                        </p>
                        <div class="box-content">
                           <div class="cpost">
                                 <img class="cpost-img" src="https://www.pngkey.com/png/detail/106-1066363_healthy-food-png-healthy-food-cartoon-png.png">
                           </div>
                           <div class="line-block"></div>
                           <ul class="cpost-more">
                              <marquee height="260" behavior="SCROLL" scrolldelay="100" scrollamount="2"
                                 onmouseover="this.stop()" onmouseout="this.start()" direction="down">
                                 <li><i class="ico-cpost-more"></i><a
                                       href="/bai-viet/1">Bảng
                                       công khai thực đơn tháng 3/2019</a></li>
                                 <li><i class="ico-cpost-more"></i><a
                                       href="/bai-viet/1">Bảng
                                       công khai thực đơn tháng 2/2019</a></li>
                                 <li><i class="ico-cpost-more"></i><a
                                       href="/bai-viet/1">Bảng
                                       công khai thực tháng 01/2019</a></li>
                                 <li><i class="ico-cpost-more"></i><a
                                       href="/bai-viet/1">Bảng
                                       công khai thực đơn tháng 12/2018</a></li>
                                 <li><i class="ico-cpost-more"></i><a
                                       href="/bai-viet/1">Bảng
                                       công khai thực đơn tháng 11/2018</a></li>
                                 <li><i class="ico-cpost-more"></i><a
                                       href="/bai-viet/1">Bảng
                                       công khai thực đơn tháng 10/2018</a></li>
                                 <li><i class="ico-cpost-more"></i><a
                                       href="/bai-viet/1">Bảng công
                                       khai thực đơn tháng 9/2018</a></li>
                                 <li><i class="ico-cpost-more"></i><a
                                       href="/bai-viet/1">Bảng
                                       công khai thực đơn tuần 4 tháng 12</a></li>
                                 <li><i class="ico-cpost-more"></i><a
                                       href="/bai-viet/1">Bảng
                                       công khai thực đơn tuần 3 tháng 12</a></li>
                                 <li><i class="ico-cpost-more"></i><a
                                       href="/bai-viet/1">Bảng
                                       công khai thực đơn tuần 2 tháng 12</a></li>
                              </marquee>
                           </ul>
                           <p class="view-more pull-right"><a
                              href="/loai-bai-viet/1">Xem thêm <i
                                 class="fa fa-arrow-right"></i></a> </p>
                        </div>
                     </div>

                  </div>


               </div>
               <!-- /col-lg-7 -->
            </div>
            <!--/container-->
         </section>
         <!--/ Section ends -->

         <!-- Parallax object -->
         <div class="parallax-object1 hidden-sm hidden-xs" data-0="opacity:1;" data-100="transform:translatey(40%);"
            data-center-center="transform:translatey(-180%);">
            <!-- Image -->
            <img src="public/user/img/parallaxobject1.png" alt="">
         </div>


         <!-- Section activities -->
         <section id="activities">
            <div class="container">
               <!-- Section Heading -->
               <div class="section-heading">
                  <h2 class="heading-title">Dành cho cha mẹ</h2>
               </div>
               <!--Navigation -->
               <ul class="nav nav-tabs" id="myTab">
                  <li class="active"><a href="#tab1" data-toggle="tab">Kỹ năng nuôi dạy trẻ</a></li>
                  <li><a href="#tab2" data-toggle="tab">Dinh dưỡng - Sức khỏe cho trẻ</a></li>
               </ul>
               <div class="tabbable">
                  <div class="tab-content col-md-12 col-centered">
                     <!--Tab Content 1 -->
                     <div class="tab-pane active in fade" id="tab1">
                        <div class="row">
                           <div class="col-md-5 col-lg-5 pull-left">
                              <!-- Activity image-->
                              <img src="https://seal.deha.vn/wp-content/uploads/2019/01/525432196.jpg" alt="" class="img-responsive img-circle">
                           </div>
                           <div class="col-md-7 col-lg-7 pull-left">
                              <div class="col-md-12 blogShort">
                                 <p class="blogShort-title">9 KỸ NĂNG SỐNG QUAN TRỌNG PHẢI DẠY CON TRƯỚC 6 TUỔI</p>
                                 <div class="blogShort-content">
                                    <img src="https://elite-symbol.com/wp-content/uploads/2018/07/be-3-tuoi.jpg" alt="post img" class="pull-left img-responsive thumb margin10 img-thumbnail blogShort-img">
                                    <div>
                                       <article><p>
                                          Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text
                                          ever since the 1500s.
                                          </p></article>
                                          <a href="/bai-viet/1"> Xem thêm</a>
                                    </div>


                                 </div>
                             </div>
                             <div class="col-md-12 blogShort">
                              <p class="blogShort-title">9 KỸ NĂNG SỐNG QUAN TRỌNG PHẢI DẠY CON TRƯỚC 6 TUỔI</p>
                              <div class="blogShort-content">
                                 <img src="https://elite-symbol.com/wp-content/uploads/2018/07/be-3-tuoi.jpg" alt="post img" class="pull-left img-responsive thumb margin10 img-thumbnail blogShort-img">
                                 <div>
                                    <article><p>
                                       Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text
                                       ever since the 1500s.
                                       </p></article>
                                       <a href="/bai-viet/1"> Xem thêm</a>
                                 </div>


                              </div>
                          </div>
                          <div class="col-md-12 blogShort">
                           <p class="blogShort-title">9 KỸ NĂNG SỐNG QUAN TRỌNG PHẢI DẠY CON TRƯỚC 6 TUỔI</p>
                           <div class="blogShort-content">
                              <img src="https://elite-symbol.com/wp-content/uploads/2018/07/be-3-tuoi.jpg" alt="post img" class="pull-left img-responsive thumb margin10 img-thumbnail blogShort-img">
                              <div>
                                 <article><p>
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text
                                    ever since the 1500s.
                                    </p></article>
                                    <a href="/bai-viet/1"> Xem thêm</a>
                              </div>


                           </div>
                       </div>
                           </div>
                           <!-- /.col-md-7 -->
                        </div>
                        <!-- /.row -->
                     </div>
                     <!-- /#tab1 -->
                     <!--Tab Content 2 -->
                     <div class="tab-pane fade" id="tab2">
                        <div class="row">
                           <div class="col-md-5 col-lg-5 pull-left">
                              <!-- Activity image-->
                              <img src="https://media.doisongphapluat.com/354/2015/1/19/odet.JPG" alt="" class="img-responsive img-circle">
                           </div>
                             <div class="col-md-7 col-lg-7 pull-left">
                              <div class="col-md-12 blogShort">
                                 <p class="blogShort-title">9 KỸ NĂNG SỐNG QUAN TRỌNG PHẢI DẠY CON TRƯỚC 6 TUỔI</p>
                                 <div class="blogShort-content">
                                    <img src="https://elite-symbol.com/wp-content/uploads/2018/07/be-3-tuoi.jpg" alt="post img" class="pull-left img-responsive thumb margin10 img-thumbnail blogShort-img">
                                    <div>
                                       <article><p>
                                          Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text
                                          ever since the 1500s.
                                          </p></article>
                                          <a href="/bai-viet/1"> Xem thêm</a>
                                    </div>


                                 </div>
                             </div>
                             <div class="col-md-12 blogShort">
                              <p class="blogShort-title">9 KỸ NĂNG SỐNG QUAN TRỌNG PHẢI DẠY CON TRƯỚC 6 TUỔI</p>
                              <div class="blogShort-content">
                                 <img src="https://elite-symbol.com/wp-content/uploads/2018/07/be-3-tuoi.jpg" alt="post img" class="pull-left img-responsive thumb margin10 img-thumbnail blogShort-img">
                                 <div>
                                    <article><p>
                                       Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text
                                       ever since the 1500s.
                                       </p></article>
                                       <a href="/bai-viet/1"> Xem thêm</a>
                                 </div>


                              </div>
                          </div>
                          <div class="col-md-12 blogShort">
                           <p class="blogShort-title">9 KỸ NĂNG SỐNG QUAN TRỌNG PHẢI DẠY CON TRƯỚC 6 TUỔI</p>
                           <div class="blogShort-content">
                              <img src="https://elite-symbol.com/wp-content/uploads/2018/07/be-3-tuoi.jpg" alt="post img" class="pull-left img-responsive thumb margin10 img-thumbnail blogShort-img">
                              <div>
                                 <article><p>
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text
                                    ever since the 1500s.
                                    </p></article>
                                    <a href="/bai-viet/1"> Xem thêm</a>
                              </div>


                           </div>
                       </div>
                           </div>
                           <!-- /.col-md-7 -->
                        </div>
                        <!-- /.row -->
                     </div>
                     <!-- /#tab2 -->

                  </div>
                  <!--tab-content-->
               </div>
               <!--tababble-->
            </div>
            <!-- /container -->
         </section>
         <!-- /Section ends -->

         <!-- Parallax object -->
         <div class="parallax-object2 hidden-sm hidden-xs" data-0="opacity:1;" data-start="margin-top:40%"
            data-100="transform:translatey(0%);" data-center-center="transform:translatey(-180%);">
            <!-- Image -->
            <img src="public/user/img/parallaxobject2.png" alt="">
         </div>

         <!-- Section Gallery -->
         <section id="gallery" class="color-section">
            <!-- svg triangle shape -->
            <svg class="triangleShadow" xmlns="http://www.w3.org/2000/svg" version="1.1" width="100%" height="100"
               viewBox="0 0 100 100" preserveAspectRatio="none">
               <path class="trianglePath1" d="M0 0 L50 100 L100 0 Z" />
            </svg>
            <div class="container">
               <!-- Section heading -->
               <div class="section-heading">
                  <h2  class="heading-title">Thư viện ảnh</h2>
               </div>
               <!-- Navigation -->

               <!-- Gallery -->
               <div class="row">
                  <div class="col-md-12">
                     <div id="lightbox">
                        <!-- Image 1 -->
                        <div class="col-sm-6 col-md-6 col-lg-4">
                           <div class="portfolio-item">
                              <div class="gallery-thumb">
                                 <img class="img-responsive" src="/public/user/img/gallery/1.jpg" alt="">
                                 <span class="overlay-mask"></span>
                                 <a href="/public/user/img/gallery/1.jpg" data-gal="prettyPhoto[gallery]" class="link centered"
                                    title="Xem ảnh">
                                    <i class="fa fa-expand"></i></a>
                              </div>
                           </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-4">
                            <div class="portfolio-item">
                               <div class="gallery-thumb">
                                  <img class="img-responsive" src="/public/user/img/gallery/2.jpg" alt="">
                                  <span class="overlay-mask"></span>
                                  <a href="/public/user/img/gallery/2.jpg" data-gal="prettyPhoto[gallery]" class="link centered"
                                  title="Xem ảnh">
                                     <i class="fa fa-expand"></i></a>
                               </div>
                            </div>
                         </div>
                         <div class="col-sm-6 col-md-6 col-lg-4">
                            <div class="portfolio-item">
                               <div class="gallery-thumb">
                                  <img class="img-responsive" src="/public/user/img/gallery/3.jpg" alt="">
                                  <span class="overlay-mask"></span>
                                  <a href="/public/user/img/gallery/3.jpg" data-gal="prettyPhoto[gallery]" class="link centered"
                                  title="Xem ảnh">
                                     <i class="fa fa-expand"></i></a>
                               </div>
                            </div>
                         </div>
                         <div class="col-sm-6 col-md-6 col-lg-4">
                            <div class="portfolio-item">
                               <div class="gallery-thumb">
                                  <img class="img-responsive" src="/public/user/img/gallery/4.jpg" alt="">
                                  <span class="overlay-mask"></span>
                                  <a href="/public/user/img/gallery/4.jpg" data-gal="prettyPhoto[gallery]" class="link centered"
                                  title="Xem ảnh">
                                     <i class="fa fa-expand"></i></a>
                               </div>
                            </div>
                         </div>
                         <div class="col-sm-6 col-md-6 col-lg-4">
                            <div class="portfolio-item">
                               <div class="gallery-thumb">
                                  <img class="img-responsive" src="/public/user/img/gallery/5.jpg" alt="">
                                  <span class="overlay-mask"></span>
                                  <a href="/public/user/img/gallery/5.jpg" data-gal="prettyPhoto[gallery]" class="link centered"
                                  title="Xem ảnh">
                                     <i class="fa fa-expand"></i></a>
                               </div>
                            </div>
                         </div>
                         <div class="col-sm-6 col-md-6 col-lg-4">
                            <div class="portfolio-item">
                               <div class="gallery-thumb">
                                  <img class="img-responsive" src="/public/user/img/gallery/6.jpg" alt="">
                                  <span class="overlay-mask"></span>
                                  <a href="/public/user/img/gallery/6.jpg" data-gal="prettyPhoto[gallery]" class="link centered"
                                  title="Xem ảnh">
                                     <i class="fa fa-expand"></i></a>
                               </div>
                            </div>
                         </div>
                         <div class="col-sm-6 col-md-6 col-lg-4">
                            <div class="portfolio-item">
                               <div class="gallery-thumb">
                                  <img class="img-responsive" src="/public/user/img/gallery/7.jpg" alt="">
                                  <span class="overlay-mask"></span>
                                  <a href="/public/user/img/gallery/7.jpg" data-gal="prettyPhoto[gallery]" class="link centered"
                                  title="Xem ảnh">
                                     <i class="fa fa-expand"></i></a>
                               </div>
                            </div>
                         </div>
                         <div class="col-sm-6 col-md-6 col-lg-4">
                            <div class="portfolio-item">
                               <div class="gallery-thumb">
                                  <img class="img-responsive" src="/public/user/img/gallery/8.jpg" alt="">
                                  <span class="overlay-mask"></span>
                                  <a href="/public/user/img/gallery/8.jpg" data-gal="prettyPhoto[gallery]" class="link centered"
                                  title="Xem ảnh">
                                     <i class="fa fa-expand"></i></a>
                               </div>
                            </div>
                         </div>
                         <div class="col-sm-6 col-md-6 col-lg-4">
                            <div class="portfolio-item">
                               <div class="gallery-thumb">
                                  <img class="img-responsive" src="/public/user/img/gallery/9.jpg" alt="">
                                  <span class="overlay-mask"></span>
                                  <a href="/public/user/img/gallery/9.jpg" data-gal="prettyPhoto[gallery]" class="link centered"
                                     title="Xem ảnh">
                                     <i class="fa fa-expand"></i></a>
                               </div>
                            </div>
                         </div>

                     </div>
                     <!-- /lightbox-->
                  </div>
                  <!-- /col-md-12-->
               </div>
               <!-- /row -->
            </div>
            <!-- /container -->
         </section>
         <!-- Section ends -->



         <!-- Section Contact -->

         <!--Section ends -->


@endsection
