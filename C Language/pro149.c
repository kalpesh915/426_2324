#include<stdio.h>

/**
    goto label
*/

void main(){
    int i;

    question: /// label
    printf("\n 5 * 15 = ? \t");
    scanf("%d", &i);

    if(i == 75){
        printf("\n Correct Answer");
    }else{
        goto question;
    }
}
