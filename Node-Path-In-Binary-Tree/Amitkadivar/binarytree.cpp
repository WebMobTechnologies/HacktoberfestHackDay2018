//compile this c++ code in following site
//https://ide.geeksforgeeks.org/index.php

#include <bits/stdc++.h> 
using namespace std; 
 
struct Node 
{ 
	int data; 
	Node *left, *right; 
}; 


struct Node* getNode(int data) 
{ 
	struct Node *newNode = new Node; 
	newNode->data = data; 
	newNode->left = newNode->right = NULL; 
	return newNode; 
} 

 
bool hasPath(Node *root, vector<int>& arr, int x) 
{ 
	//root is NULL  
	if (!root) 
		return false; 
	 
	arr.push_back(root->data);	 
	 
	if (root->data == x)	 
		return true; 
	
	if (hasPath(root->left, arr, x) || 
		hasPath(root->right, arr, x)) 
		return true; 
	
	
	arr.pop_back(); 
	return false;			 
} 

// function to print the path from root to the 
void printPath(Node *root, int x) 
{ 
	//store the path 
	vector<int> arr; 
	 
	// x is present print the path 
	if (hasPath(root, arr, x)) 
	{ 
		for (int i=0; i<arr.size()-1; i++)	 
			cout << arr[i] << "->"; 
		cout << arr[arr.size() - 1];	 
	} 
	
	// x is not present 
	else
		cout << "No Path"; 
} 


int main() 
{ 
	// binary tree formation 
	struct Node *root = getNode(1); 
	root->left = getNode(2); 
	root->right = getNode(3); 
	root->left->left = getNode(4); 
	root->left->right = getNode(5); 
	root->right->left = getNode(6); 
	root->right->right = getNode(7); 
	root->left->left->left = getNode(8);
	root->right->left->left = getNode(9);
	root->right->right->right=getNode(10);
	root->left->left->left->left = getNode(11);
	root->right->left->left->right = getNode(12);
	root->left->left->left->left->left = getNode(13);
	root->right->left->left->right->right= getNode(14);
	root->right->left->left->right->right->right= getNode(14);
	
    int x,num;
// 	cout<<"Enter 1 to 15 number which number you can find number";
    cin>>num; 	
	 x=num;
	printPath(root, x); 
	return 0; 
} 
