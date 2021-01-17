# Cisco Hue Integration



#### What this guide and files cover: 
* Sample files that you can change and use as your own
* Where to host said files

## Prerequsisites
* Cisco 794x orr 796x phone running SIP firmware.  It appears that Cisco has removed the 7941 firmware form their downloads site ;(
* PBX that you can succesfully register a 794x or 796x phone with SIP firmware. (Im using FreePBX with Asterisks 15)
* Webserver that can execute php and run curl.  You can host these files on you PBX if youd like. Id rather host on a seperate box.
* Hue lights that connect back to a V2 bridge and a valid API key for your bridge. I am linking the guide on how to create an API key. https://developers.meethue.com/develop/get-started-2/
* Brief knowledge of the Hue API.  I will provide a link, you will need to create an account. https://developers.meethue.com/develop/hue-api/lights-api/

#### Setup

* Clone the repo and copy the "ciscohue" folder to root of your favorite webserver
* Head to the hue-curls folder and add your API key and the light group number you want to control
* Make the files in the hue-curls folder executeable with chmod +x

## Changes to your SEPMACADDRESS.cnf.xml

You will need to add the below line to your phones config file in your TFTP server, edit file and IP accordingly.
This file is in the hue-service-xml folder

`<servicesURL>http://YOUR_WEB_SERVER_HERE/ciscohue/hue-service-xml/hue.xml</servicesURL>`
  
Restart phone for the changes to take affect


## What these files do
* The files in the hue-curls folder send a PUT request to bridge to perform the action of your choice
* The files in the in the hue-php-calls folder will execute the curl executeables when accessed.
* The file in the hue-service-xml provides the front end of the services button on the phonem allowing you to choose what light fucntion you want to perform





 