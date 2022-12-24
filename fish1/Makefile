main: fish.o main.o
	gcc main.o fish.o -o main

fish.o: fish.c fish.h
	gcc -c fish.c

main.o: main.c fish.h
	gcc -c main.c