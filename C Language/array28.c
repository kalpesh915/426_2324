#include<stdio.h>

/**

*/

void main(){
    char name[20];
    int i;
    printf("Enter name of your city \t");
    gets(name);

    for(i=0; i<20; i++){
        printf(" %c", name[i]);
    }
}
