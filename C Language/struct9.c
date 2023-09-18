#include<stdio.h>

/**
    enum : enumeration user define data type with specific set of
    values
*/

enum days {sunday = 1, monday, tuesday, wednesday, thuresday, friday, saturday};

void main(){
    enum days d1;
    d1 = monday;

    printf("\n d1 is %d", d1);
}
