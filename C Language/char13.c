#include<stdio.h>
#include<ctype.h>

/**
    count how many alphabets, uppercase, lowercase, digits,
    special character, words in string
*/

void main(){
    char ip[100], c;
    int i=0, ac=0, uc=0, lc=0, scc=0, dc=0, wc=1;
    printf("\n Enter any string \t");
    gets(ip);

    while(ip[i] != '\0'){
        c = ip[i];
        if(isalpha(c)){
            ac++;
            if(isupper(c)){
                uc++;
            }else{
                lc++;
            }
        }else if(isdigit(c)){
            dc++;
        }else if(ispunct(c)){
            scc++;
        }else if(isspace(c)){
            wc++;
        }
        i++;
    }

    printf("\n Total Characters are %d",i);
    printf("\n Total Alphabets are %d",ac);
    printf("\n Total Upper Alphabets are %d",uc);
    printf("\n Total Lower Alphabets are %d",lc);
    printf("\n Total Digit Alphabets are %d",dc);
    printf("\n Total Special Alphabets are %d",scc);
    printf("\n Total worlds are %d",wc);
}
