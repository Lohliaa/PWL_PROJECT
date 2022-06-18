@extends('user.main')
@section('user.content')
<body class="sub_page">
  <div class="hero_area">
  </div>


  <!-- contact section -->

  <section class="contact_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          Contact Us
        </h2>
      </div>
      <div class="">
        <div class="row">
          <div class="col-md-6 mx-auto">
            <form action="">
              <div class="contact_form-container">
                <div>
                  <div>
                    <input type="text" placeholder="Name">
                  </div>
                  <div>
                    <input type="email" placeholder="Email">
                  </div>
                  <div>
                    <input type="text" placeholder="Phone Number">
                  </div>
                  <div class="">
                    <input type="text" placeholder="Message" class="message_input">
                  </div>
                  <div class="mt-5 d-flex justify-content-center ">
                    <button type="submit">
                      Send
                    </button>
                  </div>
                </div>

              </div>

            </form>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- end contact section -->

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
        <div class="col-lg-2" >
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
  
  <!-- footer section -->

</body>

@endsection