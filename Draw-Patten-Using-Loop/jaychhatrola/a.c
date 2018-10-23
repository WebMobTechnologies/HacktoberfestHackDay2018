#include<stdio.h>


void main()
{
		int i,j,k,a=1;

	for (i=1; i<=5; i++) {
		for (k=a; k<=5; k++) {
			printf(" ");
		}
		for (j=0; j< i; j++) {
			printf("*");
		}
		a = a + 1;
		printf("\n");
	}
	a = 1;
	for (i=4; i>=1; i--) {
		for (k=a; k>=0; k--) {
			printf(" ");
		}
		for (j=i; j>=1; j--) {
			printf("*");
		}
		a = a + 1;
		printf("\n");
	}

}
