<? php

/*
Plugin name: Task Plugin
Plugin URI:
Description: Example Plugin for Publicity Port
Author:Sriram
Author URI:
Version:1.0

*/


add_action("admin_menu", "addMenu");
function addMenu()
{
        add_menu_page("Example options", "Example Options", 4, "example-options", "exampleMenu");
        add_submenu_page("example-options", "Option 1","Option 1", "Option 1", 4, "example-option-1", "option1");
}

function exampleMenu()
{
    echo "Hello World";
}

function option1()
{
    echo "Welcome To Submenu Page";
}

?>
