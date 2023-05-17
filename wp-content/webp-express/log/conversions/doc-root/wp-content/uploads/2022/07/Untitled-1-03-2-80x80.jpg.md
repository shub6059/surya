WebP Express 0.19.1. Conversion triggered using bulk conversion, 2022-07-25 11:54:27

*WebP Convert 2.3.2*  ignited.
- PHP version: 7.4.30
- Server software: Apache

Stack converter ignited

Options:
------------
The following options have been set explicitly. Note: it is the resulting options after merging down the "jpeg" and "png" options and any converter-prefixed options.
- source: /home/customer/www/suryahospitals.com/public_html/wp-content/uploads/2022/07/Untitled-1-03-2-80x80.jpg
- destination: /home/customer/www/suryahospitals.com/public_html/wp-content/webp-express/webp-images/uploads/2022/07/Untitled-1-03-2-80x80.jpg.webp
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
- source: /home/customer/www/suryahospitals.com/public_html/wp-content/uploads/2022/07/Untitled-1-03-2-80x80.jpg
- destination: /home/customer/www/suryahospitals.com/public_html/wp-content/webp-express/webp-images/uploads/2022/07/Untitled-1-03-2-80x80.jpg.webp
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
nice cwebp -metadata none -q 80 -alpha_q '85' -m 6 -low_memory '/home/customer/www/suryahospitals.com/public_html/wp-content/uploads/2022/07/Untitled-1-03-2-80x80.jpg' -o '/home/customer/www/suryahospitals.com/public_html/wp-content/webp-express/webp-images/uploads/2022/07/Untitled-1-03-2-80x80.jpg.webp.lossy.webp' 2>&1 2>&1

*Output:* 
Saving file '/home/customer/www/suryahospitals.com/public_html/wp-content/webp-express/webp-images/uploads/2022/07/Untitled-1-03-2-80x80.jpg.webp.lossy.webp'
File:      /home/customer/www/suryahospitals.com/public_html/wp-content/uploads/2022/07/Untitled-1-03-2-80x80.jpg
Dimension: 80 x 80
Output:    874 bytes Y-U-V-All-PSNR 41.70 44.96 43.13   42.33 dB
           (1.09 bpp)
block count:  intra4:         22  (88.00%)
              intra16:         3  (12.00%)
              skipped:         0  (0.00%)
bytes used:  header:             16  (1.8%)
             mode-partition:    113  (12.9%)
 Residuals bytes  |segment 1|segment 2|segment 3|segment 4|  total
  intra4-coeffs:  |     483 |       0 |       0 |       0 |     483  (55.3%)
 intra16-coeffs:  |      51 |       0 |       0 |       0 |      51  (5.8%)
  chroma coeffs:  |     179 |       0 |       0 |       0 |     179  (20.5%)
    macroblocks:  |      100%|       0%|       0%|       0%|      25
      quantizer:  |      19 |      19 |      19 |      19 |
   filter level:  |       5 |       5 |       5 |       5 |
------------------+---------+---------+---------+---------+-----------------
 segments total:  |     713 |       0 |       0 |       0 |     713  (81.6%)

Success
Reduction: 55% (went from 1953 bytes to 874 bytes)

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
nice cwebp -metadata none -q 80 -alpha_q '85' -near_lossless 60 -m 6 -low_memory '/home/customer/www/suryahospitals.com/public_html/wp-content/uploads/2022/07/Untitled-1-03-2-80x80.jpg' -o '/home/customer/www/suryahospitals.com/public_html/wp-content/webp-express/webp-images/uploads/2022/07/Untitled-1-03-2-80x80.jpg.webp.lossless.webp' 2>&1 2>&1

*Output:* 
Saving file '/home/customer/www/suryahospitals.com/public_html/wp-content/webp-express/webp-images/uploads/2022/07/Untitled-1-03-2-80x80.jpg.webp.lossless.webp'
File:      /home/customer/www/suryahospitals.com/public_html/wp-content/uploads/2022/07/Untitled-1-03-2-80x80.jpg
Dimension: 80 x 80
Output:    4846 bytes (6.06 bpp)
Lossless-ARGB compressed size: 4846 bytes
  * Header size: 482 bytes, image data size: 4339
  * Lossless features used: PREDICTION CROSS-COLOR-TRANSFORM SUBTRACT-GREEN
  * Precision Bits: histogram=2 transform=2 cache=8

Success
Reduction: -148% (went from 1953 bytes to 4846 bytes)

Picking lossy
cwebp succeeded :)

Converted image in 210 ms, reducing file size with 55% (went from 1953 bytes to 874 bytes)
