#include<stdio.h>

/// find cursor position

void main(){
    char ip[100];
    FILE *fp = fopen("data3.txt", "r");
    printf("\n Read Cursor on %d",ftell(fp));
    fgets(ip, 100, fp);
    printf("\n Read Cursor on %d",ftell(fp));
    fgets(ip, 100, fp);
    printf("\n Read Cursor on %d",ftell(fp));
    fclose(fp);
}
