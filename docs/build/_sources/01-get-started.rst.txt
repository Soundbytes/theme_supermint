********************
Welcome to Supermint
********************

Basic Concept: The logic of Supermint is based on some fundamental principles:
------------------------------------------------------------------------------

* Use as much as possible of existing blocks of Concrete5
* Very intensive use of custom template for blocks
* Use just as intensive classes for blocks and areas
* Regular use of pages and files attributes
* Anything that is not regulated by the above mentioned ways will be through
  the options themes of the in the dashboard

So if you master well the custom templates, and classes for block areas and the attributes, you will take great pleasure in creating your site with Supermint.

If these concepts are still unclear or unknown, **do not worry**, in a few hours
(if not minutes), through `this documentation <./05-block-area-layout-classes.html>`_ 
and the one on `documentation.concrete5.org <http://documentation.concrete5.org/>`_ 
you will master these principles and will join the group of happy users.



Installation instructions 
=========================

If you have never installed a package on a Concrete5 site, read this first: https://documentation.concrete5.org/editors/dashboard/add-functionality


* **Installing Concrete5 on your server**

  If you choose to install a **starting point from Supermint**, please do it on a fresh Concrete5 installation.   When you will install Concrete5 on a server you have two choice of content, choose Empty Site. 

* **Manual installation of Supermint**
  
  1. Unzip this file in your site's **packages**/ directory.
  2. Login to your site as an administrator.
  3. Find the **Add Functionality** page in your dashboard.
  4. Find this package in the list of packages awaiting installation.
  5. Click the **install** button.

* **LAST STEP**
  Read the documentation to discover how to play with Supermint ! 

-----

Extend Supermint
================

The best way to customize **theme files** and keep the **update functionality** is to know what you want to change.

* **If you want to customize css:**

  Create a file named supermint.css placed at root/application/themes/supermint/css/supermint.css

* **If you want modify a page-type:**

  Copy/paste the page-type file from packages/theme_supermint/themes/supermint/left_sidebar.php into root/themes/supermint/left_sidebar.php and modify it as you want

* **If you want to add a page-type:**

  Add a file into root/application/themes/supermint/my_page_type.php. After go to dashboard > page-types > add a page type, name it and give as handle the file name (my_page_type). This page type will be available now when you will create a new page.

* **If you want to modify the header.php or footer.php or any other files from Supermint theme elements folder:**

  Copy/paste the header file 
    from `packages/theme_supermint/themes/supermint/elements/header.php`

    to `root/application/themes/supermint/elements/header.php`

    and change what you want into this.

------

Original reference: web.archive.org `page <https://web.archive.org/web/20170113174552/http://supermint3.myconcretelab.com:80/documentation/get-started>`_


