WebP Express 0.19.1. Conversion triggered using bulk conversion, 2022-04-07 05:06:18

*WebP Convert 2.3.2*  ignited.
- PHP version: 7.4.28
- Server software: Apache

Stack converter ignited

Options:
------------
The following options have been set explicitly. Note: it is the resulting options after merging down the "jpeg" and "png" options and any converter-prefixed options.
- source: /home/customer/www/suryahospitals.com/public_html/wp-content/uploads/2019/01/Dr.-Sandeep-150x150.jpg
- destination: /home/customer/www/suryahospitals.com/public_html/wp-content/webp-express/webp-images/uploads/2019/01/Dr.-Sandeep-150x150.jpg.webp
- log-call-arguments: true
- converters: (array of 10 items)

The following options have not been explicitly set, so using the following defaults:
- converter-options: (empty array)
- shuffle: false
- preferred-converters: (empty array)
- extra-converters: (empty array)

The following options were supplied and are passed on to the converters in the stack:
- default-quality: 70
- encoding: "auto"
- max-quality: 80
- metadata: "none"
- near-lossless: 60
- quality: "auto"
------------


*Trying: cwebp* 

Options:
------------
The following options have been set explicitly. Note: it is the resulting options after merging down the "jpeg" and "png" options and any converter-prefixed options.
- source: /home/customer/www/suryahospitals.com/public_html/wp-content/uploads/2019/01/Dr.-Sandeep-150x150.jpg
- destination: /home/customer/www/suryahospitals.com/public_html/wp-content/webp-express/webp-images/uploads/2019/01/Dr.-Sandeep-150x150.jpg.webp
- default-quality: 70
- encoding: "auto"
- low-memory: true
- log-call-arguments: true
- max-quality: 80
- metadata: "none"
- method: 6
- near-lossless: 60
- quality: "auto"
- use-nice: true
- command-line-options: ""
- try-common-system-paths: true
- try-supplied-binary-for-os: true

The following options have not been explicitly set, so using the following defaults:
- alpha-quality: 85
- auto-filter: false
- preset: "none"
- size-in-percentage: null (not set)
- skip: false
- rel-path-to-precompiled-binaries: *****
- try-cwebp: true
- try-discovering-cwebp: true
------------

Encoding is set to auto - converting to both lossless and lossy and selecting the smallest file

Converting to lossy
Looking for cwebp binaries.
Discovering if a plain cwebp call works (to skip this step, disable the "try-cwebp" option)
- Executing: cwebp -version 2>&1. Result: version: *1.0.3*
We could get the version, so yes, a plain cwebp call works
Discovering binaries using "which -a cwebp" command. (to skip this step, disable the "try-discovering-cwebp" option)
Found 2 binaries: 
- /usr/bin/cwebp
- /bin/cwebp
Discovering binaries by peeking in common system paths (to skip this step, disable the "try-common-system-paths" option)
Found 1 binaries: 
- /usr/bin/cwebp
Discovering binaries which are distributed with the webp-convert library (to skip this step, disable the "try-supplied-binary-for-os" option)
Checking if we have a supplied precompiled binary for your OS (Linux)... We do. We in fact have 3
Found 3 binaries: 
- /home/customer/www/suryahospitals.com/public_html/wp-content/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/Binaries/cwebp-110-linux-x86-64
- /home/customer/www/suryahospitals.com/public_html/wp-content/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/Binaries/cwebp-103-linux-x86-64-static
- /home/customer/www/suryahospitals.com/public_html/wp-content/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/Binaries/cwebp-061-linux-x86-64
Detecting versions of the cwebp binaries found
- Executing: cwebp -version 2>&1. Result: version: *1.0.3*
- Executing: /usr/bin/cwebp -version 2>&1. Result: version: *1.0.3*
- Executing: /bin/cwebp -version 2>&1. Result: version: *1.0.3*
- Executing: /home/customer/www/suryahospitals.com/public_html/wp-content/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/Binaries/cwebp-110-linux-x86-64 -version 2>&1. Result: *Exec failed*. Permission denied (user: "u467-tnnx4jelsnow" does not have permission to execute that binary)
- Executing: /home/customer/www/suryahospitals.com/public_html/wp-content/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/Binaries/cwebp-103-linux-x86-64-static -version 2>&1. Result: *Exec failed*. Permission denied (user: "u467-tnnx4jelsnow" does not have permission to execute that binary)
- Executing: /home/customer/www/suryahospitals.com/public_html/wp-content/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/Binaries/cwebp-061-linux-x86-64 -version 2>&1. Result: *Exec failed*. Permission denied (user: "u467-tnnx4jelsnow" does not have permission to execute that binary)
Binaries ordered by version number.
- cwebp: (version: 1.0.3)
- /usr/bin/cwebp: (version: 1.0.3)
- /bin/cwebp: (version: 1.0.3)
Trying the first of these. If that should fail (it should not), the next will be tried and so on.
Creating command line options for version: 1.0.3
Quality of source is 82. This is higher than max-quality, so using max-quality instead (80)
The near-lossless option ignored for lossy
Trying to convert by executing the following command:
nice cwebp -metadata none -q 80 -alpha_q '85' -m 6 -low_memory '/home/customer/www/suryahospitals.com/public_html/wp-content/uploads/2019/01/Dr.-Sandeep-150x150.jpg' -o '/home/customer/www/suryahospitals.com/public_html/wp-content/webp-express/webp-images/uploads/2019/01/Dr.-Sandeep-150x150.jpg.webp.lossy.webp' 2>&1 2>&1

*Output:* 
Saving file '/home/customer/www/suryahospitals.com/public_html/wp-content/webp-express/webp-images/uploads/2019/01/Dr.-Sandeep-150x150.jpg.webp.lossy.webp'
File:      /home/customer/www/suryahospitals.com/public_html/wp-content/uploads/2019/01/Dr.-Sandeep-150x150.jpg
Dimension: 150 x 150
Output:    2130 bytes Y-U-V-All-PSNR 41.78 47.41 47.23   42.97 dB
           (0.76 bpp)
block count:  intra4:         65  (65.00%)
              intra16:        35  (35.00%)
              skipped:         9  (9.00%)
bytes used:  header:             50  (2.3%)
             mode-partition:    306  (14.4%)
 Residuals bytes  |segment 1|segment 2|segment 3|segment 4|  total
  intra4-coeffs:  |    1358 |      17 |      15 |      26 |    1416  (66.5%)
 intra16-coeffs:  |      25 |      27 |      18 |      43 |     113  (5.3%)
  chroma coeffs:  |     172 |       6 |      13 |      26 |     217  (10.2%)
    macroblocks:  |      61%|       5%|       8%|      26%|     100
      quantizer:  |      25 |      19 |      12 |      11 |
   filter level:  |       8 |       4 |       2 |       8 |
------------------+---------+---------+---------+---------+-----------------
 segments total:  |    1555 |      50 |      46 |      95 |    1746  (82.0%)

Success
Reduction: 48% (went from 4092 bytes to 2130 bytes)

Converting to lossless
Looking for cwebp binaries.
Discovering if a plain cwebp call works (to skip this step, disable the "try-cwebp" option)
- Executing: cwebp -version 2>&1. Result: version: *1.0.3*
We could get the version, so yes, a plain cwebp call works
Discovering binaries using "which -a cwebp" command. (to skip this step, disable the "try-discovering-cwebp" option)
Found 2 binaries: 
- /usr/bin/cwebp
- /bin/cwebp
Discovering binaries by peeking in common system paths (to skip this step, disable the "try-common-system-paths" option)
Found 1 binaries: 
- /usr/bin/cwebp
Discovering binaries which are distributed with the webp-convert library (to skip this step, disable the "try-supplied-binary-for-os" option)
Checking if we have a supplied precompiled binary for your OS (Linux)... We do. We in fact have 3
Found 3 binaries: 
- /home/customer/www/suryahospitals.com/public_html/wp-content/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/Binaries/cwebp-110-linux-x86-64
- /home/customer/www/suryahospitals.com/public_html/wp-content/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/Binaries/cwebp-103-linux-x86-64-static
- /home/customer/www/suryahospitals.com/public_html/wp-content/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/Binaries/cwebp-061-linux-x86-64
Detecting versions of the cwebp binaries found
- Executing: cwebp -version 2>&1. Result: version: *1.0.3*
- Executing: /usr/bin/cwebp -version 2>&1. Result: version: *1.0.3*
- Executing: /bin/cwebp -version 2>&1. Result: version: *1.0.3*
- Executing: /home/customer/www/suryahospitals.com/public_html/wp-content/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/Binaries/cwebp-110-linux-x86-64 -version 2>&1. Result: *Exec failed*. Permission denied (user: "u467-tnnx4jelsnow" does not have permission to execute that binary)
- Executing: /home/customer/www/suryahospitals.com/public_html/wp-content/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/Binaries/cwebp-103-linux-x86-64-static -version 2>&1. Result: *Exec failed*. Permission denied (user: "u467-tnnx4jelsnow" does not have permission to execute that binary)
- Executing: /home/customer/www/suryahospitals.com/public_html/wp-content/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/Binaries/cwebp-061-linux-x86-64 -version 2>&1. Result: *Exec failed*. Permission denied (user: "u467-tnnx4jelsnow" does not have permission to execute that binary)
Binaries ordered by version number.
- cwebp: (version: 1.0.3)
- /usr/bin/cwebp: (version: 1.0.3)
- /bin/cwebp: (version: 1.0.3)
Trying the first of these. If that should fail (it should not), the next will be tried and so on.
Creating command line options for version: 1.0.3
Trying to convert by executing the following command:
nice cwebp -metadata none -q 80 -alpha_q '85' -near_lossless 60 -m 6 -low_memory '/home/customer/www/suryahospitals.com/public_html/wp-content/uploads/2019/01/Dr.-Sandeep-150x150.jpg' -o '/home/customer/www/suryahospitals.com/public_html/wp-content/webp-express/webp-images/uploads/2019/01/Dr.-Sandeep-150x150.jpg.webp.lossless.webp' 2>&1 2>&1

*Output:* 
Saving file '/home/customer/www/suryahospitals.com/public_html/wp-content/webp-express/webp-images/uploads/2019/01/Dr.-Sandeep-150x150.jpg.webp.lossless.webp'
File:      /home/customer/www/suryahospitals.com/public_html/wp-content/uploads/2019/01/Dr.-Sandeep-150x150.jpg
Dimension: 150 x 150
Output:    11528 bytes (4.10 bpp)
Lossless-ARGB compressed size: 11528 bytes
  * Header size: 1323 bytes, image data size: 10180
  * Lossless features used: PREDICTION CROSS-COLOR-TRANSFORM SUBTRACT-GREEN
  * Precision Bits: histogram=2 transform=2 cache=0

Success
Reduction: -182% (went from 4092 bytes to 11528 bytes)

Picking lossy
cwebp succeeded :)

Converted image in 301 ms, reducing file size with 48% (went from 4092 bytes to 2130 bytes)
