# Html5_Lab

## Prologue 
<p>This is just a personal <i>playground</i> for:</p>
  <ul>
    <li>HTML,</li>
    <li><i>contemporary</i> CSS</li>    
    <li><i>contemporary</i> ECMAScript</li>
    <li><i>assisted</i>  by :
        <ul>
            <li>some additional PHP (8.2+) stuff</li>
        </ul>
    </li>
  </ul>
<p>
    <code>GET / HTTP/1.1</code><br><br>
    <code>419.23  I am a <i>coffee<i>mug!</code>
 </p>
  
## Motivation
Testing features of HTML 5, CSS 3 &amp; contemporary ECMAScript APIs
- to be assisted by some PHP code for basic MVC-like functionality and dynamic creation of static 
file resources (HTML, ECMAScript, CSS etc... ) from (open | free available | self created) data 

## Design & architecture

## Conventions

### Base MVC

#### Http Routing

 - /$CTRL/$ACTN/...$PARAM | static file resource in doc root ('<code>public</code>')

## Appendix

### Development environment 

 Chronicler's duty: 

 - Box: MacBookAir M1 /2020 (Development)
 - Box: iMac21,2 M1/2020 (Development)
 - Box: Raspberry Pi 4 Model B Rev 1.1 (RDBMS, CI/CD)
 - OS: Darwin 22.3.0 Darwin Kernel Version 22.3.0; RELEASE_ARM64_T8103 arm64
 - OS: Linux raspberrypi 5.10.17-v7l+ #1403 SMP Mon Feb 22 11:33:35 GMT 2021 armv7l GNU/Linux
 - IDE: Visual Studio Code; version: 1.70.2 (Universal)
 - PHP: 8.2.4 (NTS); with Zend OPcache v8.2.0; with Xdebug v3.2.1
 - Java: openjdk version "11.0.18" 2023-01-17; OpenJDK Runtime Environment  & OpenJDK Server VM
 - RDBMS: Sqlite version 3.39.5
 - CI/CD pipeline: Jenkins 


 Nuff said for now & Glück auf! 

 Sven

### Files, Lines of Code & Unit Testing
<pre>
<code>

.
├── LICENSE
├── README.md
├── README_RAW.md
├── gitit.sh
├── phphttpd.sh
├── phpunit.xml
├── private
│   ├── check
│   ├── lib
│   │   └── Html5_Lab
│   │       ├── App
│   │       │   ├── Config.php
│   │       │   ├── Ctrl
│   │       │   │   ├── Foo.php
│   │       │   │   └── Index.php
│   │       │   ├── Front.php
│   │       │   ├── Tpl
│   │       │   │   ├── Document.generic.phtml
│   │       │   │   ├── Forms
│   │       │   │   │   ├── Datalist.first.phtml
│   │       │   │   │   ├── First.phtml
│   │       │   │   │   ├── Html_Five.phtml
│   │       │   │   │   └── Slider.phtml
│   │       │   │   └── Widgets
│   │       │   │       └── Blockquote.phtml
│   │       │   └── Views
│   │       │       ├── Foo
│   │       │       └── Index
│   │       │           ├── TextMarkup.phtml
│   │       │           └── default.phtml
│   │       ├── Autoload.php
│   │       └── Kernel
│   │           ├── Controller.php
│   │           ├── Dry
│   │           │   ├── ArrayAccessTrait.php
│   │           │   ├── CallbackArrayTrait.php
│   │           │   ├── IteratorTrait.php
│   │           │   ├── MultiByteStringTrait.php
│   │           │   └── StackOperationTrait.php
│   │           ├── Frontend
│   │           │   ├── HtmlAttributes.php
│   │           │   ├── HtmlCollection.php
│   │           │   ├── HtmlCollectionTpl.php
│   │           │   ├── HtmlElement.php
│   │           │   ├── HtmlSyntax.php
│   │           │   └── PhtmlParser.php
│   │           ├── ListType.php
│   │           └── StringType.php
│   └── test
│       ├── App
│       ├── Kernel
│       │   └── StringTypeTest.php
│       └── Test.php
├── public
│   ├── bootstrap.php
│   ├── examples
│   ├── foo.php
│   ├── index.html
│   ├── script
│   └── style
│       ├── LICENSE.txt
│       ├── Roboto-Black.ttf
│       ├── Roboto-BlackItalic.ttf
│       ├── Roboto-Bold.ttf
│       ├── Roboto-BoldItalic.ttf
│       ├── Roboto-Italic.ttf
│       ├── Roboto-Light.ttf
│       ├── Roboto-LightItalic.ttf
│       ├── Roboto-Medium.ttf
│       ├── Roboto-MediumItalic.ttf
│       ├── Roboto-Regular.ttf
│       ├── Roboto-Thin.ttf
│       ├── Roboto-ThinItalic.ttf
│       └── main.css
└── router.php

23 directories, 53 files
      57 text files.
classified 52 files      52 unique files.                              
      21 files ignored.

github.com/AlDanial/cloc v 1.96  T=0.03 s (1620.7 files/s, 169331.8 lines/s)
-------------------------------------------------------------------------------
Language                     files          blank        comment           code
-------------------------------------------------------------------------------
PHP                             39            420            677           2426
JSON                             1              0              0           1000
Text                             5             47              0            451
Markdown                         2             33              0            191
CSS                              1             24              0             85
HTML                             1              2              0             40
XML                              1              0              0             16
Bourne Shell                     2              1              5             15
-------------------------------------------------------------------------------
SUM:                            52            527            682           4224
-------------------------------------------------------------------------------
PHPUnit 9.5.27 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.5
Configuration: /Users/svenschrodt/projects/Html5_Lab/phpunit.xml

...............................................................  63 / 101 ( 62%)
......................................                          101 / 101 (100%)

Time: 00:00.007, Memory: 22.39 MB

OK (101 tests, 101 assertions)
</code>
</pre>
.
├── LICENSE
├── README.md
├── README_RAW.md
├── gitit.sh
├── phphttpd.sh
├── phpunit.xml
├── private
│   ├── check
│   ├── lib
│   │   └── Html5_Lab
│   │       ├── App
│   │       │   ├── Config.php
│   │       │   ├── Ctrl
│   │       │   │   ├── Foo.php
│   │       │   │   └── Index.php
│   │       │   ├── Front.php
│   │       │   ├── Tpl
│   │       │   │   ├── Document.generic.phtml
│   │       │   │   ├── Forms
│   │       │   │   │   ├── Datalist.first.phtml
│   │       │   │   │   ├── First.phtml
│   │       │   │   │   ├── Html_Five.phtml
│   │       │   │   │   └── Slider.phtml
│   │       │   │   └── Widgets
│   │       │   │       └── Blockquote.phtml
│   │       │   └── Views
│   │       │       ├── Foo
│   │       │       └── Index
│   │       │           ├── TextMarkup.phtml
│   │       │           └── default.phtml
│   │       ├── Autoload.php
│   │       └── Kernel
│   │           ├── Controller.php
│   │           ├── Dry
│   │           │   ├── ArrayAccessTrait.php
│   │           │   ├── CallbackArrayTrait.php
│   │           │   ├── IteratorTrait.php
│   │           │   ├── MultiByteStringTrait.php
│   │           │   └── StackOperationTrait.php
│   │           ├── Frontend
│   │           │   ├── HtmlAttributes.php
│   │           │   ├── HtmlCollection.php
│   │           │   ├── HtmlCollectionTpl.php
│   │           │   ├── HtmlElement.php
│   │           │   ├── HtmlSyntax.php
│   │           │   └── PhtmlParser.php
│   │           ├── ListType.php
│   │           └── StringType.php
│   └── test
│       ├── App
│       ├── Kernel
│       │   └── StringTypeTest.php
│       └── Test.php
├── public
│   ├── bootstrap.php
│   ├── examples
│   ├── foo.php
│   ├── index.html
│   ├── script
│   └── style
│       ├── LICENSE.txt
│       ├── Roboto-Black.ttf
│       ├── Roboto-BlackItalic.ttf
│       ├── Roboto-Bold.ttf
│       ├── Roboto-BoldItalic.ttf
│       ├── Roboto-Italic.ttf
│       ├── Roboto-Light.ttf
│       ├── Roboto-LightItalic.ttf
│       ├── Roboto-Medium.ttf
│       ├── Roboto-MediumItalic.ttf
│       ├── Roboto-Regular.ttf
│       ├── Roboto-Thin.ttf
│       ├── Roboto-ThinItalic.ttf
│       └── main.css
└── router.php

23 directories, 53 files
      57 text files.
classified 52 files      52 unique files.                              
      21 files ignored.

github.com/AlDanial/cloc v 1.96  T=0.03 s (1599.9 files/s, 170824.4 lines/s)
-------------------------------------------------------------------------------
Language                     files          blank        comment           code
-------------------------------------------------------------------------------
PHP                             39            420            679           2432
JSON                             1              0              0           1000
Text                             5             47              0            451
Markdown                         2             39              0            295
CSS                              1             24              0             85
HTML                             1              2              0             40
XML                              1              0              0             16
Bourne Shell                     2              1              6             15
-------------------------------------------------------------------------------
SUM:                            52            533            685           4334
-------------------------------------------------------------------------------
PHPUnit 9.5.27 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.6
Configuration: /Users/svenschrodt/projects/Html5_Lab/phpunit.xml

...............................................................  63 / 101 ( 62%)
......................................                          101 / 101 (100%)

Time: 00:00.007, Memory: 22.39 MB

OK (101 tests, 101 assertions)
</code>
</pre>
