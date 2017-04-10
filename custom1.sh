#!/bin/bash

ip2=`cat /root/Desktop/my/namenodeip.txt`

`bash /root/Desktop/my/automatemaster.sh`
for ip3 in `cat /root/Desktop/my/datanodeip.txt`
do
`sshpass -p 293293 ssh $ip3 mkdir /root/Desktop/my`
`sshpass -p 293293 ssh $ip3 mount -t nfs $ip2:/root/Desktop/my /root/Desktop/my`
`sshpass -p 293293 ssh $ip3 bash /root/Desktop/my/automateslave.sh`
`sshpass -p 293293 ssh $ip3 umount /root/Desktop/my`
done
