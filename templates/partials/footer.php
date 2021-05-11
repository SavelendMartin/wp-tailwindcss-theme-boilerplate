<header class="">
    <div class="text-center bg-challenger py-4">
        <img src="https://savelendgroup.se/wp-content/uploads/2021/04/savelend_group_darkbg-1.png" width="250" alt="SaveLend Group" class="mx-auto"/>
</div>

<svg xmlns="http://www.w3.org/2000/svg"  hidden>
  <symbol id="arrow" viewbox="0 0 16 16" >
    <polyline points="4 6, 8 10, 12 6" stroke="currentColor" stroke-width="2" fill="transparent" stroke-linecap="round" />
  </symbol>
</svg>

    <?php wp_nav_menu([
    'menu'              => "Main Menu", // (int|string|WP_Term) Desired menu. Accepts a menu ID, slug, name, or object.
    'menu_class'        => "main-menu clicky-menu no-js", // (string) CSS class to use for the ul element which forms the menu. Default 'menu'.
    //'menu_id'           => "site-navigation", // (string) The ID that is applied to the ul element which forms the menu. Default is the menu slug, incremented.
    'container'         => "nav", // (string) Whether to wrap the ul, and what to wrap it with. Default 'div'.
    'container_class'   => "bg-challenger flex justify-center items-center py-4 px-4", // (string) Class that is applied to the container. Default 'menu-{menu slug}-container'.
    'container_id'      => "site-navigation", // (string) The ID that is applied to the container.
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

<script>
    (function() {

'use strict';

const ClickyMenus = function( menu ) {

  // DOM element(s)
  let container = menu.parentElement,
    currentMenuItem,
    i,
    len;

  this.init = function() {
    menuSetup();
    document.addEventListener( 'click', closeOpenMenu );
  }


  /*===================================================
  =            Menu Open / Close Functions            =
  ===================================================*/
  function toggleOnMenuClick( e ) {

    const button = e.currentTarget;

    // close open menu if there is one
    if ( currentMenuItem && button !== currentMenuItem ) {
      toggleSubmenu( currentMenuItem );
    }

    toggleSubmenu( button );

  };

  function toggleSubmenu( button ) {

    const submenu = document.getElementById( button.getAttribute( 'aria-controls' ) );

    if ( 'true' === button.getAttribute( 'aria-expanded' ) ) {

      button.setAttribute( 'aria-expanded', false );
      submenu.setAttribute( 'aria-hidden', true );
      currentMenuItem = false;

    } else {

      button.setAttribute( 'aria-expanded', true );
      submenu.setAttribute( 'aria-hidden', false );
      preventOffScreenSubmenu( submenu );
      currentMenuItem = button;

    }

  };

  function preventOffScreenSubmenu( submenu ) {

    const   screenWidth = window.innerWidth ||
                document.documentElement.clientWidth ||
                document.body.clientWidth,
        parent = submenu.offsetParent,
        menuLeftEdge = parent.getBoundingClientRect().left,
        menuRightEdge = menuLeftEdge + submenu.offsetWidth;

    if ( menuRightEdge + 32 > screenWidth ) { // adding 32 so it's not too close
      submenu.classList.add( 'sub-menu--right' );
    }

  }

  function closeOnEscKey(e) {

    if( 27 === e.keyCode ) {

      // we're in a submenu item
      if( null !== e.target.closest('ul[aria-hidden="false"]') ) {
        currentMenuItem.focus();
        toggleSubmenu( currentMenuItem );

      // we're on a parent item
      } else if ( 'true' === e.target.getAttribute('aria-expanded') ) {
        toggleSubmenu( currentMenuItem );
      }

    }

  }

  function closeOpenMenu( e ) {
    console.log(container);
    if ( currentMenuItem && ! e.target.closest( '#' + container.id ) ) {
      toggleSubmenu( currentMenuItem );
    }

  };

  /*===========================================================
  =            Modify Menu Markup & Bind Listeners            =
  =============================================================*/
  function menuSetup() {

    menu.classList.remove('no-js');

    menu.querySelectorAll('ul').forEach( ( submenu ) => {

      const menuItem = submenu.parentElement;

      if ( 'undefined' !== typeof submenu ) {

        let button = convertLinkToButton( menuItem );

        setUpAria( submenu, button );

        // bind event listener to button
        button.addEventListener( 'click', toggleOnMenuClick );
        menu.addEventListener( 'keyup', closeOnEscKey );

      }

    });

  };

  /**
   * Why do this? See https://justmarkup.com/articles/2019-01-21-the-link-to-button-enhancement/
   */
  function convertLinkToButton( menuItem ) {

    const   link = menuItem.getElementsByTagName( 'a' )[0],
        linkHTML = link.innerHTML,
        linkAtts = link.attributes,
        button = document.createElement( 'button' );

    if( null !== link ) {

      // set button content and attributes
      button.innerHTML = linkHTML.trim();
      for( i = 0, len = linkAtts.length; i < len; i++ ) {
        let attr = linkAtts[i];
        if( 'href' !== attr.name ) {
          button.setAttribute( attr.name, attr.value );
        }
      }

      menuItem.replaceChild( button, link );

    }

    return button;

  }

  function setUpAria( submenu, button ) {

    const submenuId = submenu.getAttribute( 'id' );

    let id;
    if( null === submenuId ) {
      id = button.textContent.trim().replace(/\s+/g, '-').toLowerCase() + '-submenu';
    } else {
      id = menuItemId + '-submenu';
    }

    // set button ARIA
    button.setAttribute( 'aria-controls', id );
    button.setAttribute( 'aria-expanded', false );

    // set submenu ARIA
    submenu.setAttribute( 'id', id );
    submenu.setAttribute( 'aria-hidden', true );

  }

}

/* Create a ClickMenus object and initiate menu for any menu with .clicky-menu class */
document.addEventListener('DOMContentLoaded', function(){
  const menus = document.querySelectorAll( '.clicky-menu' );

  menus.forEach( menu => {

    let clickyMenu = new ClickyMenus(menu);
    clickyMenu.init();

  });
});

}());
</script>