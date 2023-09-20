#include<stdio.h>

/// example of formal parameter scope

void sum(int, int);

void main(){
    int ip1, ip2; /// local variable
    printf("\n Enter value for ip1 \t");
    scanf("%d", &ip1);
    printf("\n Enter value for ip2 \t");
    scanf("%d", &ip2);

    sum(ip1, ip2);
}


/// global
void sum(int i, int j){
    /// i and j variable formal parameters
    /// local
    printf("\n Sum is %d", i + j);
}
