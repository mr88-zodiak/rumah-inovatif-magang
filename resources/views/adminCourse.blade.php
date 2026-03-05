<x-admin.header></x-admin.header>
<div class="page-heading">
    <h3>
        {{$row[0]['title']}}
        <a href="{{ route('admin.course.edit', ['slug' => $row[0]['slug']]) }}" class="btn btn-warning text-dark">
            <i class="fa fa-edit"></i> Ubah
        </a>
    </h3>
    <span class="badge bg-success">Buka</span>
    <span class="badge bg-info">{{$row[0]['metode']}}</span>
    <span class="badge bg-dark">Pendaftaran : {{$row[0]['regist_start']}} - {{$row[0]['regist_end']}}</span>
    <span class="badge bg-primary">Pelatihan : {{$row[0]['event_start']}} - {{$row[0]['event_end']}}</span>
</div>
<div class="page-content">
    <section class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-head">

                </div>
                <div class="card-body">
                    <strong><label for="helpInputTop">Deskripsi Pelatihan</label></strong>
                    <p>
                        {{$row[0]['body']}}
                    </p>

                    <strong><label for="helpInputTop">Lokasi Pelatihan</label></strong>
                    <p>
                        {{$row[0]['lokasi']}}
                    </p>

                    
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="card">
            <div class="card-header">
                Tabel Peserta Pelatihan
            </div>
            <div class="card-body">
                <table class="table" id="table1">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Institut</th>
                            <th>Jabatan/Kelas</th>
                            <th>No. HP</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no=1;?>                        
                        @forelse ($rows as $row)
                        <tr>
                            <td>{{$no++}}</td>
                            <td>{{$row['name']}}</td>
                            <td>{{$row['institut']}}</td>
                            <td>{{$row['jabatan']}}</td>
                            <td>{{$row['no_hp']}}</td>                            
                        </tr>
                        @empty
                        <tr class="bg-light">
                            <td colspan="5">
                                <div class="alert alert-danger">
                                    Data Peserta Tidak Ada.
                                </div>
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>

    </section>

</div>            
<x-admin.footer></x-admin.footer>