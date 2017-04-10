#!/bin/bash

count=0
count1=0
a=`cat /root/Desktop/my/m1.txt`
for line in `cat /root/Desktop/my/m1.txt`
do
((count++));
if [[ "$line" < "$a" ]]
then 
a=$line
b=$count
fi
done 
for ip in `cat connected_ip.txt`
do
((count1++));
if [ "$b" = "$count1"  ]
then 
`echo $ip > /root/Desktop/my/namenodeip.txt`
continue
fi
`echo $ip >> /root/Desktop/my/datanodeip.txt`
done 

