##########
Page Lists
##########
  An essential tool in building your pages.

.. index:: Page-lists-templates
.. index:: Page-lists-templates; static-grid
.. index:: Page-lists-templates; masonry-grid
.. index:: Page-lists-templates; carousel-grid

***************************
How use page-list templates
***************************
  Great care has been taken in the preparation of different templates for
  page-list. First because it is a basic functionality in a web site that
  represent objects and especially because in Concrete5, the Page object
  is used for countless purposes. For a photographer, for bloggers, agency,
  members, products, .. page can (almost) everything represented::

    Just after the template is applied, the block seems to be blank.
    Don't worry, this behavior will be avoided once the page is saved .

  Templates can be displayed in three different ways:

  1. **Static Grid** (default)
  2. **Masonry grid** (with or without filters)
  3. **Carousel** (from 1 to 6 pages per slide)

  It supports all management columns, with or without margins, and can all
  display a button with personalized text. All supports displaying thumbnails.


Manage functionality with custom classes set on the block:
==========================================================

* Display as carousel ``is-carousel``
* Enable Masonry grid ``is-masonry``
* Display the page in a popup ( if page-type is UI-content ) ``popup-link``
* The number of columns displayed on desktop screen
  ``1-column`` - ``2-column`` - ...
* Deleting gap between items (no margins) ``no-gap``
* Sorting by tags (only with masonry) ``tag-sorting``
* Sorting by keywords (only with masonry) ``keyword-sorting``


.. index:: Page-lists-templates; custom

Playing with custom classes
---------------------------

  Once the page list added with right settings to the page, click on it
  and select **Design & Custom templates**. Under the **cog** button you will
  choose a custom template and some custom classes. All classes have a name that
  tell you what is done once added.

A page list in Edit mode
------------------------

  Each template in edit mode informs you about settings made on it.

.. index:: Page-lists-templates; tags sorting

Tags sorting
------------

  To display and use tags sorting on a page list, you need to add the right
  custom class ``tags-sorting`` and to fill the attribute ``tags`` of pages that
  will be listed. The template will display only tags that are present in this
  list, not all tags.


-----

Original reference: web.archive.org `page <https://web.archive.org/web/20180108133842/http://supermint3.myconcretelab.com:80/index.php/documentation/page-lists>`_