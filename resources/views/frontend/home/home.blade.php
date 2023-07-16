@extends('frontend.layout.app')
@section('content')

  <section class=" slider_section position-relative">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
      <div class="carousel-item active">
        <div class="slider_item-box">
        <div class="slider_item-container">
          <div class="container">
          <div class="row">
            <div class="col-md-5">
            <div class="slider_img-box">
              <div>
              <img src="{{ asset('frontend/images/jam.png') }}" alt="" class="" />
              </div>
            </div>
            </div>
            <div class="col-md-7">
            <div class="slider_item-detail">
              <div>
              <h1>
                Stylish watches
              </h1>
              <p>
                  Kami menghadirkan koleksi jam tangan berkualitas tinggi untuk memenuhi kebutuhan Anda. Dengan fokus pada desain yang elegan dan keakuratan waktu yang presisi, kami menawarkan berbagai macam jam tangan dari merek terkenal di dunia.
              </p>
              <div class="d-flex">
                <a href="" class="slider-btn2">
                  Contact Us
                </a>
              </div>
              </div>
            </div>
            </div>

          </div>
          </div>
        </div>
        </div>
      </div>
      <div class="carousel-item">
        <div class="slider_item-box">
        <div class="slider_item-container">
          <div class="container">
          <div class="row">
            <div class="col-md-5">
            <div class="slider_img-box">
              <div>
              <img src="{{ asset('frontend/images/jam2.png') }}" alt="" class="" />
              </div>
            </div>
            </div>
            <div class="col-md-7">
            <div class="slider_item-detail">
              <div>
              <h1>
                Stylish watches
              </h1>
              <p>
                  Dari jam tangan klasik yang elegan hingga jam tangan olahraga yang tangguh, kami menawarkan berbagai macam pilihan yang dapat Anda sesuaikan dengan gaya hidup Anda.
              </p>
              <div class="d-flex">
                <a href="" class="slider-btn2">
                Contact Us
                </a>
              </div>
              </div>
            </div>
            </div>

          </div>
          </div>
        </div>
        </div>
      </div>
      <div class="carousel-item">
        <div class="slider_item-box">
        <div class="slider_item-container">
          <div class="container">
          <div class="row">
            <div class="col-md-5">
            <div class="slider_img-box">
              <div>
              <img src="{{ asset('frontend/images/watch.png') }}" alt="" class="" />
              </div>
            </div>
            </div>
            <div class="col-md-7">
            <div class="slider_item-detail">
              <div>
              <h1 class="">
                Stylish watches
              </h1>
              <p>
                Jelajahi koleksi kami sekarang untuk menemukan jam tangan yang sempurna untuk Anda. Jadikan Watcher sebagai tujuan utama Anda dalam mencari jam tangan berkualitas tinggi dengan harga yang terjangkau.
              </p>
              <div class="d-flex">
                <a href="" class="slider-btn2">
                Contact Us
                </a>
              </div>
              </div>
            </div>
            </div>

          </div>
          </div>
        </div>
        </div>
      </div>
      </div>
      <div class="custom_carousel-control">
      <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="sr-only">Next</span>
      </a>
      </div>
    </div>
  </section>
</div>
  <div class="bg">

    <!-- about section -->
    <section class="about_section layout_padding">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-5 offset-md-2">
            <div class="about_detail-box">
              <h3 class="custom_heading ">
                Tentang Kami
              </h3>
              <p class="">
              Watcher adalah toko jam online terkemuka yang menyediakan koleksi jam tangan berkualitas tinggi untuk para pecinta jam di seluruh dunia. Kami didedikasikan untuk memberikan pengalaman belanja yang luar biasa dengan menawarkan jam tangan dari merek-merek terkenal dan terpercaya.
              <br><br>
              Kami percaya bahwa jam tangan bukan hanya alat untuk mengukur waktu, tetapi juga merupakan pernyataan gaya dan ekspresi diri. Oleh karena itu, kami menghadirkan koleksi jam tangan yang kaya dan beragam, mulai dari desain klasik yang elegan hingga gaya modern yang inovatif. Kami selalu berupaya untuk memenuhi berbagai preferensi dan kebutuhan pelanggan kami.
              </p>
              <div>
                <a href=""{{ asset('frontend/about') }}"">
                  Read More
                </a>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="about_img-box">
              <img src="{{ asset('frontend/images/jam3.jpg') }}" alt="">
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- end about section -->

    <!-- brand section -->
    <section class="brand_section layout_padding2">
      <div class="container">
          <div class="brand_heading">
              <h3 class="custom_heading">
                  Our Best Watch
              </h3>
              <p class="font-weight-bold">
              Watcher memiliki koleksi jam tangan yang luas dari berbagai merek ternama di dunia.
              </p>
          </div>
      </div>
      <div class="container-fluid brand_item-container">
          @foreach ($produk as $prod)
          <div class="brand_item-box">
              <div class="brand_img-box  item-{{ $prod->id }}">
                  <a href="{{ url('admin/produk/detail/'.$prod->id) }}">
                      <img src="{{ $prod->gambar }}" alt="Product Image" class="img-fluid">
                      <div class="view-more-overlay">
                          View More
                      </div>
                  </a>
              </div>
              <div class="brand_detail-box">
                  <h5>
                      $<span>{{ $prod->harga }}</span>
                  </h5>
                  <h6 class="font-weight-bold">
                      {{ $prod->nama_barang }}
                  </h6>
              </div>
          </div>
          @endforeach
      </div>
  </section>
  
    <!-- end brand section -->

    <!-- why section -->
    <section class="why_section layout_padding">
      <div class="container">
        <h3 class="custom_heading">
          Kenapa pilih watcher
        </h3>
        <p class="font-weight-bold">
        Kami berkomitmen untuk memberikan pelayanan yang ramah, responsif, dan profesional kepada setiap pelanggan kami.
        </p>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="img_box">
              <img src="{{ asset('frontend/images/feature-1.png') }}" alt="">
            </div>
            <div class="detail_box">
              <h5>
                Fast Delivery
              </h5>
              <p>
              Kami bekerja sama dengan mitra pengiriman terpercaya untuk memastikan produk Anda sampai dengan aman dan tepat waktu.
              </p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="img_box">
              <img src="{{ asset('frontend/images/feature-2.png') }}" alt="">
            </div>
            <div class="detail_box">
              <h5>
                Free Shiping
              </h5>
              <p>
              Di Watcher, kami berkomitmen untuk memberikan pengalaman belanja yang transparan dan tanpa biaya tambahan tersembunyi kepada pelanggan kami.
              </p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="img_box">
              <img src="{{ asset('frontend/images/feature-3.png') }}" alt="">
            </div>
            <div class="detail_box">
              <h5>
                Best Quality
              </h5>
              <p>
                Kami hanya menyediakan jam tangan asli dan berkualitas tinggi. Kami bekerja sama langsung dengan merek-merek terkenal dan dipercaya untuk memastikan bahwa setiap jam tangan yang kami jual memenuhi standar kualitas yang ketat.
              </p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="img_box">
              <img src="{{ asset('frontend/images/feature-4.png') }}" alt="">
            </div>
            <div class="detail_box">
              <h5>
                24x7 Customer support
              </h5>
              <p>
                Kepuasan pelanggan adalah prioritas utama bagi kami. Kami berusaha keras untuk memenuhi harapan dan kebutuhan pelanggan kami. Jika ada masalah atau ketidakpuasan, kami siap untuk mencari solusi yang memuaskan.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- end why section -->
  </div>
  <br><br>
  <!-- client section -->
  <section class="client_section layout_padding-bottom">
    <div class="container">
      <h3 class="custom_heading">
        Testimoni
      </h3>
    </div>
    <div class="container"></div>
    <div id="carouselExample2Controls" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="container">
            <div class="row">
              <div class="col-12">
                <div class="detail_box">
                  <div class="img_box">
                    <img src="{{ asset('frontend/images/rahma.jpeg') }}" alt="">
                  </div>
                  <div class="name_box">
                    <h5>
                      Rahma Oktaviyanti
                    </h5>
                  </div>
                </div>
                <div class="detail_text">
                  <p>
                  "Watcher benar-benar tempat yang luar biasa untuk mencari jam tangan berkualitas tinggi. Saya baru saja membeli jam tangan Rolex dari mereka dan saya sangat senang dengan produk yang saya terima. Harganya sangat wajar dan layanan pelanggan yang mereka berikan luar biasa. Saya pasti akan merekomendasikan Watcher kepada teman dan keluarga!"
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="container">
            <div class="row">
              <div class="col-12">
                <div class="detail_box">
                  <div class="img_box">
                    <img src="{{ asset('frontend/images/raf.jpeg') }}" alt="">
                  </div>
                  <div class="name_box">
                    <h5>
                      Rafi Taqiyuddin
                    </h5>
                  </div>
                </div>
                <div class="detail_text">
                  <p>
                  "Saya sangat terkesan dengan koleksi jam tangan yang ditawarkan oleh Watcher. Mereka memiliki merek-merek terkemuka dan desain yang menarik. Saya membeli jam tangan Tag Heuer dan saya sangat puas dengan kualitas dan tampilannya. Proses pembelian sangat lancar, dan paket saya tiba tepat waktu. Terima kasih Watcher!"
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="container">
            <div class="row">
              <div class="col-12">
                <div class="detail_box">
                  <div class="img_box">
                    <img src="{{ asset('frontend/images/idho.jpeg') }}" alt="">
                  </div>
                  <div class="name_box">
                    <h5>
                      Ridho Yustisiyo
                    </h5>
                  </div>
                </div>
                <div class="detail_text">
                  <p>
                  "Saya memiliki pengalaman yang luar biasa saat berbelanja di Watcher. Saya mencari jam tangan dengan desain yang elegan untuk hadiah ulang tahun suami saya, dan Watcher memberikan pilihan yang sangat bagus. Saya mendapatkan jam tangan Citizen yang dia sukai, dan kualitasnya sangat bagus. Tim layanan pelanggan sangat ramah dan membantu. Saya sangat puas dengan pembelian saya!"
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExample2Controls" role="button" data-slide="prev">
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExample2Controls" role="button" data-slide="next">
        <span class="sr-only">Next</span>
      </a>
    </div>

    </div>
  </section>
  <!-- end client section -->

  <!-- contact section -->
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
  <!-- end contact section -->

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