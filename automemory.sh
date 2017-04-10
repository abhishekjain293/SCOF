#!/bin/bash

free -m >/root/Desktop/my/f.txt
grep "Mem" f.txt | awk '{print $4}'> m1.txt
for ip in `cat /root/Desktop/my/connected_ip.txt`
do
sshpass -p 293293 ssh $ip  free -m >/root/Desktop/my/f.txt 
grep "Mem" f.txt | awk '{print $4}'> m1.txt
done
