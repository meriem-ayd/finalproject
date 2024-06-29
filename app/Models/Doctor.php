<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $table = 'doctors';

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function bonCommandeServices(){
        return $this->hasMany(BonCommandeService::class, 'id_doc');


    }
    public function ordonnances(){
        return $this->hasMany(Ordonnance::class,'id_doc');


    }
    public function service(){
        return $this->belongsTo(Service::class);

    }
}
