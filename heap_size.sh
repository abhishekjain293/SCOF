#!/bin/bash
var=`cat /root/Desktop/my/heapsize.txt
`sed -i "/#export HADOOP_HEAPSIZE/c #export HADOOP_HEAPSIZE=$var "  /root/Desktop/my/hadoop-env.sh`
`sed -i '/#export HADOOP_NAMENODE_INIT/c #export HADOOP_NAMENODE_INIT_HEAPSIZE="-Xmx$var"'  /root/Desktop/my/hadoop-env.sh`
`sed -i "/export HADOOP_HEAPSIZE/c export HADOPP_HEAPSIZE=$var"  /root/Desktop/my/hadoop-env.sh`
`sed -i '/export HADOOP_NAMENODE_INIT/c export HADOOP_NAMENODE_INIT_HEAPSIZE="-Xmx$var" ' /root/Desktop/my/hadoop-env.sh`
