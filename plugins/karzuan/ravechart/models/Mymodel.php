<?php namespace Karzuan\Ravechart\Models;

use Model;

/**
 * mymodel Model
 */
class Mymodel extends Model
{

    /**
     * @var string The database table used by the model.
     */
    public $table = 'karzuan_ravechart_mymodels';

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