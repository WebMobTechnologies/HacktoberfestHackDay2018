#include<stdio.h>
void main()
{
    int i, j,k;
    for(i=5; i>=1; i--)
        {
            for(j=5; j>=1; j--)
                {
                    for(k=i; k>=1; k--)
                    {
                        printf("%d",j);
                    }
                }
            printf("\n");
        }
}
