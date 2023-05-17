WebP Express 0.19.1. Conversion triggered using bulk conversion, 2022-06-13 07:41:26

*WebP Convert 2.3.2*  ignited.
- PHP version: 7.4.30
- Server software: Apache

Stack converter ignited
Destination folder does not exist. Creating folder: /home/customer/www/suryahospitals.com/public_html/wp-content/webp-express/webp-images/uploads/2022/06

Options:
------------
The following options have been set explicitly. Note: it is the resulting options after merging down the "jpeg" and "png" options and any converter-prefixed options.
- source: /home/customer/www/suryahospitals.com/public_html/wp-content/uploads/2022/06/APURVA-PRASAD.jpg
- destination: /home/customer/www/suryahospitals.com/public_html/wp-content/webp-express/webp-images/uploads/2022/06/APURVA-PRASAD.jpg.webp
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
- source: /home/customer/www/suryahospitals.com/public_html/wp-content/uploads/2022/06/APURVA-PRASAD.jpg
- destination: /home/customer/www/suryahospitals.com/public_html/wp-content/webp-express/webp-images/uploads/2022/06/APURVA-PRASAD.jpg.webp
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
Quality of source is 100. This is higher than max-quality, so using max-quality instead (80)
The near-lossless option ignored for lossy
Trying to convert by executing the following command:
nice cwebp -metadata none -q 80 -alpha_q '85' -m 6 -low_memory '/home/customer/www/suryahospitals.com/public_html/wp-content/uploads/2022/06/APURVA-PRASAD.jpg' -o '/home/customer/www/suryahospitals.com/public_html/wp-content/webp-express/webp-images/uploads/2022/06/APURVA-PRASAD.jpg.webp.lossy.webp' 2>&1 2>&1

*Output:* 
Saving file '/home/customer/www/suryahospitals.com/public_html/wp-content/webp-express/webp-images/uploads/2022/06/APURVA-PRASAD.jpg.webp.lossy.webp'
File:      /home/customer/www/suryahospitals.com/public_html/wp-content/uploads/2022/06/APURVA-PRASAD.jpg
Dimension: 2722 x 2884
Output:    316780 bytes Y-U-V-All-PSNR 42.48 47.21 48.25   43.63 dB
           (0.32 bpp)
block count:  intra4:      17100  (55.25%)
              intra16:     13851  (44.75%)
              skipped:       951  (3.07%)
bytes used:  header:            293  (0.1%)
             mode-partition:  67641  (21.4%)
 Residuals bytes  |segment 1|segment 2|segment 3|segment 4|  total
  intra4-coeffs:  |  125021 |   11397 |   12067 |   14054 |  162539  (51.3%)
 intra16-coeffs:  |    2685 |    3839 |   13272 |   23168 |   42964  (13.6%)
  chroma coeffs:  |   15448 |    3836 |    7735 |   16297 |   43316  (13.7%)
    macroblocks:  |      28%|       8%|      17%|      47%|   30951
      quantizer:  |      27 |      23 |      18 |      13 |
   filter level:  |      24 |      30 |      46 |      19 |
------------------+---------+---------+---------+---------+-----------------
 segments total:  |  143154 |   19072 |   33074 |   53519 |  248819  (78.5%)

Success
Reduction: 92% (went from 4061 kb to 309 kb)

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
nice cwebp -metadata none -q 80 -alpha_q '85' -near_lossless 60 -m 6 -low_memory '/home/customer/www/suryahospitals.com/public_html/wp-content/uploads/2022/06/APURVA-PRASAD.jpg' -o '/home/customer/www/suryahospitals.com/public_html/wp-content/webp-express/webp-images/uploads/2022/06/APURVA-PRASAD.jpg.webp.lossless.webp' 2>&1 2>&1

*Output:* 
Saving file '/home/customer/www/suryahospitals.com/public_html/wp-content/webp-express/webp-images/uploads/2022/06/APURVA-PRASAD.jpg.webp.lossless.webp'
File:      /home/customer/www/suryahospitals.com/public_html/wp-content/uploads/2022/06/APURVA-PRASAD.jpg
Dimension: 2722 x 2884
Output:    4723786 bytes (4.81 bpp)
Lossless-ARGB compressed size: 4723786 bytes
  * Header size: 30069 bytes, image data size: 4693692
  * Lossless features used: PREDICTION CROSS-COLOR-TRANSFORM SUBTRACT-GREEN
  * Precision Bits: histogram=6 transform=4 cache=10

Success
Reduction: -14% (went from 4061 kb to 4613 kb)

Picking lossy
cwebp succeeded :)

Converted image in 16406 ms, reducing file size with 92% (went from 4061 kb to 309 kb)
