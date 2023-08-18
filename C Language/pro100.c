#include<stdio.h>

/**
    create basic calculator with use of switch case
*/

void main(){
    int ip1, ip2, ans;
    char op;

    printf("\n Enter value for ip1 \t");
    scanf("%d", &ip1);
    printf("\n Enter value for ip2 \t");
    scanf("%d", &ip2);

    printf("\n Press + for Sum");
    printf("\n Press - for Sub");
    printf("\n Press * for Mul");
    printf("\n Press / for Div");
    printf("\n Press %% for Mod \t");

    op = getche();

    switch(op){
        case '+':{
            ans = ip1 + ip2;
            break;
        }
        case '-':{
            ans = ip1 - ip2;
            break;
        }
        case '*':{
            ans = ip1 * ip2;
            break;
        }
        case '/':{
            ans = ip1 / ip2;
            break;
        }
        case '%':{
            ans = ip1 % ip2;
            break;
        }
        default:{
            ans = 0;
            printf("\n Invalid Operator Selected");
            break;
        }
    }

    printf("\n Answer is %d", ans);
}
