#include<stdio.h>

/**
    infinite loop with for loop
*/

void main(){
    int i = 1; /// init

    for( ; ; ){

        if(i==100){ /// condition
            break;
        }
        printf(" %d",i);
        i++; /// increment

    }
}
