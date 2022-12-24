#include <stdio.h>
#include "fish.h"

void catalog(struct fish f) {
    printf("%s - это %s с %d зубами. Ему %d года\n",
    f.name, f.species, f.teeth, f.age);
}