<?php

namespace App\Models;

class Menu {
    public static function getMenu() {
        $json = file_get_contents(resource_path("data/foodie-rev.json"));
        return json_decode($json);
    }

    public static function getMenuDetail($id) {
        $data = self::getMenu();
        foreach($data as $menu) {
            if($menu->id == $id){
                return $menu;
            };
        };
    }
};

?>