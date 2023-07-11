<?php

namespace App\Models;

use App\Enums\Permission;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;
use Illuminate\Database\Eloquent\SoftDeletes;

// has Factory
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Collection;

class ShortLink extends Model
{
    use  SoftDeletes, HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $table = 'short_links';

    protected $primaryKey = 'role_id';

    protected $fillable = [
        'url',
        'link',
        'user_id'
    ];
 
}

