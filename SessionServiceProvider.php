<?php namespace MaskWang\MemcachedPlus;

use Illuminate\Session\SessionServiceProvider as IlluminateSessionServiceProvider;

class SessionServiceProvider extends IlluminateSessionServiceProvider
{

    /**
     * Replace \Illuminate\Session\CacheManager with B3IT\CacheManager
     *
     * @return void
     */
    public function register()
    {
        parent::register();

    }

    /**
     * Register the session manager instance.
     *
     * @return void
     */
    protected function registerSessionManager()
    {
        $this->app->bindShared('session', function($app)
        {
            return new SessionManager($app);
        });
    }

}
