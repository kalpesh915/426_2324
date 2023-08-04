#include<stdio.h>

/// convert kilometers to meters

void main(){
    int kilometers, meters;

    printf("\n Enter kilometers \t");
    scanf("%d", &kilometers);

    meters = kilometers * 1000;

    printf("\n meters is %d", meters);
}
