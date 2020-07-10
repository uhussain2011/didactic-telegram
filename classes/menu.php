<?php

error_reporting(E_ALL);
ini_set("display_errors", 1);
header('Access-Control-Allow-Origin: *');

header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept, Content-Range, Content-Disposition");
header('Access-Control-Allow-Methods: GET, HEAD, OPTIONS, POST, PUT');



class Menu {

    function DB() {
        $db = new mysqli('localhost', 'root', '', 'testdb');
        return $db;
    }
    function get_menu()
    {
        $items = $this->DB()->query("SELECT id, label, link_url, parent_id FROM dyn_menu ORDER BY parent_id, id ASC");

        while ($obj = $items->fetch_object()) {
            if ($obj->parent_id == 0) {
                $parent_menu[$obj->id]['label'] = $obj->label;
                $parent_menu[$obj->id]['link'] = $obj->link_url;
                $parent_menu[$obj->id]['id'] = $obj->id;
            } else {
                $sub_menu = array();
                $sub_menu['parent'] = $obj->parent_id;
                $sub_menu['label'] = $obj->label;
                $sub_menu['link'] = $obj->link_url;
                if (empty($parent_menu[$obj->parent_id]['count'])) {
                    $parent_menu[$obj->parent_id]['count'] = 0;
                }
                $parent_menu[$obj->parent_id]['sub'][] = $sub_menu;
                $parent_menu[$obj->parent_id]['count']++;
            }
        }
        $items->close();
        $this->DB()->close();

        $result = array();
        $result['error'] = 0;
        $result['data'] = $parent_menu;

       return $result;
    }

}
$menu = new Menu();
echo  json_encode($menu->get_menu());
?>
