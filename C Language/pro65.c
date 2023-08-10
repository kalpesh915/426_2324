#include<stdio.h>

/**
    ternary operator

    ans = (condition ? true part : false part)

    find maximum out of two values with use of
    ternary operator
*/

void main(){
    int ip1, ip2, ans;

    printf("\n Enter value for ip1 \t");
    scanf("%d", &ip1);
    printf("\n Enter value for ip2 \t");
    scanf("%d", &ip2);

    ans = (ip1 > ip2 ? ip1 : ip2);

    printf("\n maximum is %d", ans);
}
