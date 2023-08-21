#include<stdio.h>

/**
    make sum of 10 numbers with while loop
*/

void main(){
    int i = 1, sum = 0, tmp;

    while(i <= 10){
        printf("\n Enter any value \t");
        scanf("%d", &tmp);
        sum = sum + tmp;
        i++;
    }

    printf("\n Sum is %d", sum);
}
