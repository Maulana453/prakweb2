@extends('frontend.layout.app')
@section('content')
  <section class="contact_section layout_padding">
    <h2 class="custom_heading text-center">
      NOW CONTACT US
    </h2>
    <div class="container mt-5 pt-5">
      <form action="">
        <div>
          <input type="text" placeholder="NAME">
        </div>
        <div>
          <input type="email" placeholder="EMAIL">
        </div>
        <div>
          <input type="text" placeholder="PHONE NUMBER">
        </div>
        <div>
          <input type="text" class="message-box" placeholder="MESSAGE">
        </div>
        <div class="d-flex justify-content-center mt-5 pt-5">
          <button>
            SEND
          </button>
        </div>
      </form>
    </div>
  </section>
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
@endsection