<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class Project.
 *
 * @package namespace App\Entities;
 */
class Project extends Model implements Transformable
{
    use TransformableTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['owner_id', 'client_id', 'name', 'description', 'due_date', 'progress', 'status'];

    public function notes() {
        return $this->hasMany(ProjectNote::class);
    }
}
