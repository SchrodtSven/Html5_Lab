# Html5_Lab

## Prologue 
<p>This is just a personal <i class="pop">playground</i> for:</p>
  <ul>
    <li><abbr title = "HyperText Markup Language">HTML</abbr> <num>5</num>,</li>
    <li><i class="pop">contemporary</i> <abbr title = "Cascading Style Sheets">CSS</abbr></li>    
    <li><i class="pop">contemporary</i> <abbr title = "European Computer Manufacturers Association">ECMA</abbr>Script</li>
    <li><i class="pop">assisted</i>  by :
        <ul>
            <li>some additional <abbr title = "PHP Hypertext Preprocessor">PHP</abbr> 8.2+ stuff</li>
        </ul>
    </li>
  </ul>
  <p><num>419.23</num> I am a <i>coffee<i>mug!</p>
  <footer>Nuff said for now & Glück auf! <br>Sven</footer>
  
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
│   │       │   └── Config.php
│   │       ├── Autoload.php
│   │       └── Kernel
│   │           ├── Dry
│   │           │   ├── ArrayAccessTrait.php
│   │           │   ├── IteratorTrait.php
│   │           │   ├── MultiByteStringTrait.php
│   │           │   └── StackOperationTrait.php
│   │           ├── ListType.php
│   │           └── StringType.php
│   └── test
│       └── Test.php
├── public
│   ├── bootstrap.php
│   ├── examples
│   ├── index.html
│   ├── script
│   └── style
│       └── main.css
└── router.php

13 directories, 19 files
      23 text files.
classified 18 files      18 unique files.                              
       6 files ignored.

github.com/AlDanial/cloc v 1.96  T=0.01 s (1930.9 files/s, 141816.2 lines/s)
-------------------------------------------------------------------------------
Language                     files          blank        comment           code
-------------------------------------------------------------------------------
PHP                             11            223            281            558
Markdown                         2             28              0            139
HTML                             1              0              0             28
CSS                              1              9              0             20
XML                              1              0              0             16
Bourne Shell                     2              1              5             14
-------------------------------------------------------------------------------
SUM:                            18            261            286            775
-------------------------------------------------------------------------------
PHPUnit 9.5.27 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.5
Configuration: /Users/svenschrodt/projects/Html5_Lab/phpunit.xml

...............................................................  63 / 100 ( 63%)
.....................................                           100 / 100 (100%)

Time: 00:00.007, Memory: 22.39 MB

OK (100 tests, 100 assertions)
</code>
</pre>
