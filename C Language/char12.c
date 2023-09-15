#include<stdio.h>
#include<ctype.h>

void main(){
    char c;

    printf("\n Enter any character \t");
    c = getche();
    printf("\n Character to upper case is %c", toupper(c));
    printf("\n Character to lower case is %c", tolower(c));
}
