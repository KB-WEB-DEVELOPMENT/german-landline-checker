 [1 Project Description](#project-description)
 
 [2. Installation](#installation)
 
 [3. Usage](#usage)
 
 [4. License](#license)

# Project Description

This PHP 8.0 package determines if a PHP variable of data type 'string' matches one of Germany landline phone number formats which include a national geographic zone.

It takes into account the fact that when dialed, a german landline phone number can either include  the country code ("0049" ,  "+49") or exclude it.

Germany geographic zone-based numbering system:

Landline phone numbers (no country code) - DE.xlsm:

(https://docs.google.com/spreadsheets/d/1KBjg9aYHE9L2tP8uCBhlpJKDxDE5BjGC)

Landline phone numbers starting with 0049 - DE.xlsm: 

(https://docs.google.com/spreadsheets/d/1fmreE50HY6kvz5R8jAkrXGqkbk_mg_eW)

Landline phone numbers starting with +49 - DE.xlsm: 

(https://docs.google.com/spreadsheets/d/1kBcdfDXQwXkh8-UUZgLklbo9pErH_vWw)

Breakdown of the numbering system:

note: NDC = "National Destination Code"

<b>1. Format without the country code = 0 + NDC + [ X<sub>1</sub>,X<sub>2</sub>, ... ,X<sub>s</sub>] </b>, X<sub>1**≤**j<**≤**s</sub> = 0,1,2...9

Minimum total digits count: 6

Maximum total digits count: 11

<b>2. Format with country code ''0049 " = 0049 + NDC +  [ X<sub>1</sub>,X<sub>2</sub>, ... ,X<sub>s</sub>] </b>, X<sub>1**≤**j<**≤**s</sub> = 0,1,2...9

Minimum total digits count: 9

Maximum total digits count: 14

<b>3. Format with country code ''+49 " = +49 + NDC +  [ X<sub>1</sub>,X<sub>2</sub>, ... ,X<sub>s</sub>] </b>, X<sub>1**≤**j<**≤**s</sub> = 0,1,2...9

Minimum total characters count: 8

Maximum total characters count: 13

# Installation

Use composer to install the package: `composer require KB-WEB-DEVELOPMENT/german-landline-checker`

Install the dependencies: `composer install` 

You can run the Pest tests in the 'tests' directory with the command: `./vendor/bin/pest`

# Usage

In your examples\index.php file:

```php

<?php

require __DIR__ . '/../vendor/autoload.php';

use Kbarut\Telecommunication\LandlineChecker;

$landlineNumber = ''+491501912345";

$landlineChecker = new LandlineChecker();

$res = $landlineChecker->validate($landlineNumber);

 ```

# License 

The MIT License (MIT)

Copyright (c) <2025> Kâmi Barut-Wanayo

Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.

