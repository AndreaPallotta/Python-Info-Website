<?php
    include "../include/template.php";
    head("Pythoon - Section 6","Classes");
//first argument shows up in <title></title>
//second argument determines what section gets expanded
?>
<h1>Pythoon - Section 6</h1>
<h2>Classes</h2>

<p>
Classes are used to define the structure and behavior of objects. A common use of classes is when you don’t want to return tuples and pass tuples to functions, or want to logically group functions.
Objects represent program data, and can be assigned to variables. Objects have attributes, sometimes called fields in other programming languages. These attributes can be other objects, like a time, or simple data like numbers.
</p>

<p>Here is an example of a class:
</p>

<div class="codesample">
	<code class="input">
class Dog:
    name = 'Fido'
        
x = Dog()
print(x.name)
x.name = 'Rocky'
print(x.name)
    </code>
	<code class="output">
Fido
Rocky
    </code>
</div>

<h2>Instances</h2>

<p>
When you create objects, they are separate locations in memory, and each object that is created is called an instance.
</p>

<div class="codesample">
	<code class="input">
class Dog:
    name = 'Fido'
        
x = Dog()
print(x.name)
x.name = 'Rocky'
print(x.name)
y = Dog()
print(y.name)
    </code>
	<code class="output">
Fido
Rocky
Fido
    </code>
</div>

<p>You can see that x and y are separate dogs.</p>

<h2>Class functions:</h2>

<p>Functions that act within the object have the first argument called ‘self’. This self argument is the instance of that class. We can see the following code:
</p>
<div class="codesample">
    <code class="input">
class Dog:
    name = ‘Fido’

    def change_name(self, new_name):
        self.name = new_name

x = Dog()
x.change_name(‘Rocky’)  # note that we don’t need to pass the self argument, python does that work for us.
print(x.name)
    </code>
    <code class="output">
Rocky    
    </code>
</div>        

<p>
    What if we wanted to instead add the logic to print a dog’s name to the class itself?
</p>

<div class="codesample">
    <code class="input">
class Dog:
    name = ‘Fido’

    def change_name(self, new_name):
        self.name = new_name

    def print_name(self):
        print("I’m a dog named:", self.name)

x = Dog()
x.print_name()
    </code>
    <code class="output">
I’m a dog named Fido    
    </code>
</div>

<p>
    What if we wanted to add the logic to give a dog a name when we create one?
</p>

<p>
    We write a function named __init__, which takes an additional argument, the name of the dog.
</p>

<div class="codesample">
    <code class="input">
class Dog:
    def __init__(self, name):
        self.name = name

    def print_name(self):
        print(“I’m a dog named:“, self.name)

Then you just do:
x = Dog(‘Rocky’)
x.print_name()
    </code>
    <code class="output">
    I’m a dog named Rocky 
    </code>
</div>

<?php
    foot();
?>