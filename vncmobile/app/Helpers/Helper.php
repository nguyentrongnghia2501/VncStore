<?php

namespace App\Helpers;
class Helper{
            public static function menu($menus , $parent_id=0,$char=''){
                                $html='';
                                foreach($menus as $key =>$menu){
                                    if($menu->parent_id == $parent_id){
                                            $html.='
                                            <tr>
                                            <th>'.$menu->id.'</th>
                                            <th>'.$char.$menu->name.'</th>
                                            <th>'.self::active($menu->active).'</th>
                                            <th>'.$menu->updated_at.'</th>
                                              <th>                                              
                            <a class="btn btn-warning btn-sm"  onclick="removeRow('.$menu->id.',\'/admin/menus/delete\')" href=""><i class="fa-solid fa-delete-left"></i></a>
                                                  
                            <a href="/admin/menus/edit/'.$menu->id.'" class="btn btn-success btn-sm"  onclick="remove">
 
 
                                                   <i class="fa-solid fa-file-pen"></i>
                           </a>

                                              </th>
                                            </tr>
                                                   
                                            ';
                                            unset($menus[$key]);
                                            $html .=self::menu($menus,$menu->id,$char .'--');
                                    }
                                }
                                return $html;

            }
            public static function active($active =0){
                
                 return $active ==0 ? '<span class="btn btn-danger">No</span>': '<span class="btn btn-success">Yes</span>';

            }

}