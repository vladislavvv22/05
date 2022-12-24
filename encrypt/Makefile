main: encrypt.o main.o
	gcc main.o encrypt.o -o main

encrypt.o: encrypt.c encrypt.h
	gcc -c encrypt.c

main.o: main.c encrypt.h
	gcc -c main.c