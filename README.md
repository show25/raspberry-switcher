# raspberry-switcher

<h3>This script will help you to control one light from your Raspberry Pi.</h3>

<h2>What you get?</h2>

<p>-Web interface for remote light control.<br/>
-Python scripts for SSH licgt control</p>

Use this at your own risk.


<h3>Requirements: </h3>

<h5>Hardware:</h5>
<ul>
  <li>Raspberry Pi (tested on Rpi 2 B+)</li>
  <li>One Channel Relay</li>
</ul>

<h5>Software:</h5>
<ul>
  <li>Apache + PHP</li>
  <li>RPI GPIo: 
  <code>
  sudo apt-get install python-rpi.gpio python3-rpi.gpio
  </code>
  </li>
</ul>


<h5>Installation:</h5>

Grant root access to apache to access GPIO as root

Instructions for Raspbian:

Enter this comand:
<code>
sudo visudo
</code>

Add this line to the opened file:
<code>
www-data ALL=(ALL) NOPASSWD: ALL
</code>

Copy the project files to www/html or any web accesible location.

Edit <code>.gpio</code> and set your PIN number:<br>
<code>pinNo = 20  # pin number BCM numbering schema</code>

Edit <code>light.php</code> and set the path to <code>.gpio</code> file:<br>
<code>$gpio_script_path = '/var/www/html/.gpio';</code>
<br>This is file can be anywhere on your Rpi .

<h2>Done!</h2>

Access http://yourip  and turn on or off the light.
<br>
By default the light will stay on for 5 minutes and then will turn off.<bR>
You can change the timer.


<br><Br>
<hr/>
Keep in mind that this project was tested only on Raspberry Pi 2 B+ using Raspbian Jessie OS.
<br>
###

<h5>Credits:</h5>
Thanks to http://codepen.io/scrimothy/pen/juHId  for the switcher CSS.



