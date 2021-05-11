<header class="">
    <div class="text-center bg-progressive py-4">
        <img src="https://savelendgroup.se/wp-content/uploads/2021/04/savelend_group_darkbg-1.png" width="250" alt="SaveLend Group" class="mx-auto"/>
</div>

<svg xmlns="http://www.w3.org/2000/svg"  hidden>
  <symbol id="arrow" viewbox="0 0 16 16" >
    <polyline points="4 6, 8 10, 12 6" stroke="currentColor" stroke-width="2" fill="transparent" stroke-linecap="round" />
  </symbol>
</svg>

    <?php wp_nav_menu([
    'menu'              => "Main Menu", // (int|string|WP_Term) Desired menu. Accepts a menu ID, slug, name, or object.
    'menu_class'        => "main-menu clicky-menu", // (string) CSS class to use for the ul element which forms the menu. Default 'menu'.
    //'menu_id'           => "", // (string) The ID that is applied to the ul element which forms the menu. Default is the menu slug, incremented.
    'container'         => "nav", // (string) Whether to wrap the ul, and what to wrap it with. Default 'div'.
    'container_class'   => "bg-challenger flex justify-center items-center py-4 px-4", // (string) Class that is applied to the container. Default 'menu-{menu slug}-container'.
    //'container_id'      => "", // (string) The ID that is applied to the container.
    //'before'            => "", // (string) Text before the link markup.
    //'after'             => "", // (string) Text after the link markup.
    //'link_before'       => "", // (string) Text before the link text.
    'link_after'        => "<svg aria-hidden=\"true\" width=\"16\" height=\"16\"> <use xlink:href=\"#arrow\" /></svg>", // (string) Text after the link text.
    'echo'              => true, // (bool) Whether to echo the menu or return it. Default true.
    'depth'             => "0", // (int) How many levels of the hierarchy are to be included. 0 means all. Default 0.
    //'theme_location'    => "main", // (string) Theme location to be used. Must be registered with register_nav_menu() in order to be selectable by the user.
    //'items_wrap'        => "", // (string) How the list items should be wrapped. Default is a ul with an id and class. Uses printf() format with numbered placeholders.
    ]); ?>
</header>