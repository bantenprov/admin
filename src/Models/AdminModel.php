<?php namespace Bantenprov\Admin\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


/**
 * The AdminModel class.
 *
 * @package Bantenprov\Admin
 * @author  bantenprov <developer.bantenprov@gmail.com>
 */
class AdminModel extends Model
{
    protected $table = 'admins';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $fillable = [
        'uuid',
        'user_id',
        'opd_id',
    ];

    public function getUser()
    {
        return $this->hasOne('App\User', 'id');
    }

    public function getOpd()
    {
        return $this->belongsTo('Bantenprov\LaravelOpd\Models\LaravelOpdModel', 'opd_id');
    }
}
