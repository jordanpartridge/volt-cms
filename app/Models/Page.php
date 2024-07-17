<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use SplFileInfo;

/**
 * @property string $title
 * @property string $slug
 * @property int    is_published
 */
class Page extends Model
{
    use HasFactory;

    /**
     * @var string[]
     */
    protected $fillable = [
        'title',
        'slug',
        'layout',
        'content',
        'is_published',
        'published_at',
    ];

    /**
     * @return string
     */
    public function getRouteKeyName(): string
    {
        return 'slug';
    }

    public function publish(): void
    {
        if (!$this->is_published) {
            return;
        }
        // place in view/resources/views/pages
        File::put(resource_path("views/pages/{$this->slug}.blade.php"),
            '<x-' . $this->layout . '-layout title="' . $this->title. '">' . $this->content . '</x-.' . $this->layouts . 'layout>');

    }

    public static function getLayouts(): array
    {
        return collect(File::allFiles(resource_path('views/layouts')))->filter(static function (SplFileInfo $file) {
            return Str::endsWith($file->getFilename(), '.blade.php');
        })->mapWithKeys(static function (SplFileInfo $file) {
            return [Str::before($file->getFilename(), '.blade.php') => Str::before($file->getFilename(), '.blade.php')];
        })->toArray();
    }

    /**
     * Parse the layout name. for example: app.blade.php -> app
     * @param $layout
     * @return string
     */
    private function getShortLayout($layout): string
    {
        return Str::before($layout, '.blade.php');
    }
}
