#include<stdio.h>
#include<string.h>

/**
    check entered string is palindrome or not
    nayan
    >> <<
*/

void main(){
    char ip1[100], ip2[100];
    int ans;

    /// get first string from user
    printf("\n Enter any string \t");
    gets(ip1);

    /// copy string 1 into string 2
    strcpy(ip2, ip1);

    /// reverse the string 2
    strrev(ip2);

    /// compare the both strings
    ans = strcmp(ip1, ip2);

    /// printing result
    if(ans == 0){
        printf("\n String is palindrome");
    }else{
        printf("\n Try another String");
    }
}
