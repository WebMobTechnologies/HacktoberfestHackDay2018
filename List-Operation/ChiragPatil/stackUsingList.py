class st:
    def __init__(self):
        self.stack = []
    
    def push(self,item):
        self.stack.insert(len(self.stack),item)
                
    def pop(self):
        if len(self.stack)==0:
            print('Stack is empty')
        else:
            print(self.stack[-1])
            self.stack.remove(self.stack[-1])
            
    
    def peek(self):
        if len(self.stack)!=0:
            print(self.stack[-1])
    
    def isEmpty(self):
        if len(self.stack)!=0:
            return False
        else:
            return True
    
    def display(self):
        print(self.stack)
        
s = st() 

while True:
    print('\npush <value>')
    
    print('pop')
    print('quit')
    print('display')
    print('peek')
    do = input('What would you like to do? ').split()
 
    operation = do[0].strip().lower()
    if operation == 'push':
        s.push(int(do[1]))
    elif operation == 'pop':
         s.pop()
    elif operation == 'display':
        s.display()
    elif operation == 'isEmpty':
        s.isEmpty()
    elif operation == 'peek':
        s.peek()
    elif operation == 'quit':
        break
