#include<stdio.h>

/// example with static variable

void msg();

void main(){
    int i;

    for(i=1; i<=10; i++){
        msg();
    }
}

void msg(){
    static int tmp = 1;
    printf("\n value of tmp is %d", tmp);
    tmp++;
}
