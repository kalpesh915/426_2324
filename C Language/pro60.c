#include<stdio.h>

/**
    logical and operator

    condition1  condition2  ans
    true        false       false
    false       true        false
    false       false       false
    true        true        true
*/

void main(){
    printf("\n answer is %d", (10 > 5 && 10 > 15));
    printf("\n answer is %d", (10 > 50 && 100 > 15));
    printf("\n answer is %d", (1 > 5 && 10 > 15));
    printf("\n answer is %d", (10 > 5 && 10 > 8));
}
