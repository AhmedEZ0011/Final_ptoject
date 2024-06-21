<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    // تحديد الحقول القابلة للملء
    protected $fillable = [
        'id',
        'role',
        'name',
        'collage',
        'department_id',
        'email',
        'password',
        'cridits',
        'gpa',
        'type',
        'active'
    ];

    // إخفاء الحقول التي لا ينبغي إظهارها مثل كلمة المرور
    protected $hidden = [
        'password',
        'remember_token',
    ];

    // تحويل الحقول إلى نوع بيانات مناسب
    protected $casts = [
        'reg_date' => 'datetime',
        'cridits' => 'integer',
        'gpa' => 'float',
    ];
}