/**
    simple if statement

    check entered year is leap year or not
*/

#include<stdio.h>

void main(){
    int ip1;

    printf("\n Enter any year \t");
    scanf("%d", &ip1);

    if(ip1 %4 == 0){
        printf("\n Leap year");
    }else{
        printf("\n Non Leap year");
    }
}
