/**
    simple if statement

    find entered number is positive or negative with
    ladder if
*/

#include<stdio.h>

void main(){
    int ip1;

    printf("\n Enter any value for ip1 \t");
    scanf("%d", &ip1);

    if(ip1 > 0){
        printf("\n Positive");
    }else if(ip1 < 0){
        printf("\n Negative");
    }else{
        printf("\n Zero");
    }

}
