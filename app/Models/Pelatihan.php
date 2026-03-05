<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Peserta;
use Illuminate\Support\Str;

use Cviebrock\EloquentSluggable\Sluggable;

class Pelatihan extends Model
{
    use HasFactory, Sluggable;


    protected $guarded = [
        'id',
    ];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    public static function litePaginate($page, $query)
    {
        if($query == null){
            return self::select('title', 'metode','regist_start','regist_end','slug','image')            
            ->paginate($page);
        }else{
            return self::select('title', 'metode','regist_start','regist_end','slug','image')
            ->where('title', 'like', '%' . $query . '%')
            ->paginate($page);
        }
        
    }

    public static function litePaginateWithCount($page, $query)
    {
        if($query == null){
            return self::leftJoin('pesertas', 'pelatihans.id', '=', 'pesertas.pelatihan_id')
            ->select('pelatihans.title','pelatihans.metode','image','pelatihans.regist_start','pelatihans.regist_end','pelatihans.slug'
            ,Peserta::raw('COUNT(pesertas.id) as jumlah_peserta'))
            ->groupBy('pelatihans.id')
            ->paginate($page);
        }else{
            return self::leftJoin('pesertas', 'pelatihans.id', '=', 'pesertas.pelatihan_id')
            ->select('pelatihans.title','pelatihans.metode','image','pelatihans.regist_start','pelatihans.regist_end','pelatihans.slug'
            ,Peserta::raw('COUNT(pesertas.id) as jumlah_peserta'))
            ->groupBy('pelatihans.id')
            ->where('title', 'like', '%' . $query . '%')
            ->paginate($page);
        }
        
    }

    
}
