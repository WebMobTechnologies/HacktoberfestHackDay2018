package Ajava;

import java.util.Arrays;
import java.util.Scanner;

public class Subsequence { 
   
	 public static void find (char[] str, String str1)
	    {
	       
	        if (str1.length() == str.length)
	        {
	        
	            System.out.print(str1 + " ");
	            return;
	        }

	        
	        for (int i = 0; i < str.length; i++)
	        {
	        
	            while (i + 1 < str.length && str[i] == str[i+1]) {
	            	i++;
	            	
	            }

	            find (str, str1 + str[i]);
	        }
	    }


 public static void main(String[] args) 
 { 
	 
	 Scanner sc = new Scanner(System.in);
	 
	 System.out.println("Enter String");
	 
	 
	 String str = sc.nextLine();

     String str1 = "";

     str = str.toLowerCase();
     
     char[] c = str.toCharArray();
     Arrays.sort(c);

     find(c, str1);
 	} 
} 