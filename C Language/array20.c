#include<stdio.h>

/**
    get value from user and store in 2D Array
    and check entered value is exist in array or not
*/

#define size 3

void main(){
    int ip[size][size], i, j, tmp, flag=0;

    /// get values in array from user
    for(i=0; i<size; i++){
        for(j=0; j<size; j++){
            printf("\n Enter value for ip[%d][%d] \t", i, j);
            scanf("%d", &ip[i][j]);
        }
    }

    /// get value for search in array

    printf("\n Enter value for search in array \t");
    scanf("%d", &tmp);

    /// searching process
    for(i=0; i<size; i++){
        for(j=0; j<size; j++){
            if(tmp == ip[i][j]){
                flag = 1;
                break;
            }
        }
    }

    if(flag == 1){
        printf("%d value is exist in array ", tmp);
    }else{
        printf("%d value is not exist in array ", tmp);
    }
}
