@extends('user.main')
@section('user.content')

<body class="sub_page">
  <div class="hero_area">
    <!-- header section strats -->
    <!-- end header section -->
  </div>

  <!-- feature section -->
  <section class="feature_section layout_padding ">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="box">
            <div class="img-box">
              <img src="{{ asset('user/images/money.png') }}" alt="">
            </div>
            <div class="detail-box">
              <h5>
                Save Money
              </h5>
              <p>
                It is a long established fact that a reader will be distracted by the readable content
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="box">
            <div class="img-box">
              <img src="{{ asset('user/images/clock.png') }}" alt="">
            </div>
            <div class="detail-box">
              <h5>
                Save Time
              </h5>
              <p>
                It is a long established fact that a reader will be distracted by the readable content
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="box">
            <div class="img-box">
              <img src="{{ asset('user/images/man.png') }}" alt="">
            </div>
            <div class="detail-box">
              <h5>
                Save Stress
              </h5>
              <p>
                It is a long established fact that a reader will be distracted by the readable content
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end feature section -->


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
            Information
          </h6>
          <ul>
            <li>
              <a href="">
                There are many
              </a>
            </li>
            <li>
              <a href="">
                variations of
              </a>
            </li>
            <li>
              <a href="">
                passages of Lorem
              </a>
            </li>
            <li>
              <a href="">
                Ipsum available,
              </a>
            </li>
            <li>
              <a href="">
                but the majority
              </a>
            </li>
          </ul>
        </div>
        <div class="col-lg-2">
          <h6>
            Helpful Links
          </h6>
          <ul>
            <li>
              <a href="">
                There are many
              </a>
            </li>
            <li>
              <a href="">
                variations of
              </a>
            </li>
            <li>
              <a href="">
                passages of Lorem
              </a>
            </li>
            <li>
              <a href="">
                Ipsum available,
              </a>
            </li>
            <li>
              <a href="">
                but the majority
              </a>
            </li>
          </ul>
        </div>
        <div class="col-lg-2">
          <h6>
            Invesments
          </h6>
          <ul>
            <li>
              <a href="">
                There are many
              </a>
            </li>
            <li>
              <a href="">
                variations of
              </a>
            </li>
            <li>
              <a href="">
                passages of Lorem
              </a>
            </li>
            <li>
              <a href="">
                Ipsum available,
              </a>
            </li>
            <li>
              <a href="">
                but the majority
              </a>
            </li>
          </ul>
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
              <span>+62 12345678901</span>
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

  <!-- footer section -->

</body>
@endsection