#! bin bash

echo "Please enter your username"
read a
echo "please enter your password"
read b
for i in 1 2 3
do
	for u in `cat /root/Desktop/my/username.txt`
		do
			if [ "$a" == "$u" ]
			then 
			for p in `cat /root/Desktop/my/pswd.txt`
			do
				if [ "$b" == "$p" ]
				then
					echo b
				else
					echo " You entered a wrong username or password"
				fi
			done
			fi
		done
done
		
