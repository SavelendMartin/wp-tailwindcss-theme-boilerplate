// you can import modules from the theme lib or even from
// NPM packages if they support it…
import ExampleComponent1 from "./components/ExampleComponent1";

// you can also require modules if they support it…
const ExampleModule2 = require('./components/example-2');

// Some convenient tools to get you started…
import ReplaceObfuscatedEmailAddresses from "./components/ReplaceObfuscatedEmailAddresses";
import AnimateOnPageLinks from "./components/AnimateOnPageLinks";


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