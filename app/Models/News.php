<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class News extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'title',
        'slug',
        'summary',
        'published_date',
        'content',
        'is_publish',
    ];

    public function author(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function publishedDate(): string
    {
        return Carbon::parse($this->attributes['published_date'])->translatedFormat('d');
    }

    protected function slug(): Attribute
    {
        return Attribute::make(
            set: fn (string $value) => str(str($value)->slug('-').'-'.Str::random(6))->lower(),
        );
    }
}
