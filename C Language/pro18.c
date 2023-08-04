#include<stdio.h>

/// convert kilometers to meters with float

void main(){
    float kilometers, meters;

    printf("\n Enter kilometers \t");
    scanf("%f", &kilometers);

    meters = kilometers * 1000;

    printf("\n meters is %f", meters);
}
