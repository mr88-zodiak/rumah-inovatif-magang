<x-user.header></x-user.header>
<x-user.navbar></x-user.navbar>
<style>
  .carousel-item img {
      width: 100%;
      height: 500px;
      object-fit: cover;
  }
</style>
<div id="imageCarousel" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
      <!-- Slide 1 -->
      @foreach($sliders as $slider)
      <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
          <img src="{{$slider['image']}}" class="d-block w-100" alt="Image 1">
      </div>
      @endforeach
  </div>
  <a class="carousel-control-prev" href="#imageCarousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#imageCarousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
  </a>
</div>

<section id="course" class="services">
  <div class="container" data-aos="fade-up">

    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>Selamat. </strong> {{ session('success') }}
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
    @endif

    <div class="section-title">
      <h2>Academy</h2>
      <h3>List <span>Pelatihan</span></h3>
    </div>

    <div class="row mb-2">
      <div class="col-lg-12">
        <div class="input-group d-flex justify-content-center justify-content-md-end px-4">
          <form action="{{ route('home') }}" class="form-inline" method="get">
            <input type="text" value="{{$query}}" name="query" class="form-control" style="max-width: 200px; border-radius: 10px;" placeholder="Cari Pelatihan" aria-label="" aria-describedby="basic-addon2">
            <div class="input-group-append">
              <button class="btn btn-success rounded" style="border-radius: 10px;" type="submit">Cari</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <div class="row">

      @forelse ($rows as $row)
      <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-2" data-aos="zoom-in" data-aos-delay="100">
        <div class="icon-box w-100  border border-dark">
          <div class="icon">
            <img src="{{$row['image']}}" style="max-width: 4.2rem;max-height: 4.2rem;" alt="">
          </div>
          <h4><a href="">{{$row['title']}}</a></h4>
          <p>
            <span class="badge badge-success">Buka</span>
            <span class="badge badge-dark">{{$row['metode']}}</span>
            <span class="badge badge-primary">{{$row['lokasi']}}</span>
            <span class="badge badge-info">{{$row['regist_start']}} - {{$row['regist_end']}}</span>
          </p>
          <p>
            <a href="{{ route('course.detail', ['slug' => $row['slug']]) }}" class="btn btn-outline-primary rounded-pill mt-2">Baca Detail</a>
          </p>
        </div>
      </div>

      @empty
          <div class="alert alert-danger">
            Data Products belum Tersedia.
          </div>
      @endforelse
      <div class="d-flex justify-content-center mt-4">
        {{ $rows->appends(['query' => $query])->links('pagination::bootstrap-5') }}
      </div>

  </div>
</section><!-- End Services Section -->

{{-- <x-user.contact></x-user.contact> --}}
<x-user.footer></x-user.footer>