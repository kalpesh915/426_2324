#include<stdio.h>

/**
    logical or operator

    condition1  condition2  ans
    true        false       true
    false       true        true
    false       false       false
    true        true        true
*/

void main(){
    printf("\n answer is %d", (10 > 5 || 10 > 15));
    printf("\n answer is %d", (10 > 50 || 100 > 15));
    printf("\n answer is %d", (1 > 5 || 10 > 15));
    printf("\n answer is %d", (10 > 5 || 10 > 8));
}
