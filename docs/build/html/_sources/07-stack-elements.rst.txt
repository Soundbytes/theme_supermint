
##############
Stack Elements
##############

How to add tabs, accordions, sliders, .. from a stack


   Stacks creates a set of blocks and displays them anywhere in the site. This
   is useful for updating content that is applied several times in the site.
   It is also a great opportunity for the designer to use these sets of blocks
   and display the creative way. The most classic modes are accordions, tabs.
   Supermint goes further by proposing new and practical ways to display these
   contents as a button that opens a popup.

   Stack `documentation on concrete5.org <https://documentation.concrete5.org/editors/in-page-editing/block-areas/stacks>`_

.. index:: Stack; usage

*****
Usage
*****

  To use the various stack display modes, you must first create a stack. For
  this go in the dashboard in the section blocks and Stacks. You will see a
  button at the top right allows you to create a new stack, click it, enter a
  name and save. You can now add blocks in the stack.

  In most battery display custom models, you'll need to set a name for each
  block. For this, once the block added to the stack, click on it and choose
  "*Advanced*". In the window that opens you will be prompted to enter a name
  for the block.

  Now you must approve that stack so that it is visible to everyone, this step
  is very important and will pose display problems if omitted.

.. index:: Stack; add

*********************
Add a stack to a page
*********************

  Once your stack is created, approved and block named (optional), go on a page,
  turn in block addition mode (the little cross in the upper left), click on
  "block" and choose "stacks". Drag the stack that you just created on your
  page.

  There are still two things to settle: the custom template and color class.

.. index:: Stack; custom

**************************
Adjust the custom template
**************************
  Click your battery freshly added to the page and choose **Custom Template**.
  The popup menu will offer you lower the different model
  (**accordion, button**, ..). Choose the one that suits you.

.. index:: Stack; slider
.. index:: Stack; carousel

************************
Slider/Carousel template
************************
 A special note for carousel template that can display stacks as carousel
 (multiple item per view) or slider (once item per view) : Choose the Carousel
 template and set the number of item by setting the number of column thanks to
 custom class (see screenshot).

 <screenshot missing>

**********************
Adjust the color class
**********************
  Some customized models like accordions support multiple colors taken in the
  theme. For that click on your newly added to the page stack and choose
  **Custom Template** in the text field **custom classes** you can choose one
  of the following option: **element-primary**, **element-secondary**,
  **element-tertiary**, **element-quaternary**,  **element-black** and
  **element-white**.

  .. image:: ./figures/stack_elements/custom-class.jpg


.. index:: Stack; examples

********
Examples
********
**Below the same stack with three different custom template :**

1. **Accordion** as custom template with **element-secondary** as custom class.
2. **Tabs** as custom template with **element-quaternary** as custom class.
3. **Button** popup as custom template with no custom class.

  .. image:: ./figures/stack_elements/stack-elements.jpg

-----

Original reference: web.archive.org `page <https://web.archive.org/web/20180208094031/http://supermint3.myconcretelab.com:80/index.php/documentation/elements-stack>`_
