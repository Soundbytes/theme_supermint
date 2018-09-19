========
Colophon
========
About this documentation website.

*****************
reStructured Text
*****************

* The documentation source files are written in
  `reStructured <http://docutils.sourceforge.net/rst.html>`_ text
  which ends with an ``.rst`` suffix.

  - They exist in ``~/workspace/docs/source``

* Try an online WYSIWYG `editor <http://rst.ninjs.org>`_

*************************
Tranformation to html
*************************

* Tranformation to **html** and other formats is made with
  `Sphinx <http://www.sphinx-doc.org/en/master/index.html>`_ a python based
  document generator.

  - Change into the docs directory, which also has the Makefile

    ```$cd ~/workspace/docs```

  - Command line syntax generic

    ``$ sphinx-build -b html sourcedir builddir``

  - Command line syntax **specific to this project**

    ``$ sphinx-build -b html ~/workspace/docs/source ~/workspace/docs/build/html``

***********************
Workspace Customization
***********************

* Some workspace customization is required prior to issuing above commands

  - Possible installation of Sphinx something like:

    - ``$sudo pip3 install -U sphinx``