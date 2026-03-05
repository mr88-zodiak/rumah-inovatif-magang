<x-admin.header></x-admin.header>
<div class="page-heading">
    <h3>Daftar Semua Pelatihan</h3>
    
</div>
<div class="page-content">
    
  <section class="row">
    <div class="col-12 col-lg-12">
        <p>
          @if (session('success'))
          <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          @endif
          
          @if (session('danger'))
          <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('danger') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          @endif

          @if (session('warning'))
          <div class="alert alert-warning alert-dismissible fade show" role="alert">
            {{ session('warning') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          @endif

          @if (session('galat'))
          <div class="alert alert-info alert-dismissible fade show" role="alert">
            {{ session('galat') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          @endif

        <form action="{{ route('admin.course') }}" class="form-inline" method="get">
          
          <button class="btn btn-outline-primary mr-1 my-1" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
            Tambah Data
          </button>          
          <div class="row gx-0">
            <div class="col-lg-9 col-6">
              <input type="text" value="{{$query}}" name="query" class="form-control w-100" placeholder="Cari Pelatihan">
            </div>
            <div class="col-lg-3 col-6">
              <button type="submit" class="btn btn-outline-success">Cari</button>
            </div>
          </div>                
        </form>
        </p>
          <div class="collapse" id="collapseExample">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Tambah Data</h4>
                </div>

                <div class="card-body">
                  <form action="{{route('admin.course.store')}}" method="POST" id="myForm" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">

                            <div class="form-group">
                              <label for="helpInputTop">Judul Pelatihan</label>
                              @error('title')
                                <small class="text-danger"><i>{{ $message }}</i></small>
                              @endError
                              <input name="title" type="text" value="{{ old('title') }}" class="form-control" id="title" placeholder="Judul Pelatihan">
                            </div>

                            <div class="form-group">
                              <label for="helperText">Image</label>
                              <input type="file" name="image" class="form-control" id="inputGroupFile01">
                              <p><small class="text-muted">Find helper text here for given textbox.</small>
                              </p>
                            </div>                            

                            <div class="form-group">
                              <img src="https://via.placeholder.com/150x300" height="170px" width="170px" alt="">
                            </div>
                        </div>
                        <div class="col-md-6">
                                 
                            <div class="form-group">
                                <label for="helpInputTop">Tanggal Pendaftaran</label>
                                @error('regist_start')
                                  <small class="text-danger"><i>{{ $message }}</i></small>
                                @endError
                                @error('regist_end')
                                  <small class="text-danger"><i>{{ $message }}</i></small>
                                @endError
                                <div class="row">
                                    <div class="col-md-6">
                                        <small class="text-muted">Awal</small>
                                        <input name="regist_start" type="date" class="form-control" id="helpInputTop" placeholder="Awal">
                                        
                                    </div>
                                    
                                    <div class="col-md-6">
                                        <small class="text-muted">AKhir</small>
                                        <input name="regist_end" type="date" class="form-control" id="helpInputTop" placeholder="Akhir">
                                    </div>
                                </div>                                                  
                            </div>                            

                            <div class="form-group">
                              @error('event_start')
                                <small class="text-danger"><i>{{ $message }}</i></small>
                              @endError
                              @error('event_end')
                                <small class="text-danger"><i>{{ $message }}</i></small>
                              @endError
                                <label for="helpInputTop">Tanggal Pelatihan</label>
                                <div class="row">
                                    <div class="col-md-6">
                                        <small class="text-muted">Awal</small>
                                        <input name="event_start" type="date" class="form-control" id="helpInputTop" placeholder="Awal">
                                        
                                    </div>
                                    
                                    <div class="col-md-6">
                                        <small class="text-muted">AKhir</small>
                                        <input name="event_end" type="date" class="form-control" id="helpInputTop" placeholder="Akhir">
                                    </div>
                                </div>                                            
                            </div>

                            <div class="form-group">
                              <label for="helperText">Lokasi</label>
                              @error('lokasi')
                                <small class="text-danger"><i>{{ $message }}</i></small>
                              @endError
                              <input name="lokasi" type="text" value="{{ old('lokasi') }}" id="helperText" class="form-control" placeholder="Lokasi">
                              {{-- <p>
                                <small class="text-muted">Find helper text here for given textbox.</small>
                              </p> --}}
                            </div>

                          <div class="form-group">
                              <label for="helperText">Metode</label>
                              @error('metode')
                                <small class="text-danger"><i>{{ $message }}</i></small>
                              @endError
                              <fieldset class="form-group">
                                  <select name="metode" class="form-select" id="basicSelect">
                                      <option value="online">Online / Daring</option>
                                      <option value="offline">Offline / Luring</option>
                                  </select>
                              </fieldset>
                          </div>
                            
                        </div>
                    </div>
                  
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">                                  
                                  <label for="helpInputTop">Deskripsi Pelatihan</label>
                                  @error('body')
                                    <small class="text-danger"><i>{{ $message }}</i></small>
                                  @endError
                                  <textarea class="form-control" name="body" id="exampleFormControlTextarea1" rows="3"></textarea>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary">Tambahkan</button>
                        </div>
                    </div>
                  </form>
                </div>
            </div>
          </div>
    </div>
  </section>

    <section class="row">
      @foreach($rows as $row)
      <div class="col-md-12">
        <div class="card mb-3">
            <div class="card-body">
              <h5 class="card-title">
                {{$row['title']}}                   
                <span class="badge bg-success mr-1 mt-1">Buka</span>
              </h5>
              <h6 class="card-subtitle mb-2 text-muted text-sm form-inline">                    
                <i class="fa fa-calendar mx-1"></i> {{$row['regist_start']}} - {{$row['regist_end']}} | 
                <i class="fa fa-mobile mx-1"></i> Metode : {{$row['metode']}} |
                <i class="fa fa-user mx-1"></i> Peserta : {{$row['jumlah_peserta']}}
              </h6>
              <div class="d-flex">
                <a href="{{ route('admin.course.detail', ['slug' => $row['slug']]) }}" class="mx-1 btn btn-sm btn-primary rounded">
                  <i class="fa fa-eye"></i> Detail
                </a>
  
                <a href="{{ route('admin.course.edit', ['slug' => $row['slug']]) }}" class="mx-1 btn btn-sm btn-secondary text-light rounded">
                  <i class="fa fa-wrench"></i> Sunting
                </a>
                
                <form action="{{ route('admin.course.destroy', ['slug' => $row['slug']]) }}" method="post">
                  @method('delete')
                  @csrf
                  <button class="btn btn-sm btn-danger rounded form-inline mx-1" type="submit">
                    <i class="fa fa-trash"></i> Hapus
                  </button>
                </form>
              </div>                  
              
            </div>
        </div>
      </div>
      @endforeach        
      <div class="d-flex justify-content-center mt-4">
        {{ $rows->appends(['query' => $query])->links('pagination::bootstrap-5') }}
      </div>
      
    </section>
</div>

<x-admin.footer></x-admin.footer>
