# Commands
- ```su - && sudo -s```
<br>

- ```history```
<br>

- ```chown adam:managers myfile.txt```
- ```chmod u=rw,g=r,o=r myfile.txt```
- ```chmod u=rw,g=,o= myfile.txt```
- ```chmod u=rwx,g=rwx,o=rwx mydir```
- ```chmod 644 myfile.txt```
- ```chmod 777 mydir```

> U(user) G(group) O(other)
    Read Write Execute
    4    2     1


- ```apropos```
  

<p>
When a command gets too long for the page, we show it on multiple lines, with each
line ending with a backslash (\) symbol. For example, we might show the previous
command as:
</p>

>$ mysql \\
--user=saleh \\
--password=tomcat

<p>
The backslash characters indicate that this is a single command that should be typed
in all on one line.
</p>

- ```md5sum mysql-standard-5.0.22-linux-i686.tar.gz```