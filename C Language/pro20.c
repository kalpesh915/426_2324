#include<stdio.h>

/// find simple interest

void main(){
    float amount, rate, noy, si;

    printf("\n Enter principal amount \t");
    scanf("%f", &amount);
    printf("\n Enter rate of interest \t");
    scanf("%f", &rate);
    printf("\n Enter number of years \t");
    scanf("%f", &noy);

    si = (amount * noy * rate) / 100;

    printf("\n Simple interest is %f", si);
}
