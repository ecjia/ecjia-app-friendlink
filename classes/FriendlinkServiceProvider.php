<?php

namespace Ecjia\App\Friendlink;

use Royalcms\Component\App\AppServiceProvider;

class FriendlinkServiceProvider extends  AppServiceProvider
{
    
    public function boot()
    {
        $this->package('ecjia/app-friendlink');
    }
    
    public function register()
    {
        
    }
    
    
    
}