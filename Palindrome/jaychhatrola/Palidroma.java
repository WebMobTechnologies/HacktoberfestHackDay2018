package Ajava;

import java.util.Scanner;

public class Palidroma {
	
	
 static	int palindrome(int n)
	{
	  int t,r = 0;
	  t=n;
	  while(t!=0)
	  {
	    r=r*10;
	    r=r+(t%10);
	    t=t/10;
	  }
	  if(r==n)
	    return 1;
	  else
	    return 0;
	}

	
	
	public static void main(String args[]) 
	{ 
		
	
		Scanner sc = new Scanner(System.in);
		
		  int k,d=0,i;
		  System.out.println("Enter Number");
		  k=sc.nextInt();
		  i = k + 1;
		  while(true)
		  {
		    d=palindrome(i);
		 
		    if(d==1)
		      break;
		    i++;
		  }
		  System.out.println(i);
		  
	  
	}
	} 
	

