nmap 192.168.47.* -oG nmapo.txt
grep "ssh" nmapo.txt | cut -d"," -f1 | awk '{print $2}' >connected_ip.txt



