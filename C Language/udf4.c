#include<stdio.h>
/**
    UDF 3 : no parameters with return value
*/

float pi();

void main(){
    float ans;
    ans = pi();
    printf("\n value of answer is %f", ans);
    printf("\n value of answer is %f", pi());
}

float pi(){
    return 3.147;
}
