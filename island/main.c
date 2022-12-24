#include <stdio.h>
#include "island.h"

int main() {
    island amity = {"Ostrov drujby", "09:00", "17:00", NULL};
    island craggy = {"Skalistyi", "09:00", "17:00", NULL};
    island isla_nublar = {"Tumannyi", "09:00", "17:00", NULL};
    island shutter = {"Proklyatyh", "09:00", "17:00", NULL};
    amity.next = &craggy;
    isla_nublar.next = &isla_nublar;
    island skull = {"Cherepa", "09:00", "17:00", NULL};
    isla_nublar.next = &skull;
    skull.next = &shutter;
    display(&amity);

    return 0;
}