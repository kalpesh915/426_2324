#include<stdio.h>

/**
    create a menu driven banking application with following
    functions
    1   deposit
    2   withdraw
    3   balance_check

    maintain 1000 rs. as minimum balance

    Topic : global variable, functions, if else, do..while loop,
    switch case
*/

double balance;

void main(){
    balance = 10000;

    int option;

    do{
        printf("\n ****************************************** ");
        printf("\n Press 1 for Deposit");
        printf("\n Press 2 for Withdraw");
        printf("\n Press 3 for Balance Check");
        printf("\n Press 0 for Exit \t");
        scanf("%d", &option);

        switch(option){
            case 1:{
                deposit();
                break;
            }

            case 2:{
                withdraw();
                break;
            }

            case 3:{
                balance_check();
                break;
            }

            case 0:{
                printf("\n Thanks for using banking System");
                break;
            }

            default:{
                printf("\n Invalid Option Selected");
                break;
            }
        }
    }while(option != 0);
}

void deposit(){
    double amount;
    printf("\n Enter amount for deposit \t");
    scanf("%lf", &amount);

    if(amount > 0){
        balance = balance + amount;
        balance_check();
    }else{
        printf("\n Invalid Amount Entered");
    }
}

void balance_check(){
    printf("\n************************************************");
    printf("\n Current Balance is %lf", balance);
    printf("\n************************************************");
}

void withdraw(){
    double amount;

    printf("\n Enter amount for withdraw \t");
    scanf("%lf", &amount);

    if(amount > 0){
        /// enough balance
        if(amount < balance){
            if((balance - amount) >= 1000){
                balance = balance - amount;
                balance_check();
            }else{
                printf("\n Please Maintain Minimum Balance");
                balance_check();
            }
        }else{
            printf("\n Not Enough balance in Account");
            balance_check();
        }
    }else{
        printf("\n Invalid Amount Entered");
    }
}
