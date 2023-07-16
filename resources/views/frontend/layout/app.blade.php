@include('frontend.layout.top')
<div class="hero_area">
  <header class="header_section" >
    <div class="container-fluid">
        @include('frontend.layout.menu')
    </div>
  </header>

  @yield('content')
           
@include('frontend.layout.bottom')
