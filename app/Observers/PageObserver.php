<?php

namespace App\Observers;

use App\Models\Page;
use Illuminate\Support\Facades\File;

class PageObserver
{
    /**
     * Handle the Page "created" event.
     */
    public function created(Page $page): void
    {
        $page->publish();
    }

    /**
     * Handle the Page "updated" event.
     */
    public function updated(Page $page): void
    {
        $page->is_published
            ? $page->publish()
            :
            File::delete(resource_path("views/pages/{$page->slug}.blade.php"));
    }

    /**
     * Handle the Page "deleted" event.
     */
    public
    function deleted(Page $page): void
    {
        File::delete(resource_path("views/pages/{$page->slug}.blade.php"));
    }

    /**
     * Handle the Page "restored" event.
     */
    public
    function restored(Page $page): void
    {
        $page->publish();
    }

    /**
     * Handle the Page "force deleted" event.
     */
    public
    function forceDeleted(Page $page): void
    {
        File::delete(resource_path("views/pages/{$page->slug}.blade.php"));
    }
}
