#include<stdio.h>

/// read data from file

void main(){
    char ip[100];
    FILE *fp = fopen("data1.txt", "r");
        fgets(ip, 100, fp);
        printf("\n Data From File is %s", ip);
    fclose(fp);
}
