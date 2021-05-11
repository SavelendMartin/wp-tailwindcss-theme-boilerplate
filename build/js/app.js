/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 0);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./assets/js/app.js":
/*!**************************!*\
  !*** ./assets/js/app.js ***!
  \**************************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _components_ExampleComponent1__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./components/ExampleComponent1 */ "./assets/js/components/ExampleComponent1.js");
/* harmony import */ var _components_ReplaceObfuscatedEmailAddresses__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./components/ReplaceObfuscatedEmailAddresses */ "./assets/js/components/ReplaceObfuscatedEmailAddresses.js");
/* harmony import */ var _components_AnimateOnPageLinks__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./components/AnimateOnPageLinks */ "./assets/js/components/AnimateOnPageLinks.js");
// you can import modules from the theme lib or even from
// NPM packages if they support it…
 // you can also require modules if they support it…

var ExampleModule2 = __webpack_require__(/*! ./components/example-2 */ "./assets/js/components/example-2.js"); // Some convenient tools to get you started…



 // Initialise our components on jQuery.ready…
// jQuery(function ($) {
//     ExampleComponent1.init();
//     ExampleModule2.init();
//     ReplaceObfuscatedEmailAddresses.init();
//     AnimateOnPageLinks.init();
// });

/**
 * Object for creating click-triggered navigation submenus
 *
 * Latest version, Issues, etc: https://github.com/mrwweb/clicky-menus
 *
 * Thanks for the inspiration:
 *    - https://www.lottejackson.com/learning/a-reusable-javascript-toggle-pattern
 *    - https://codepen.io/lottejackson/pen/yObQRM
 */

(function () {
  'use strict';

  var ClickyMenus = function ClickyMenus(menu) {
    // DOM element(s)
    var container = menu.parentElement,
        currentMenuItem,
        i,
        len;

    this.init = function () {
      menuSetup();
      document.addEventListener('click', closeOpenMenu);
    };
    /*===================================================
    =            Menu Open / Close Functions            =
    ===================================================*/


    function toggleOnMenuClick(e) {
      var button = e.currentTarget; // close open menu if there is one

      if (currentMenuItem && button !== currentMenuItem) {
        toggleSubmenu(currentMenuItem);
      }

      toggleSubmenu(button);
    }

    ;

    function toggleSubmenu(button) {
      var submenu = document.getElementById(button.getAttribute('aria-controls'));

      if ('true' === button.getAttribute('aria-expanded')) {
        button.setAttribute('aria-expanded', false);
        submenu.setAttribute('aria-hidden', true);
        currentMenuItem = false;
      } else {
        button.setAttribute('aria-expanded', true);
        submenu.setAttribute('aria-hidden', false);
        preventOffScreenSubmenu(submenu);
        currentMenuItem = button;
      }
    }

    ;

    function preventOffScreenSubmenu(submenu) {
      var screenWidth = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth,
          parent = submenu.offsetParent,
          menuLeftEdge = parent.getBoundingClientRect().left,
          menuRightEdge = menuLeftEdge + submenu.offsetWidth;

      if (menuRightEdge + 32 > screenWidth) {
        // adding 32 so it's not too close
        submenu.classList.add('sub-menu--right');
      }
    }

    function closeOnEscKey(e) {
      if (27 === e.keyCode) {
        // we're in a submenu item
        if (null !== e.target.closest('ul[aria-hidden="false"]')) {
          currentMenuItem.focus();
          toggleSubmenu(currentMenuItem); // we're on a parent item
        } else if ('true' === e.target.getAttribute('aria-expanded')) {
          toggleSubmenu(currentMenuItem);
        }
      }
    }

    function closeOpenMenu(e) {
      if (currentMenuItem && !e.target.closest('#' + container.id)) {
        toggleSubmenu(currentMenuItem);
      }
    }

    ;
    /*===========================================================
    =            Modify Menu Markup & Bind Listeners            =
    =============================================================*/

    function menuSetup() {
      menu.classList.remove('no-js');
      menu.querySelectorAll('ul').forEach(function (submenu) {
        var menuItem = submenu.parentElement;

        if ('undefined' !== typeof submenu) {
          var button = convertLinkToButton(menuItem);
          setUpAria(submenu, button); // bind event listener to button

          button.addEventListener('click', toggleOnMenuClick);
          menu.addEventListener('keyup', closeOnEscKey);
        }
      });
    }

    ;
    /**
     * Why do this? See https://justmarkup.com/articles/2019-01-21-the-link-to-button-enhancement/
     */

    function convertLinkToButton(menuItem) {
      var link = menuItem.getElementsByTagName('a')[0],
          linkHTML = link.innerHTML,
          linkAtts = link.attributes,
          button = document.createElement('button');

      if (null !== link) {
        // set button content and attributes
        button.innerHTML = linkHTML.trim();

        for (i = 0, len = linkAtts.length; i < len; i++) {
          var attr = linkAtts[i];

          if ('href' !== attr.name) {
            button.setAttribute(attr.name, attr.value);
          }
        }

        menuItem.replaceChild(button, link);
      }

      return button;
    }

    function setUpAria(submenu, button) {
      var submenuId = submenu.getAttribute('id');
      var id;

      if (null === submenuId) {
        id = button.textContent.trim().replace(/\s+/g, '-').toLowerCase() + '-submenu';
      } else {
        id = menuItemId + '-submenu';
      } // set button ARIA


      button.setAttribute('aria-controls', id);
      button.setAttribute('aria-expanded', false); // set submenu ARIA

      submenu.setAttribute('id', id);
      submenu.setAttribute('aria-hidden', true);
    }
  };
  /* Create a ClickMenus object and initiate menu for any menu with .clicky-menu class */


  document.addEventListener('DOMContentLoaded', function () {
    var menus = document.querySelectorAll('.clicky-menu');
    menus.forEach(function (menu) {
      var clickyMenu = new ClickyMenus(menu);
      clickyMenu.init();
    });
  });
})();

/***/ }),

/***/ "./assets/js/components/AnimateOnPageLinks.js":
/*!****************************************************!*\
  !*** ./assets/js/components/AnimateOnPageLinks.js ***!
  \****************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
var $ = window.jQuery;
var $window = window.$window || $(window);
/**
 * Intercept clicks on any anchor tag and if the anchor is linking to an on page ID, animate the scroll to the targeted
 * element.
 *
 * This only works if the href contains a value beginning with '#'. e.g; #about-section. You can modify this behaviour
 * by changing the this.link_is_targeting_on_page_anchor() method.
 *
 * If the clicked element has a `data-toggle=xxx` attribute, it won't be handled. You can modify this behaviour by
 * changing the this.is_excluded() method.
 */

var AnimateOnPageLinks = {
  duration: 800,
  offset: -100,
  init: function init() {
    var _this = this;

    $('a').on('click', function (e) {
      var $link = $(e.target);

      if (_this.is_excluded($link)) {
        return;
      }

      var href = $link.attr('href');

      if (_this.link_is_targeting_on_page_anchor(href)) {
        var $target_element = $(href);

        if (!$target_element.length) {
          return;
        }

        e.preventDefault();
        var offset = $target_element.data('scroll-to-offset') === undefined ? _this.offset : $target_element.data('scroll-to-offset');
        var scroll_top = $target_element.offset().top + offset; // subtract any additional height considerations to scroll_top (e.g; height of sticky header)
        //scroll_top -= $('.sticky-page-header').outerHeight();

        $('html, body').animate({
          scrollTop: scroll_top
        }, _this.duration, 'swing', function () {
          return $target_element.trigger('scrolled_to');
        });
      }
    });
  },
  is_excluded: function is_excluded($selector) {
    return !!$selector.data('toggle');
  },
  link_is_targeting_on_page_anchor: function link_is_targeting_on_page_anchor(link) {
    return /^#/.test(link);
  }
};
/* harmony default export */ __webpack_exports__["default"] = (AnimateOnPageLinks);

/***/ }),

/***/ "./assets/js/components/ExampleComponent1.js":
/*!***************************************************!*\
  !*** ./assets/js/components/ExampleComponent1.js ***!
  \***************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
var $ = window.jQuery;
var $window = window.$window || $(window);
var ExampleComponent1 = {
  init: function init() {
    var _this = this;

    var $module = $('.ExampleComponent1');
    if (!$module.length) return;
    $module.each(function (index, element) {
      _this.each(element);
    });
  },
  each: function each(element) {
    var $item = $(element); // do something here
    //alert('Example 1 is working...');
  }
};
/* harmony default export */ __webpack_exports__["default"] = (ExampleComponent1);

/***/ }),

/***/ "./assets/js/components/ReplaceObfuscatedEmailAddresses.js":
/*!*****************************************************************!*\
  !*** ./assets/js/components/ReplaceObfuscatedEmailAddresses.js ***!
  \*****************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
var $ = window.jQuery;
var $window = window.$window || $(window);
/**
 * Replaces elements with the defined class with an anchor tag containing a mailto: protocol href.
 *
 * If the targeted element has the data-email attribute containing an email address in the format of
 * example[at]domain[dot]com, the inner text will be preserved and the obfuscated address in the data attribute will be
 * used in the link.
 *
 * If not data attribute is present, the inner text of the element is assumed to have the obfuscated address.
 *
 * `class` and `id` attributes are preserved.
 */

var ReplaceObfuscatedEmailAddresses = {
  class_name: 'ObfuscatedEml',
  init: function init() {
    var _this = this;

    var elements = document.getElementsByClassName(this.class_name);

    if (elements.length) {
      [].forEach.call(elements, function (element) {
        var email, text;

        if (element.hasAttribute('data-email')) {
          email = _this.deobfuscate(element.getAttribute('data-email'));
          text = element.innerHTML;
        } else {
          email = _this.deobfuscate(element.innerHTML);
          text = email;
        }

        var link = document.createElement('a');
        link.innerHTML = text;
        link.setAttribute('id', element.getAttribute('id'));
        link.setAttribute('class', element.getAttribute('class'));
        link.setAttribute('href', 'mailto:' + email + '?subject=Website%20Enquiry');
        element.parentNode.replaceChild(link, element);
      });
    }
  },
  deobfuscate: function deobfuscate(text) {
    return text.replace(/\[(at|dot)]/g, function (match) {
      if (match === '[at]') return '@';
      if (match === '[dot]') return '.';
      return match;
    });
  }
};
/* harmony default export */ __webpack_exports__["default"] = (ReplaceObfuscatedEmailAddresses);

/***/ }),

/***/ "./assets/js/components/example-2.js":
/*!*******************************************!*\
  !*** ./assets/js/components/example-2.js ***!
  \*******************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = {
  init: function init() {// do something here
    //alert('example 2 is working...');
  }
};

/***/ }),

/***/ "./assets/scss/app.scss":
/*!******************************!*\
  !*** ./assets/scss/app.scss ***!
  \******************************/
/*! no static exports found */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ 0:
/*!*******************************************************!*\
  !*** multi ./assets/js/app.js ./assets/scss/app.scss ***!
  \*******************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(/*! /Users/martin/Server/savelendgroup/assets/js/app.js */"./assets/js/app.js");
module.exports = __webpack_require__(/*! /Users/martin/Server/savelendgroup/assets/scss/app.scss */"./assets/scss/app.scss");


/***/ })

/******/ });