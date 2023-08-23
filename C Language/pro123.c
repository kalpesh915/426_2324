#include<stdio.h>

/**
    print following pattern with nested for loop

    1
    22
    333
    4444
    55555
*/

void main(){
    int i, j;

    /// outer loop
    for(i=1; i<=5; i++){
        /// inner loop
        for(j=1; j<=i; j++){
            printf("%d", i);
        }
        printf("\n");
    }
}
