<x-admin.header></x-admin.header>
            <div class="page-heading">
                <h3>
                    {{$row[0]['title']}}
                </h3>
                <span class="badge bg-success">Buka</span>
                <span class="badge bg-info">{{$row[0]['metode']}}</span>
                <span class="badge bg-dark">Pendaftaran : 12 Maret 2024 - 19 Maret 2024</span>
                <span class="badge bg-primary">Pelatihan : 20 Maret 2024 - 22 Maret 2024</span>
            </div>
            <div class="page-content">
                <section class="row">
                    <div class="col-12 col-lg-12">
                        <img src="assets/images/kominfo/downloadnow.jpeg" class="w-100" style="max-height: 28rem !important;" alt="">
                    </div>
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Ubah Data</h4>
                            </div>
    
                            <div class="card-body">
                                <form action="{{route('admin.course.update', ['slug' => $row[0]['slug']])}}" method="POST" id="myForm" enctype="multipart/form-data">
                                    @method('put')      
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-6">
        
                                            <div class="form-group">
                                                <label for="helpInputTop">Judul Pelatihan</label>
                                                <small class="text-muted">eg.<i>someone@example.com</i></small>
                                                <input name="title" value="{{$row[0]['title']}}" type="text" class="form-control" id="helpInputTop" placeholder="Judul Pelatihan">
                                            </div>

                                            <div class="form-group">
                                                <label for="helpInputTop">Image</label>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <small class="text-muted">Image</small>
                                                        <input name="image" value="{{$row[0]['image']}}" type="file" class="form-control" id="helpInputTop" placeholder="Awal">
                                                        
                                                    </div>
                                                    
                                                    <div class="col-md-6">
                                                        <small class="text-muted">Image</small>
                                                        <div class='form-check'>
                                                            <div class="checkbox">
                                                                <input type="checkbox" class="form-check-input" id="hapusGambar" name="hapusGambar" value="1">
                                                                <label for="checkbox1">Hapus Gambar</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>                                                  
                                            </div>

                                            <div class="form-group">
                                                <img src="{{$row[0]['image']}}" height="170px" width="170px" alt="">
                                            </div>

                                        </div>
                                        <div class="col-md-6">
                                                
                                            <div class="form-group">
                                                <label for="helpInputTop">Tanggal Pendaftaran</label>
                                                <small class="text-muted">eg.<i>someone@example.com</i></small>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <small class="text-muted">Awal</small>
                                                        <input name="regist_start" value="{{$row[0]['regist_start']}}" type="date" class="form-control" id="helpInputTop" placeholder="Awal">
                                                        
                                                    </div>
                                                    
                                                    <div class="col-md-6">
                                                        <small class="text-muted">AKhir</small>
                                                        <input name="regist_end" value="{{$row[0]['regist_end']}}" type="date" class="form-control" id="helpInputTop" placeholder="Akhir">
                                                    </div>
                                                </div>                                                  
                                            </div>
                
                                            
                
                                            <div class="form-group">
                                                <label for="helpInputTop">Tanggal Pelatihan</label>
                                                <small class="text-muted">eg.<i>someone@example.com</i></small>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <small class="text-muted">Awal</small>
                                                        <input name="event_start" value="{{$row[0]['event_start']}}" type="date" class="form-control" id="helpInputTop" placeholder="Awal">
                                                        
                                                    </div>
                                                    
                                                    <div class="col-md-6">
                                                        <small class="text-muted">AKhir</small>
                                                        <input name="event_end" value="{{$row[0]['event_end']}}" type="date" class="form-control" id="helpInputTop" placeholder="Akhir">
                                                    </div>
                                                </div>                                            
                                            </div>

                                            <div class="form-group">
                                                <label for="helperText">Lokasi</label>
                                                <input name="lokasi" type="text" value="{{$row[0]['lokasi']}}" id="helperText" class="form-control" placeholder="Lokasi">
                                                <p><small class="text-muted">Find helper text here for given textbox.</small>
                                                </p>
                                            </div>

                                            <div class="form-group">
                                                <label for="helperText">Metode</label>
                                                <fieldset class="form-group">
                                                    <select name="metode" class="form-select" id="basicSelect">
                                                        <option value="online">Online / Daring</option>
                                                        <option value="offline">Offline / Luring</option>
                                                    </select>
                                                </fieldset>
                                                <p><small class="text-muted">Find helper text here for given textbox.</small>
                                                </p>
                                            </div>
                                            
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="card">
                                                <div class="card-body">
                                                    <p>Deskripsi Pelatihan</p>
                                                    <input value="{{$row[0]['body']}}" type="text" class="text-area w-100" name="body">
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
                </section>

            </div>

            <x-admin.footer></x-admin.footer>