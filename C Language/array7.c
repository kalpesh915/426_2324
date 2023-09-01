#include<stdio.h>

/**
    check entered value is exist in array or not
*/

#define size 10

void main(){

    int ip[size], i, tmp, flag = 0;

    /// get data from user
    for(i=0; i<size; i++){
        printf("\n Enter value for ip[%d] \t", i);
        scanf("%d", &ip[i]);
    }

    /// get value to be compare
    printf("\n Enter any value for compare in array \t");
    scanf("%d", &tmp);

    for(i=0; i<size; i++){
        if(tmp == ip[i]){
            flag = 1;
            break;
        }
    }

    if(flag == 1){
        printf("%d is exist in array", tmp);
    }else{
        printf("%d is not exist in array", tmp);
    }
}
