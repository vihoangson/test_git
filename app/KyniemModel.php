<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use Parsedown;

class KyniemModel extends Model
{
    protected $table = 'kyniem';
    public $timestamps = true;
    /**
     * The name of the "created at" column.
     *
     * @var string
     */
    const CREATED_AT = 'kyniem_create';

    /**
     * The name of the "updated at" column.
     *
     * @var string
     */
    const UPDATED_AT = 'kyniem_modifie';

    public function getKyniemContentAttribute($value){
        $p = new Parsedown();
        return $p->text($value);
    }
}
