#include<stdio.h>

/**
    continue in loop
*/

void main(){
    int i;

    for(i=1; i<=10; i++){
        if(i ==5 ){
            continue;
        }
        printf(" %d", i);
    }
}
