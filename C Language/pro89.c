#include<stdio.h>

/**
    create result with 3 subjects
*/

void main(){
    int sub1, sub2, sub3, total;
    float percentage;

    printf("\n Enter marks for subject 1 \t");
    scanf("%d", &sub1);
    printf("\n Enter marks for subject 2 \t");
    scanf("%d", &sub2);
    printf("\n Enter marks for subject 3 \t");
    scanf("%d", &sub3);

    if(sub1 >= 35 && sub2 >= 35 && sub3 >= 35){
        total = sub1 + sub2 + sub3;

        percentage = (float) total / 3;
        printf("\n Total Marks are %d", total);
        printf("\n Percentage is %f", percentage);

        if(percentage >= 80){
            printf("\n Grade A+");
        }else if(percentage >= 70 && percentage < 80){
            printf("\n Grade A");
        }else if(percentage >= 60 && percentage < 70){
            printf("\n Grade B");
        }else if(percentage >= 50){
            printf("\n Grade C");
        }else{
            printf("\n Grade D");
        }


    }else{
        printf("\n you are failed in this examination");
    }
}
