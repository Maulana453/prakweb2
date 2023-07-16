@extends('frontend.layout.app')
@section('content')
  <div class="bg">

    <!-- about section -->
    <section class="about_section layout_padding">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-5 offset-md-2">
            <div class="about_detail-box">
              <h3 class="custom_heading ">
                SEIKO 5 SPORT
              </h3>
              <h5>Model  : No.SRPD53K1</h5>
              <h5>Series : Seiko 5</h5>
              <h5>Brand  : Seiko</h5>
              <h5>Color  : Black</h5>
              <H5>Gender : Men</H5>
              <h5>Case Thickness : 13.4 mm</h5>

              <div>
                <a href="">
                  Read More
                </a>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="about_img-box">
              <img src="{{ asset('frontend/images/jam.png') }}" alt="">
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- end about section -->

  </div>


  <!-- info section -->
  <section class="info_section layout_padding">
    <div class="container">
      <div class="info_items">
        <a href="">
          <div class="item ">
            <div class="img-box box-1">
              <img src="" alt="">
            </div>
            <div class="detail-box">
              <p>
                Jakarta Pusat
              </p>
            </div>
          </div>
        </a>
        <a href="">
          <div class="item ">
            <div class="img-box box-2">
              <img src="" alt="">
            </div>
            <div class="detail-box">
              <p>
                +62 1234567890
              </p>
            </div>
          </div>
        </a>
        <a href="">
          <div class="item ">
            <div class="img-box box-3">
              <img src="" alt="">
            </div>
            <div class="detail-box">
              <p>
                watcher@gmail.com
              </p>
            </div>
          </div>
        </a>
      </div>
    </div>
  </section>
@endsection@extends('frontend.layout.app')
@section('content')
    
@endsection
