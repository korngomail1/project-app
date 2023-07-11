<?php

namespace App\Models;

use App\Enums\Permission;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

// has Factory
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Collection;

class ShortLink extends Model
{
    use  SoftDeletes ;

    protected $table = 'short_urls';

    protected $primaryKey = 'id';

    protected $fillable = [
        'user_id',
        'destination_url',
        'url_key',
        'default_short_url',
        'single_use',
        'forward_query_params',
        'track_visits',
        'redirect_status_code',
        'track_ip_address',
        'track_operating_system',
        'track_operating_system_version',
        'track_browser',
        'track_browser_version',
        'track_referer_url',
        'track_device_type',
        'activated_at',
        'deactivated_at',
        'created_at',
        'updated_at',
        'deleted_at'
    ];
}
