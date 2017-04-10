#!/bin/bash
ip2=`cat /root/Desktop/my/namenodeip.txt`


for ip3 in `cat /root/Desktop/my/datanodeip.txt`
do
`sshpass -p 293293 ssh $ip3 mkdir /root/Desktop/my`
`sshpass -p 293293 ssh $ip3 mount -t nfs $ip2:/root/Desktop/my /root/Desktop/my`
`sshpass -p 293293 ssh $ip3 sh /root/Desktop/my/automateclose.sh`
`sshpass -p 293293 ssh $ip3 umount /root/Desktop/my`
done
`bash /root/Desktop/my/automatemasterclose.sh`
