@extends('user.main')
@section('user.content')
<body class="sub_page">
  <div class="hero_area">
    <!-- header section strats -->
    <!-- end header section -->
  </div>


  <!-- why section -->
  <section class="why_section layout_padding">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="detail-box">
            <div class="heading_container">
              <h2>
                Why Choose Us
              </h2>
            </div>

            <p>
              Sebagai bagian dari bangsa Indonesia, Service Motor senantiasa memperkuat kontribusinya di berbagai bidang, seperti keselamatan berkendara, pendidikan, lingkungan, dan pemberdayaan masyarakat. Diharapkan perusahaan akan terus tumbuh dan berkembang bersama masyarakat dan dapat menjadi salah satu perusahaan kebanggaan bangsa Indonesia.            </p>
            <div>
              <a href="">
                Read More
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="img-container">
            <div class="row">
              <div class="col-sm-6">
                <div class="img-box">
                  <img src="{{ asset('user/images/service.jpg') }}" alt="">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="img-box">
                  <img src="{{ asset('user/images/service2.jpg') }}" alt="">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="img-box">
                  <img src="{{ asset('user/images/sm.jpg') }}" alt="">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="img-box">
                  <img src="{{ asset('user/images/sm2.jpg') }}" alt="">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end why section -->

  <!-- service section -->

  <!-- info section -->

  <section class="info_section ">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <h6>
            Subscribe Now
          </h6>
          <p>
            There are many variations of passages of Lorem Ipsum available,
          </p>
          <form action="">
            <input type="text" placeholder="Enter your email">
            <div class="d-flex justify-content-end">
              <button>
                subscribe
              </button>
            </div>
          </form>
        </div>
        <div class="col-lg-2">
          <h6>
            Contact Us
          </h6>
          <div class="info_link-box">
            <a href="">
              <img src="{{ asset('user/images/location.png') }}" alt="">
              <span> Location</span>
            </a>
            <a href="">
              <img src="{{ asset('user/images/call.png') }}" alt="">
              <span>+6212345678901</span>
            </a>
            <a href="">
              <img src="{{ asset('user/images/envelope.png') }}" alt="">
              <span> servicemotor123@gmail.com</span>
            </a>
          </div>
          <div class="info_social">
            <div>
              <a href="">
                <img src="{{ asset('user/images/fb.png') }}" alt="">
              </a>
            </div>
            <div>
              <a href="">
                <img src="{{ asset('user/images/twitter.png') }}" alt="">
              </a>
            </div>
            <div>
              <a href="">
                <img src="{{ asset('user/images/linkedin.png') }}" alt="">
              </a>
            </div>
            <div>
              <a href="">
                <img src="{{ asset('user/images/insta.png') }}" alt="">
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end info section -->


  <!-- footer section -->
</body>
@endsection