<x-user.header></x-user.header>
<x-user.navbar></x-user.navbar>
<section class="breadcrumbs">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center">
        <h2>{{$row[0]['title']}}</h2> 
      </div>

    </div>
</section><!-- Breadcrumbs Section -->

  <!-- ======= Portfolio Details Section ======= -->
<section id="course" class="portfolio-details">
    <div class="container">

      <div class="row">
        
        <div class="col-lg-8">
          <div class="portfolio-details-slider swiper">

            <div class="portfolio-description">
              <h2>Deskripsi Pelatihan</h2>
              <p>
                {{$row[0]['body']}}
              </p>
              <h2>Lokasi Pelatihan</h2>
              <p>
                {{$row[0]['lokasi']}}
              </p>
              
            </div>
          </div>
        </div>

        

        <div class="col-lg-4">
          <div class="portfolio-info">
            <h3>Project information</h3>
            <ul class="cilik">
              <li><strong>Tgl. Awal Pendaftaran</strong>: {{$row[0]['regist_start']}}</li>
              <li><strong>Tgl. Akhir Pendafataran</strong>: {{$row[0]['regist_end']}}</li>
              <li><strong>Tgl. Awal Pelatihan</strong>: {{$row[0]['event_start']}}</li>
              <li><strong>Tgl. Akhir Pelatihan</strong>: {{$row[0]['event_end']}}</li>
              <li><strong>Status</strong>: Buka</li>
              <li><strong>Metode</strong>: {{$row[0]['metode']}}</li>
            </ul>
          </div>

          <button type="button" class="btn btn-outline-primary w-100 mt-2" data-toggle="modal" data-target="#exampleModal">
              Daftar Sekarang
          </button>

          <form action="{{ route('course.detail', ['slug' => $row[0]['slug']]) }}" method="POST">
            @csrf
              <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Daftar Sekarang</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                          <div class="modal-body">
                            
                            <div class="form-group">
                              <label for="helpInputTop">Nama Peserta Pelatihan *</label>
                              <small class="text-muted"></small>
                              <input type="text" required name="name" required class="form-control" id="helpInputTop" placeholder="Masukkan Nama Peserta">
                            </div>
                            <div class="form-group">
                              <label for="helpInputTop">Institut / Asal Sekolah *</label>
                              <small class="text-muted">contoh.<i>SMKN 1 Surabaya</i></small>
                              <input type="text" required name="institut" required class="form-control" id="helpInputTop" placeholder="Masukkan Nama Institut / Asal Sekolah">
                            </div>
                            <div class="form-group">
                              <label for="helpInputTop">Kelas / Jabatan *</label>
                              <small class="text-muted">contoh.<i>Kelas 2B</i></small>
                              <input type="text" required name="jabatan" required class="form-control" id="helpInputTop" placeholder="Masukkan Kelas / Jabatan">
                            </div>
                            <div class="form-group">
                              <label for="helpInputTop">Nomer HP</label>
                              <small class="text-muted">contoh.<i>+621234567890</i></small>
                              <input type="text" name="no_hp" class="form-control" id="helpInputTop" placeholder="Masukkan Nomer HP">
                            </div>
                          </div>

                          <input type="hidden" name="pelatihan_id" value="{{$row[0]['id']}}">

                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                      </div>
                    </div>
                  </div>
              </div>
          </form>

        </div>

      </div>

    </div>
</section><!-- End Portfolio Details Section -->
<x-user.footer></x-user.footer>