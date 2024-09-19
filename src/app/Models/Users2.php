<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users2 extends Model
{
    use HasFactory;

    protected $table = 'users2'; // テーブル名を指定
    protected $fillable = ['name', 'email', 'password']; // フィルラブルなカラム

    // Attendanceとのリレーションを追加
    public function attendance()
    {
        return $this->hasOne(Attendance::class, 'user_id');
    }
}

