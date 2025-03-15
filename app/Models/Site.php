<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Site extends Model
{
    protected $fillable = [
        'name',
        'url',
        'status',
        'owner_id',
        'server_username',
        'server_directory',
        'server_id',
        'database_username',
        'database_name',
        'database_id',
    ];

    public function server()
    {
        return $this->belongsTo(Server::class);
    }

    public function database()
    {
        return $this->belongsTo(Database::class);
    }

    public function owner()
    {
        return $this->belongsTo(User::class);
    }
}
