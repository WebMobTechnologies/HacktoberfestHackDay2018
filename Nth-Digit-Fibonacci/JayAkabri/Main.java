import java.io.*;
import java.util.*;
public class Main {

    public static void main(String[] args) {

        int n = 1000, t1 = 0, t2 = 1,count=1,no=0;
        
        Scanner sc = new Scanner(System.in);
        
        System.out.println("Enter Number");
        no = sc.nextInt();
        
        // System.out.print("Upto " + n + ": ");
        while (count<n)
        {
            // System.out.print(t1 + " + ");
            
            int sum = t1 + t2;
            t1 = t2;
            t2 = sum;
            count+=1;
            String len=String.valueOf(sum);
            if (len.length()==no)
            {
                System.out.println(count);
            
                break;
            }
            
            
        }
    }
}