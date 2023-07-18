<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'FirstName',
        'LastName',
        'StudentNumber',
        'StudentEmail',
        'DateOFBirth',
        'StudentAddress',
        'Gender',
        'BloodGroup',
        'City',
        'State',
        'Country',
        'IdentityNumber',
        'AdmissionDate',
        'IndexNumber',
        'classroom_id',
        'myparent_id',
        'ExtraNote',
        'StudentType'
    ];

    public function classrooms() {
        $this->belongTo(Classroom::class);
    }

    public function myparents() {
        $this->belongTo(Myparent::class);
    }
}
