# jps-sshtun

Starting with Jelastic version 5.8 AllowTcpForwarding is set to no by default.

This add-on will set it to yes on sqlDB nodes thus allowing you to connect directly to the database nodes via platfrom SSH Gateway.

# Connection example
Establish the connection from PowerShell or Terminal
```
ssh <node id>-<user id>@gate.j.layershift.co.uk -p 3022 -N -L 3306:127.0.0.1:3306
```
Configure your database connection details in a database client application like HeidiSQL
![HeidiSQL Session](../../raw/master/images/HeidiSQL_Session.png)

# Without add-on installed and SSH tunnelling:

Connection from computer database client application will fail with something like this shown in the ssh connection window

```
channel 2: open failed: administratively prohibited: open failed
```
