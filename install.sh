#!/bin/bash

for ip in `cat /root/Desktop/my/connected_ip.txt`
do
sshpass -p 293293 ssh $ip yes | yum install hadoop
sshpass -p 293293 ssh $ip yes | yum install jdk
done

