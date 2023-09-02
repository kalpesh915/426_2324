#include<stdio.h>

/**
    separate odd and even values
*/

#define size 10

void main(){
    int ip[size], odd[size], even[size];
    int i, oc=0, ec=0;

    /// get data in array
    for(i=0; i<size; i++){
        printf("\nEnter value for ip[%d] \t", i);
        scanf("%d", &ip[i]);
    }

    /// separate values
    for(i=0; i<size; i++){
        if(ip[i] %2 == 0){
            even[ec] = ip[i];
            ec++;
        }else{
            odd[oc] = ip[i];
            oc++;
        }
    }

    /// printing data
    printf("\n Even Values are \n");
    for(i=0; i<ec; i++){
        printf(" %d", even[i]);
    }

    printf("\n Odd Values are \n");
    for(i=0; i<oc; i++){
        printf(" %d", odd[i]);
    }
}
