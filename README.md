# Source Code of Apple PLIST file plist-install.php :) by @AmeerDesgin

So this file .plist mareg with php 

# How to used it ?

## Setup 1 
Upload the file install.php to your server or hosting 

## setup 2 
to Add ipa url, img and name 
https://doamin.com/install.php?ipa=URLipaHere&icon=URLimg&title=NameAppHere

ipa= URL ipa

img= URL icon 

title= Name app


** Note :
You still need to encode the url before add it to 'itms-services://'

## Setup 3 

itms-services:// with url 

itms-services://?action=download-manifest&url=

for install on the iOS 

enter the url on safari

itms-services://?action=download-manifest&url=https://yourdomen.com/install.php?ipa=URLipaHere&img=URLimg&title=NameAppHere
