
 @extends('user.master')
@section('content')
  <!-- /jumbotron -->
  <div class="blog jumbotron">
    <div class="container">
       <div class="col-lg-6 col-centered well text-center">
          <h1>Liên hệ</h1>
          <!-- Breadcrumb -->
          <ol class="breadcrumb text-center">
             <li><a href="index.html">Trang chủ</a></li>
             <li class="active">Liên hệ</li>
          </ol>
       </div>
    </div>
    <!-- /.container -->
 </div>
 <!-- /jumbotron -->

  <!-- Clouds SVG Divider -->
    <svg id="deco-clouds2" class="head hidden-xs" xmlns="http://www.w3.org/2000/svg" version="1.1" width="100%" height="100" viewBox="0 0 100 100" preserveAspectRatio="none">
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

  <!-- Parallax objects -->
 <div class="blog-object1 hidden-sm hidden-xs hidden-md" data-0="opacity:1;"
    data-100="transform:translatey(0%);"
    data-1025="transform:translatey(-80%);">
     <!-- Image -->
    <img src="img/blogobject1.png" alt="">
 </div>

 <div class="blog-object2 hidden-sm hidden-xs hidden-md" data-0="opacity:1;"
    data-100="transform:translatey(0%);"
    data-1025="transform:translatey(-80%);">
    <!-- Image -->
    <img src="img/blogobject2.png" alt="">
 </div>

 <section id="contact" class="color-section">
    <div class="container">

       <!-- Contact -->
       <div class="col-lg-6">
          <h4>THÔNG TIN LIÊN HỆ</h4>
          <!-- contact info -->
          <div class="contact-info">
             <p>Hotline:0834.138.138 - Cô Triều Tiên: 0935.967.333 </p>
          </div>
          <!-- address info -->
          <p>Mầm non Cô Tiên Xanh</p>
            <p>CS1: 27 An Xuân, Thanh Khê, Đà Nẵng (Gần cầu Ngã Ba Huế)</p>
            <p> CS2: 459 Tôn Đức Thắng, Liên Chiểu, Đà Nẵng (bên cạnh trường ĐHSP) </p>
          <!-- Map -->
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7668.105482178219!2d108.16658157600742!3d16.062752705539637!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31421948a11af16b%3A0x974cb868cb66f23b!2zTeG6p20gTm9uIEPDtCBUacOqbiBYYW5o!5e0!3m2!1svi!2s!4v1593230004850!5m2!1svi!2s" width="100%" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
       </div>
       <!-- Contact Form -->
       <div class="col-lg-6">
          <h4>Gửi liên hệ cho chúng tôi</h4>
          <!-- Form Starts -->
          <div id="contact_form">
             <div class="form-group">
                <input type="text" name="name" class="form-control input-field" placeholder="Họ và tên" required="">
                <input type="email" name="email" class="form-control input-field" placeholder="Email"
                   required="">
                <input type="text" name="subject" class="form-control input-field" placeholder="Chủ đề"
                   required="">
             </div>
             <textarea name="message" id="message" class="textarea-field form-control" rows="4"
                placeholder="Nội dung liên hệ" required=""></textarea>
             <button type="submit" id="submit_btn" value="Submit" class="btn center-block">Gửi liên hệ</button>
          </div>
          <!-- Contact results -->
          <div id="contact_results"></div>
       </div>
       <!--/Contact form -->
    </div>
    <!-- /container-->
 </section>
@endsection
