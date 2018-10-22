==========
Navigation
==========
 Discover how to manage different type of navigation, mega-menu, columns...

**************************
Choosing a navigation type
**************************
 The first thing to ask is what is the type of navigation that best suits the
 project. Once that choice is made, go to theme options pages in the sub topic
 Navigation / navigation style and select from options the wanted type. Then
 read the section below that corresponds to the choice. Only the **Mega-menu**
 is common to both types of navigation.

1. In the dashboard choose Supermint Options->Theme options

 .. image:: ./figures/navigation/dashboard-supermint-options-theme-options.jpg

2. Choose a navigation option

 .. image:: ./figures/navigation/theme-options-navigation.jpg

* **Disable auto embed navigation**: Supermint has an auto embed navigation
  system.  For those that need more controls on autonav block, an
  `option in the theme option <./03a-theme-options.html#disable-auto-embed-nav>`_
  page allows disabling the auto embedding navigation. In this case add an
  autonav block on the Navigation top Area with Supermint or Supermint Dropdown
  custom template on it.

.. index:: Navigation; Regular

**********************
Regular drop-down mode
**********************

Once type **Regular drop-down mode** is selected, choose from three kinds of
display sub-menu, default, Multi-columns or Mega-Menu.

 .. image:: ./figures/navigation/theme-options-navigation-regular-dropdown-mode.jpg

1. Default
==========
 Simple dropdown ( Default behavior ), where **Multicolumns position** is
 set to "Aligned left on parent"

 Example:

 .. image:: ./figures/navigation/regular-dropdown-example.jpg

2. Multi-columns
================
 Display children as column ``Activated by an attribute``.

 This mode requires that there is *at least one level below the root level
 pages*. In this case, activate it by going to the attributes of the root of
 this page and check the **Display multicolumns dropdown**. Then fine-tune
 the display of columns
 `through options for this mode <./03a-theme-options.html#full-width-multicolumn>`_ .

-----

 Example:

 .. image:: ./figures/navigation/regular-dropdown-multicolumn-example.jpg

-----

Details:

1. Go to the page to be edited.
2. Click the gear icon, then choose "Attributes".

 .. image:: ./figures/navigation/attribute-editor-select.jpg

3. Scroll down on the left pane to the Supermint Navigation section, click the
   button "Display multi-columns dropdown" to activate , then scroll
   down on the right pane to "Display multi-columns dropdown".  Click the check
   box labeled "Display multi-columns dropdown".  Click the save the changes
   button.

 .. image:: ./figures/navigation/display-multicolumns-dropdown.jpg

4. Go to Dashboard->Supermint Options->Theme options->Supermint Navigation.
   Scroll down to the section "Dropdown multicolumns mode".
   Choose a number of links per columns smaller than the total number of links
   assigned to the upper level menu.  The result should be similar to the 
   example figure at the top of this section.

 .. image:: ./figures/navigation/number-of-links-per-columns.jpg

3. Mega-Menu
================
 Display columns where content is keep from a Stack.
 ``Activated by the existence of a stack``

1. Go to Dashboard->Supermint Options->Theme options->Mega Menu
2. Choose a "Mega columns width" with the slider.

 .. image:: ./figures/navigation/theme-options-mega-menu.jpg

3. Notice the wider columns in the dropdown menus.

 .. image:: ./figures/navigation/regular-dropdown-multicolumn-example-400px-wide.jpg

-----

.. index:: Navigation; Slide

**********
Slide mode
**********

The sliding navigation is an original effect where the full page slides down to
reveal the subnav. Find
`many options <./03a-theme-options.html#slide-navigation-options>`_ to take
control of the system in the options theme page.

1. Go to Dashboard->Supermint Options->Theme options->Supermint Navigation
2. Choose **Navigation Style** "Slide mode"

 .. image:: ./figures/navigation/theme-options-navigation-slide-mode.jpg

-----

These subnav can be displayed in **3 different ways**.

1. **Type 1**: Level 1 & level 2 with description
2. **Type 2**: Level 1, level 2 & level 3
3. **Type 3**: Level 1 & level 2 without description

Choose which type thanks to the page attribute on the root level page :

< image missing >


**Case study:**

Imagine a site with four top-level pages: **Home**, **About**, **Work** and
**Services**.

* The Home page has no children. The attribute is left unchanged (fig 1).

* The About page contains three sub-pages. We will use here the type 1, subpages
  appear here with a small description.

* The Work page contains four subpages containing itself several sub pages:
  category pages (level2) and pages of work (level3). In this case we use the
  type 2 that displays the categories belonging and work there.

* The Services page that contains a large number of services. We use
  here the type 3 to display a large number of pages at level 2. This type of
  navigation is also suitable for products of ecommerce, portfolio and articles.

-----


.. index:: Navigation; MegaMenu

*********
Mega menu
*********

Both systems can display rich dropdown content. The mega-dropdown is just the
display from a Stack on the dashboard. The system shows one stack by columns
(with capabilities for assembling blocks on each other for certain columns) and
can display the block name optionally.

**Add a Mega-menu under a page**

* Create a stack named **with the handle of the root page**. If the root page is
  "My Page" the handle would be "my-page" so the name of the stack will be
  "**mega_menu_my-page**" (note the difference between _ and -).

* Then, add the block to the stack. On each block, optionally click and
  choose "Advanced" to name the block. This name can be optionally displayed on
  top of the block, into the mega menu.

* Each block is rendered in a new column. To stack different block down the
  previous, start the name of the block by "-follow-". In this case the block
  will be rendered **UNDER** the previous. So a block to be called
  "Our Features" call it "-follow-Our Features" to place it under the previous.

-----

.. index:: Navigation; Lateral

************
Lateral Mode
************

Lateral navigation is a modern way to display page links. It also uses the
quaternary color but this is overridable with the color chosen in the
theme customization. Find some options in the
`related section <./03a-theme-options.html#lateral-mode>`_ .

This navigation is activated by selecting theme in
`the navigation style option <./03a-theme-options.html#supermint-navigation>`_ .

< example is missing >

Header & footer
===============
See in the example, a logo on top and content on footer. Both are blocks kept
from stack to allow complete creativity and liberty on what to put on.


    * The header stack must be named ``Lateral Navigation Header``
    * The Footer stack must be named ``Lateral Navigation Footer``

Link style
==========

For the navigation links choose the font-family from the one chosen in the
font section, to exactly fit the design expectations. Optionally choose to
uppercase links.

-----

*****************************
Wide Large Top drop-down mode
*****************************
This Mode displays a full width bar with items inside. This mode works well
when the
`top bar is hidden <./03a-theme-options.html#display-top-bar-area>`_ .
The logo comes from a stack named **Site Logo**.

< Example is missing >

*****************
Mobile navigation
*****************
 There are different ways to achieve a navigation for small screen.

* The first is to add an autonav in the Sitewide Responsive Navigation. On this
  block set as custom template **Supermint Full Screen** or **Supermint Mmenu**.
  Both display a top bar once the screen is smaller that **768px**. Both can
  display a **logo** on this bar, where content are taken from the Stack
  **Site Logo**, display a search box on the right if a result page is choosen
  in the theme option page. Both have options in the theme option page. Try it
  to find which one fits the design expectations.

* The second way is to work with lateral navigation that provides a button on
  a small screen to open/close the lateral navigation.

------

Original reference: web.archive.org `page <https://web.archive.org/web/20180210232248/http://supermint3.myconcretelab.com:80/index.php/documentation/navigation>`_
