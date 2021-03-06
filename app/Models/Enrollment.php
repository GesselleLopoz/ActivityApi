<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Enrollment
 * @package App\Models
 * @version November 9, 2021, 1:59 am UTC
 *
 * @property string $Firstname
 * @property string $Middlename
 * @property string $Lastname
 * @property string $Birthdate
 * @property string $Gender
 * @property string $Address
 * @property string $Citizenship
 * @property string $Religion
 * @property string $Last_School_Attended
 * @property string $Date_Graduated
 * @property string $Honor_Received
 */
class Enrollment extends Model
{
    //use SoftDeletes;

    use HasFactory;

    public $table = 'enrollments';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'Firstname',
        'Middlename',
        'Lastname',
        'Birthdate',
        'Gender',
        'Address',
        'Citizenship',
        'Religion',
        'Last_School_Attended',
        'Date_Graduated',
        'Honor_Received'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'Firstname' => 'string',
        'Middlename' => 'string',
        'Lastname' => 'string',
        'Birthdate' => 'date',
        'Gender' => 'string',
        'Address' => 'string',
        'Citizenship' => 'string',
        'Religion' => 'string',
        'Last_School_Attended' => 'string',
        'Date_Graduated' => 'date',
        'Honor_Received' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'Firstname' => 'nullable|string|max:60',
        'Middlename' => 'nullable|string|max:60',
        'Lastname' => 'nullable|string|max:60',
        'Birthdate' => 'nullable',
        'Gender' => 'nullable|string|max:12',
        'Address' => 'nullable|string|max:500',
        'Citizenship' => 'nullable|string|max:50',
        'Religion' => 'nullable|string|max:50',
        'Last_School_Attended' => 'nullable|string|max:60',
        'Date_Graduated' => 'nullable',
        'Honor_Received' => 'nullable|string|max:60',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
