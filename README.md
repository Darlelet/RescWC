# RescWC
RescWC alias Rescue Web Console is a web application you can simply run using your favorite web server, allowing you to have a backup console from the web

![alt tag](https://github.com/Darlelet/RescWC/blob/master/img/demo.png)
![alt tag](https://github.com/Darlelet/RescWC/blob/master/img/clipboard.png)

*Screenshots of the current release*

## Installation
Just clone the repo or download the archive, and set appropriated permissions for your webserver to access the files. :smile:

## Configuration
By default most web servers run php scripts via *www-data* user, preventing you from using powerful commands.
Nevertheless, if you need to run this type of commands, hopefully you can actually solve this issue.

1. Simply open the sudoer file on your linux system: visudo or (text editor) /etc/sudoers
2. Locate the following line: ```root ALL=(ALL) ALL```
3. Add the following stuff below it: 

```
www-data ALL=NOPASSWD: /path/to/binary, /path/to/binary2 (...)
```

-> Where binary stands for the executable binary you want to be able to run from the www-data user (thus, RescWC)


> Finally, in the conf.php file specify **'yes'** next to the **'use_sudo'** statement, and specify the **password** you just set (if you didn't use NOPASSWD as shown in the example). Don't forget to adjust the file to fit your needs.

NB: If you plan on using a log file (enable_log & log_file in *conf.php*), remember to create it and make sure the running user (often www-data) has **rw** (Read & Write) access to it ! :wink:

## Features
You can execute any command, and have the associated output on the page, as long as it's a none-continous program: if so, the command will simply timeout after 5 seconds, because the output isn't real time synced, but is buffered and thus wait for the program to end before displaying it (Refer to PHP exec/system/... functions).

## Credits
Made using <a href="http://semantic-ui.com">Semantic UI</a> (front end)

## License
RescWC is under MIT license so feel free to use the code the way you want! :stuck_out_tongue_winking_eye:
