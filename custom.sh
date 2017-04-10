#!/bin/bash
ip5=`cat /root/Desktop/my/systemip.txt`
ip2=`cat /root/Desktop/my/namenodeip.txt`
for ip4 in `cat /root/Desktop/my/systemip.txt`
do
if [ "$ip2" = "$ip4" ]
then
`sh /root/Desktop/my/delete.sh`
`sh /root/Desktop/my/automatemaster.sh`
else
`sshpass -p 293293 ssh $ip2 mkdir /root/Desktop/my`
`sshpass -p 293293 ssh $ip2 mount -t nfs $ip5:/root/Desktop/my /root/Desktop/my`
`sshpass -p 293293 ssh $ip2 sh /root/Desktop/my/delete.sh`
`sshpass -p 293293 ssh $ip2 sh /root/Desktop/my/installjdk.sh`
`sshpass -p 293293 ssh $ip2 sh /root/Desktop/my/installhadoop.sh`
`sshpass -p 293293 ssh $ip2 sh /root/Desktop/my/automatemaster.sh`
`sshpass -p 293293 ssh $ip2 umount /root/Desktop/my`
fi
done 			
for ip3 in `cat /root/Desktop/my/datanodeip.txt`
do
`sshpass -p 293293 ssh $ip3 mkdir /root/Desktop/my`
`sshpass -p 293293 ssh $ip3 mount -t nfs $ip5:/root/Desktop/my /root/Desktop/my`
`sshpass -p 293293 ssh $ip3 sh /root/Desktop/my/delete.sh`
`sshpass -p 293293 ssh $ip3 sh /root/Desktop/my/installjdk.sh`
`sshpass -p 293293 ssh $ip3 sh /root/Desktop/my/installhadoop.sh`
`sshpass -p 293293 ssh $ip3 sh /root/Desktop/my/automateslave.sh`
`sshpass -p 293293 ssh $ip3 umount /root/Desktop/my`
done
 

