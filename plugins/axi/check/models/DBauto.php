<?php namespace Axi\Check\Models;

use Model;

/**
 * DBauto Model
 */
class DBauto extends Model
{

    /**
     * @var string The database table used by the model.
     */
    public $table = 'axi_check_d_bautos';

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = [];

    /**
     * @var array Relations
     */
    public $hasOne = [];
    public $hasMany = [];
    public $belongsTo = [];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];

}