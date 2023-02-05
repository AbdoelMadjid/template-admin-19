<?php

// if (!session_id()) session_start();

require_once 'init.php';

//CONFIGURATION for SmartAdmin UI

//ribbon breadcrumbs config
//array("Display Name" => "URL");
$breadcrumbs = array(
//    "Home" => APP_URL
);

/*navigation array config

ex:
"dashboard" => array(
    "title" => "Display Title",
    "url" => "http://yoururl.com",
    "url_target" => "_self",
    "icon" => "fa-home",
    "label_htm" => "<span>Add your custom label/badge html here</span>",
    "sub" => array() //contains array of sub items with the same format as the parent
)

*/
$page_nav = array(
    "home" => array(
        "title" => "Home",
        "icon" => "fa-home",
        'url' => APP_URL
    ),    
    "dashboard" => array(
        "title" => "Dashboard",
        "icon" => "fa-home",
        "sub" => array(
            "analytics" => array(
                "title" => "Analytics",
                "url" => APP_URL."/dashboard-analytics.php"
            ),
            "marketing" => array(
                "title" => "Marketing",
                "url" => APP_URL."/dashboard-marketing.php"
            ),
            "social" => array(
                "title" => "Social Wall",
                "url" => APP_URL."/dashboard-social.php"
            )
        )
    ),
    "smartui" => array(
        "title" => "Smart UI",
        "icon" => "fa-code",
        "sub" => array(
            "general" => array(
                'title' => 'General Elements',
                'icon' => 'fa-folder-open',
                'sub' => array(
                    'alert' => array(
                        'title' => 'Alerts',
                        'url' => APP_URL."/smartui-alert.php"
                    ),
                    'progress' => array(
                        'title' => 'Progress',
                        'url' => APP_URL.'/smartui-progress.php'
                    )
                )
            ),
            "carousel" => array(
                "title" => "Carousel",
                "url" => APP_URL.'/smartui-carousel.php'
            ),
            "tab" => array(
                "title" => "Tab",
                "url" => APP_URL.'/smartui-tab.php'
            ),
            "accordion" => array(
                "title" => "Accordion",
                "url" => APP_URL.'/smartui-accordion.php'
            ),
            "widget" => array(
                'title' => "Widget",
                'url' => APP_URL."/smartui-widget.php"
            ),
            "datatable" => array(
                "title" => "DataTable",
                "url" => APP_URL."/smartui-datatable.php"
            ),
            "button" => array(
                "title" => "Button",
                "url" => APP_URL."/smartui-button.php"
            ),
            'smartform' => array(
                'title' => 'Smart Form',
                'url' => APP_URL.'/smartui-form.php'
            )
        )
    ),
    "smartint" => array(
        "title" => "SmartAdmin Intel",
        "icon" => "fa-cube txt-color-blue",
        "sub" => array(
            "layouts" => array(
                "title" => "App Layouts",
                "icon" => "fa-gear",
                "url" => APP_URL."/intel-layouts.php"
            ),
            "applayout" => array(
                "title" => "App Settings",
                "icon" => "fa-cube",
                "url" => APP_URL."/intel-applayout.php"
            ),
            "skins" => array(
                "title" => "Prebulit Skins",
                "icon" => "fa-picture-o",
                "url" => APP_URL."/intel-skins.php"
            ),
            "difver" => array(
                "title" => "Different Versions",
                "icon" => "fa-picture-o",
                "url" => APP_URL."/intel-difver.php"
            )            
        )
    ),
    "outlook" => array(
        "title" => "Outlook",
        "icon" => "fa-inbox",
        "url" => APP_URL."/inbox.php",
        "label_htm" => '<span class="badge pull-right inbox-badge margin-right-13">14</span>'
    ),
    "graphs" => array(
        "title" => "Graphs",
        "icon" => "fa-bar-chart-o",
        "sub" => array(
            "flot" => array(
                "title" => "Flot Chart",
                "url" => APP_URL."/graphs-flot.php"
            ),
            "morris" => array(
                "title" => "Morris Charts",
                "url" => APP_URL."/graphs-morris.php"
            ),
            "sparklines" => array(
                "title" => "Sparklines",
                "url" => APP_URL."/graphs-sparkline-charts.php"
            ),
            "easypie" => array(
                "title" => "EasyPieCharts",
                "url" => APP_URL."/graphs-easypie-charts.php"
            ),
            "dygraphs" => array(
                "title" => "Dygraphs",
                "url" => APP_URL."/graphs-dygraphs.php",
            ),
            "chartjs" => array(
                "title" => "Chart.js",
                "url" => APP_URL."/graphs-chartjs.php"
            ),
            "highchart" => array(
                "title" => "HighchartTable",
                "url" => APP_URL."/graphs-hchartable.php",
                "label_htm" => ' <span class="badge pull-right inbox-badge bg-color-yellow">new</span>'
            )
        )
    ),
    "tables" => array(
        "title" => "Tables",
        "icon" => "fa-table",
        "sub" => array(
            "normal" => array(
                "title" => "Normal Tables",
                "url" => APP_URL."/table-normal.php"
            ),
            "data" => array(
                "title" => "Data Tables",
                "url" => APP_URL."/table-datatables.php",
                "label_htm" => ' <span class="badge inbox-badge bg-color-greenLight">responsive</span>'
            ),
            "jqgrid" => array(
                "title" => "Jquery Grid",
                "url" => APP_URL."/table-jqgrid.php"
            )
        )
    ),
    "forms" => array(
        "title" => "Forms",
        "icon" => "fa-pencil-square-o",
        "sub" => array(
            "smart_elements" => array(
                "title" => "Smart Form Elements",
                "url" => APP_URL."/form-elements.php"
            ),
            "smart_layout" => array(
                "title" => "Smart Form Layouts",
                "url" => APP_URL."/form-layout.php"
            ),
            "smart_validation" => array(
                "title" => "Smart Form Validation",
                "url" => APP_URL."/form-validation.php"
            ),
            "bootstrap_forms" => array(
                "title" => "Bootstrap Form Elements",
                "url" => APP_URL."/form-bootstrap-forms.php"
            ),
            "form_plugins" => array(
                "title" => "Form Plugins",
                "url" => APP_URL."/form-plugins.php"
            ),
            "wizards" => array(
                "title" => "Wizards",
                "url" => APP_URL."/form-wizard.php"
            ),
            "bootstrap_editors" => array(
                "title" => "Bootstrap Editors",
                "url" => APP_URL."/form-bootstrap-editors.php"
            ),
            "dropzone" => array(
                "title" => "Dropzone",
                "url" => APP_URL."/form-dropzone.php"
            ),
            "imagecrop" => array(
                "title" => "Image Cropping",
                "url" => APP_URL."/form-image-editor.php"
            ),
            "ck_editor" => array(
                "title" => "CK Editor",
                "url" => APP_URL."/form-ckeditor.php"
            )
        )
    ),
    "ui_elements" => array(
        "title" => "UI Elements",
        "icon" => "fa-desktop",
        "sub" => array(
            "general" => array(
                "title" => "General Elements",
                "url" => APP_URL."/ui-elements-general.php"
            ),
            "buttons" => array(
                "title" => "Buttons",
                "url" => APP_URL."/ui-elements-buttons.php"
            ),
            "icons" => array(
                "title" => "Icons",
                "sub" => array(
                    "fa" => array(
                        "title" => "Font Awesome",
                        "icon" => "fa-plane",
                        "url" => APP_URL."/ui-elements-fa.php"
                    ),
                    "glyph" => array(
                        "title" => "Glyph Icons",
                        "icon" => "fa-plane",
                        "url" => APP_URL."/ui-elements-glyph.php"
                    ),
                    "flags" => array(
                        "title" => "Flags",
                        "icon" => "fa-flag",
                        "url" => APP_URL."/ui-elements-flags.php"
                    )
                )
            ),
            "grid" => array(
                "title" => "Grid",
                "url" => APP_URL."/ui-elements-grid.php"
            ),
            "tree_view" => array(
                "title" => "Tree View",
                "url" => APP_URL."/ui-elements-treeview.php"
            ),
            "nestable_lists" => array(
                "title" => "Nestable Lists",
                "url" => APP_URL."/ui-elements-nestable-list.php"
            ),
            "jquery_ui" => array(
                "title" => "jQuery UI",
                "url" => APP_URL."/ui-elements-jqui.php"
            ),
            "typo" => array(
                "title" => "Typography",
                "url" => APP_URL."/ui-elements-typography.php"
            ),
            "nav6" => array(
                "title" => "Six Level Menu",
                "sub" => array(
                    "second_lvl" => array(
                        "title" => "Item #2",
                        "icon" => "fa-folder-open",
                        "sub" => array(
                            "third_lvl" => array(
                                "title" => "Sub #2.1",
                                "icon" => "fa-folder-open",
                                "sub" => array(
                                    "file" => array(
                                        "title" => "Item #2.1.1",
                                        "icon" => "fa-file-text"
                                    ),
                                    "fourth_lvl" => array(
                                        "title" => "Expand",
                                        "icon" => "fa-plus",
                                        "sub" => array(
                                            "file" => array(
                                                "title" => "File",
                                                "icon" => "fa-file-text"
                                            ),
                                            "fifth_lvl" => array(
                                                "title" => "Delete",
                                                "icon" => "fa-trash-o"
                                            )
                                        )
                                    )
                                )
                            )
                        )
                    ),
                    "folder" => array(
                        "title" => "Item #3",
                        "icon" => "fa-folder-open",
                        "sub" => array(
                            "third_lvl" => array(
                                "title" => "Sub #3.1",
                                "icon" => "fa-folder-open",
                                "sub" => array(
                                    "file1" => array(
                                        "title" => "File",
                                        "icon" => "fa-file-text"
                                    ),
                                    "file2" => array(
                                        "title" => "File",
                                        "icon" => "fa-file-text"
                                    )
                                )
                            )
                        )
                    ),
                    "disabled" => array(
                        "title" => "Item #4 (disabled)",
                        "class" => "inactive",
                        "icon" => "fa-folder-open"
                    )
                )
            ),
        )
    ),
    "widgets" => array(
        "title" => "Widgets",
        "url" => APP_URL."/widgets.php",
        "icon" => "fa-list-alt"
    ),
    "cool" => array(
        "title" => "Cool Features!",
        "icon" => "fa-cloud",
        "icon_badge" => "3",
        "sub" => array(
            "cal" => array(
                "title" => "Calendar",
                "url" => APP_URL."/cool-calendar.php",
                "icon" => "fa-calendar"
            ),
            "gmap_skins" => array(
                "title" => "GMap Skins",
                "url" => APP_URL."/cool-gmap-xml.php",
                "icon" => "fa-map-marker",
                "label_htm" => '<span class="badge bg-color-greenLight pull-right inbox-badge">9</span>'
            )
        )

    ),
    "views" => array(
        "title" => "App Views",
        "icon" => "fa-puzzle-piece",
        "sub" => array(
            "projects" => array(
                "title" => "Projects",
                "icon" => "fa fa-file-text-o",
                "url" => APP_URL."/appviews-projects.php"
            ),
            "blog" => array(
                "title" => "Blog",
                "icon" => "fa fa-paragraph",
                "url" => APP_URL."/appviews-blog.php"
            ),
            "gallery" => array(
                "title" => "Gallery",
                "icon" => "fa fa-picture-o",
                "url" => APP_URL."/appviews-gallery.php"
            ),
            "forum" => array(
                "title" => "Forum Layout",
                "icon" => "fa fa-comments",
                "sub" => array(
                    "general" => array(
                        "title" => "General View",
                        "url" => APP_URL."/appviews-forum.php"
                    ),
                    "topic" => array(
                        "title" => "Topic View",
                        "url" => APP_URL."/appviews-forum-topic.php"
                    ),
                    "post" => array(
                        "title" => "Post View",
                        "url" => APP_URL."/appviews-forum-post.php"
                    ),
                )
            ),
            "profile" => array(
                "title" => "Profile",
                "icon" => "fa fa-group",
                "url" => APP_URL."/appviews-profile.php"
            ),
            "timeline" => array(
                "title" => "Timeline",
                "icon" => "fa fa-clock-o",
                "url" => APP_URL."/appviews-timeline.php"
            ),
            "search" => array(
                "title" => "Search Page",
                "icon" => "fa fa-search",
                "url" => APP_URL."/appviews-search.php"
            ),
        )
    ),
    "ecommerce" => array(
        "title" => "E-Commerce",
        "icon" => "fa-shopping-cart",
        "sub" => array(
            "orders" => array(
                "title" => "Orders",
                "url" => APP_URL."/ecommerce-orders.php"
            ),
            "prod-view" => array(
                "title" => "Products View",
                "url" => APP_URL."/ecommerce-products-view.php"
            ),
            "prod-detail" => array(
                "title" => "Products Detail",
                "url" => APP_URL."/ecommerce-products-detail.php"
            )
        )
    ),
    "misc" => array(
        "title" => "Miscellaneous",
        "icon" => "fa-windows",
        "sub" => array(
            "pricing_tables" => array(
                "title" => "Pricing Tables",
                "url" => APP_URL."/misc-pricing-table.php"
            ),
            "invoice" => array(
                "title" => "Invoice",
                "url" => APP_URL."/misc-invoice.php"
            ),
            "login" => array(
                "title" => "Login",
                "url" => APP_URL."/misc-login.php"
            ),
            "register" => array(
                "title" => "Register",
                "url" => APP_URL."/misc-register.php"
            ),
            "forgot" => array(
                "title" => "Forgot Password",
                "url" => APP_URL."/misc-forgotpassword.php"
            ),
            "lock" => array(
                "title" => "Locked Screen",
                "url" => APP_URL."/misc-lock.php"
            ),
            "err_404" => array(
                "title" => "Error 404",
                "url" => APP_URL."/misc-error404.php"
            ),
            "err_500" => array(
                "title" => "Error 500",
                "url" => APP_URL."/misc-error500.php"
            ),
            "blank" => array(
                "title" => "Blank Page",
                "url" => APP_URL."/misc-blank_.php"
            )
        )
    ),
    "smartchat" => array(
        "title" => "Smart Chat API <sup>beta</sup>",
        "icon" => "fa fa-lg fa-fw fa-comment-o",
        "icon_badge" => array(
            'content' => '!',
            'class' => 'bg-color-pink flash animated'
        ),
        "li_class" => array("chat-users", "top-menu-invisible"),
        "sub" => '
            <div class="display-users">
                <input class="form-control chat-user-filter" placeholder="Filter" type="text">

                <a href="#" class="usr"
                    data-chat-id="cha1"
                    data-chat-fname="Sadi"
                    data-chat-lname="Orlaf"
                    data-chat-status="busy"
                    data-chat-alertmsg="Sadi Orlaf is in a meeting. Please do not disturb!"
                    data-chat-alertshow="true"
                    data-rel="popover-hover"
                    data-placement="right"
                    data-html="true"
                    data-content="
                        <div class=\'usr-card\'>
                            <img src=\'img/avatars/5.png\' alt=\'Sadi Orlaf\'>
                            <div class=\'usr-card-content\'>
                                <h3>Sadi Orlaf</h3>
                                <p>Marketing Executive</p>
                            </div>
                        </div>
                    ">
                    <i></i>Sadi Orlaf
                </a>

                <a href="#" class="usr"
                    data-chat-id="cha2"
                    data-chat-fname="Jessica"
                    data-chat-lname="Dolof"
                    data-chat-status="online"
                    data-chat-alertmsg=""
                    data-chat-alertshow="false"
                    data-rel="popover-hover"
                    data-placement="right"
                    data-html="true"
                    data-content="
                        <div class=\'usr-card\'>
                            <img src=\'img/avatars/1.png\' alt=\'Jessica Dolof\'>
                            <div class=\'usr-card-content\'>
                                <h3>Jessica Dolof</h3>
                                <p>Sales Administrator</p>
                            </div>
                        </div>
                    ">
                    <i></i>Jessica Dolof
                </a>

                <a href="#" class="usr"
                    data-chat-id="cha3"
                    data-chat-fname="Zekarburg"
                    data-chat-lname="Almandalie"
                    data-chat-status="online"
                    data-rel="popover-hover"
                    data-placement="right"
                    data-html="true"
                    data-content="
                        <div class=\'usr-card\'>
                            <img src=\'img/avatars/3.png\' alt=\'Zekarburg Almandalie\'>
                            <div class=\'usr-card-content\'>
                                <h3>Zekarburg Almandalie</h3>
                                <p>Sales Admin</p>
                            </div>
                        </div>
                    ">
                    <i></i>Zekarburg Almandalie
                </a>

                <a href="#" class="usr"
                    data-chat-id="cha4"
                    data-chat-fname="Barley"
                    data-chat-lname="Krazurkth"
                    data-chat-status="away"
                    data-rel="popover-hover"
                    data-placement="right"
                    data-html="true"
                    data-content="
                        <div class=\'usr-card\'>
                            <img src=\'img/avatars/4.png\' alt=\'Barley Krazurkth\'>
                            <div class=\'usr-card-content\'>
                                <h3>Barley Krazurkth</h3>
                                <p>Sales Director</p>
                            </div>
                        </div>
                    ">
                    <i></i>Barley Krazurkth
                </a>

                <a href="#" class="usr offline"
                    data-chat-id="cha5"
                    data-chat-fname="Farhana"
                    data-chat-lname="Amrin"
                    data-chat-status="incognito"
                    data-rel="popover-hover"
                    data-placement="right"
                    data-html="true"
                    data-content="
                        <div class=\'usr-card\'>
                            <img src=\'img/avatars/female.png\' alt=\'Farhana Amrin\'>
                            <div class=\'usr-card-content\'>
                                <h3>Farhana Amrin</h3>
                                <p>Support Admin <small><i class=\'fa fa-music\'></i> Playing Beethoven Classics</small></p>
                            </div>
                        </div>
                    ">
                    <i></i>Farhana Amrin (offline)
                </a>

                <a href="#" class="usr offline"
                    data-chat-id="cha6"
                    data-chat-fname="Lezley"
                    data-chat-lname="Jacob"
                    data-chat-status="incognito"
                    data-rel="popover-hover"
                    data-placement="right"
                    data-html="true"
                    data-content="
                        <div class=\'usr-card\'>
                            <img src=\'img/avatars/male.png\' alt=\'Lezley Jacob\'>
                            <div class=\'usr-card-content\'>
                                <h3>Lezley Jacob</h3>
                                <p>Sales Director</p>
                            </div>
                        </div>
                    ">
                    <i></i>Lezley Jacob (offline)
                </a>

                <a href="chat.php" class="btn btn-xs btn-default btn-block sa-chat-learnmore-btn">About the API</a>
            </div>'
    )
);

//configuration variables
$page_title = "";
$page_css = array();
$no_main_header = false; //set true for lock.php and login.php
$page_body_prop = array(); //optional properties for <body>
$page_html_prop = array(); //optional properties for <html>
?>