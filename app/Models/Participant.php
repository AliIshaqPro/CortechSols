<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Participant extends Model
{
    protected $fillable = ['conversation_id', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}