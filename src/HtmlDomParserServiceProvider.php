<?php

namespace YubarajShrestha\HtmlDomParser;

use Illuminate\Support\ServiceProvider;

class HtmlDomParserServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->bind('Parser', function () {
            return new Parser();
        });
    }
}
