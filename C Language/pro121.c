#include<stdio.h>

/**
    print following pattern with nested for loop
    12345
    12345
    12345
    12345
    12345
*/

void main(){
    int i, j;

    /// outer loop
    for(i=1; i<=5; i++){
        /// inner loop
        for(j=1; j<=5; j++){
            printf("%d",j);
        }
        printf("\n");
    }
}
