
num = int(input("enter a number: "))
num+=1
while num!=0:
    num=num
    temp = num
    rev = 0
    while temp != 0:
        rev = (rev * 10) + (temp % 10)
        temp = temp // 10
     
    if num == rev:
        print(num)
        break
    else:
        num+=1
