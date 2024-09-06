<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * class Submission
 *
 * @package App\Models;
 *
 * @property string $name;
 * @property string $email;
 * @property string $message
 */
class Submission extends Model
{
    use HasFactory;

    protected $table = 'submissions';

    protected $fillable = [
        'name',
        'email',
        'message',
    ];

    public $timestamps = true;
}
