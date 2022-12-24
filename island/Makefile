main: island.o main.o
	gcc main.o island.o -o main

island.o: island.c island.h
	gcc -c island.c

main.o: main.c island.h
	gcc -c main.c