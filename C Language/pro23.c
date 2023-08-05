/**
    currency dinomination calculator
*/

#include<stdio.h>

void main(){
    int amount;

    printf("\n Enter amount to pay \t");
    scanf("%d", &amount);

    printf("\n Amount to pay %d", amount);

    printf("\n Notes of 2000 is %d", amount / 2000);
    amount = amount % 2000;
    printf("\n Notes of 500 is %d", amount / 500);
    amount = amount % 500;
    printf("\n Notes of 200 is %d", amount / 200);
    amount = amount % 200;
    printf("\n Notes of 100 is %d", amount / 100);
    amount = amount % 100;
    printf("\n Notes of 50 is %d", amount / 50);
    amount = amount % 50;
    printf("\n Notes of 20 is %d", amount / 20);
    amount = amount % 20;
    printf("\n Notes of 10 is %d", amount / 10);
    amount = amount % 10;
    printf("\n Notes of 5 is %d", amount / 5);
    amount = amount % 5;
    printf("\n Notes of 2 is %d", amount / 2);
    amount = amount % 2;
    printf("\n Notes of 1 is %d", amount );
}
