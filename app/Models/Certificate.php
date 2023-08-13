<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $email
 * @property string $name
 * @property string $status
 */
class Certificate extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'certificate';

    /**
     * @var array
     */
    protected $fillable = ['email', 'name', 'status'];
    public $timestamps = false;
}
