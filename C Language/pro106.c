#include<stdio.h>

/**
    find maximum out of 10 values
*/

void main(){
    int i = 1, max = 0, tmp;

    while(i <= 10){
        printf("\n Enter any value \t");
        scanf("%d", &tmp);

        if(max < tmp){
            max = tmp;
        }

        i++;
    }

    printf("\n Max is %d", max);
}
