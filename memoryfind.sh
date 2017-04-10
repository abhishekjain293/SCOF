#!/bin/bash

grep "Mem" $memm | awk '{print $4}' >>m1.txt
grep "Buffers/cache" $memm | awk '{print $4}' >>m1.txt
grep "Swap" $memm | awk '{print $4}' >>m1.txt

