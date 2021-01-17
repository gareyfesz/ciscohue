# Cisco Hue Integration



#### What this guide and files cover: 
* Sample files that you can change and use as your own
* Where to host said files

#### Prerequsisites
* Cisco 794x orr 796x phone running SIP firmware.  It appears that Cisco has removed the 7941 firmware form their downloads site ;(
* PBX that you can succesfully register a 794x or 796x phone with SIP firmware. (Im using FreePBX with Asterisks 15)
* Webserver that can execute php.  You can host these files on you PBX if youd like. Id rather host on a seperate box.
* Hue lights that connect back to a V2 bridge and a valid API key for your bridge. I am linking the guide on how to create an API key. https://developers.meethue.com/develop/get-started-2/
* Brief knowledge of the Hue API.  I will provide a link, you will need to create an account. https://developers.meethue.com/develop/hue-api/lights-api/

## Changes to SEPMACADDRESS.cnf.xml

You will need to add the below line to your phones config file in your TFTP server, edit file and IP accordingly.
This file is in the hue-service-xml folder

`<servicesURL>http://YOUR_WEB_SERVER_HERE/custom_services/hue-service-xml/hue.xml</servicesURL>`
  
After adding this to your SEPMACADDRESS.cnf.xml file for your phones mac address reboot the phone 
 