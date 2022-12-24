#include <stdio.h>
#include "fish.h"

int main() {
    struct fish snappy = {"Зубастик", "Пиранья", 69, 4};
    catalog(snappy);
    return 0;
}