<?php namespace Cmantikweb\Portafolio\Models;

use Model;

/**
 * portafolio Model
 */
class Portafolio extends Model
{
    /**
     * @var string The database table used by the model.
     */
    public $table = 'cmantikweb_portafolio_portafolios';

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
    public $attachOne = [
        'imagen' => 'System\Models\File',
    ];
    public $attachMany = [];
}
