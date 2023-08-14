/**
    simple if statement
*/

#include<stdio.h>

void main(){
    int ip;

    printf("\n Enter your age \t");
    scanf("%d", &ip);

    if(ip >= 18){
        printf("\n Welcome to voting booth");
    }else{
        printf("\n please try in next election");
    }
}
