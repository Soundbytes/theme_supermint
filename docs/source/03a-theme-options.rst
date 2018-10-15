.. index:: Option; theme

=============
Theme Options
=============
 Here you will find all options available in the theme
 option page of Supermint with an explanation, type and
 default value (with the base preset).

.. index:: Option; theme-layout

******
Layout
******

 For each page of the site play with these options
 to fine tune design details as optional Area, Boxed
 layout, Side-bar size.

-----

**Enable responsive layout -**
    If enabled, all layouts will be adapted for small screen. If disabled the
    site will be rendered as desktop on mobile & tablets.

* type : ``toggle``
* default : ``On``
* id : ``responsive``


-----

**Display wide Top Area -**
    Display an Area under the logo to add some wider content.

* type : ``toggle``
* default : ``Off``
* id : ``display_top_area``

-----

.. _display-top-bar-area:

**Display Top Bar -**
    Display zone with Logo Area, right Header content. Disable this for the
    Wide navigation style.

* type : ``toggle``
* default : ``On``
* id : ``display_top_bar_area``

-----

**Top Bar width size -**
    Add or remove a column for logo in the top-bar.

* type : ``select``
* default : ``Normal``
* id : ``logo_col_size``

-----

**Layout mode -**
    Each page templates can be displayed in a wide or a Boxed format. Boxed
    format use the color 'boxed-background-color' as background.

* type : ``select``
* default : ``Wide``
* id : ``layout_mode``

-----

**Sidebar width size -**
    Add or remove a column in the sidebar.

* type : ``select``
* default : ``Normal``
* id : ``sidebar_size``

-----

**Sidebar padding -**
    Add space between the sidebar border and the content.

* type : ``select``
* default : ``Normal``
* id : ``sidebar_padding``


-----

**Sidebar offset -**
    Add Space between sidebar and the Main content area.

* type : ``select``
* default : ``None``
* id : ``sidebar_offset``

-----

**Content padding -**
    Add or remove space between border and content in the Main content area.

* type : ``select``
* default : ``Normal``
* id : ``content_padding``


.. index:: Option; theme-blocks-templates

****************
Blocks templates
****************

 In this section you find options to control Block's custom template details



Page List
---------
 Options for the Built-in "Autonav" block

-----

**Display tag filtering -**
    Display tag filtering on templates that support this feature.

* type : ``toggle``
* default : ``On``
* id : ``isotope_display_tags``

-----

**Display Keyword filtering**
    Display keyword filtering on templates that support this feature

* type : ``toggle``
* default : ``On``
* id : ``isotope_display_search``

-----

Feature
-------
    Options for the Built-in "Feature" block

**Display button -**
    Display a link button on certain Feature block template

* type : ``toggle``
* default : ``On``
* id : ``feature_link_button``

-----

**Button text**
    The default text to add on the button

* type : ``text``
* default : ``More``
* id : ``feature_link_text``

-----


.. index:: Option; theme-autonav

Autonav
-------
    Options for the Built-in "Autonav" block


.. index:: Fonts; Awesome

.. _default-nav-block-icon:

**Icon class on left of each navigation title**
    Pick an icon from the `Font Awesome <https://fontawesome.com/icon>`_
    Library. This icon will be used throught all autonav template.

* type : ``awesome``
* default : ``-``
* id : ``default_nav_block_icon``



-----

**Display icon on Horizontal template**

* type : ``toggle``
* default : ``Off``
* id : ``autonav_horizontal_icon``

-----



.. index:: Option; theme-supermint-navigation

********************
Supermint Navigation
********************
    This section display options common for the navigation's types

-----

**Navigation Style -**
    Choose the navigation style

* type : ``select``
* default : ``Regular drop-down mode``
* id : ``navigation_style``

-----

.. _disable-auto-embed-nav:

**Disable Auto embed navigation**
    If disabled, a global area will let you put whitch block you want for nav.

* type : ``toggle``
* default : ``Off``
* id : ``disable_embed_nav``

-----

**Choose a page for searching result -**
    Display Search box in the top of the page if a page is selected.
    Add a block search on this page to display result.

* type : ``page``
* default : ``0``
* id : ``display_searchbox``

-----

**Display search input in the mobile version -**

* type : ``toggle``
* default : ``On``
* id : ``display_searchbox_mobile``

-----

**Hidden dropdown on small screen -**

* type : ``toggle``
* default : ``On``
* id : ``hidde_dropdown_small_screen``

-----

**Auto hidden Mobile bar**
    If enabled, the small toolbar is hidde during scroll.

* type : ``toggle``
* default : ``Off``
* id : ``auto_hidde_top_bar``

-----

**Display icon on first level if available**
   If the atrtribute 'icon' is filled on a first-level page it will be
   displayed in the top-nav

* type : ``toggle``
* default : ``On``
* id : ``first_level_nav_icon``

-----

**Make regular nav FLAT**
    Once enabled, this options remove all gradient and shadow from the
    regular type navigation. Usefull for light colors

* type : ``toggle``
* default : ``Off``
* id : ``first_level_regular_flaterize``

-----

**Items spacing**
    Set horizontal space between each nav items on regular nav

* type : ``range``
* default : ``20px``
* id : ``nav_item_spacing``

-----

Dropdown mode
-------------
    Options When the nav is in dropdown mode

-----

**Fix the navigation bar on top -**
    If enabled, the nav bar will be fixed on top. You will need to disable the
    auto-embeding of navigation and placing the autonav block into the
    'Responsive Navigation' Area

* type : ``toggle``
* default : ``Off``
* id : ``wide_navbar_fixed``

-----

**Dropdown Width -**
    Set width for dropdown in main navigation when it's on dropdown mode

* type : ``range``
* default : ``220px``
* id : ``nav_sub_level_width``

-----

Dropdown multicolumns
--------------------------
    Options When the nav is in dropdown mode and the attribute
    "Display multi-columns dropdown" is activated

-----

.. _full-width-multicolumn:

**Multicolumns position -**
    Display multi-columns nav as full width or under parent

* type : ``select``
* default : ``Aligned on left of the parent``
* id : ``full_width_multicolumn``

-----

**Number of link per columns -**
    This setting allows you to set the number of items by columns
    (only if the "break by parent" (below)) is deactivated

* type : ``range``
* default : ``5link``
* id : ```nav_multicolumns_item_per_column``

-----

**Activate the break by parent -**
    The number of columns is determined by the number
    of child page in second level.

* type : ``toggle``
* default : ``On``
* id : ``break_columns_on_child``

-----

Large Dropdown mode
-------------------
    Options When the navigation style is is set on "Wide Large drop-down mode"

-----

**Remove the regular place take by the navigation -**
    This advanced option let to control when the auto-embed nav is set on off
    and we want to play with this navigation place.

* type : ``toggle``
* default : ``Off``
* id : ``wide_navbar_colapse``

-----

**Contains navigation width to the content width -**
    If enabled, it disable the full width feature and display navigation
    as large as the content

* type : ``toggle``
* default : ``Off``
* id : ``wide_navbar_contained``

-----

**Display the stack 'Site Logo' on left -**
    If enabled the content of the stack will be displayed on left

* type : ``toggle``
* default : ``On``
* id : ``wide_navbar_display_logo``

-----

Lateral mode
------------
    Options When the nav is diplayed on left

-----

**Choose the font-family for links**
    By choosing an element you select which font (not size)
    to use for links in the navigation

* type : ``select``
* default :``-``
* id : ``lateral_nav_element_font``

-----

**Font size for links items**

* type : ``range``
* default : ``14px``
* id : ``lateral_nav_element_size``

-----

**Make links uppercase**

* type : ``toggle``
* default : ``Off``
* id : ``lateral_nav_element_uppercase``

-----

**Activate the harmonize-text script**
    This script tries to harmonize title width to create a unique design.
    For now can display width smaller sometimes but always visible.

* type : ``toggle``
* default : ``Off``
* id : ``lateral_nav_element_harmonized``

-----

Responsive full width mode
--------------------------
     Options when the nav shown on mobile

-----

**Display the stack 'Site Logo' on the mobile nav -**
    If enabled the content of the stack will be displayed at left.

* type : ``toggle``
* default : ``On``
* id : ``display_logo_mobile_nav``



-----

**Display the regular Area Logo on Mobile -**
    If disabled, the Logo will be hidden when the mobile nav is shown.

* type : ``toggle``
* default : ``Off``
* id : ``display_main_logo_on_mobile``

-----

**Font size for links items -**

* type : ``range``
* default : ``20px``
* id : ``full_screen_nav_font_size``

-----

Responsive Lateral Nav (mmenu)
------------------------------
    Options the autonav template is "Supermint Mmenu"

-----

**Choose the theme -**
    By choosing an element you select which font (not size) to use for links
    in the navigation

* type : ``select``
* default : ``Light gray background``
* id : ``mmenu_theme``

-----

**Choose the Position -**
    By default, the menu will always slide the page out to the right but you
    can change it.

* type : ``select``
* default : ``Left``
* id : ``mmenu_position``

-----

**Pane shadow -**
    Enable if you want the page to have a shadow to emphasize it is in front
    of the menu.

* type : ``toggle``
* default : ``Off``
* id : ``mmenu_shadow``

-----

**Display Icon -**

* type : ``toggle``
* default : ``Off``
* id : ``mmenu_display_icon``

-----

.. index:: Option; theme-mega-menu

*****************
Mega menu options
*****************
 Options when a parent page displays a Stack as mega-menu

-----

**Mega menu position when dropdown mode -**
    Display a mega menu as full width or under parent

* type : ``select``
* default : ``Full width mega-menu with percent based columns width``
* id : ``full_width_mega``

-----

**Mega columns width -**
    Columns width in pixels for mega menu when aligned to the left

* type : ``range``
* default : ``200px``
* id : ``mega_columns_width``

-----

**Block title when exist -**
    Display the block name as title

* type : ``toggle``
* default : ``Off``
* id : ``display_title_mega_menu``


-----

.. index:: Option; theme-navigation-slide

************************
Slide Navigation options
************************
    Options available when navigation is set on "slide" mode

-----

**Navigation Event -**
    Choose the event that activates the sliding menu (not on dropdown)

* type : ``select``
* default : ``Click``
* id : ``nav_event``

-----

**Navigation Double click management -**
    Choose to open/close or go to the url on second click

* type : ``select``
* default : ``Go to the Url``
* id : ``nav_dbl_click_event``

-----

**Open on load -**
  If enabled, Subnavs will be open if they are one subpage active.
  If disabled subnavs are closed on page load.

* type : ``toggle``
* default : ``Off``
* id : ``nav_open_on_load``

-----

**Display little arrow on right -**

* type : ``toggle``
* default : ``Off``
* id :``nav_slide_arrow``

-----

.. index:: Fonts; Awesome

**Sub-page icon -**
    The icon from `FontAwesome <https://fontawesome.com/icons>`_ displayed on
    left of each sub-page.

* type : ``awesome``
* default : ``-``
* id : ``default_nav_icon``

-----

**Display pane title -**
    Display the first level page title & link on the top of each subnav panes.

* type : ``toggle``
* default : ``Off``
* id : ``display_pane_title``

-----

**Navigation column -**
    How many columns you want in the sub navs

* type : ``select``
* default : ``Four``
* id : ``nav_columns``

-----

**Columns margin -**
    Set space between columns in percent

* type : ``range``
* default : ``2%``
* id : ``nav_columns_margin``

-----

**Open speed -**
    Set the speed to open the nav

* type : ``range``
* default : ``300ms``
* id : ``nav_open_speed``

-----

**Close speed -**
    Set the speed to close the nav

* type : ``range``
* default : ``300ms``
* id : ``nav_close_speed``

-----

**Slide speed -**
    Set the speed when subnavs slide

* type : ``range``
* default : ``300ms``
* id : ``nav_slide_speed``

-----

**On mouse leave delay -**
    Set the wait time for close the nav, after the mouse leaves the nav

* type : ``range``
* default : ``1000ms``
* id : ``nav_mouseleave_delay``

-----

**Shorten description on subnavs -**
    If set to 0 all description text will be displayed

* type : ``range``
* default : ``0Char``
* id : ``nav_shorten_desc``

-----

.. index:: Option; theme-footer

******
Footer
******
    Options for the Footer section

-----

**Display Footer -**

* type : ``toggle``
* default : ``On``
* id : ``display_footer``

-----

**Footer column -**
    How many columns you want in the footer

* type : ``select``
* default : ``One Half and two``
* id : ``display_footer_column``

-----

**Make Footer Global -**
    If enabled, Block on footer will be Globals

* type : ``toggle``
* default : ``On``
* id : ``footer_global``

-----

**RAW HTML Credits -**
    If you want to change it, feel free

* type : ``textarea``
* default : ``Designed by MyConcreteLab Powered by concrete5``
* id : ``footer_credit``

-----

**Disable Footer login links -**
    If enabled, you will not see login links in the footer

* type : ``toggle``
* default : ``Off``
* id : ``disable_footer_login``


.. index:: Option; theme-popup


*****
Popup
*****
    Here you can set transitions for popups

CSS transitions for popup
-------------------------

**content at start -**
    CSS only

* type : ``textarea``
* default :``-``
* opacity: ``0;``
* transform: ``translateY(-20px) perspective( 2000px ) rotateX( 10deg );``
* id : ``popup_content_start_css``

-----

**content animate it -**
    CSS only

* type : ``textarea``
* default : ``opacity: 1``;
* transform: ``translateY(0) perspective( 600px ) rotateX( 0 );``
* id :``popup_content_animate_css``

-----

**content animate out -**
    CSS only

* type : ``textarea``
* default : ``opacity: 0;``
* transform: ``translateY(-20px) perspective( 2000px ) rotateX( 10deg );``
* id : ``popup_content_out_css``

-----

Button type for popup
---------------------
    Here you can set the type of button for popup

**Button type for popup -**
    Choose between three styles of button

* type : ``select``
* default : ``Push``
* id : ``popup_button_type``

-----

**Button color for popup -**
    Choose between four colors

* type : ``select``
* default : ``Primary``
* id : ``popup_button_color``

.. index:: Option; theme-iframe-z-index-fix


*************
Miscellaneous
*************
**Activate iFrame z-index script -**
    Fix an iFrame z-index issue on certain condition.

* type : ``toggle``
* default : ``Off``
* id : ``fix_iframe_zindex``

-----

Original reference: web.archive.org
`page <https://web.archive.org/web/20180327084949/http://supermint3.myconcretelab.com:80/index.php/documentation/options-framework/theme-options>`_

