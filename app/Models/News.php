<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

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
        'cover_path'
    ];

    public const COVER_PATH = 'news-covers';

    public function author(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function publishedDate(): string
    {
        return Carbon::parse($this->attributes['published_date'])->translatedFormat('d');
    }

    public function scopeActive(Builder $query): Builder
    {
        return $query->where('is_publish', true);
    }

    protected function slug(): Attribute
    {
        return Attribute::make(
            set: fn (string $value) => str(str($value)->slug('-').'-'.Str::random(3))->lower(),
        );
    }
}
