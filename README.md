# php_cmd
PHP命令执行漏洞的学习靶场，CTF相关内容。可以再B站重庆橙子科技视频下学习

https://space.bilibili.com/271803648

建议该靶场直接使用Docker进行部署，不然需要在PHP不同版本之间来回切换，并且需要单独安装某些php模块和系统调整，不建议将时间花费的环境搭建上。

docker pull mcc0624/cmd:latest
sudo docker run -p 18022:22 -p 18080:80 -p 18081:81  -p 18082:82 -p 18085:85 -i -t mcc0624/cmd:latest bash -c '/etc/rc.local; /bin/bash' 

php80文件夹搭建使用的是php 5.5.38版本的网站

php81文件夹搭建使用的是php 7.0.33版本的网站

php82文件夹搭建使用的是php 7.3.8版本的网站
