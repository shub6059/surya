WebP Express 0.19.1. Conversion triggered using bulk conversion, 2022-03-23 18:03:03

*WebP Convert 2.3.2*  ignited.
- PHP version: 7.4.28
- Server software: Apache

Stack converter ignited

Options:
------------
The following options have been set explicitly. Note: it is the resulting options after merging down the "jpeg" and "png" options and any converter-prefixed options.
- source: /home/customer/www/suryahospitals.com/public_html/wp-content/uploads/2022/03/BONE-MARROW-Banner-01-1-1080x675.jpg
- destination: /home/customer/www/suryahospitals.com/public_html/wp-content/webp-express/webp-images/uploads/2022/03/BONE-MARROW-Banner-01-1-1080x675.jpg.webp
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
- source: /home/customer/www/suryahospitals.com/public_html/wp-content/uploads/2022/03/BONE-MARROW-Banner-01-1-1080x675.jpg
- destination: /home/customer/www/suryahospitals.com/public_html/wp-content/webp-express/webp-images/uploads/2022/03/BONE-MARROW-Banner-01-1-1080x675.jpg.webp
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
nice cwebp -metadata none -q 80 -alpha_q '85' -m 6 -low_memory '/home/customer/www/suryahospitals.com/public_html/wp-content/uploads/2022/03/BONE-MARROW-Banner-01-1-1080x675.jpg' -o '/home/customer/www/suryahospitals.com/public_html/wp-content/webp-express/webp-images/uploads/2022/03/BONE-MARROW-Banner-01-1-1080x675.jpg.webp.lossy.webp' 2>&1 2>&1

*Output:* 
Saving file '/home/customer/www/suryahospitals.com/public_html/wp-content/webp-express/webp-images/uploads/2022/03/BONE-MARROW-Banner-01-1-1080x675.jpg.webp.lossy.webp'
File:      /home/customer/www/suryahospitals.com/public_html/wp-content/uploads/2022/03/BONE-MARROW-Banner-01-1-1080x675.jpg
Dimension: 1080 x 675
Output:    26066 bytes Y-U-V-All-PSNR 46.32 46.61 45.10   46.14 dB
           (0.29 bpp)
block count:  intra4:        619  (21.17%)
              intra16:      2305  (78.83%)
              skipped:      2020  (69.08%)
bytes used:  header:            346  (1.3%)
             mode-partition:   3888  (14.9%)
 Residuals bytes  |segment 1|segment 2|segment 3|segment 4|  total
  intra4-coeffs:  |   12267 |      12 |       3 |       7 |   12289  (47.1%)
 intra16-coeffs:  |     120 |       9 |      10 |     100 |     239  (0.9%)
  chroma coeffs:  |    8965 |      38 |      48 |     224 |    9275  (35.6%)
    macroblocks:  |      25%|       1%|       2%|      72%|    2924
      quantizer:  |      27 |      25 |      20 |      15 |
   filter level:  |      12 |       6 |       4 |       2 |
------------------+---------+---------+---------+---------+-----------------
 segments total:  |   21352 |      59 |      61 |     331 |   21803  (83.6%)

Success
Reduction: 52% (went from 53 kb to 25 kb)

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
nice cwebp -metadata none -q 80 -alpha_q '85' -near_lossless 60 -m 6 -low_memory '/home/customer/www/suryahospitals.com/public_html/wp-content/uploads/2022/03/BONE-MARROW-Banner-01-1-1080x675.jpg' -o '/home/customer/www/suryahospitals.com/public_html/wp-content/webp-express/webp-images/uploads/2022/03/BONE-MARROW-Banner-01-1-1080x675.jpg.webp.lossless.webp' 2>&1 2>&1

*Output:* 
Saving file '/home/customer/www/suryahospitals.com/public_html/wp-content/webp-express/webp-images/uploads/2022/03/BONE-MARROW-Banner-01-1-1080x675.jpg.webp.lossless.webp'
File:      /home/customer/www/suryahospitals.com/public_html/wp-content/uploads/2022/03/BONE-MARROW-Banner-01-1-1080x675.jpg
Dimension: 1080 x 675
Output:    153102 bytes (1.68 bpp)
Lossless-ARGB compressed size: 153102 bytes
  * Header size: 3534 bytes, image data size: 149542
  * Lossless features used: PREDICTION CROSS-COLOR-TRANSFORM
  * Precision Bits: histogram=5 transform=4 cache=10

Success
Reduction: -180% (went from 53 kb to 150 kb)

Picking lossy
cwebp succeeded :)

Converted image in 981 ms, reducing file size with 52% (went from 53 kb to 25 kb)
