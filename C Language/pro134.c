#include<stdio.h>

/**
    print following pattern with nested for loop

        1
       123
      12345
     1234567
    123456789
*/

void main(){
    int i, s, j;
    for(i=1; i<=5; i++){
        for(s=4; s>=i; s--){
            printf(" ");
        }

        for(j=1; j<i*2; j++){
            printf("%d", j);
        }
        printf("\n");
    }
}
