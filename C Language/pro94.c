#include<stdio.h>

/**
    income tax calculator (leader if / nested if)

    income              tax
    000000-500000       0%
    500001-750000       10%
    750001-1000000      20%
    1000001-NNNNNN      30%

    female tax payers less 3%
    senior citizen less 2%
*/

void main(){
    int income, age;
    char gender;
    float tax;

    printf("\n Enter your income \t");
    scanf("%d", &income);
    printf("\n Enter your age \t");
    scanf("%d", &age);
    printf("\n Select Gender (m | f) \t");
    gender = getche();

    printf("\n Income is %d", income);
    printf("\n Age is %d", age);
    printf("\n Gender is %c", gender);

    if(income >= 0 && income <= 500000){
        tax = 0;
    }else if(income > 500000 && income <= 750000){
        if(gender == 'f' || gender == 'F'){
            if(age >= 60){
                tax = income * 0.05;
            }else{
                tax = income * 0.07;
            }
        }else if(gender == 'm' || gender == 'M'){
            if(age >= 60){
                tax = income * 0.08;
            }else{
                tax = income * 0.10;
            }
        }else{
            printf("\n Invalid Gender Selected");
        }
    }else if(income > 750000 && income <= 1000000){
        if(gender == 'f' || gender == 'F'){
            if(age >= 60){
                tax = income * 0.15;
            }else{
                tax = income * 0.17;
            }
        }else if(gender == 'm' || gender == 'M'){
            if(age >= 60){
                tax = income * 0.18;
            }else{
                tax = income * 0.20;
            }
        }else{
            printf("\n Invalid Gender Selected");
        }
    }else if(income > 1000000 ){
        if(gender == 'f' || gender == 'F'){
            if(age >= 60){
                tax = income * 0.25;
            }else{
                tax = income * 0.27;
            }
        }else if(gender == 'm' || gender == 'M'){
            if(age >= 60){
                tax = income * 0.28;
            }else{
                tax = income * 0.30;
            }
        }else{
            printf("\n Invalid Gender Selected");
        }
    }

    printf("\n Payable Tax is %f", tax);
}
