#include<stdio.h>

/// convert temprature from fahrenhiet to celsius

void main(){
    float fahrenhiet, celsius;

    printf("\n Enter Temprature in Fahrenhiet \t");
    scanf("%f", &fahrenhiet);

    celsius = (fahrenhiet - 32) * 5 / 9;
    printf("\n Temprature in Celisus is %f", celsius);

}
