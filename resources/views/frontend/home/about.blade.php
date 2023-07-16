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
                About our watch
              </h3>
              <p class="">
              Watcher adalah toko jam online terkemuka yang menyediakan koleksi jam tangan berkualitas tinggi untuk para pecinta jam di seluruh dunia. Kami didedikasikan untuk memberikan pengalaman belanja yang luar biasa dengan menawarkan jam tangan dari merek-merek terkenal dan terpercaya.
              <br><br>
              Kami percaya bahwa jam tangan bukan hanya alat untuk mengukur waktu, tetapi juga merupakan pernyataan gaya dan ekspresi diri. Oleh karena itu, kami menghadirkan koleksi jam tangan yang kaya dan beragam, mulai dari desain klasik yang elegan hingga gaya modern yang inovatif. Kami selalu berupaya untuk memenuhi berbagai preferensi dan kebutuhan pelanggan kami.
              </p>
              <div>
                <a href="">
                  Read More
                </a>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="about_img-box">
              <img src="{{ asset('frontend/images/about.png') }}" alt="">
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
@endsection