#include<stdio.h>

/**
    make sum of 1 to 10 with while loop
*/

void main(){
    int i = 1, sum = 0;

    while(i <= 10){
        sum = sum + i;
        i++;
    }

    printf("\n Sum is %d", sum);
}
