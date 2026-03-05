<x-admin.header></x-admin.header>
<style>
    .card-img-top {
        width: 100%;
        height: 200px;
        object-fit: cover;
    }
    .trash-icon {
        position: absolute;
        top: 10px;
        right: 10px;
        color: red;
    }
    .add-card {
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 2rem;
        color: #007bff;
        height: 100%;
    }
</style>
<div class="page-heading">
    <h3>Profile Statistics</h3>
</div>
<div class="page-content">
    <section class="row">
        <div class="container mt-4">
            <div class="row">
                @foreach ($rows as $row)
                <div class="col-md-4 mb-4">
                    <div class="card position-relative">
                        <img src="{{$row['image']}}" class="card-img-top" alt="Image 1">
                        <form action="{{route('admin.home.content.destroy')}}" method="post" enctype="multipart/form-data">
                            @method('delete')
                            @csrf
                            <input type="hidden" name="id" value="{{$row['id']}}">
                            <button type="submit" class="btn trash-icon"><i class="fas fa-trash fs-3"></i></button>
                        </form>                        
                    </div>
                </div>
                @endforeach
            
                <div class="col-md-4 mb-4">
                    
                        
                        <div class="card text-light bg-primary add-card">
                            <label for="file-input" class="d-flex align-items-center justify-content-center w-100 h-100">
                                <span class="fs-1">+</span>
                            </label>
                            
                                {{-- <input type="file" id="file-input" class="d-none" name="image"> --}}
                                <button type="button" class="btn btn-outline-primary w-100 mt-2" id="file-input" data-toggle="modal" data-target="#exampleModal">                                    
                                </button>                            
                        </div>
                    <form action="{{route('admin.home.content.store')}}" method="POST" enctype="multipart/form-data">
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
                                        <label for="helpInputTop">Gambar</label>
                                        <small class="text-muted"></small>
                                        <input type="file" required name="image" required class="form-control" id="helpInputTop" placeholder="Masukkan Nama Peserta">
                                      </div>
          
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
    </section>

</div>

<x-admin.footer></x-admin.footer>