# Html5_Lab

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
│   └── test
│       └── Test.php
├── public
│   ├── bootstrap.php
│   ├── examples
│   ├── script
│   └── style
└── router.php

12 directories, 10 files
      13 text files.
classified 9 files       9 unique files.                              
       5 files ignored.

github.com/AlDanial/cloc v 1.96  T=0.01 s (1332.6 files/s, 58928.7 lines/s)
-------------------------------------------------------------------------------
Language                     files          blank        comment           code
-------------------------------------------------------------------------------
PHP                              5             35             98            171
Markdown                         1             11              0             47
XML                              1              0              0             16
Bourne Shell                     2              1              5             14
-------------------------------------------------------------------------------
SUM:                             9             47            103            248
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
