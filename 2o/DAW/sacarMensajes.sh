cat ./logs.txt | grep "^feat("|cut -d ":" -f2
read