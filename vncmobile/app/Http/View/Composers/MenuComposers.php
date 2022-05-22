<?php
 
namespace App\Http\View\Composers;

use App\Models\Menu;
use App\Repositories\UserRepository;
use Illuminate\View\View;
 
class ProfileComposer
{
   
    public function __construct()
    {
        
    }
 
    public function compose(View $view)
    {
        // $view->with('count', $this->users->count());
        $menus = Menu::select('id','name','parent_id')->where('active',1)->orderByDesc('id')->get();
        $view->with('menus', $menus);
    }
}