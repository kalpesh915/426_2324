#include<stdio.h>

/**
    print following pattern with nested for loop
    *****
    *****
    *****
    *****
    *****
*/

void main(){
    int i, j;

    /// outer loop
    for(i=1; i<=5; i++){
        /// inner loop
        for(j=1; j<=5; j++){
            printf("*");
        }
        printf("\n");
    }
}
