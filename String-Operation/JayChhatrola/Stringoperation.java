import java.util.Scanner;

public class Stringoperation {
	
	
	static final int TotalChar = 256; 
    
   
    static void findDuplicate(String str, int[] c) 
    { 
       for (int i = 0; i < str.length();  i++) 
          c[str.charAt(i)]++; 
    } 
       
     static void printDuplicate(String str) 
    { 
       int count[] = new int[TotalChar]; 
       findDuplicate(str, count); 
      
      for (int i = 0; i < TotalChar; i++) 
        if(count[i] > 1) 
            System.out.printf("%c,  Number Of Count = %d \n", i,  count[i]); 
       
    } 
       
	
	public static void main(String[] args) {
		
		 String input = "";
		 
		 Scanner sc = new Scanner(System.in);
		 
		 System.out.println("Enter String");
		 input = sc.nextLine();
		 
	
		 printDuplicate(input); 
		
		
		
		
		
		
		
		
		
		
	}
	

}
