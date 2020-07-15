N = int(input('enter number'))
number = N+1
for _ in range(N):
    print()
    number=number-1
    for i  in reversed(range(1,N+1)):     
        print(str(i)*number,end="")
