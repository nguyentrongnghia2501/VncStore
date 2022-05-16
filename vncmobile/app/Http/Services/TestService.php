<?php
namespace App\Http\Services;
use App\Models\Menu;
class TestService{
    public function Menu(){
        // $users = App\Models\Menu::where('create', 1)->get();
        // $users = App\Models\User::where('id', '>', 10)->get();
        Menu::where('active',1)->get();
    }


}