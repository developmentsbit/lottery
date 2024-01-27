<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\User;
use Auth;
use View;
use App\Models\MenuLabel;
use App\Models\Menu;
use App\Models\SoftwareSettings;
use App\Models\UserTheme;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(
            'App\Interfaces\Localization',
            'App\Repositories\LocalizationRepository',
        );

        $this->app->bind(
           'App\Interfaces\BaseInterface',
        );
        $this->app->bind(
            'App\Interfaces\MenuLabelInterface',
            'App\Repositories\MenuLabelRepository',
        );
        $this->app->bind(
            'App\Interfaces\BranchInterface',
            'App\Repositories\BranchRepository',
        );
        $this->app->bind(
            'App\Interfaces\UserInterface',
            'App\Repositories\UserRepository',
        );
        $this->app->bind(
            'App\Interfaces\RoleInterface',
            'App\Repositories\RoleRepository',
        );
        $this->app->bind(
            'App\Interfaces\MenuInterface',
            'App\Repositories\MenuRepository',
        );
        $this->app->bind(
            'App\Interfaces\SoftwareSettingsInterface',
            'App\Repositories\SoftwareSettingsRepository',
        );
        $this->app->bind(
            'App\Interfaces\UserThemeInterface',
            'App\Repositories\UserThemeRepository',
        );
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        View::composer('*',function($view){
            $view->with('menu_label',MenuLabel::orderBy('order_by','ASC')->get());
            $view->with('first_menu',Menu::getFirst());
            $view->with('parent',Menu::where('status',1)->where('label_id','!=',NULL)->where('type',1)->orderBy('order_by','ASC')->get());
            $view->with('module',Menu::where('status',1)->where('label_id','=',NULL)->where('type',2)->orderBy('order_by','ASC')->get());
            $view->with('single',Menu::where('status',1)->where('label_id','!=',NULL)->where('type',3)->orderBy('order_by','ASC')->get());
            $view->with('settings',SoftwareSettings::first());
            if(Auth::check())
            {
                $view->with('theme',UserTheme::where('user_id',Auth::user()->id)->first());
            }
        });
    }
}
