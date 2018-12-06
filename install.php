<?php $xml = '<?xml version="1.0" encoding="UTF-8"?>'?>
<?php echo $xml?>
<!DOCTYPE plist PUBLIC "-//Apple//DTD PLIST 1.0//EN" "http://www.apple.com/DTDs/PropertyList-1.0.dtd">
<plist version="1.0">
<dict>
   <key>items</key>
   <array>
       <dict>
           <key>assets</key>
           <array>
               <dict>
                   <key>kind</key>
                   <string>software-package</string>
                   <key>url</key>
                   <string><?php echo $_GET['ipa'];?></string>
               </dict>
               <dict>
                   <key>kind</key>
                   <string>display-image</string>
                   <key>needs-shine</key>
                   <true/>
                   <key>url</key>
                   <string><?php echo $_GET['icon'];?></string>
               </dict>
           </array><key>metadata</key>
           <dict>
               <key>bundle-identifier</key>
               <string>com.test<?php echo(rand(10,100)); ?>.app</string>
               <key>bundle-version</key>
               <string>1.0</string>
               <key>kind</key>
               <string>software</string>
               <key>title</key>
               <string><?php echo $_GET['title'];?></string>
           </dict>
       </dict>
   </array>
</dict>
</plist>
