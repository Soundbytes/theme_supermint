********************
Welcome to Supermint
********************
 A theme for CMS `concrete5 <https://www.concrete5.org/>`_ .

.. Note:: To help those in need, this documentation has been copied and pasted 
 from the web archive
 `page <https://web.archive.org/web/20170113174552/http://supermint3.myconcretelab.com:80/documentation/get-started>`_,
 and edited somewhat for clarity. A perfunctory comparison of the documented
 options has been made by running supermint in concrete5 version 8.4.2 , however
 full testing has not been done, and there is no assurance that theme features
 are functioning as documented. As you read, please also consider that the 
 English here was generously translated from French by the original author.

Fundamental principles:
-----------------------

* Use as much as possible of existing blocks of Concrete5
* Very intensive use of
  `custom template for blocks <http://documentation.concrete5.org/editors/in-page-editing/block-areas/custom-templates/>`_
* Use just as intensive
  `classes for blocks and areas <./05-block-area-layout-classes.html>`_
* Regular use of
  `pages <https://documentation.concrete5.org/editors/dashboard/pages-and-themes/attributes>`_
  and
  `files attributes <https://documentation.concrete5.org/editors/dashboard/files/attributes>`_
* Anything that is not regulated by the above mentioned ways will be through
  the `options themes <03-options-framework.html>`_ of the in the dashboard

So if you master well the custom templates, and classes for block areas and the
attributes, you will take great pleasure in creating your site with Supermint.

If these concepts are still unclear or unknown, **do not worry**, in a few hours
(if not minutes), through
`this documentation <./05-block-area-layout-classes.html>`_
and the editor
`documentation.concrete5.org <https://documentation.concrete5.org/editors>`_
you will master these principles and will join the group of happy users.



.. index:: Installation

Installation instructions
=========================

If you have never installed a package on a Concrete5 site, read this first:
https://documentation.concrete5.org/editors/dashboard/add-functionality


* **Installing Concrete5 on your server**

  If you choose to install a **starting point from Supermint**, please do it
  on a fresh Concrete5 installation.   When you will install Concrete5 on a
  server you have two choice of content, choose Empty Site.

  <example image missing>

* **Manual installation of Supermint**

  1. Unzip this file in your site's **packages**/ directory.
  2. Login to your site as an administrator.
  3. Find the **Add Functionality** page in your dashboard.
  4. Find this package in the list of packages awaiting installation.
  5. Click the **install** button.

 **Installation page & Starting points**

 Once the install button has been clicked you will see a gallery with all
 Starting points available. For each, you see a button for a preview,
 another to choose it. Once your choice has been made, click on bottom on the
 install button. **This can take some time, don't refresh or leave the page !**

* **LAST STEP**

  Read this documentation to discover how to play with Supermint !

-----

.. index:: Extend

Extend Supermint
================

The best way to customize **theme files** and keep the **update functionality** is to know what you want to change.

* **If you want to customize css:**

  Create a file named supermint.css placed at root/application/themes/supermint/css/supermint.css

* **If you want modify a page-type**:

  Copy/paste the page-type file from
  packages/theme_supermint/themes/supermint/left_sidebar.php
  into
  root/themes/supermint/left_sidebar.php and modify it as you want

* **If you want to add a page-type**:

  Add a file into root/application/themes/supermint/my_page_type.php. After go to dashboard > page-types > add a page type, name it and give as handle the file name (my_page_type). This page type will be available now when you will create a new page.

* **If you want to modify the header.php or footer.php**

  or any other files from Supermint theme elements folder:

  Copy/paste the header file
    from ``packages/theme_supermint/themes/supermint/elements/header.php``

    to ``root/application/themes/supermint/elements/header.php``

    and change what you want into this.

------

Original reference: web.archive.org
`page <https://web.archive.org/web/20170113174552/http://supermint3.myconcretelab.com:80/documentation/get-started>`_


