==========
Navigation
==========

Discover how to manage different type of navigation, mega-menu, columns...

**************************
Choosing a navigation type
**************************

The first thing to ask is what is the type of navigation that best suits your
project. Once the choice made, go to theme options pages in the sub topic
Navigation / navigation style and select from options the one you want. Then
read the section below that corresponds to your choice. Only the **Mega-menu**
is common to both types of navigation.

* Disable auto embed navigation: Supermint has an auto embed navigation system.
  For those that need more controls on autonav block, a option in theme option
  page lets you to disable the auto embedding navigation. In this case add an
  autonav block on the Navigation top Area with Supermint or Supermint Dropdown
  custom template on it.

.. index:: Navigation; Regular

**********************
Regular drop-down mode
**********************

Once type Regular drop-down mode selected, you can choose from three kinds of
display sub-menu.

1. Default
==========
 Simple dropdown ( Default behavior )

2. Multi-columns
================
 Display children as column (Activated by a attribute).

 This mode requires that you have at least one level below the root level pages.
 In this case you can activate it by going to the attributes of the root this
 page and check the "Display multicolumns dropdown". Then you can fine-tune the
 display of columns `through options for this mode <https://web.archive.org/web/20180224031131/http://supermint3.myconcretelab.com:80/index.php/documentation/options-framework/theme-options#full_width_multicolumn>`_ .

3. Mega-Menu
================


 Display columns where content is keep from a Stack. Activated by the existence
 of a stack

-----

.. index:: Navigation; Slide

**********
Slide mode
**********

The sliding navigation is an original effect where the full page slides down to
reveal the subnav. You will find many options to take control of the system in
the options theme page.

These subnav can be displayed in **3 different ways**.

1. **Type 1**: Level 1 & level2 with description
2. **Type 2**: Level 1, level 2 & level 3
3. **Type 3**: Level 1 & level 2 without description

You can choose which type thanks to the page attribute on the root level page :

< image missing >

**Case study:**

Imagine a site with four top-level page: **Home**,**About**, **Work** and **Services**.

* The home page has no children. The attribute is left unchanged (fig 1). The
  about page contains three sub-pages. We will use here the type 1, subpages
  appear here with a small description.

* The Work page, it contains four subpages containing itself several sub pages:
  category pages (level2) and pages of work (level3). In this case we use the
  type 2 that displays the categories belonging and work there.

* Finally, the Services page that contains a large number of services. We use
  here the type 3 to display a large number of pages at level 2. This type of
  navigation is also suitable for products of ecommerce, a portfolio, articles ...

-----


.. index:: Navigation; MegaMenu

*********
Mega menu
*********

Both systems can display rich dropdown content. The mega-dropdown is just the
display from a Stack on your dashboard. The system shows one stack by columns
(with capabilities for assembling blocks on each other for certain columns) and
can display the block name optionally.

**Add a Mega-menu under a page**

* Create a stack named **with the handle of the root page**. If you root page is
  "My Page" the handle would be "my-page" so the name of the stack will be
  "**mega_menu_my-page**" (note the difference between _ and -).

* Then, add block to the stack. On each block you can optionally click and
  choose "Advanced" to name your block. This name can be optionally displayed on
  top of the block, into the mega menu.

* Each block is rendered in a new column. To stack different block down the
  previous, start the name of the block by "-follow-". In this case the block
  will be rendered **UNDER** the previous. So a block you want to call
  "Our Features" call it "-follow-Our Features" to place it under the previous.

-----

.. index:: Navigation; Lateral

************
Lateral Mode
************

Lateral navigation is a modern way to display page links. It use also the
quaternary color but this is overridable with which color you want in the
theme customization. You will some option in the 
`related section <./03a-theme-options.html#lateral-mode>`_ .

This navigation is activated by selecting theme in
`the navigation style option <./03a-theme-options.html#supermint-navigation>`_ .

Header & footer
===============
You have seen in the example a logo on top and content on footer. Both are
blocks kept from stack to let you have complete creativity and liberty on what
to put on.


    * The header stack must be named ``Lateral Navigation Header``
    * The Footer stack must be named ``Lateral Navigation Footer``

Link style
==========

To fit exactly to what you expect to have in your design, you can choose the font-family,
from the one chosen in the font section, for the navigation links. You can also choose
to uppercase links.

-----

*****************************
Wide Large Top drop-down mode
*****************************
This Mode displays a full width bar with items inside. This mode works well 
when the 
`top bar is hidden <./03a-theme-options.html#display-top-bar-area>`_ .
The logo comes from a stack named **Site Logo**.


------

Original reference: web.archive.org `page <https://web.archive.org/web/20180210232248/http://supermint3.myconcretelab.com:80/index.php/documentation/navigation>`_
