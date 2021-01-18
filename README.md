# Cisco Hue Integration

## Before we start I will share what I used in my setup
* A Cisco 7941G 
* FreePBX 15 with Asterisk 16
* An Ubuntu webserver runnning Apache2


#### What this guide and files cover: 
* Sample files that you can change and use as your own
* Where to host said files
* Brief install guide

## Prerequisites
* Cisco 794x or 796x phone running SIP firmware.  It appears that Cisco has removed the 7941 firmware form their downloads site ;(
* PBX that you can successfully register a 794x or 796x phone with SIP firmware. (I'm using FreePBX with Asterisks 15)
* Web server that can execute php and run curl.  You can host these files on your PBX if you'd like. I'd rather host on a separate box.
* Hue lights that connect back to a V2 bridge and a valid API key for your bridge. I am linking the guide on how to create an API key. https://developers.meethue.com/develop/get-started-2/
* Brief knowledge of the Hue API.  I will provide a link, you will need to create an account. https://developers.meethue.com/develop/hue-api/lights-api/

## What these files do
* The files in the hue-curls folder send a PUT request to bridge to perform the action of your choice
* The files in the in the hue-php-calls folder will execute the curl executables using php
* The file in the hue-service-xml provides the front end for the services button on the phone allowing you to choose what light function you want to perform

## Setup
* Clone the repo and copy the "ciscohue" folder to root of your favorite webserver
* Head to the hue-curls folder and add your API key and the light group number you want to control
* Make the files in the hue-curls folder executable with chmod +x
* You may need to add the following line to your apache2 config. (if your using apache2)
```xml

<Location /ciscohue/>
     ForceType text/xml
</Location>

```


#### Changes to your SEPMACADDRESS.cnf.xml

You will need to add the below line to your phones config file in your TFTP server, edit file and IP accordingly.
This file is in the hue-service-xml folder

`<servicesURL>http://YOUR_WEB_SERVER_HERE/ciscohue/hue-service-xml/hue.xml</servicesURL>`
  
Restart phone for the changes to take effect

## Final Words
* At this point, you should be able to control your Hue lights with your Cisco 794x and 796x IP phone!
* If your system has fortune installed at /usr/games/fortune the phone will run display the result when you click on the first entry in the services menu.

## Troubleshooting
* Can you control your lights successfully executing the curl commands locally? ex. "./off"
* Can you control the lights via the php file? ex. "php off.php"
* Make sure that your webserver has the appropriate php module installed
* Make sure that you have made the curl files executable









 
