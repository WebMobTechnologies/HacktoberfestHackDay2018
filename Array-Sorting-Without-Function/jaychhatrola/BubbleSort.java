package Ajava;

import java.util.Scanner;

public class BubbleSort {

	static void Sorting(int bubblesort[]) {
		int a = bubblesort.length;

		for (int i = 0; i < a - 1; i++) {
			for (int j = 0; j < a - i - 1; j++) {
				if (bubblesort[j] > bubblesort[j + 1]) {
					int temp = bubblesort[j];
					bubblesort[j] = bubblesort[j + 1];
					bubblesort[j + 1] = temp;
				}
			}

		}

		System.out.println("Sorted Array :-");
		for (int i = 0; i < a; i++) {
			System.out.print(" " + bubblesort[i]);
		}

	}

	public static void main(String[] args) {

		int n = 0;
		Scanner sc = new Scanner(System.in);

		System.out.println("Enter Array Size");
		n = sc.nextInt();

		int array[] = new int[n];

		for (int i = 0; i < n; i++) {
			array[i] = sc.nextInt();
		}

		Sorting(array);

	}

}
