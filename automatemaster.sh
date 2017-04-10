#!/bin/bash

ip=`cat /root/Desktop/my/namenodeip.txt`
yes | cp  -f /root/Desktop/my/core-site.xml /etc/hadoop/core-site.xml
yes | cp -f /root/Desktop/my/hdfs2.xml /etc/hadoop/hdfs-site.xml
yes | cp -f /root/Desktop/my/map1.xml /etc/hadoop/mapred-site.xml
sed -i "/hdfs/c <value>hdfs://\\${ip}:9000</value> "  /etc/hadoop/core-site.xml
sed -i "/<value>/c <value>\\${ip}:9001</value> "  /etc/hadoop/mapred-site.xml
yes | hadoop namenode -format -y
hadoop-daemon.sh start namenode
hadoop-daemon.sh start jobtracker
