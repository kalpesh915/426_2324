#include<stdio.h>
/**
    UDF 4 : with parameters with return value
*/

int cube(int);

void main(){
    int ip, ans;
    printf("\n Enter any number for find cube \t");
    scanf("%d", &ip);

    ans = cube(ip);
    printf("\n Cube of %d is %d", ip, ans);
}

int cube(int i){
    return i * i * i;
}

