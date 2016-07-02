# RescWC
RescWC alias Rescue Web Console is a web application you can simply run using a GO binary, allowing you to have a backup console from the web

![alt tag](https://raw.githubusercontent.com/Darlelet/RescWC/master/img/demo.png?token=AGO2LdR8qbDayhuvmmlGBmaSXoCag167ks5XgP5TwA%3D%3D)
![alt tag](https://raw.githubusercontent.com/Darlelet/RescWC/master/img/clipboard.png?token=AGO2Lb8Z7CHpfVQbnK7YxdKD8OPdwde1ks5XgP5vwA%3D%3D)
*Screenshots of the current release*

# Installation
ATM, just clone the repo or download the archive, and set appropriated permissions for your webserver to access the files.
A GO binary as well as .ini configuration file are on their way to improve RescWC usability. :-)

# Features
You can execute any command, and have the associated output on the page, as long as it's a none-continous program: if so, the command will simply timeout after 5 seconds, because the output isn't real time synced, but is buffered and thus wait for the program to end before displaying it (Refer to PHP exec/system/... functions).

# Credits
Made using <a href="http://semantic-ui.com">Semantic UI</a> (front end)

# License
RescWC is under MIT license so feel free to use the code the way you want!
