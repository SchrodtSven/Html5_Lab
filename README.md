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
  <p>-- <br>
  <strong><code><num>419.23</num> I am a <i>coffee<i>mug!</code></strong>
  </p>
  
## Motivation
Testing features of HTML 5, CSS 3 &amp; contemporary ECMAScript APIs
- to be assisted by some PHP code


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
│   │       │   └── Tpl
│   │       │       ├── Document.generic.phtml
│   │       │       └── Forms
│   │       │           ├── Datalist.first.phtml
│   │       │           └── First.phtml
│   │       ├── Autoload.php
│   │       └── Kernel
│   │           ├── Dry
│   │           │   ├── ArrayAccessTrait.php
│   │           │   ├── CallbackArrayTrait.php
│   │           │   ├── IteratorTrait.php
│   │           │   ├── MultiByteStringTrait.php
│   │           │   └── StackOperationTrait.php
│   │           ├── Frontend
│   │           │   ├── HtmlAttributes.php
│   │           │   ├── HtmlCollection.php
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
│       └── main.css
└── router.php

18 directories, 30 files
      45 text files.
classified 40 files      40 unique files.                              
       7 files ignored.

github.com/AlDanial/cloc v 1.96  T=0.02 s (1678.4 files/s, 192807.3 lines/s)
-------------------------------------------------------------------------------
Language                     files          blank        comment           code
-------------------------------------------------------------------------------
PHP                             29            331            532           2143
JSON                             1              0              0           1000
Text                             3             13              0            281
Markdown                         2             28              0            156
HTML                             1              2              0             40
CSS                              1              9              0             24
XML                              1              0              0             16
Bourne Shell                     2              1              5             14
-------------------------------------------------------------------------------
SUM:                            40            384            537           3674
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
