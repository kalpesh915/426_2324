#include<stdio.h>

/// write data in file until user press X

void main(){
    char ip[100];
    FILE *fp = fopen("data3.txt", "r");
        while(!feof(fp)){/// end of file
            fgets(ip, 100, fp);
            printf("%s ", ip);
        }
    fclose(fp);
}
