.. index:: Option; fonts

=============
Font Options
=============
    Here you will set all font family from 600+ Google fonts, font size, font
    variant used into the site. This is a super powerful feature; easy to play
    with.

.. index:: Fonts; Google

*****************
Fonts from Google
*****************
    In this section you will choose which font is assigned to which element. You
    also need to choose one or more variations : styles such as **bold** and
    *italics* have their fonts.

**Examples:**

Choose a font for paragraphs. We will take for example the font **Roboto**
because it offers several **variations**: Choose as font for paragraphs
**Roboto**. Once loaded you will see example display on the right.

<image missing>

Now next to **Variants** you will see **Regular** which is the mandatory style
for any font. So that the text in bold and italic appears good in your website,
you should choose the corresponding variants. In this case select the 300,
300 Italic, 700 and 700 Italic. We intentionally deviating the **Regular** style
that we do not like so much.

.. note::

   Many |ss| police |se|  place has only mode Regular. Bold and italic will
   therefore rendering random manner following browsers.

**Choose a Variant as default**

Once several variants displayed a new menu item appears below, to choose which
version to use by default. In this example if we select 600, all paragraphs will
be displayed in bold. If we select 300, all paragraphs will light mode, what we
want, so select it.

The 'Subsets' are only used for some languages, if you need select the ones that
suit you.

**Font size**

Here you can adjust the size of each element typography.

**Font Variations**

Select any item in this section to capital. This style is often appreciated for
h4, h5, h6.

**Responsive text**

In this section, you can choose to calculate different font sizes for the
different screen sizes. The ratio for widescreen multiply the size as said split
tablet and phones.

**Example:**

.. note::

   For paragraphs, we select a size of 16px.

   Ratios:

       **Wide screen**: 16 * 1.2 = 19px

       **Tablet**: 16 /1.2 = 13px

       **Phones**: 16 /1.3 = 12px


**If 1 is selected, no change will be made in sizes chosen in the section
"Font size" above.**

-----

**Global page Font -**
    This font is used on all elements except those below

* type : ``font``
* default : ``Roboto``
* id : ``p``

-----

**Fonts for alternate text -**
    Choose a font for the alternate class (available in the WYSIWYG editor)

* type : ``font``
* default : ``Pacifico``
* id : ``alternate``

-----

**Fonts for Titles level-1 -**
    H1

* type : ``font``
* default : ``Roboto Condensed``
* id : ``h1``

-----

**Fonts for Titles level-2 -**
    H2

* type : ``font``
* default : ``Roboto Condensed``
* id : ``h2``

-----

**Fonts for Titles level-3 -**
    H3

* type : ``font``
* default : ``Roboto Condensed``
* id : ``h3``

-----

**Fonts for Titles level-4 -**
    H4

* type : ``font``
* default :``Roboto``
* id : ``h4``

-----

**Fonts for Titles level 5 -**
    H5

* type : ``font``
* default : ``Roboto``
* id : ``h5``

-----

**Fonts for Titles level 6 -**
    H6

* type : ``font``
* default : ``Roboto``
* id : ``h6``

-----

**Fonts for small tags into heading -**
    You can add rythm to your heading by adding a \\ tag into it

* type : ``font``
* default : ``Roboto Condensed``
* id : ``small``

.. index:: Option; fonts-size
.. index:: Fonts; size

**********
Fonts size
**********
    Choose font-size in pixels for elements.

-----


**Paragraph size is defined in the Theme Customization Panel**
This option is only defined in the theme customization

-----

**H1 -**

* type : ``range``
* default : ``50px``
* id : ``h1_size``

-----

**H2 -**

* type : ``range``
* default : ``35px``
* id : ``h2_size``

-----

**H3 -**


* type : ``range``
* default : ``25px``
* id : ``h3_size``

-----

**H4 -**


* type : ``range``
* default : ``20px``
* id : ``h4_size``

-----

**H5 -**


* type : ``range``
* default : ``17px``
* id : ``h5_size``

-----

**H6 -**


* type : ``range``
* default : ``16px``
* id : ``h6_size``

-----

**'Lead' class -**


* type : ``range``
* default : ``14px``
* id : ``lead_size``

-----

**'Alternate' class -**


* type : ``range``
* default : ``0.8em``
* id : ``alternate_size``

-----

**Fonts size (in em) for small tag in titles -**


* type : ``range``
* default : ``0.8em``
* id : ``small_tag_size``

.. index:: Fonts; variation

**************
Font variation
**************

**Make H1 uppercase -**

* type : toggle
* default : Off
* id : h1_upp

-----

**Make H2 uppercase -**

* type : toggle
* default : Off
* id : h2_upp

-----

**Make H3 uppercase -**

* type : toggle
* default : Off
* id : h3_upp

-----

**Make H4 uppercase -**

* type : toggle
* default : On
* id : h4_upp

-----

**Make H5 uppercase -**

* type : toggle
* default : Off
* id : h5_upp

-----

**Make H6 uppercase -**

* type : toggle
* default : Off
* id : h6_upp

.. index:: Fonts; responsive

***************
Responsive text
***************
    Size above are used on regular display (between 980px & 1200px). To keep
    proportionalities, fonts are tailored to bigger & smaller screens with a
    ratio. You can adjust the ratio if the result does not satisfy you on your
    tablet or phone.

-----

**Ratio for bigger desktop screen (more that 1200px) -**
    I think the most popular screen size

* type : ``range``
* default : ``1.24``
* id : ``wide_ratio``

-----

**Ratio for Portrait tablets -**

* type : ``range``
* default : ``1.3``
* id : ``w724_ratio``

-----

**Ratio for Phones & tablets -**

* type : ``range``
* default : ``1.3``
* id : ``full_ratio``

-----

**Text minimum limit. -**
    This option prevent to have too small text on tablet or mobiles.

* type : ``range``
* default : ``12``
* id : ``size_minimum``

-----

Original reference: web.archive.org
`page <https://web.archive.org/web/20180403190916/http://supermint3.myconcretelab.com:80/index.php/documentation/options-framework/fonts>`_

.. |ss| raw:: html

   <strike>

.. |se| raw:: html

   </strike>
