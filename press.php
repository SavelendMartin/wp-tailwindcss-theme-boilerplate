<?php
/**
 * Template Name: Press
 * Template Post Type: post, page, event
 *
 * @link https://developer.wordpress.org/themes/template-files-section/page-template-files/
 *
 * @package Kava
 */

get_header();

?>

<div id="press" class="prose mx-auto py-12"></div>

<script type="application/javascript">
    // Implements the MFN-JS Loader javascript file
    if (!window._MFN) {
        var s = document.createElement("script");
        s.type = "text/javascript";
        s.src = "https://widget.datablocks.se/api/rose/assets/js/mfn/mfn-js-loader-v0.0.4.js";
        s.async = true;
        document.getElementsByTagName("body")[0].appendChild(s);
    }

    window._MFN = {
        // The selector of the element where the content of the news
        // archive should end up
        outlet: '#press',

        // Default language of the news items shown
        lang: 'sv',

        // 'selected' uses locale from lang, other options are 'en', 'sv'
        // and so on
        l10nLang: 'en',

        // The type of view
        type: 'listview',

        // Author Entity ID provided
        entity_id: '14e18a8e-0c96-4ef7-a67a-ba508cf74fa0',

        // Path to the page where a single view version has been implemented
        single_view_url: 'index.php/pressreleaser/visa',

        // Default limit of items shown
        limit: 20,

        // Adds the preamble of the article
        show_preamble: true,

        // 'default' (:regulatory, sub:report:annual, sub:report:interim)
        // or add your own eg [{tag: ':regulatory'}]
        show_tags: [{tag: ':regulatory'}],

        // Show attachments
        show_attachments: true,

        // Enable clickable tags
        clickable_tags: true,

        // Toolbar
        toolbar: [
            /*{
                // show search
                item: 'search',
                // placeholder text for input search field
                placeholder: 'Search',
                // if true an Ajax search is added to the search bar
                live_search: true,
                // the debounce time for the ajax search if enabled
                live_search_delay: 300
            },
            {
                item: 'limit',
                options: [
                    10,
                    30,
                    50,
                    100
                ],
            },
            // 'default' or [{tag: ':regulatory'},
            // {tag: 'sub:report:interim'}] etc.*/
            {
                item: 'tags',
                tags: 'default'
            },
            /*{
                item: 'year',
                start: 2010
            },
            {
                item: 'lang',
                languages: ['sv', 'en']
            }*/
        ],
        // Your own local to override text selection or add for
        // other l10n languages (For the toolbar text and tags)
        l10n: {
            'Search': {
                en: 'Search',
                sv: 'Sök',
            }
        },

        // Should most likely be true (Enables proxy attachments)
        use_proxied_attachment_urls: true,

        // Shows the date
        show_date: true,

        // Example of configuring locale and time zone,
        // Swedish timezone is default if date_setting is not set
        // date_setting: {
        //     locale: 'sv-SE' // eg. for US 'en-US',
        //         option: {
        //         month: 'numeric', // or 'long', 'short'
        //         year: 'numeric', // or '2-digit'
        //         day: 'numeric', // or '2-digit'
        //         timeZone: 'Europe/Stockholm' // eg. 'America/New_York'
        //     }
        // }

        // If you want to implement your own custom date formatter
        // you can add your own function
        // format_date: function(date) {
        //     return date.toLocaleTimeString('sv-SE', {
        //         month: 'long',
        //         year: 'numeric',
        //         day: 'numeric',
        //         timeZone: 'Europe/Stockholm'
        //     });
        // }

        // Example of implementing your own HTML for a news item
        // post_processor: function(current, item) {
        //  console.log(item)
        //     return '<div>' + item.content.title + '</div>'
        // }

    }
</script>

<?php

get_footer();
