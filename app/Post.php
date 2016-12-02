<?php
/**
 * Class Post
 * @package App
 */

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    /**
     * @var string
     */
    public $table = 'posts';
    
    protected $fillable = ['user_id', 'uuid','body'];
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user() {
        return $this->belongsTo(User::class);
    }
}
