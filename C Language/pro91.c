#include<stdio.h>

/**
    check entered value is between 0 to 100 or not
*/

void main(){
    int ip1;
    printf("\n Enter any value for ip1 \t");
    scanf("%d", &ip1);

    if(ip1 >= 0 && ip1 <= 100){
        printf("\n Value in Range");
    }else{
        printf("\n Value is out of Range");
    }
}
